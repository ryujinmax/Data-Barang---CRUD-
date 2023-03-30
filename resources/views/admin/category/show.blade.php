@extends('welcome')

@section('content')
    <label for="" class="form-label">Name Item</label>
    <input type="text" class="form-control mb-2" name="name" value="{{ $category->name }}" readonly>

    <label for="" class="form-label">Price Item (Rp.)</label>
    <input type="number" class="form-control mb-2" name="price" value="{{ $category->price }}" readonly>

    <label for="" class="form-label">Storage (City)</label>
    <input type="text" class="form-control mb-2" name="place" value="{{ $category->place }}" readonly>

    <label for="" class="form-label">Stock Item (pcs)</label>
    <input type="number" class="form-control mb-2" name="stock" value="{{ $category->stock }}" readonly>

    <a href="{{ route('category.index') }}" class="btn btn-primary mt-4">Kembali</a>
@endsection
