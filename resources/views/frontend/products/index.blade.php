@extends('layouts.front')

@section('title')
{{ $category->name}}
@endsection

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name}}</h2>
            {{-- <div class="owl-carousel featured-carousel owl-theme"> --}}
                @foreach ($products as $prod)
                    <div class="col-md-3">
                        <div class="card">
                            <a href="{{ url('category/'.$category->slug.'/'.$prod->slug)}}">
                            <img src="{{ asset('../assets/uploads/products/'.$prod->image) }} " alt="">
                            <div class="card-body">
                                <h5>{{ $prod->name }}</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="float-start">{{ $prod->selling_price }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="float-end"><s>{{ $prod->original_price }} </s></span>
                                    </div>
                                </div>
                            </div>
                             </a>
                        </div>
                    </div>
                @endforeach
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection