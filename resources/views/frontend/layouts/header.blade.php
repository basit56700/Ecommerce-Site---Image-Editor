<header>
    <nav>
        <div class="left-section">
            <div class="logo">
                <a href="#">
                    <?php $settings=DB::table("settings")->first();?>
                    <img id="logo-header" src='{{ asset($settings->logo) }}' alt="Schon">
                </a>
            </div>
            <div class="nav-menu">

                <div class="{{ Request::path() == 'product-grids' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('product-grids') }}">Products</a>
                </div>
                <div class="{{ Request::path() == '/' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </div>
                <div class="{{ Request::path() == 'image/rooms' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('rooms') }}">Visualizer</a>
                </div>
            </div>
        </div>
        <div class="right-section">
            <div class="nav-menu">
                <div class="{{ Request::path() == 'about-us' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                </div>

                <div class="{{ Request::path() == 'about-us' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about-us') }}">Gallery</a>
                </div>

                <div class="{{ Request::path() == 'about-us' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about-us') }}">Documentation</a>
                </div>
                <div class="{{ Request::path() == 'contact' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </div>
                <div class="{{ Request::path() == 'contact' ? 'active' : '' }}">
                    <i class="nav-link fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </nav>
</header>
<style>
        
    .nav-link.fa {
        font-size: 20px; /* Adjust font size for the search icon */
    }
    #logo-header {
        max-width: 20%;
        left: 64px !important;
    }

    nav {
        position: fixed !important;
        left: 0 !important;
        top: 0 !important;
        right: 0 !important;
        z-index: 50 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        padding: 2px 36px !important;
        max-width: 100%;
        background-color: rgba(0, 0, 0, 0.3);
    }

    nav .left-section {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    nav .right-section {
        display: flex;
        align-items: center;
        gap: 24px;
    }

    .nav-menu {
        display: flex;
        align-items: center;
        text-transform: uppercase;
        font-size: 14px;
    }

    .nav-link {
        text-decoration: none;
        color: inherit;
        font-size: medium;
    }

    .nav-menu>div {
        margin-right: 24px;
    }

    .nav-menu>div:last-child {
        margin-right: 0;
    }

    nav .active:after {
        left: 0;
        right: 0;
        position: absolute;
        content: "";
        height: 3px;
        border-radius: 99px;
    }
</style>
