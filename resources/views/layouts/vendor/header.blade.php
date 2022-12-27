<header>
    <nav class = "page-navbar d-flex align-items-center">
        <div class = "container">
            <div class = "page-navbar-content px-3 d-flex align-items-center justify-content-between">
                <div class = "brand-and-toggler d-flex align-items-center justify-content-between">
                    <a href = "#" class = "page-navbar-brand">
                        <img src = "{{ asset('frontendfiles/assets/images/logo.svg') }} " alt = "site logo">
                    </a>

                    <button type = "button" class = "page-navbar-toggler d-lg-none">
                        <img src = "{{ asset('frontendfiles/assets/images/menu.png') }}" alt = "menu icon">
                    </button>
                </div>

                <div class = "page-navbar-collapse">
                    <div class = "d-flex align-items-center justify-content-end">
                        <button type = "button" class = "page-navbar-close-btn d-lg-none">
                            <img src = "{{ asset('frontendfiles/assets/images/cancel.svg') }}" alt = "cancel icon">
                        </button>
                    </div>

                    <ul class = "page-navbar-nav d-flex align-items-center">
                        <li class = "page-nav-item">
                            <a href = "index.html" class = "page-nav-link text-sm">Home</a>
                        </li>
                        <li class = "page-nav-item">
                            <a href = "gallery.html" class = "page-nav-link text-sm">Gallery</a>
                        </li>
                        <li class = "page-nav-item">
                            <a href = "about.html" class = "page-nav-link text-sm">About</a>
                        </li>
                    </ul>
                </div>

                <div class = "page-navbar-btns d-flex">
                    <!-- <button type = "button" class = "navbar-btn btn-white btn-sm">
                        <span class = "btn-text">SignUp</span>
                    </button> -->
                    <button type = "button" class = "navbar-btn btn-primary btn-sm ms-2">
                        <span class = "btn-text">Sign Up</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>
