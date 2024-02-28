@extends('frontend.layouts.master')

@section('main-content')
    <section class="section-container">
        <div class="section-row">
            
        </div>
        <div class="section-row">
            <div class="image-container">
                <img src="{{ asset('images/Living-Room.png') }}" alt="Product Image">

            </div>
            <div class="product-details">
                <h2>Product Name</h2><br>
                <p>Description lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at semper leo.</p>
                <br><br>
                <div class="image-box">
                    <img src="{{ asset('image/img-original.jpg') }}">
                    <h3>Selected</h3>
                </div>
                <br>
                <ul>
                    <li>5 feet Height </li>
                    <li>5 feet Width </li>
                   
                </ul>

            </div>

        </div>
        <div class="section-menu">
            <div class="slider-nav">
                <div class="nav-item">
                    <p>Category</p>
                </div>
                <div class="nav-item">
                    <p>Category</p>
                </div>
                <div class="nav-item">
                    <p>Category</p>
                </div>
                <div class="nav-item">
                    <p>Category</p>
                </div>
                <div class="nav-item">
                    <p>Category</p>
                </div>
                <div class="nav-item">
                    <p>Category</p>
                </div>

            </div>
            <div class="image-boxes">
                <div class="img-slider__container-1">

                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                    <div class="img-items">
                        <img src="{{ asset('images/antique.jpg') }}" alt="">
                    </div>
                </div>
                
                <!-- Add more image-box divs as needed -->
            </div>
        </div>

    </section>
@endsection

@push('styles')
    <style>
        .section-container {
            width: 100%;
            max-width: 95%;
            margin: 3% auto;
        }

        .img-slider__container-1 {
            display: flex;
            column-gap: 20px;
            width: 100%;
            overflow-x: auto;
            /* Allow horizontal scrolling */
            overflow-y: hidden;
            /* Hide vertical scrollbar */
            justify-content: start;
            align-items: center;
            /* Set a fixed height */
            height: 21vh;
        }

        .img-slider__container-1 .img-items {
            flex-shrink: 0;
            /* Prevent items from shrinking */
            width: auto;
            margin: 2px;
            /* Adjust margin as needed */
        }

        .img-slider__container-1 .img-items img {
            width: 154px;
            max-height: 149px;
            transition: transform 0.5s;
            /* Simplify transition */
        }

        .img-slider__container-1 .img-items img:hover {
            transform: scale(1.2);
            /* Increase scale on hover */
        }

        .section-row {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            max-width: 75%;
            margin-left: 14%;
        }

        .section-menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            max-width: 75%;
            margin-left: 14%;
            height: 27vh;
            background-color: rgb(204, 204, 204);
            border-radius: 10px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .button {
            border: none;
            background: none;
            padding: 0;
            margin: 0;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            outline: none;
        }

        .logo-image {
            width: 50px;
            height: auto;
        }

        .image-container {
            position: relative;
            flex: 1;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        .product-details {
            flex: 1;
            padding: 0 20px;
            margin-top: 0;
            color: rgb(139, 111, 78);
            text-transform: uppercase;
            max-width: calc(30% - 20px);
        }

        .product-details h2 {
            margin-top: 0;
        }

        .buy-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .nav-button {
            width: 100%;
            padding: 1%;
        }

        .image-boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            overflow: hidden;
            /* Hide any overflowing content */
        }

        .product-details {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.image-box {
    width: 75%;
    max-width: 100%; /* Ensure image doesn't exceed parent width */
    text-align: center; /* Center image horizontally */
}

.centered-image {
    width: 100%;
    height: auto; /* Maintain aspect ratio */
}

        .image-box img {
            max-width: 100%;
            max-height: 100%;
        }

        .image-box p {
            margin-top: 5px;
            font-size: 14px;
        }

        .slider-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            border-bottom: 1px solid rgb(136, 136, 136);
            text-transform: uppercase;
            flex-wrap: nowrap;
            /* Ensure items stay on one line */
        }

        .nav-item {
            padding: 2px 25px;
            color: #fff;
            cursor: pointer;
            margin: 13px;
            height: 22px;
            font-size: large;
            font-weight: bold;
            white-space: nowrap;
            /* Prevent text wrapping */
        }

        @media screen and (max-width: 768px) {
            .section-row {
                flex-direction: column;
            }

            .section-menu {
                height: 13vh;
            }

            .img-slider__container-1 {
                height: 13vh;
            }

            .nav-item {
                padding: 5px 10px;
            }
        }
    </style>
@endpush
@push('scripts')
    <script>
        function scrollSlider(offset) {
    const container = document.getElementById('imageSlider');
    container.scrollLeft += offset;
}
    </script>
@endpush
