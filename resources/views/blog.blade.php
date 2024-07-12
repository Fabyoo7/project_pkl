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
    <title>Bimbel</title>
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
            <img src="{{ asset('fronend/assets/img/logo/logo11.png')}}" alt="img">
        </span>
    </div>

    <!-- Header Section Start -->
   @include('include.fronend.header')
    <!-- Search Area Start -->
     <br><br>
     <section class="extra-sectionv position-relative fix section-padding">
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span class="sub-title wow fadeInUp p2-clr">
                            ARTIKEL
                        </span>
                        
                    </div>
                </div>
            </div>
           <div class="row">
                @foreach ($artikel as $data)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-card-items">
                            <div style="height: 250px;" class="news-image mb-xxl-4 mb-4">
                                <img src="{{ asset('images/artikel/' . $data->cover) }}" alt="img">
                            </div>
                            <div class="news-content">
                                <h4 class="mb-3">
                                    <a href="{{ url('tampil', $data->id) }}" class="black">
                                        {{ $data->judul }}
                                    </a>
                                </h4>
                                <p class="pra mb-4">
                                    {{ $data->deskripsi }}
                                </p>
                                <a href="{{ url('tampil', $data->id) }}" class="theme-btn-2 fw-medium black">Selengkapnya
                                 <i class="fas fa-long-arrow-right p2-clr"></i></a>
                            </div>
                                </div>
                                 </div>
                         @endforeach
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </section>
  
    <!--<< Footer Section Start >>-->
    @include('include.fronend.footer')
    <!--<< Footer Section End >>-->
   

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