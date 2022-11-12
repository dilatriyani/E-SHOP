@extends('layouts.admin')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h4>Edit/Update categori</h4>
    </div>
<div class=" card-body">
    <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $category->name }}">
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Slug</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="slug" value="{{ $category->slug }}">
            </div>
            <div class="col-md-12 mb-2">
                <div class="row">
                    <div class=" col-md-6 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="status" value="{{ $category->status == "1" ? 'checked':'' }}">
                        <label class="form-check-label" for="flexCheckDefault">
                          Status
                        </label>
                    </div>
                    <div class=" col-md-6 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="popular" value="{{ $category->popular == "1" ? 'checked':'' }}">
                        <label class="form-check-label" for="flexCheckDefault">
                          Popular
                        </label>
                      </div>
                </div>
                
                {{-- <label for="exampleFormControlInput1" class="form-label">Status</label>
                <input type="checkbox" class="form-control" id="exampleFormControlInput1" name="status"> --}}
            </div>
            
            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <input rows="3" type="text" class="form-control" id="exampleFormControlInput1" name="description" value="{{ $category->description }}">
            </div>
            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="meta_tittle" value="{{ $category->meta_tittle }}">
            </div>
            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta_keywords</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="meta_keywords"  value="{{ $category->meta_keywords}}">
            </div>
            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta Description</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="meta_descrip"  value="{{ $category->meta_descrip }}">
            </div>
            @if ($category->image)
                <img src="{{ asset('assets/uploads/category/'.$category->image)}}" alt="Category image">
            @endif
            <div class="col-md-12 mb-3">
                <input type="file" name="image" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="col-md-12">
                <button type="submit" name="image" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection