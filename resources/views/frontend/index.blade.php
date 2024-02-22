@extends('frontend.layouts.master')
@section('title', 'Best Board || HOME PAGE')

@section('main-content')
<main>
    <div id="main">
        <div class="indicator"></div>

        <div id="demo"></div>

        <div class="details" id="details-even">
            <div class="place-box">
                <div class="text">Switzerland Alps</div>
            </div>
            <div class="title-box-1">
                <div class="title-1">SAINT</div>
            </div>
            <div class="title-box-2">
                <div class="title-2">ANTONIEN</div>
            </div>
            <div class="desc">
                Tucked away in the Switzerland Alps, Saint Antönien offers an idyllic retreat for those seeking
                tranquility and
                adventure alike. It's a hidden gem for backcountry skiing in winter and boasts lush trails for hiking
                and
                mountain
                biking during the warmer months.
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
            <div class="place-box">
                <div class="text">Switzerland Alps</div>
            </div>
            <div class="title-box-1">
                <div class="title-1">SAINT </div>
            </div>
            <div class="title-box-2">
                <div class="title-2">ANTONIEN</div>
            </div>
            <div class="desc">
                Tucked away in the Switzerland Alps, Saint Antönien offers an idyllic retreat for those seeking
                tranquility and
                adventure alike. It's a hidden gem for backcountry skiing in winter and boasts lush trails for hiking
                and
                mountain
                biking during the warmer months.
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

@endsection

@push('styles')
   
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        /*==================================================================
            [ Isotope ]*/
        var $topeContainer = $('.isotope-grid');
        var $filter = $('.filter-tope-group');

        // filter items on button click
        $filter.each(function() {
            $filter.on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $topeContainer.isotope({
                    filter: filterValue
                });
            });

        });

        // init Isotope
        $(window).on('load', function() {
            var $grid = $topeContainer.each(function() {
                $(this).isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true,
                    animationEngine: 'best-available',
                    masonry: {
                        columnWidth: '.isotope-item'
                    }
                });
            });
        });

        var isotopeButton = $('.filter-tope-group button');

        $(isotopeButton).each(function() {
            $(this).on('click', function() {
                for (var i = 0; i < isotopeButton.length; i++) {
                    $(isotopeButton[i]).removeClass('how-active1');
                }

                $(this).addClass('how-active1');
            });
        });
    </script>
    <script>
        function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen || el.webkitCancelFullScreen || el.mozCancelFullScreen || el
                .exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el
                .msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
    </script>
@endpush
