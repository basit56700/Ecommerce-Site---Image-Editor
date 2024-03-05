@extends('frontend.layouts.master')
@section('title', 'Best Board || HOME PAGE')

@section('main-content')

    @php
        $banners = DB::table('banners')->where('status', 'active')->get();
    @endphp

    
    <div class="container">
        <main>
            <div id="main">
                <div class="indicator"></div>

                <div id="demo"></div>
                <div id="banner-data" data-banner="{{ json_encode($banners) }}"></div>

                <div class="details" id="details-even">
                    <div class="category-box">
                        <div class="text">{{ $banners[0]->series }}</div>
                    </div>
                    <div class="title-box-1">
                        <div class="title-1">{{ $banners[0]->sub_category }}</div>
                    </div>
                    <div class="title-box-2">
                        <div class="title-2">{{ $banners[0]->category }}</div>
                    </div>
                    <div class="desc">
                        {{ $banners[0]->description }}
                    </div>
                    <div class="cta">
                        <button class="bookmark">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button class="discover">Discover Location</button>
                    </div>
                </div>

                <div class="details" id="details-odd">
                    <div class="category-box">
                        <div class="text">{{ $banners[0]->series }}</div>
                    </div>
                    <div class="title-box-1">
                        <div class="title-1">{{ $banners[0]->sub_category }}</div>
                    </div>
                    <div class="title-box-2">
                        <div class="title-2">{{ $banners[0]->category }}</div>
                    </div>
                    <div class="desc">
                        {{ $banners[0]->description }}
                    </div>
                    <div class="cta">
                        <button class="bookmark">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button class="discover">Discover Location</button>
                    </div>
                </div>

                <div class="pagination" id="pagination">
                    <div class="arrow arrow-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </div>
                    <div class="arrow arrow-right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                    <div class="progress-sub-container">
                        <div class="progress-sub-background">
                            <div class="progress-sub-foreground"></div>
                        </div>
                    </div>
                    <div class="slide-numbers" id="slide-numbers"></div>
                </div>

                <div class="cover"></div>
            </div>
        </main>

    </div>


    <div class="container">
        <div>
            <div class="brands row">
                <h2>Best Board Brands</h2>
            </div>

            <div class="image-boxes">
                <div class="box-image row">

                    @foreach ($banners as $banner)
                        <div class="img-items col-2">
                            <img src="{{ asset($banner->cat_logo) }}">
                        </div>
                    @endforeach

                </div>
            </div>


        </div>




    </div>


    @foreach ($banners as $key => $banner)
        @if ($key >= 2)
        @break
    @endif
    <div class="category-banners">
        <div class="container">
            <div class="cat-logo row">
                <div class="col-2">
                    <img src="{{ asset($banner->cat_logo) }}">
                </div>
                <div class="col-8">
                    <!-- Content for the middle section (if any) -->
                </div>
                <div class="col-2">
                    <button class="see-more">See more</button>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <h5 class="banner-title">{{ $banner->description }}</h5>

                </div>
                <div class="col-10 slider-product">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $products = DB::table('products')
                                ->where('cat_id', $banner->cat_id)
                                ->where('is_featured', '1')
                                ->get(); ?>
                            @foreach ($products as $product)
                                <div class="swiper-slide">
                                    <img class="product-photo m-2 img-items" src="{{ asset($product->photo) }}"
                                        width="500" height="500">
                                    <h2 class="cat-title pl-2">{{ $product->title }}</h2>
                                    <h4 class="pl-2">{{ $product->summary }}</h4>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="about-us">
    <div class="container">
        <div class="row about-title">
            <div class="col-4">
                <h2 class="">About Us</h2>
            </div>
            <div class="col-10">

            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img id="about-img" src="{{ $banners[0]->photo }}"></img>

            </div>
            <div class="col-8">
                <p id="about-para">We cherry-picked the best of designs, textures and finesse for you to ponder through.
                    A wide range of choices refined in accordance to  the vision you have for your space. Best Board
                    expertise in designing for comfort and refresh the idea of interior design into something more
                    personal and exquisite just for you! </p>


            </div>
        </div>
        <div></div>

    </div>

</div>

<div class="news-letter" style="background-image: url('{{ asset("backend/img/background.jpg") }}'); background-size: cover; background-repeat: no-repeat;">
    <div class="container position-relative">
        <div class="row">
            <div class="news-title col-6">
                <h1>News Letter & Updates</h1>
            </div>
        </div>

        <div class="row">
            <form method="POST" {{-- action="{{ route('') }}" --}}>
                <div class="col-12 d-flex justify-content-end position-absolute bottom-2 right-2 mb-3">
                    <input id="news-input" class="form-control mr-2" placeholder="Enter Your Email Here!">
                    <button id="news-button" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>




<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        // Optional parameters for the first Swiper instance
        slidesPerView: '2.8',
        spaceBetween: 2, // Adjust this value to reduce the space between slides
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
@endsection

@push('styles')
<style>
    .news-input{
        background-color: #FFFFFF;
        border: 1px solid #000000;
        border-radius: 50px;
        height: 40px;
        width: 200px;
        padding: 10px;
        font-size: 16px;
        outline: none;
    }

    .news-input:focus {
        border-color: #00FF00;
    }

    #news-button {
        background-color: #FFFFFF;
        border-radius: 50px;
        height: 78px;
        width: 261px;
    }

    #about-para {
        font-size: 30px;
        font-weight: 400;
    }

    #about-img {
        width: 600px;
        height: 510px;
    }

    .about-title {
        border-bottom: 2px solid black;
    }

    .news-title {
        border-bottom: 2px solid black;
    }

    .banner-title {
        color: black;
        padding: 15%;
    }

    .slider-product {
        overflow: hidden;
    }

    .swiper-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-bullets.swiper-pagination-horizontal,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        display: none;
    }

    h2,
    h3,
    h4,
    p,
    h1 {
        color: #373737;
    }

    .swiper-slide h4 {
        color: black;
    }

    .cat-logo {
        border-bottom: 2px solid black;
        padding-bottom: 2%;

    }

    .banner-img {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* Optional: Align items vertically in the center */
    }

    .product-photo {
        max-width: 593px;
        max-height: 593px;
    }

    .banner {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 2%;
        width: 100%;
        position: relative;

    }

    .category-banners {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 2%;
        max-width: 100%;
        position: relative;
        border-bottom: 2px solid black;
        margin-top: 6%;
    }

    .brand-logo {
        align-self: flex-start;
        /* Align the logo to the left */
    }

    .brands {
        margin-top: 6%;


    }

    .news-letter h1 {
        color: rgb(55, 55, 55);
        font-weight: 700;
        padding-bottom: 15px;
        padding-top: 5px;
        width: 100%;
        position: relative;
        padding: 2%;
        font-size: 50px;
        height: 886px;
    }
    .cat-title{
        color: rgb(55, 55, 55);
        font-weight: 700;
        padding-bottom: 15px;
        padding-top: 5px;
        padding-left: 5px;
        width: 100%;
        position: relative;
        padding: 2%;
        font-size: 30px;
        
    }
    .about-us h2 {
        color: rgb(55, 55, 55);
        font-weight: 700;
        padding-bottom: 15px;
        padding-top: 5px;
        width: 100%;
        position: relative;
        padding: 2%;
        font-size: 50px;
    }

    .brands h2 {
        color: rgb(55, 55, 55);
        font-weight: 700;
        padding-bottom: 15px;
        padding-top: 5px;
        width: 100%;
        position: relative;
        padding: 2%;
        font-size: 50px;
    }

    .see-more {
        background: rgb(37, 35, 36);
        border-radius: 77px;
        width: 261px;
        height: 44px;
        color: white;
        align-self: flex-end;
        margin-top: 10px;
        padding-right: 2%;
    }


    /* Add a pseudo-element to create the line */
    .brands h2::after {
        content: '';
        /* Add content for the pseudo-element */
        position: absolute;
        /* Position the pseudo-element absolutely */
        bottom: -2px;
        /* Position the pseudo-element 2 pixels above the bottom of the heading */
        left: 0;
        /* Align the pseudo-element to the left */
        width: 100%;
        /* Set the width of the pseudo-element to 100% */
        border-bottom: 2px solid black;
        /* Add a solid underline */
    }

    .image-boxes {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        overflow: hidden;
        /* Hide any overflowing content */
    }

    .box-image {
        display: flex;
        column-gap: 20px;
        width: 100%;
        overflow-x: hidden;
        /* Allow horizontal scrolling */
        overflow-y: hidden;
        /* Hide vertical scrollbar */
        justify-content: start;
        align-items: center;
        /* Set a fixed height */
        height: 21vh;
    }

    .box-image .img-items {
        flex-shrink: 0;
        /* Prevent items from shrinking */
        width: auto;
        margin-left: 2%;
        /* Adjust margin as needed */
    }

    .box-image .img-items img {
        width: 100%;
        max-height: 149px;
        transition: transform 0.5s;
        /* Simplify transition */
    }

    .box-image .img-items img:hover {
        transform: scale(1.2);
        /* Increase scale on hover */
    }
</style>
@endpush

@push('scripts')
@endpush
