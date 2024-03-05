@extends('frontend.layouts.master')

@section('title', 'Best Board || PRODUCT PAGE')

@section('main-content')


    <section class="category-grid">

        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                    <li class="active">
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#">link1</a></li>
                            <li><a href="#">link2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-flag fa-stack-1x "></i></span>Shortcut</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i
                                            class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i
                                            class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-cloud-download fa-stack-1x "></i></span>Overview</a>
                    </li>
                    <li>
                        <a href="#"> <span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-cart-plus fa-stack-1x "></i></span>Events</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-youtube-play fa-stack-1x "></i></span>About</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-wrench fa-stack-1x "></i></span>Services</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-server fa-stack-1x "></i></span>Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid xyz">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="image-container">
                                <!-- Masonry grid -->
                                <?php
                                $categories = DB::table('categories')->where('is_parent', 1)->get();
                                ?>
                                @foreach ($categories as $category)
                                    <a class="image-grid-item" href="{{ route('child-category', $category->id) }}">


                                        <img class="img-fluid mb-3 img-thumbnail shadow-sm rounded-0"
                                            src="{{ asset($category->photo) }}" alt="">
                                        <span class="h4">{{ $category->title }}</span>

                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->











    </section>
@endsection

@push('styles')
    <style>
        .nav-pills>li>a {
            border-radius: 0;
        }

        #wrapper {
            padding-left: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            overflow: hidden;
        }

        #wrapper.toggled {
            padding-left: 250px;
            overflow: hidden;
        }

        #sidebar-wrapper {
            z-index: 1000;
            position: static;
            left: 250px;
            width: 0;
            height: 100%;
            margin-left: -250px;
            overflow-y: auto;
            background: #000;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            top: 6%;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        #page-content-wrapper {
            position: absolute;
            padding: 15px;
            width: 100%;
            overflow-x: hidden;
        }

        .xyz {
            min-width: 360px;
        }

        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0px;
        }

        .fixed-brand {
            width: auto;
        }

        /* Sidebar Styles */

        .sidebar-nav {
            position: absolute;
            top: 0;
            width: 250px;
            margin: 0;
            padding: 10px;
            padding-bottom:20px; 
            list-style: none;
            margin-top: 2px;
            top: 8%;
            border: 1px solid #222222dd;
            border-radius: 3%;
            background-color:rgb(219,201,155); 
        }

        .sidebar-nav li {
            text-indent: 15px;
            line-height: 40px;
        }

        .sidebar-nav li a {
            display: block;
            text-decoration: none;
            color: #999999;
        }

        .sidebar-nav li a:hover {
            text-decoration: none;
            color: rgb(254, 254, 254);
            background: rgba(255, 255, 255, 0.2);
            border-left: rgb(219,201,155) 2px solid;
            text-decoration: underline rgb(219,201,155) 2px;
            background: rgb(219,201,155);
        }

        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }

        .sidebar-nav>.sidebar-brand {
            height: 65px;
            font-size: 18px;
            line-height: 60px;
        }

        .sidebar-nav>.sidebar-brand a {
            color: #999999;
        }

        .sidebar-nav>.sidebar-brand a:hover {
            color: #fff;
            background: none;
        }

        .no-margin {
            margin: 0;
        }

        @media (min-width: 768px) {
            #wrapper {
                padding-left: 250px;
            }

            .fixed-brand {
                width: 250px;
            }

            #wrapper.toggled {
                padding-left: 0;
            }

            #sidebar-wrapper {
                width: 250px;
            }

            #wrapper.toggled #sidebar-wrapper {
                width: 250px;
            }

            #wrapper.toggled-2 #sidebar-wrapper {
                width: 50px;
            }

            #wrapper.toggled-2 #sidebar-wrapper:hover {
                width: 250px;
            }

            #page-content-wrapper {
                padding: 20px;
                position: relative;
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }

            #wrapper.toggled #page-content-wrapper {
                position: relative;
                margin-right: 0;
                padding-left: 250px;
            }

            #wrapper.toggled-2 #page-content-wrapper {
                position: relative;
                margin-right: 0;
                margin-left: -200px;
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                transition: all 0.5s ease;
                width: auto;
            }
        }

        .image-container {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 2% 0%;
        }

        .image-grid-item {
            position: relative;
            margin: 1rem;
            box-shadow: 0 20px 30px rgba(0, 0, 0, .1);
            text-align: center;
            height: 350px;
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
<script>
    $("#menu-toggle").click(function(e) {
   e.preventDefault();
   $("#wrapper").toggleClass("toggled");
});
$("#menu-toggle-2").click(function(e) {
   e.preventDefault();
   $("#wrapper").toggleClass("toggled-2");
   $('#menu ul').hide();
});

function initMenu() {
   $('#menu ul').hide();
   $('#menu ul').children('.current').parent().show();
   //$('#menu ul:first').show();
   $('#menu li a').click(
      function() {
         var checkElement = $(this).next();
         if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            return false;
         }
         if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#menu ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
            return false;
         }
      }
   );
}
$(document).ready(function() {
   initMenu();
});
</script>
@endpush
