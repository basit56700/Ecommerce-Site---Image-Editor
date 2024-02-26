<header>
    <nav>
        <div>
            {{-- <div class="logo" bis_skin_checked="1">
                <a href="#">
                        <img id="logo-header" src='{{ asset('./images/logo.png') }}' alt="Schon">
                        <p>Best Board</p>
                </a>
            </div>
            --}}
           
        </div>
        <div class="nav-menu">
            <div class="{{ Request::path() == '/' ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('home') }}">Home</a></div>
            <div class="{{ Request::path() == 'about-us' ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('about-us') }}">About Us</a></div>
            <div class="{{ Request::path() == 'image/rooms' ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('rooms') }}">Virtual Room</a></div>
            <div class="{{ Request::path() == 'product-grids' ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('product-grids') }}">Categories</a></div>
            <div class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('contact') }}">Contact Us</a></div>
        </div>
    </nav>

</header>
