@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Category</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/category/'.$item->image)}}" style="width:50px; height:50px">
                        </td>
                        <td>
                            <a href="{{ url('edit-prod/'.$item->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

@endsection
