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
                <h2 id="photo-title">Product Name</h2><br>
                <p id="photo-summary">Description lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at semper leo.</p>
                <br><br>
                <div class="image-box">
                    <img src="{{ asset('image/img-original.jpg') }}">
                    <h3>Selected</h3>
                </div>
                <br>
                <ul>
                    <li id="photo-size">5 feet Height </li>
                </ul>

            </div>

        </div>
        <div class="section-menu">
            <div class="slider-nav">
                <?php $categories = DB::table('categories')->where('is_parent', '1')->get();
                 ?>
                @foreach ($categories as $category)
                    <div data-category-id="{{ $category->id }}" class="nav-item">
                        <p>{{ $category->title }}</p>
                    </div>
                @endforeach




            </div>
            <div class="image-boxes">
                <div class="box-image">
                    
                </div>

                <!-- Add more image-box divs as needed -->
            </div>
        </div>

    </section>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {

           
            $('.nav-item').click(function() {
            var categoryId = $(this).data('category-id');
            $.ajax({
                url: '/product-sub-cat/' + categoryId,
                type: 'GET',
                success: function(data) {
                    $('.box-image').empty(); // Clear existing images
                    $.each(data, function(index, product) {
                        var photoUrl = product.photo;
                        var photoId = product.id;
                        var photoTitle = product.title;
                        var photoSummary = product.summary;
                        console.log(photoSummary)
                        var photoSize= product.size; 
                        var roomPhoto= product.room_photo; 
                        
                        var $imgItem = $('<div>').addClass('img-items').attr('data-photo-id', photoId)
                                                                       .attr('data-photo-title', photoTitle)
                                                                       .attr('data-photo-summary', photoSummary)
                                                                       .attr('data-photo-room', roomPhoto)
                                                                       .attr('data-photo-size', photoSize); // Add photo ID to data-image-id attribute
                        var $image = $('<img>').attr('src', photoUrl).attr('alt', '');
                        $imgItem.append($image);
                        $('.box-image').append($imgItem);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching products:', error);
                }
            });
            
        });
        $('.nav-item:first').click();
        $(document).on('click', '.img-items', function() {
                var photoId = $(this).data('photo-id');
                var photoTitle = $(this).data('photo-title');
                var photoSummary = $(this).data('photo-summary');
                var photoSize = $(this).data('photo-size');
                var photoRoom = $(this).data('photo-room');

                var imageUrl = $(this).find('img').attr('src'); // Get the image URL
                $('.image-box img').attr('src', imageUrl); // Update the image source in the image-box
                $('.image-container img').attr('src', photoRoom);
                $('#photo-title').text(photoTitle); // Update the title
                $('#photo-summary').text(photoSummary); // Update the summary
                $('#photo-size').text(photoSize); // Update the size
            });  
            
    });
        
    </script>
@endpush









@push('styles')
    <style>
        .section-container {
            width: 100%;
            max-width: 95%;
            margin: 3% auto;
        }

        .box-image {
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

        .box-image .img-items {
            flex-shrink: 0;
            /* Prevent items from shrinking */
            width: auto;
            margin-left: 2%;
            /* Adjust margin as needed */
        }

        .box-image .img-items img {
            width: 154px;
            max-height: 149px;
            transition: transform 0.5s;
            /* Simplify transition */
        }

        .box-image .img-items img:hover {
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
            max-width: 100%;
            /* Ensure image doesn't exceed parent width */
            text-align: center;
            /* Center image horizontally */
        }

        .centered-image {
            width: 100%;
            height: auto;
            /* Maintain aspect ratio */
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

            .box-image {
                height: 13vh;
            }

            .nav-item {
                padding: 5px 10px;
            }
        }
    </style>
@endpush
