<!-- Meta Tag -->
@yield('meta')
<!-- Title Tag  -->
<title>@yield('title')</title>
<!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png">
<!-- Web Font -->
<link
    href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
    rel="stylesheet">

<!-- Slider Main -->
<link rel="stylesheet" href="{{ asset('frontend/css/slider-style.css') }}">
 <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}"> 
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js'></script>

<<style>

</style>
@stack('styles')
