<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('editor/css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('editor/css/style.css') }}"> <!-- Resource style -->
    <script src="{{ asset('editor/js/modernizr.js') }}"></script> <!-- Modernizr -->

</head>
<script>
        var hotspot1='{{ $hotspot1 }}';
        var hotspot2='{{ $hotspot2 }}';
        var prodId1='{{ $prodId1 }}';
        var prodId2='{{ $prodId2 }}';
        var roomId='{{ $roomId }}';
</script>
<body>
    <div id="roomId" data-room-id="{{ $room->id }}"></div>
    <div class="root">
        <div class="header" style="background: rgb(255, 255, 255);">
            {{-- <div class="logo"><img src="" alt="Best Board"></div> --}}
            <div class="header__options">
                <div class="header__links">
                    <div id="home-button" class="header__links-item">
                        <img src="">
                        <span> Home
                        </span>
                    </div>
                    <div id="test-button" class="header__links-item">
                        <img src="">
                        <span> test
                        </span>
                    </div>
                    <div class="ant-divider css-1km3mtt ant-divider-vertical" role="separator"
                        style="height: 2em; border-inline-start: 1px solid rgba(128, 128, 128, 0.5);"></div>
                    <div id="rooms" class="header__links-item">

                        <span>Choose Your Environment</spa>
                    </div>
                </div>
                <div class="compare-switch">
                    <label class="switch">
                        <input id="toggle-input" type="checkbox">
                        <span class="slider round"></span>
                    </label>

                    <div class="compare-label">Comparison mode</div>
                </div>

            </div>
        </div>

    </div>

    <div class="container1">
        <figure class="cd-image-container">
            {{-- original --}}
            <img class="room-img"  src="{{ asset("/images/t2.jpeg")}}" alt="Original Image">
            <div text="LED TV Wall" class="hotspot" data-hotspotId="1" data-hotspotId="1"
                style="display: block; bottom: 60%; left: 31%;">

                
            </div>
            <div text="Cupboards" class="hotspot" data-hotspotId="2" data-hotspotId="2"
                style="display: block; top: 35%; left: 42%;"></div>
            <span class="cd-image-label" data-type="original">Original</span>

            <div class="cd-resize-img"> <!-- the resizable image on top -->

                <img class="room-img1" src="{{ asset("/images/t1.jpeg")}}"
                
                    alt="Modified Image">

                <span class="cd-image-label" data-type="modified">Modified</span>
            </div>
            <div text="LED TV Wall" class="hotspot" data-hotspotId="1" style="display: block; bottom: 60%; left: 31%;">
            </div>
            <div text="Cupboards" class="hotspot" data-hotspotId="2" style="display: block; top: 35%; left: 42%;"></div>
            <span class="cd-handle"></span>
        </figure>


    </div>
    <div class="general-container container ">

        <?php
        $categories = DB::table('categories')->where("parent_id",13)->get();
        ?>
        @foreach ($categories as $category)
            <input class="radio" type="radio" name="card" id="card-{{ $loop->iteration }}"
                {{ $loop->first ? 'checked' : '' }} /> <!-- Set checked attribute on first iteration -->


            <?php
            $products = DB::table('products')->where('cat_id', $category->id)->get();
            ?>

            <label class="content" style="background: var(--white) url('{{asset($category->photo)}}') 100% / cover no-repeat;" for="card-{{ $loop->iteration }}">
                <div class="modal-container">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="box col-4">
                                <div class="image-div" data-image-id="{{$product->id}}">
                                    <img src="{{ asset($product->photo) }}">
                                    <span>{{ $product->summary }}</span>
                                </div>
                            </div>
                        @endforeach

                    </div> <!-- Closing row -->
                    <span class="icon">
                        <i class="fas fa-sun"></i>
                    </span>
                    <h3 class="card-title">
                        {{$category->title}}
                        <span class="subtitle">@hed</span>
                    </h3>
                </div>
            </label>
        @endforeach


        {{-- 
        <input class="radio" type="radio" name="card" id="card-3" />
        <label class="content" for="card-3">
          <div class="modal-container" >
            <div class="row">
                <div class="box col-4">
                    <img src="{{ asset("/images/img-modified.jpg")}}">
                    <span>CSS</span>
                </div>
            </div> <!-- Closing row -->
            <span class="icon">
                <i class="fas fa-sun"></i>
            </span>
            <h3 class="card-title">
                Serra da Freita, Vale de Cambra, Portugal
                <span class="subtitle">@hed</span>
            </h3>
        </div>
        </label>
         --}}
    </div>

    <!-- cd-image-container -->
    <script src="{{ asset('editor/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('editor/js/jquery.mobile.custom.min.js') }}"></script> <!-- Resource jQuery -->
    <script src="{{ asset('editor/js/main.js') }}"></script> <!-- Resource jQuery -->
</body>

<script></script>


<style>
    ::-webkit-scrollbar {
        width: 0px;
        background: transparent;
        /* make scrollbar transparent */
    }

    :root {
        --base-font-size: 16px;
        --dark-blue: #1F4782;
        --dark-gray: #303335;
        --golden: #AB834C;
        --golden-tainoi: #E9BE71;
        --gray: #818C96;
        --white: #FFF;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
       
        display: flex;
        flex-direction: column;
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        justify-content: center;
        min-height: 100vh;
        position: relative;
        overflow: hidden;

    }

    .general-container {

        height: 70%;
        margin: 0 auto;
        max-width: 100%;
        width: 100%;
        position: absolute;
        top: 7%;

        display: none;
        transform: translateX(-100%);
        /* Initially position the element outside the viewport */
        animation: slideIn 0.6s forwards;
        /* Apply animation */
    }

    @keyframes slideIn {
        0% {
            transform: translateX(-100%);
            /* Start position outside the viewport */
            opacity: 0;
            /* Hide the element */
        }

        100% {
            transform: translateX(0);
            /* End position at 0% left offset */
            opacity: 1;
            /* Show the element */
        }
    }

    .radio {
        display: none;
    }

    .content {
       
        border-radius: .2rem;
        cursor: pointer;
        flex: 1;
        margin-right: 0.8rem;
        overflow: hidden;
        position: relative;
        transition: all 0.6s cubic-bezier(0.05, 0.61, 0.41, 0.95);

    }

    .content:hover {
        box-shadow: 0.3rem 0.3rem 0.4rem rgba(0, 0, 0, 0.3);
    }

    .icon {
        align-items: center;
        background-color: white;
        border-radius: 0%;
        bottom: 1rem;
        color: var(--golden-tainoi);
        display: flex;
        font-size: 1.5rem;
        height: 5rem;
        justify-content: center;
        left: 18px;
        position: absolute;
        width: 5rem;
    }



    .card-title {
        bottom: 1.2rem;
        color: var(--white);
        display: flex;
        flex-direction: column;
        font-size: 1.4rem;
        left: 9%;
        line-height: 1.1;
        opacity: 0;
        position: absolute;
        text-shadow: 0.05rem 0.05rem 0.1rem rgba(0, 0, 0, 0.5);
        transform: translateX(2rem);
        transition: 290ms cubic-bezier(0.05, 0.61, 0.41, 0.95) 300ms;
        transition-property: opacity, transform;
        user-select: none;
        white-space: nowrap;
    }

    .subtitle {
        font-size: 0.9rem;
    }

    /* Effect */
    .radio:checked+.content {
        border-radius: 1rem;
        box-shadow: 0.3rem 0.3rem 0.4rem rgba(0, 0, 0, 0.3);
        flex: 10;

    }

    .radio:checked+.content>.modal-container>.card-title {
        opacity: 1;
        transform: translateX(0);
        transition: opacity 1s ease, transform 1s ease;
        /* Apply transition */
    }

    .content>.card-title {
        opacity: 0;
        transform: translateX(-100%);
        transition: opacity 1s ease, transform 1s ease;
        /* Apply transition */
    }




    .modal-container {
        display: flex;
        width: 100%;
        padding: 4% 2%;
        box-sizing: border-box;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .box {
        box-shadow: 0 20px 30px rgba(0, 0, 0, .1);
        border-radius: 2%;
        padding: 5px;
        height: 40%;
        background-color: rgba(255, 255, 255, 0.2);
    }

    .box>img {
        border-radius: 8%;
    }


    /*   .box {
        flex: 1;
        overflow: hidden;
        transition: .5s;
        margin: 0 2%;
        box-shadow: 0 20px 30px rgba(0, 0, 0, .1);
        line-height: 0;
    }
    */

    .box>img {
        width: 200%;
        height: calc(100% - 3.8vh);
        object-fit: cover;
        transition: .5s;
    }

    .box>span {
        font-size: 2vh;
        display: block;
        text-align: center;
        height: 4vh;
        line-height: 2.6;
    }

    .box:hover {
        flex: 1 1 5%;
    }

    .box:hover>img {
        width: 100%;
        height: 100%;
    }
</style>

</html>
