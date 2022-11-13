@extends('layouts.front')

@section('title')
    Welcome to E-Shop
@endsection

@section('content')
    @include('layouts.inc.slider')

    {{-- <div class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($featured_products as $prod)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('assets/upload/products/'.$prod->image) }}" alt="">
                            <div class="card-body">
                                <h5>{{ $prod->name }}</h5>
                                <small>{{ $prod->selling_price }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

@endsection
