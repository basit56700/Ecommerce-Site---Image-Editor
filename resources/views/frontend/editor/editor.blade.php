<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('editor/css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('editor/css/style.css') }}"> <!-- Resource style -->
    <script src="{{ asset('editor/js/modernizr.js') }}"></script> <!-- Modernizr -->

</head>

<body>
    <div class="root">
        <div class="header" style="background: rgb(255, 255, 255);">
            {{-- <div class="logo"><img src="" alt="Best Board"></div> --}}
            <div class="header__options">
                <div class="header__links">
                    <div id="home-button" class="header__links-item">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAmCAYAAACyAQkgAAADI0lEQVRYhe2Ye2hOcRjHP5vLChlSjLmEcstlsjKsRSSRS/hDiAxJlltRkuaPlaIsUW6Z2B9Ek9FSRiwjl7UNIcUfpGmEiK3ZRr/6njpe73t23vf97T2lfWud9/ldPzvnOc/z/E5Sfn4+lnUY6AZsAFptLd3ZIuMo4BwwWfZ0YBXwyMbiyTYWAdYDLwTZCHwDRgIPgR02NogX1DyRYuCE7OcCHA48UNtB4CrQPSjQScAzYIXs48BY4C3wCZgCHFDffN3xnESDbgGqdPd+AsuBjWHG7QTmAfXAIOA2sDcRoL2Ay0Ch7Pt6ic57zCnTmHLZ+4CbQHp7gc4CXgKLZB8CpgLvfMz9AswGnFg4U66wwDbobuAG0E+bLgS2+93EJXM3Z8iPewBXgP02QPsD14EC2WXyy9IYIB0ZPx3tcpddwD1gRKygi/Wo58jeoxfjYxyQjpwXcJvsLLnCmmhBjf+VAKlAnfyrIMLYeFSoMPZKMbkIOOkHdChQAWyVfUmPujzMXFsyiWEMcFrrrQNqgHGRQFfqUWfL3gwsA763I6SjFiBXtUEzMAF4Amxyg5pbfkoFRQrwBsgAjiYAMFTFym61ajcMF4GeyXLiXHWcVXCuCQDSkfHXicAR2UsNY7KyTROwFlgN/AoQ0q08YIkiRKoBHax0VqRBaUClgnOiZWqIu66YWqIaId2ANoTExmylxrwAQE1hMw2Y62r7DHwNF0ebdK1LEJxb9frdENoR7ijSGnKNRuNVpyYpvFRFOT/i3rbOTMOAY8pgblUqHscdRWyADgGe6uSJqv4WBW3jb9UKN7VtrOMpG4e7UkEa/8pR6jNgmcBrjSmTOwQGmiW/RIV1havvsSKIicsDXKk5JsULmqFrtR5/qEzkuKW2zCBBnfleNarTl2Jjo1jVonldPeY7gM1BgiZMHaC21QFqW/8FaKOP+e+j2OuDjzE/InWEK0oc+DQdXYmQp1v1eYY2/mGnz3xn6uIx9rersu/kB9RpGxjpY0AY9fXo66OrOf+YPz/6J4GEA70DXAB6+6x4THY649FvvjgbN/JTUpq7ar4jXPurFfgDtmiXthm3wGMAAAAASUVORK5CYII="
                            alt="Home Icon" style="width: 24px;">
                        <span> Home
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

    <div class="container">
        <figure class="cd-image-container">

            <img class="room-img" src="https://vr.nuboard.com.pk/app/assets/rooms/Living-Room.png" alt="Original Image">
            <div text="LED TV Wall" class="hotspot" style="display: block; bottom: 60%; left: 31%;"></div>
            <div text="Cupboards" class="hotspot" style="display: block; top: 35%; left: 42%;"></div>
            <span class="cd-image-label" data-type="original">Original</span>

            <div class="cd-resize-img"> <!-- the resizable image on top -->

                <img class="room-img" src="https://vr.nuboard.com.pk/app/api/image?rm=1&sp1=1&p1=3&sp2=2&p2=2"
                    alt="Modified Image">

                <span class="cd-image-label" data-type="modified">Modified</span>
            </div>
            <div text="LED TV Wall" class="hotspot" style="display: block; bottom: 60%; left: 31%;"></div>
            <div text="Cupboards" class="hotspot" style="display: block; top: 35%; left: 42%;"></div>
            <span class="cd-handle"></span>
        </figure>


    </div>
    <div class="general-container">
        <input class="radio" type="radio" name="card" id="card-1" checked />
        <label class="content"
            style="background-image: url('https://cdn.fstoppers.com/styles/article_med/s3/media/2019/12/04/nando-jpeg-quality-screenshot_dsc-hv400v.jpg');"
            for="card-1">
            <span class="icon">
                <i class="fas fa-sun"></i>
            </span>
            <h3 class="card-title">
                Serra da Freita, Vale de Cambra, Portugal
                <span class="subtitle">@hed</span>
            </h3>
        </label>
        <input class="radio" type="radio" name="card" id="card-2" />
        <label class="content"
            style="background-image: url('https://cdn.fstoppers.com/styles/full/s3/media/2019/12/04/nando-jpeg-quality-006-too-much.jpg');"
            for="card-2">
            <span class="icon">
                <i class="fas fa-cloud-rain"></i>
            </span>
            <h3 class="card-title">
                París, Paris, France
                <span class="subtitle">@lolaguti</span>
            </h3>
        </label>
        <input class="radio" type="radio" name="card" id="card-3" />
        <label class="content"
            style="background-image: url('https://cdn.fstoppers.com/styles/article_med/s3/media/2019/12/04/nando-jpeg-quality-screenshot_dsc-hv400v.jpg');"
            for="card-3">
            <span class="icon">
                <i class="fas fa-cloud-rain"></i>
            </span>
            <h3 class="card-title">
                París, Paris, France
                <span class="subtitle">@lolaguti</span>
            </h3>
        </label>
        <input class="radio" type="radio" name="card" id="card-4" />
        <label class="content"
            style="background-image: url('https://cdn.fstoppers.com/styles/full/s3/media/2019/12/04/nando-jpeg-quality-006-too-much.jpg');"
            for="card-4">
            <span class="icon">
                <i class="fas fa-cloud-rain"></i>
            </span>
            <h3 class="card-title">
                París, Paris, France
                <span class="subtitle">@lolaguti</span>
            </h3>
        </label>
        <input class="radio" type="radio" name="card" id="card-5" />
        <label class="content"
            style="background-image: url('https://cdn.fstoppers.com/styles/article_med/s3/media/2019/12/04/nando-jpeg-quality-screenshot_dsc-hv400v.jpg');"
            for="card-5">
            <span class="icon">
                <i class="fas fa-cloud-rain"></i>
            </span>
            <h3 class="card-title">
                París, Paris, France
                <span class="subtitle">@lolaguti</span>
            </h3>
        </label>
        <input class="radio" type="radio" name="card" id="card-6" />
        <label class="content"
            style="background-image: url('https://cdn.fstoppers.com/styles/full/s3/media/2019/12/04/nando-jpeg-quality-006-too-much.jpg');"
            for="card-6">
            <span class="icon">
                <i class="fas fa-cloud-rain"></i>
            </span>
            <h3 class="card-title">
                París, Paris, France
                <span class="subtitle">@lolaguti</span>
            </h3>
        </label>
        <input class="radio" type="radio" name="card" id="card-7" />
        <label class="content"
            style="background-image: url('https://cdn.fstoppers.com/styles/article_med/s3/media/2019/12/04/nando-jpeg-quality-screenshot_dsc-hv400v.jpg');"
            for="card-7">
            <span class="icon">
                <i class="fas fa-cloud-rain"></i>
            </span>
            <h3 class="card-title">
                París, Paris, France
                <span class="subtitle">@lolaguti</span>
            </h3>
        </label>
        <input class="radio" type="radio" name="card" id="card-8" />
        <label class="content"
            style="background-image: url('https://cdn.fstoppers.com/styles/full/s3/media/2019/12/04/nando-jpeg-quality-006-too-much.jpg');"
            for="card-8">
            <span class="icon">
                <i class="fas fa-cloud-rain"></i>
            </span>
            <h3 class="card-title">
                París, Paris, France
                <span class="subtitle">@lolaguti</span>
            </h3>
        </label>
        <input class="radio" type="radio" name="card" id="card-9" />
        <label class="content" style="background-image: url('https://cdn.fstoppers.com/styles/full/s3/media/2019/12/04/nando-jpeg-quality-006-too-much.jpg');"
            for="card-9">
            <span class="icon">
                <i class="fas fa-cloud-rain"></i>
            </span>
            <h3 class="card-title">
                París, Paris, France
                <span class="subtitle">@lolaguti</span>
            </h3>
        </label>
        <input class="radio" type="radio" name="card" id="card-10" />
        <label class="content"
            style="background-image: url('https://cdn.fstoppers.com/styles/full/s3/media/2019/12/04/nando-jpeg-quality-006-too-much.jpg');"
            for="card-10">
            <span class="icon">
                <i class="fas fa-cloud-rain"></i>
            </span>
            <h3 class="card-title">
                París, Paris, France
                <span class="subtitle">@lolaguti</span>
            </h3>
        </label>


        

    </div>
    <!-- cd-image-container -->
    <script src="{{ asset('editor/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('editor/js/jquery.mobile.custom.min.js') }}"></script> <!-- Resource jQuery -->
    <script src="{{ asset('editor/js/main.js') }}"></script> <!-- Resource jQuery -->
</body>




<style>
:root {
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
  background: linear-gradient(90deg, #CAF3F2 0%, #6FE3E1 100%);
  display: flex;
  flex-direction: column;
  font-family: 'Roboto', sans-serif;
  font-size: 1rem;
  justify-content: center;
  min-height: 100vh;
}
    .general-container {
        
        height: 53rem   ;
        margin: 0 auto;
        max-width: 100%;
        width: 95%;
        position: absolute;
        top: 5%;
        left: 5%;
        display: none;
        transition: transform 0.8s ease;
    }


    .radio {
        display: none;
    }

    .content {
        background: var(--white) url('https://images.unsplash.com/photo-1524572217604-17e96c89e56f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1867&q=80') 100% / cover no-repeat;
        border-radius: 3rem;
        cursor: pointer;
        flex: 1;
        margin-right: 0.8rem;
        overflow: hidden;
        position: relative;
        transition: all 0.5s cubic-bezier(0.05, 0.61, 0.41, 0.95);
    }

    .content:hover {
        box-shadow: 0.3rem 0.3rem 0.4rem rgba(0, 0, 0, 0.3);
    }

    .icon {
        align-items: center;
        background-color: white;
        border-radius: 50%;
        bottom: 1rem;
        color: var(--golden-tainoi);
        display: flex;
        font-size: 1.5rem;
        height: 2.5rem;
        justify-content: center;
        left: 1.1rem;
        position: absolute;
        width: 2.5rem;
    }



    .card-title {
        bottom: 1.2rem;
        color: var(--white);
        display: flex;
        flex-direction: column;
        font-size: 1.2rem;
        left: 4.5rem;
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
        border-radius: 2rem;
        min-width: 50%;;
        box-shadow: 0.3rem 0.3rem 0.4rem rgba(0, 0, 0, 0.3);
        flex: 10;
        
    }

    .radio:checked + .content > .card-title {
    opacity: 1;
    transform: translateX(0);
    transition: opacity 1s ease, transform 1s ease; /* Apply transition */
}

   .content > .card-title {
      opacity: 0;
      transform: translateX(-100%);
      transition: opacity 1s ease, transform 1s ease; /* Apply transition */
   }
</style>

</html>
