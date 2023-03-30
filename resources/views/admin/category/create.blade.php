@extends('welcome')

@section('content')
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        @method('POST')

        <label for="" class="form-label">Name Item</label>
        <input type="text" class="form-control mb-2" name="name">

        <label for="" class="form-label">Price Item (Rp.)</label>
        <input type="number" class="form-control mb-2" name="price">
        <h6>Note : Price per Piece</h6>

        <label for="" class="form-label">Storage (City)</label>
        <input type="text" class="form-control mb-2" name="place">

        <label for="" class="form-label">Stock Item (pcs)</label>
        <input type="number" class="form-control mb-2" name="stock">

        <button type="submit" class="btn btn-primary mt-3">Add Item</button>

    </form>
@endsection