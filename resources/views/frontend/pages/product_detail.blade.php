@extends('frontend.layouts.master')

@section('title', 'Best Board || PRODUCT DETAIL')
@section('main-content')

<div class="horizontal">

    <div class="verticals ten offset-by-one">

        <ol class="breadcrumb breadcrumb-fill2">
            <li>
        <a href="javascript:void(0);">
          <i class="fa fa-home"></i>                  
        </a>
    </li>
            <li><a href="{{route("home")}}">Home</a></li> 
            <li><a href="{{route("product-grids")}}">Category</a></li> 
        </ol>
    </div>

</div>
<section class="product-container">
    <div class="product-image">
        <img src="{{ asset('photos/1/HERINGWOOD.png') }}" alt="Product Image">
    </div>
    <div class="product-details">
        
        <h1 class="product-title">Product Name</h1>
        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel semper metus, id pretium dui. Quisque vel mollis magna.</p>
        <p class="product-price">$99.99</p>
    </div>
</section>
@endsection
@push('styles')
<style>
    .product-container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-start; /* Align items to the top */
        padding: 20px;
    }

    .product-image {
        flex: 1;
        padding: 20px;
    }

    .product-image img {
        width: 100%;
        height: auto;
    }

    .product-details {
        flex: 1;
        padding: 20px;
    }

    .product-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .product-description {
        margin-bottom: 20px;
    }

    .breadcrumb {
        margin-bottom: 20px;
		background-color: transparent !important;
    }

    .breadcrumb-item {
        display: inline-block;
        margin-right: 5px;
        font-size: 16px;
    }

    .breadcrumb-item:last-child {
        font-weight: bold;
    }
</style>
@endpush
@push('scripts')
@endpush
