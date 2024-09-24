{{-- all product --}}
@extends('layouts.master')
@section('content')
{{-- start sidebar + content --}}
<div class="container margin-top-20">
    <div class="row">
        <div class="col-md-4">
            @include('partials.product-sidebar')
        </div>
        <div class="col-md-8">
            <div class="widget">
                <h3>Products</h3>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-3 margin-top-20">
                            <div class="card">
                                <img class="card-img-top  feature-img" src="{{ asset('images/phone.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">
                                    {{ $product->title }}
                                </h5>
                                <p class="card-text">Take - {{ $product->price }}</p>
                                <a href="#" class="btn btn-outline-success">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end sidebar + content --}}
@endsection
