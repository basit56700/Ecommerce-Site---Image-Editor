@extends('frontend.layouts.master')

@section('title', 'Best Board || PRODUCT PAGE')

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
                <li class="breadcrumb-item active" aria-current="page">Category Name</li>
            </ol>
        </div>
    
    </div>
    <section class="category-grid">
        <div class="image-container">
            <!-- Masonry grid -->

            @foreach ($child_cat as $cat)
                <a class="image-grid-item" href="{{ route('child-category', $cat->id) }}">


                    <img class="img-fluid mb-3 img-thumbnail shadow-sm rounded-0" src="{{ asset($cat->photo) }}"
                        alt="">
                    <span class="h4">{{ $cat->title }}</span>

                </a>
            @endforeach

        </div>
    </section>
@endsection

@push('styles')
    <style>
        .image-container {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 4% 2%;
        }

        .image-grid-item {
            position: relative;
            margin: 1rem;
            box-shadow: 0 20px 30px rgba(0, 0, 0, .1);
            text-align: center;
            height: 300px;
            /* Set a fixed height for all items */
            overflow: hidden;
            /* Hide overflow content */
            width: 25%
        }

        .image-grid-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Maintain aspect ratio and cover the container */
            border-radius: 0.25rem;
            transition: transform 0.3s ease;
            /* Transition for zoom effect */
        }

        .image-grid-item:hover img {
            transform: scale(1.8);
            /* Zoom effect on hover */
        }

        .image-grid-item span {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 0.5rem;
            box-sizing: border-box;
            transition: bottom 0.3s ease;
            /* Transition for text sliding effect */
        }

        .image-grid-item:hover span {
            bottom: 35%;
            /* Slide up the text on hover */
            font-size: xx-large;
        }

        @media (max-width: 768px) {
            .image-grid-item {
                flex-basis: calc(50% - 2rem);
            }
        }

        @media (max-width: 576px) {
            .image-grid-item {
                flex-basis: calc(100% - 2rem);
            }
        }
    </style>
@endpush


@push('scripts')
@endpush
