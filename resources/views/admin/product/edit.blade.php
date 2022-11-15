@extends('layouts.admin')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h4>Edit Product</h4>
    </div>
<div class=" card-body">
    <form action="{{ url('update-products/'.$products->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">Category</label>
                <select class="form-select">
                    <option value="">{{ $products->category->name }}</option>
                  </select>
            </div>

            {{-- <div class="col-md-6 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            </div> --}}

            <div class="col-md-6 mb-3">
                <label for="">name</label>
                <input type="" class="form-control" value="{{ $products->name }}" name="name">
            </div>

            <div class="col-md-6 mb-3">
                <label for="">Slug</label>
                <input type="" class="form-control"  value="{{ $products->slug }}" name="slug">
            </div>

            <div class="col-md-6 mb-3">
                <label for="">Small Description</label>
                <textarea rows="3" type="text" class="form-control" id="exampleFormControlInput1" name="small_description">{{ $products->small_description }}</textarea>
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <textarea rows="3" type="text" class="form-control" id="exampleFormControlInput1" name="description">{{ $products->description }}</textarea>
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Origin Price</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" value="{{ $products->origin_price }}" name="origin_price">
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Seliing Price</label>
                <input type="number" class="form-control" value="{{ $products->selling_price }}" name="selling_price">
            </div>

            <div class="col-md-12 mb-2">
                <label for="">Tax</label>
                <input type="number" class="form-control"  value="{{ $products->tax }}" name="tax">
            </div>

            <div class="col-md-12 mb-2">
                <label for="">Quantity</label>
                <input type="number" class="form-control"  value="{{ $products->qty }}" name="qty">
            </div>

            <div class=" col-md-12 mb-3">
                <div class="row">
                    <div class=" col-md-6 form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $products->status ? 'checked' : '' }}" id="flexCheckDefault" name="status">
                        <label class="form-check-label" for="flexCheckDefault">
                          Status
                        </label>
                    </div>
                    <div class=" col-md-6 form-check">
                        <input class="form-check-input" type="checkbox"  value="{{ $products->trending ? 'checked' : ''}}"id="flexCheckDefault" name="trending">
                        <label class="form-check-label" for="flexCheckDefault">
                          trending
                        </label>
                      </div>
                </div>
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  value="{{ $products->meta_title }}" name="meta_tittle">
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta_keywords</label>
                <textarea type="text" class="form-control" id="exampleFormControlInput1" name="meta_keywords">{{ $products->meta_keywords }}</textarea>
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta Description</label>
                <textarea type="text" class="form-control" id="exampleFormControlInput1" name="meta_description">{{ $products->meta_description }}</textarea>
            </div>

            @if ($products->image)
            <img src="{{ asset('assets/uploads/products/'.$products->image)}}" alt="image here">
            @endif
            <div class="col-md-12 mb-3">
                <input type="file" name="image" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
