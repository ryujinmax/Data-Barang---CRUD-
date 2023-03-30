@extends('welcome')

@section('content')

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <a href="{{ route('category.create') }}" class="btn btn-primary mb-4">Tambah Barang</a>
                @if ($errors->any())
                    @foreach ($errors->all() as $errors)
                        <div class="alert alert-danger alert-dismissable fade show" role="alert">
                            <i class="bi bi-exclamation-ocatgon me-1"></i>
                            {{ $errors }}
                        </div>
                    @endforeach
                @endif
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name Item</th>
                        <th>Price Item</th>
                        <th>Storage (City)</th>
                        <th>Stock Item</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->price }}</td>
                            <td>{{ $row->place }}</td>
                            <td>{{ $row->stock }}</td>
                            <td>
                                <a href="{{ route('category.edit', $row->id) }}" class="btn btn-warning mb-2">Edit</a>

                                <a href="{{ route('category.show', $row->id) }}" class="btn btn-info mb-2">Show</a>

                                <form action="{{ route('category.destroy', $row->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mb-2">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
