@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Product Page</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th >Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category}}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->selling_price }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/products/'.$item->image)}}" alt="image here">
                        </td>
                        <td>
                            <a href="{{ url('edit-products/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete-products/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

@endsection
