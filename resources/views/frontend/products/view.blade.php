@extends('layouts.front')

@section('title',$products->name )
@endsection
@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <div class="mb-0">
                Collection / Category Name / Product Name
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                       <img src="{{asset('assets/uploads/products/'.$products->image)}}" class="w-100">
                    </div>

                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{$products->name }}
                            <label for="" style="font-size:16px;" class="float-end badge badge-dabger trending_tag">Trending</label>
                        </h2>
                        <hr>
                        <label class="me-3" for="">Original Price : <s>Rs {{ $products->original_price }}</s></label>
                        <label class="fw-bold" for="">Selling Price : <s>Rs {{ $products->selling_price }}</s></label>
                        <p class="mt-3">
                            {!! $products->small_description !!}
                        </p>
                        <hr>
                        @if( $products->qty > 0)
                            <label for="" class="badge bg-success">In stock</label>
                        
                        @else
                        
                            <label for="" class="badge bg-danger">Out of stock</label>
                        
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3">
                                    <span class="input-group-text">-</span>
                                    <input type="text" name="quantity" value="1" class="form-control" />
                                    <span class="input-group-text">+</span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br/>
                                <button type="button" class="btn btn-success me-3 float-start">Add to Whistlist</button>
                                <button type="button" class="btn btn-primary me-3 float-start">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endsection
