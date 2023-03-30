@extends('welcome')

@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="" class="form-label">Name Item</label>
        <input type="text" class="form-control mb-2" name="name" value="{{ $category->name }}">

        <label for="" class="form-label">Price Item (Rp.)</label>
        <input type="number" class="form-control mb-2" name="price" value="{{ $category->price }}">

        <label for="" class="form-label">Storage (City)</label>
        <input type="text" class="form-control mb-2" name="place" value="{{ $category->place }}">

        <label for="" class="form-label">Stock Item (pcs)</label>
        <input type="number" class="form-control mb-2" name="stock" value="{{ $category->stock }}">

        <button type="submit" class="btn btn-primary mt-3">Edit Item</button>

    </form>
@endsection
