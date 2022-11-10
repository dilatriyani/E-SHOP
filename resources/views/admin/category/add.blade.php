@extends('layouts.admin')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h4>Add categori</h4>
    </div>
<div class=" card-body">
    <form action="{{url('insert-category')}}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            </div>
            <div class="col-md-6 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Slug</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="slug">
            </div>
            <div class="col-md-12 mb-2">
                <div class="row">
                    <div class=" col-md-6 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="status">
                        <label class="form-check-label" for="flexCheckDefault">
                          Status
                        </label>
                    </div>
                    <div class=" col-md-6 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="popular">
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
                <textarea rows="3" type="text" class="form-control" id="exampleFormControlInput1" name="description"></textarea>
            </div>
            <div class="col-md-12 mb-2">
                <label for="exampleFormControlInput1" class="form-label">Meta Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="meta_title">
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
                <button type="submit" name="image" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection