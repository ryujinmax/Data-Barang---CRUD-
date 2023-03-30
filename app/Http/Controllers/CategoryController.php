<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();

        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();

        return view('admin.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'stock' => 'required|numeric|gt:0'
        ]);

        Category::create([
            'name' => $request->name,
            'price' => $request->price,
            'place' => $request->place,
            'stock' => $request->stock,
            'date' => $request->date
        ]);

        return redirect()->route('category.index')->with([
            Alert::success('Success', 'Berhasil Menambah')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|min:0',
            'stock' => 'required|min:0'
        ]);

        $category = Category::findOrFail($category->id);
        $category->update([
            'name' => $request->name,
            'price' => $request->price,
            'place' => $request->place,
            'stock' => $request->stock,
            'date' => $request->date
        ]);

        return redirect()->route('category.index')->with([
            Alert::success('Success', 'Berhasil diupdate')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with([
            Alert::success('Success', 'Berhasil dihapus')
        ]);
    }
}
