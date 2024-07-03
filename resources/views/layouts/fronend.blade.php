<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="mugli">
    <meta name="description" content="Ascent - Kids Kindergarden School HTML Template">
    <!-- ======== Page title ============ -->
    <title>Ascent - Chindcare & Kids School HTML Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('fronend/assets/img/faveicon.png')}}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/bootstrap.min.css')}}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/all.min.css')}}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/animate.css')}}">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/icomoon.css')}}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/magnific-popup.css')}}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/meanmenu.css')}}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/swiper-bundle.min.css')}}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/nice-select.css')}}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/main.css')}}">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <span></span>
        <span></span>
        <span class="man-pre">
            <img src="{{ asset('fronend/assets/img/aservices/sertd-shape.png')}}" alt="img">
        </span>
    </div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="{{ asset('fronend/assets/img/logo/logo.png')}}" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">6391 Elgin St. Celina, 10299</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 06am -02pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">(629) 555-0129</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.html" class="theme-btn p2-bg text-center">
                                <span>
                                    Get A Quote
                                    <span class="ani-arrow">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1 header-2">
        <div class="container">
            <div class="mega-menu-wrapper white-bg">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('fronend/assets/img/logo/logo.png')}}" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="index.html">
                                                Home
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu has-homemenu">
                                                <li>
                                                    <div class="homemenu-items">
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb">
                                                                <img src="{{ asset('fronend/assets/img/header/home-1.jpg')}}" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index.html" class="theme-btn p5-bg">
                                                                        <span>Home 01</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home Version 01
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb mb-15">
                                                                <img src="{{ asset('fronend/assets/img/header/home-2.jpg')}}" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-2.html" class="theme-btn p5-bg">
                                                                        <span>Home 02</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home Version 02
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="service.html">
                                                Services
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="service.html">Services</a></li>
                                                <li><a href="service-details.html">Services Details</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="blog.html">
                                                Blog
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">
                                                Pages
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="service.html">Services</a></li>
                                                <li><a href="service-details.html">Services Details</a></li>
												<li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="faq.html">Faq's</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
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

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Hero Section Start -->
    <section class="bannerv2-section position-relative fix" id="scrollUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9">
                    <div class="herov2-content position-relative">
                        <h1 class="mb-lg-4 mb-3 wow fadeInUp" data-wow-delay=".3s">
                            Building a Better <br> Future through
                        </h1>
                        <p class="mb-40 pra wow fadeInUp" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis sem.
                            Imperdiet massa turpis sit proin
                            metus volutpat loren ipsum Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies
                            dictum
                        </p>
                        <div class="heros-btn">
                            <a href="about.html" class="theme-btn round100 p2-bg">
                                <span class="white fw-medium">
                                    Read More
                                </span>
                            </a>
                        </div>
                        <!-- Element -->
                        <img src="{{ asset('fronend/assets/img/abanner/reg.png')}}" alt="img" class="small-aregtengle">
                    </div>
                </div>
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('fronend/assets/img/abanner/kyte.png')}}" alt="img" class="banner-kyte">
        <img src="{{ asset('fronend/assets/img/abanner/banner-v2-thumb.png')}}" alt="img" class="banner-shape wow fadeInLeft"
            data-wow-delay=".3s">
        <img src="{{ asset('fronend/assets/img/abanner/banner-shadow.png')}}" alt="img" class="banner-shadow">
    </section>



    <!-- About Activities Section Start -->
    <section class="about-sectionv02 space-top position-relative overflow-hidden">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-md-9">
                    <div class="about-contentv02">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp p2-clr">
                                About Us
                            </span>
                            <h3 class="m-title mb-3 wow fadeInUp black" data-wow-delay=".3s">
                                Invest in education invest <br> in the future
                            </h3>
                            <p class="mb-3 pra wow fadeInUp" data-wow-delay=".4s">
                                Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis sem.
                                Imperdiet massa turpis sit proin
                                metus volutpat loren ipsum Lorem ipsum dolor sit amet consectetur. Amet lectus mi
                                ultricies dictum
                            </p>
                            <p class="pra wow fadeInUp" data-wow-delay=".5s">
                                Lorem ipsum dolor sit amet cons Amet lectus mi ultricies dictum facilisis sem Lorem
                                ipsum dolor sit amet consectetur.
                                Amet lectus mi ultricies
                            </p>
                            <div class="d-flex align-items-center gap-xl-3 gap-2 mt-40 wow fadeInUp"
                                data-wow-delay=".6s">
                                <a href="about.html" class="theme-btn round100 p2-bg">
                                    <span class="white fw-medium">
                                        Read More
                                    </span>
                                </a>
                                <a href="contact.html" class="theme-btn cart-btn round100">
                                    <span class="black fw-semibold">
                                        Contact Us
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-thumb-innerv2">
                        <div class="thumb-left-cont">
                            <div class="thumb-cont wow fadeInLeft" data-wow-delay="0.3s">
                                <img src="{{ asset('fronend/assets/img/about/about-icon.png')}}" alt="img" class="aicon">
                                <div class="contents">
                                    <h4>
                                        <span class="countss">1230</span>+
                                    </h4>
                                    <span class="pra">
                                        Students
                                    </span>
                                </div>
                            </div>
                            <div class="thumb wow fadeInUp" data-wow-delay=".4s">
                                <img src="{{ asset('fronend/assets/img/about/aboutv2-1.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="right-thumb d-sm-block d-none wow fadeInDown" data-wow-delay=".5s">
                            <img src="{{ asset('fronend/assets/img/about/aboutv2-2.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Counting Section Start -->
    <section class="student-counting space-top mb-xxl-5 mb-lg-4">
        <div class="container">
            <div class="row g-xxl-4 g-3">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="student-count-item">
                        <div class="icon">
                            <img src="{{ asset('fronend/assets/img/aicon/team-count1.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h1>
                                <span class="count">1230</span>+
                            </h1>
                            <p>Team member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="student-count-item">
                        <div class="icon">
                            <img src="{{ asset('fronend/assets/img/aicon/team-count2.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h1>
                                <span class="count">210</span>+
                            </h1>
                            <p>Client review</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="student-count-item">
                        <div class="icon">
                            <img src="{{ asset('fronend/assets/img/aicon/team-count3.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h1>
                                <span class="count">1200</span>+
                            </h1>
                            <p>Winning award</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="student-count-item">
                        <div class="icon">
                            <img src="{{ asset('fronend/assets/img/aicon/team-count4.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h1>
                                <span class="count">230</span>+
                            </h1>
                            <p>Complete project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Start -->
    <section class="extra-sectionv position-relative fix section-padding">
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span class="sub-title wow fadeInUp p2-clr">
                            Extra Curricular
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Building a strong foundation <br> through education
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row g-lg-4 g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="news-card-items extra-class-item">
                        <div class="news-image mb-xxl-4 mb-4">
                            <img src="{{ asset('fronend/assets/img/ablog/class1.png')}}" alt="img">
                            <div class="news-layer-wrapper">
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class1.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class1.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class1.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class1.png')}}">
                                </div>
                            </div>
                        </div>
                        <div class="news-content">
                            <h4 class="mb-3">
                                <a href="service-details.html" class="black">
                                    Tutoring Services
                                </a>
                            </h4>
                            <p class="pra mb-3">
                                Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisi
                                Imperdiet massa turpis sit proin loren
                                ipsum
                            </p>
                            <div class="d-flex align-items-center justify-content-between gap-xxl-2">
                                <a href="service-details.html" class="theme-btn-2 fw-medium black">learn more <i
                                        class="fas fa-long-arrow-right p3-clr"></i></a>
                                <img src="{{ asset('fronend/assets/img/ablog/class-icon1.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="news-card-items extra-class-item">
                        <div class="news-image mb-xxl-4 mb-4">
                            <img src="{{ asset('fronend/assets/img/ablog/class2.png')}}" alt="img">
                            <div class="news-layer-wrapper">
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class2.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class2.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class2.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class2.png')}}">
                                </div>
                            </div>
                        </div>
                        <div class="news-content">
                            <h4 class="mb-3">
                                <a href="service-details.html" class="black">
                                    Language Lessons
                                </a>
                            </h4>
                            <p class="pra mb-3">
                                Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisi
                                Imperdiet massa turpis sit proin
                                loren
                                ipsum
                            </p>
                            <div class="d-flex align-items-center justify-content-between gap-xxl-2">
                                <a href="service-details.html" class="theme-btn-2 fw-medium black">learn more <i
                                        class="fas fa-long-arrow-right p3-clr"></i></a>
                                <img src="{{ asset('fronend/assets/img/ablog/class-icon2.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-card-items extra-class-item">
                        <div class="news-image mb-xxl-4 mb-4">
                            <img src="{{ asset('fronend/assets/img/ablog/class3.png')}}" alt="img">
                            <div class="news-layer-wrapper">
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class3.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class3.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class3.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/class3.png')}}">
                                </div>
                            </div>
                        </div>
                        <div class="news-content">
                            <h4 class="mb-3">
                                <a href="service-details.html" class="black">
                                    Study Skills Coaching
                                </a>
                            </h4>
                            <p class="pra mb-3">
                                Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisi
                                Imperdiet massa turpis sit proin
                                loren
                                ipsum
                            </p>
                            <div class="d-flex align-items-center justify-content-between gap-xxl-2">
                                <a href="service-details.html" class="theme-btn-2 fw-medium black">learn more <i
                                        class="fas fa-long-arrow-right p3-clr"></i></a>
                                <img src="{{ asset('fronend/assets/img/ablog/class-icon3.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('fronend/assets/img/ablog/class-j.png')}}" alt="img" class="jerap-element d-lg-block d-none">
    </section>

    <!-- Clone Component Section Start -->
    <section class="clone-component-section space-top cmn-bg overflow-hidden position-relative">
        <div class="container">
            <!-- Brand Sponsor -->
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="{{ asset('fronend/assets/img/aclient/sponsor1.png')}}" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="{{ asset('fronend/assets/img/aclient/sponsor2.png')}}" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="{{ asset('fronend/assets/img/aclient/sponsor3.png')}}" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="{{ asset('fronend/assets/img/aclient/sponsor4.png')}}" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="{{ asset('fronend/assets/img/aclient/sponsor5.png')}}" alt="brand-img">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Proceesure -->
            <div class="product-procesure space-top">
                <div class="container">
                    <div class="section-title product-title text-center">
                        <span class="sub-title wow fadeInUp p2-clr">
                            Products
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Invest in your future invest in <br> education Where Kids
                        </h3>
                    </div>
                    <div class="row flex-row-reverse align-items-center justify-content-between g-4">
                        <div class="col-lg-6 col-md-6">
                            <div class="products-thumb w-100 wow fadeInDown" data-wow-delay="0.6s">
                                <img src="{{ asset('fronend/assets/img/aclient/clode-car.png')}}" alt="img" class="w-100">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="product-clode-content">
                                <div class="section-title">
                                    <span class="sub-title wow fadeInUp black">
                                        Stay With Us
                                    </span>
                                    <h4 class="m-title wow fadeInUp black mb-sm-3 mb-2" data-wow-delay=".3s">
                                        Empowering Children Through <br> Education Igni Curiosity
                                    </h4>
                                    <h3 class="p3-clr mb-20">
                                        29.80$
                                    </h3>
                                    <p class="mb-40 pra wow fadeInUp" data-wow-delay=".4s">
                                        Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum
                                        facilisis sem. Imperdiet massa
                                        turpis sit proin
                                        metus volutpat.Lorem ipsum dolor sit amet consectetur.
                                    </p>
                                    <div class="d-flex align-items-center gap-xl-3 gap-2">
                                        <a href="contact.html" class="theme-btn round100 p3-bg">
                                            <span class="white fw-medium">
                                                Buy Now
                                            </span>
                                        </a>
                                        <a href="contact.html" class="theme-btn cart-btn round100">
                                            <span class="p3-clr fw-medium">
                                                Add to cart
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sum Uncle -->
        <div class="sun-uncle-section space-top position-relative overflow-hidden">
            <img src="{{ asset('fronend/assets/img/aclient/clone-object.png')}}" alt="img" class="w-100 sun-bg">
            <div class="sun-unlce text-center">
                <img src="{{ asset('fronend/assets/img/aclient/clone-sun.png')}}" alt="img">
            </div>
        </div>
        <!-- Element-->
        <img src="{{ asset('fronend/assets/img/aclient/bard.png')}}" alt="img" class="bard-element d-md-block d-none">
    </section>

    <!-- Pricing Section Start -->
    <section class="pricing-sectionv position-relative fix section-padding">
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span class="sub-title wow fadeInUp p5-clr">
                            Our Pricing
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Transforming lives through <br> knowledge by education
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row g-lg-0 g-4">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="pricing-items">
                        <h4 class="pricing-head">
                            Stater Plan
                        </h4>
                        <div class="pricing-body">
                            <h1 class="price-title p4-clr mb-30">
                                $19
                                <span class="mos black">
                                    /mo
                                </span>
                            </h1>
                            <ul class="pricing-listing d-grid gap-2 mb-40">
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-angles-right p5-clr"></i>
                                    Mistakes To Avoid
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-angles-right p5-clr"></i>
                                    Your Startup
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-circle-xmark cros"></i>
                                    Knew About Fonts
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-circle-xmark cros"></i>
                                    Winning Metric for Your Startup
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-circle-xmark cros"></i>
                                    Your Startup
                                </li>
                            </ul>
                            <div class="text-center">
                                <a href="#" class="theme-btn">
                                    <span>
                                        Buy Now
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="pricing-items cart-active">
                        <h4 class="pricing-head">
                            Golden Plan
                        </h4>
                        <div class="pricing-body">
                            <h1 class="price-title p4-clr mb-30">
                                $19
                                <span class="mos black">
                                    /mo
                                </span>
                            </h1>
                            <ul class="pricing-listing d-grid gap-2 mb-40">
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-angles-right p5-clr"></i>
                                    Mistakes To Avoid
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-angles-right p5-clr"></i>
                                    Your Startup
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-circle-xmark cros"></i>
                                    Knew About Fonts
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-circle-xmark cros"></i>
                                    Winning Metric for Your Startup
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-circle-xmark cros"></i>
                                    Your Startup
                                </li>
                            </ul>
                            <div class="text-center">
                                <a href="#" class="theme-btn">
                                    <span>
                                        Buy Now
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="pricing-items">
                        <h4 class="pricing-head">
                            Stater Plan
                        </h4>
                        <div class="pricing-body">
                            <h1 class="price-title p4-clr mb-30">
                                $19
                                <span class="mos black">
                                    /mo
                                </span>
                            </h1>
                            <ul class="pricing-listing d-grid gap-2 mb-40">
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-angles-right p5-clr"></i>
                                    Mistakes To Avoid
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-angles-right p5-clr"></i>
                                    Your Startup
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-circle-xmark cros"></i>
                                    Knew About Fonts
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-circle-xmark cros"></i>
                                    Winning Metric for Your Startup
                                </li>
                                <li class="d-flex align-items-center gap-xxl-4 gap-2 pra">
                                    <i class="fa-solid fa-circle-xmark cros"></i>
                                    Your Startup
                                </li>
                            </ul>
                            <div class="text-center">
                                <a href="#" class="theme-btn">
                                    <span>
                                        Buy Now
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Element -->
    </section>

    <!-- Carft Section Start -->
    <section class="carft-section section-padding cmn-bg overflow-hidden position-relative">
        <div class="container">
            <div class="row flex-row-reverse align-items-md-center g-4">
                <div class="col-lg-6 col-md-6 col-sm-7">
                    <div class="carft-content">
                        <div class="section-title mb-30">
                            <span class="sub-title wow fadeInUp p2-clr">
                                Craft
                            </span>
                            <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                                Education is the key to success Knowledge is power
                            </h3>
                        </div>
                        <div class="singletab">
                            <div class="protfolio-tabs mb-30">
                                <ul class="tablinks">
                                    <li class="nav-links active">
                                        <button class="tablink">1-4 year</button>
                                    </li>
                                    <li class="nav-links">
                                        <button class="tablink">5-7 year</button>
                                    </li>
                                    <li class="nav-links">
                                        <button class="tablink">8-12 year</button>
                                    </li>
                                    <li class="nav-links">
                                        <button class="tablink">13-15 year</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabcontents">
                                <div class="tabitem active">
                                    <div class="cart-cont-box">
                                        <p class="pra mb-3">
                                            Lorem ipsum dolor sit amet consectetur. Amet le ultricies dictum facilisis
                                            sem.
                                            Imperdiet massa turpis sit proin metus
                                            volut.Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies
                                            dictum facilisis
                                            sem. Imperdiet massa
                                        </p>
                                        <ul class="d-grid gap-xxl-2 gap-2">
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Nurturing Young Minds
                                            </li>
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Unlocking Potential Through Education
                                            </li>
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Empowering Children Through Education
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tabitem">
                                    <div class="cart-cont-box">
                                        <p class="pra mb-3">
                                            Lorem ipsum dolor sit amet consectetur. Amet le ultricies dictum facilisis
                                            sem.
                                            Imperdiet massa turpis sit proin metus
                                            volut.Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies
                                            dictum facilisis
                                            sem. Imperdiet massa
                                        </p>
                                        <ul class="d-grid gap-xxl-2 gap-2">
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Nurturing Young Minds
                                            </li>
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Unlocking Potential Through Education
                                            </li>
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Empowering Children Through Education
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tabitem">
                                    <div class="cart-cont-box">
                                        <p class="pra mb-3">
                                            Lorem ipsum dolor sit amet consectetur. Amet le ultricies dictum facilisis
                                            sem.
                                            Imperdiet massa turpis sit proin metus
                                            volut.Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies
                                            dictum facilisis
                                            sem. Imperdiet massa
                                        </p>
                                        <ul class="d-grid gap-xxl-2 gap-2">
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Nurturing Young Minds
                                            </li>
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Unlocking Potential Through Education
                                            </li>
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Empowering Children Through Education
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tabitem">
                                    <div class="cart-cont-box">
                                        <p class="pra mb-3">
                                            Lorem ipsum dolor sit amet consectetur. Amet le ultricies dictum facilisis
                                            sem.
                                            Imperdiet massa turpis sit proin metus
                                            volut.Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies
                                            dictum facilisis
                                            sem. Imperdiet massa
                                        </p>
                                        <ul class="d-grid gap-xxl-2 gap-2">
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Nurturing Young Minds
                                            </li>
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Unlocking Potential Through Education
                                            </li>
                                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                                <i class="fa-solid fa-check p3-clr"></i>
                                                Empowering Children Through Education
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-5">
                    <div class="carft-thumb p-sm-0 p-3 w-100 pe-lg-4 wow fadeInDown" data-wow-delay=".5s">
                        <img src="{{ asset('fronend/assets/img/ainspair/carft-thumb.png')}}" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <!-- Element-->
        <img src="{{ asset('fronend/assets/img/ainspair/carft-man.png')}}" alt="img" class="carft-man">
    </section>

    <!-- News Section Start -->
    <section class="blog-sectionv2 position-relative fix section-padding">
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span class="sub-title wow fadeInUp p5-clr">
                            Our Blogs
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Discover Your Passion Pursue <br>Your Dreams
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row g-lg-4 g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-image mb-xxl-4 mb-4">
                            <img src="{{ asset('fronend/assets/img/ablog/blogv2-a.png')}}" alt="img">
                            <div class="news-layer-wrapper">
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-a.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-a.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-a.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-a.png')}}">
                                </div>
                            </div>
                            <div class="post-date d-center p5-bg">
                                <span>
                                    <span class="d-block">
                                        22
                                    </span>
                                    <span>
                                        Jan
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="news-content">
                            <h4 class="mb-3">
                                <a href="blog-details.html" class="black">
                                    Lifelong Learning Endless <br>
                                    Possibilities
                                </a>
                            </h4>
                            <p class="pra mb-4">
                                Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis sem.
                                Imperdiet massa turpis sit proin
                                metus volutpat loren ipsum
                            </p>
                            <a href="blog-details.html" class="theme-btn-2 fw-medium black">Read More <i
                                    class="fas fa-long-arrow-right p2-clr"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-image mb-xxl-4 mb-4">
                            <img src="{{ asset('fronend/assets/img/ablog/blogv2-b.png')}}" alt="img">
                            <div class="news-layer-wrapper">
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-b.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-b.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-b.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-b.png')}}">
                                </div>
                            </div>
                            <div class="post-date d-center p5-bg">
                                <span>
                                    <span class="d-block">
                                        22
                                    </span>
                                    <span>
                                        Jan
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="news-content">
                            <h4 class="mb-3">
                                <a href="blog-details.html" class="black">
                                    Be Curious Be Inspired Be <br>
                                    Educated
                                </a>
                            </h4>
                            <p class="pra mb-4">
                                Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis sem.
                                Imperdiet massa
                                turpis sit proin
                                metus volutpat loren ipsum
                            </p>
                            <a href="blog-details.html" class="theme-btn-2 fw-medium black">Read More <i
                                    class="fas fa-long-arrow-right p2-clr"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-image mb-xxl-4 mb-4">
                            <img src="{{ asset('fronend/assets/img/ablog/blogv2-c.png')}}" alt="img">
                            <div class="news-layer-wrapper">
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-c.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-c.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-c.png')}}">
                                </div>
                                <div class="news-layer-image"
                                    style="background-image: url('{{ asset('fronend/assets/img/ablog/blogv2-c.png')}}">
                                </div>
                            </div>
                            <div class="post-date d-center p5-bg">
                                <span>
                                    <span class="d-block">
                                        22
                                    </span>
                                    <span>
                                        Jan
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="news-content">
                            <h4 class="mb-3">
                                <a href="blog-details.html" class="black">
                                    Empowering Students Transform
                                    <br>
                                    Lives Matter
                                </a>
                            </h4>
                            <p class="pra mb-4">
                                Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis sem.
                                Imperdiet massa
                                turpis sit proin
                                metus volutpat loren ipsum
                            </p>
                            <a href="blog-details.html" class="theme-btn-2 fw-medium black">Read More <i
                                    class="fas fa-long-arrow-right p2-clr"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('fronend/assets/img/ablog/car-element.png')}}" alt="img" class="car-element">
    </section>

    <!-- Stay Success Section Start -->
    <section class="stay-section pt-50 pb-50 cmn-bg overflow-hidden position-relative">
        <div class="container">
            <div class="row justify-content-between align-items-center g-4">
                <div class="col-lg-5 col-md-6 col-sm-7">
                    <div class="stay-content">
                        <div class="section-title">
                            <span class="sub-title wow fadeInUp black">
                                Stay With Us
                            </span>
                            <h3 class="m-title wow fadeInUp black mb-sm-3 mb-2" data-wow-delay=".3s">
                                The path to success starts with education
                            </h3>
                            <p class="mb-24 pra wow fadeInUp" data-wow-delay=".4s">
                                Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis sem.
                                Imperdiet massa turpis sit proin
                                metus volutpat.
                            </p>
                            <a href="contact.html" class="theme-btn round100 p2-bg py-3">
                                <span class="white fw-medium">
                                    Read More
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 me-xl-5 col-sm-5">
                    <div class="stay-thumb w-100">
                        <img src="{{ asset('fronend/assets/img/aservices/stay-thumb.png')}}" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <!-- Element-->
        <img src="{{ asset('fronend/assets/img/aservices/stay-shape.png')}}" alt="img" class="stay-element">
    </section>

    <!--<< Footer Section Start >>-->
    <footer class="footer-section overflow-hidden position-relative footer-style2 p1-bg">
        <div class="footer-widgets-wrapper">
            <div class="container">
                <div class="row g-md-4 g-4 justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget">
                            <div class="widget-heads">
                                <a href="index.html" class="footer-logo">
                                    <img src="{{ asset('fronend/assets/img/logo/logo-light.png')}}" alt="logo-img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p class="pre-pragraph">
                                    Phasellus ultricies aliquam volutpat
                                    ullamcorper laoreet neque, a lacinia
                                    curabitur lacinia mollis
                                </p>
                                <div class="social-wrapper d-flex align-items-center">
                                    <a href="#" class="white"><i class="white fab fa-facebook-f"></i></a>
                                    <a href="#" class="white">
                                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                    <a href="#" class="white"><i class="white fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class="white"><i class="white fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h4 class="white">Pages</h4>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="contact.html">
                                        Refund Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="service.html">
                                        Careers
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Privacy & Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Terms & Conditions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h4 class="white">Contact Us</h4>
                            </div>
                            <ul class="list-area list-contact">
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span class="lited">
                                        1179 KFC Road, Lisbon, Portugal
                                    </span>
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="info@example.com" class="link">info@example.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="#" class="link">012547892354</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-footer-widget single-footer-form">
                            <div class="widget-head">
                                <h4 class="white">Our Newsletter</h4>
                            </div>
                            <p class="white ">
                                Subscribe our newsletter to get our latest update
                            </p>
                            <form action="#" class="footer-form">
                                <input type="text" placeholder="Enter Your Email">
                                <button type="button">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div
                    class="footer-wrapper d-md-flex d-grid gap-md-0 gap-2 align-items-center justify-content-md-between justify-content-center text-md-start text-center">
                    <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                        &copy; Yoursitename 2024 | All Rights Reserved
                    </p>
                    <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                        <li>
                            <a href="contact.html">
                                Trams & Condition
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#scrollUp" class="scroll-icon">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- Element -->
        <img src="{{ asset('fronend/assets/img/footer/f-apple.png')}}" alt="img" class="footer-apple position-absolute">
        <img src="{{ asset('fronend/assets/img/footer/f-cut.png')}}" alt="img" class="footer-cut position-absolute">
        <!-- Element -->
    </footer>

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('fronend/assets/js/jquery-3.7.1.min.js')}}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('fronend/assets/js/viewport.jquery.js')}}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('fronend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('fronend/assets/js/jquery.nice-select.min.js')}}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('fronend/assets/js/jquery.waypoints.js')}}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('fronend/assets/js/jquery.counterup.min.js')}}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('fronend/assets/js/swiper-bundle.min.js')}}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('fronend/assets/js/jquery.meanmenu.min.js')}}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{ asset('fronend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('fronend/assets/js/wow.min.js')}}"></script>
    <!--<< Main.js >>-->
    <script src="{{ asset('fronend/assets/js/main.js')}}"></script>
</body>

</html>