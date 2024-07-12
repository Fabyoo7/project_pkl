 <header id="header-sticky" class="header-1 header-2">
        <div class="container">
            <div class="mega-menu-wrapper white-bg">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('fronend/assets/img/logo/logo111.png')}}" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                   <ul>
                                    <li class="has-dropdown active menu-thumb">
                                        <a href="{{ route('welcome') }}">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">Profile</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('blog') }}"> Artikel </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('daftar-form') }}">Daftar</a>
                                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="menu-toggle-inner d-flex gap-sm-4 gap-3 align-items-center">
                        <a href="#0" class="search-trigger search-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>