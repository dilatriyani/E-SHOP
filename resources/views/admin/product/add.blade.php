@extends('layouts.admin')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h4>Add Product</h4>
    </div>
<div class=" card-body">
    <form action="{{ url('insert-products') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <select class="form-select" name="cate_id">
                    <option selected>Select a Category</option>
                    @foreach ( $category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>

            {{-- <div class="col-md-6 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            </div> --}}

            <div class="col-md-6 mb-3">
                <label for="">name</label>
                <input type="" class="form-control" name="name">
            </div>

            <div class="col-md-6 mb-3">
                <label for="">Slug</label>
                <input type="" class="form-control" name="slug">
            </div>

            <div class="col-md-6 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Small Description</label>
                <textarea rows="3" type="text" class="form-control" id="exampleFormControlInput1" name="small_description"></textarea>
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <textarea rows="3" type="text" class="form-control" id="exampleFormControlInput1" name="description"></textarea>
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Origin Price</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="origin_price">
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Seliing Price</label>
                <input type="number" class="form-control" name="selling_price">
            </div>

            <div class="col-md-12 mb-2">
                <label for="">Tax</label>
                <input type="number" class="form-control" name="tax">
            </div>

            <div class="col-md-12 mb-2">
                <label for="">Quantity</label>
                <input type="number" class="form-control" name="qty">
            </div>

            <div class=" col-md-12 mb-3">
                <div class="row">
                    <div class=" col-md-6 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="status">
                        <label class="form-check-label" for="flexCheckDefault">
                          Status
                        </label>
                    </div>
                    <div class=" col-md-6 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="trending">
                        <label class="form-check-label" for="flexCheckDefault">
                          trending
                        </label>
                      </div>
                </div>
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="meta_tittle">
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta_keywords</label>
                <textarea type="text" class="form-control" id="exampleFormControlInput1" name="meta_keywords"></textarea>
            </div>

            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta Description</label>
                <textarea type="text" class="form-control" id="exampleFormControlInput1" name="meta_description"></textarea>
            </div>

            <div class="col-md-12 mb-3">
                <input type="file" name="image" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
