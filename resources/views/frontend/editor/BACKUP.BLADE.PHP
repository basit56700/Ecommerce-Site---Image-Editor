<body>
    <div class="root">
        <div class="header" style="background: rgb(255, 255, 255);">
            {{-- <div class="logo"><img src="" alt="Best Board"></div> --}}
            <div class="header__options">
                <div class="header__links">
                    <div id="home-button" class="header__links-item">
                        <img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAmCAYAAACyAQkgAAADI0lEQVRYhe2Ye2hOcRjHP5vLChlSjLmEcstlsjKsRSSRS/hDiAxJlltRkuaPlaIsUW6Z2B9Ek9FSRiwjl7UNIcUfpGmEiK3ZRr/6njpe73t23vf97T2lfWud9/ldPzvnOc/z/E5Sfn4+lnUY6AZsAFptLd3ZIuMo4BwwWfZ0YBXwyMbiyTYWAdYDLwTZCHwDRgIPgR02NogX1DyRYuCE7OcCHA48UNtB4CrQPSjQScAzYIXs48BY4C3wCZgCHFDffN3xnESDbgGqdPd+AsuBjWHG7QTmAfXAIOA2sDcRoL2Ay0Ch7Pt6ic57zCnTmHLZ+4CbQHp7gc4CXgKLZB8CpgLvfMz9AswGnFg4U66wwDbobuAG0E+bLgS2+93EJXM3Z8iPewBXgP02QPsD14EC2WXyy9IYIB0ZPx3tcpddwD1gRKygi/Wo58jeoxfjYxyQjpwXcJvsLLnCmmhBjf+VAKlAnfyrIMLYeFSoMPZKMbkIOOkHdChQAWyVfUmPujzMXFsyiWEMcFrrrQNqgHGRQFfqUWfL3gwsA763I6SjFiBXtUEzMAF4Amxyg5pbfkoFRQrwBsgAjiYAMFTFym61ajcMF4GeyXLiXHWcVXCuCQDSkfHXicAR2UsNY7KyTROwFlgN/AoQ0q08YIkiRKoBHax0VqRBaUClgnOiZWqIu66YWqIaId2ANoTExmylxrwAQE1hMw2Y62r7DHwNF0ebdK1LEJxb9frdENoR7ijSGnKNRuNVpyYpvFRFOT/i3rbOTMOAY8pgblUqHscdRWyADgGe6uSJqv4WBW3jb9UKN7VtrOMpG4e7UkEa/8pR6jNgmcBrjSmTOwQGmiW/RIV1havvsSKIicsDXKk5JsULmqFrtR5/qEzkuKW2zCBBnfleNarTl2Jjo1jVonldPeY7gM1BgiZMHaC21QFqW/8FaKOP+e+j2OuDjzE/InWEK0oc+DQdXYmQp1v1eYY2/mGnz3xn6uIx9rersu/kB9RpGxjpY0AY9fXo66OrOf+YPz/6J4GEA70DXAB6+6x4THY649FvvjgbN/JTUpq7ar4jXPurFfgDtmiXthm3wGMAAAAASUVORK5CYII="
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

                <img class="room-img" src="https://vr.nuboard.com.pk/app/api/image?rm=1&sp1=1&p1=3&sp2=2&p2=2" alt="Modified Image">

                <span class="cd-image-label" data-type="modified">Modified</span>
            </div>
            <div text="LED TV Wall" class="hotspot" style="display: block; bottom: 60%; left: 31%;"></div>
            <div text="Cupboards" class="hotspot" style="display: block; top: 35%; left: 42%;"></div>
            <span class="cd-handle"></span>
        </figure>


    </div>
    <!-- cd-image-container -->
    <script src="{{ asset('editor/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('editor/js/jquery.mobile.custom.min.js') }}"></script> <!-- Resource jQuery -->
    <script src="{{ asset('editor/js/main.js') }}"></script> <!-- Resource jQuery -->
</body>