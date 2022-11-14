@extends('layouts.front')

@section('title')
    Welcome to E-Shop
@endsection

@section('content')
    @include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <div class="row">
                {{-- <div class="owl-carousel featured-carousel owl-theme"> --}}
                    @foreach ($featured_products as $prod)
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }} " alt="">
                                <div class="card-body">
                                    <h5>{{ $prod->name }}</h5>
                                    <small>{{ $prod->selling_price }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                {{-- </div> --}}
            </div>
        </div>
    </div>

@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:(
            0:{
                item:1
            },
            600:{
                item:3
            },
            1000:{
                item:5
            }
        )
    })
</script>
@endsection
