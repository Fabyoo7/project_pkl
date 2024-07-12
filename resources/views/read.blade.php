

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
            <img src="{{ asset('fronend/assets/img/logo/a77x.png')}}" alt="img">
        </span>
    </div>

    <!-- Header Section Start -->
   @include('include.fronend.header')
    <!-- Search Area Start -->
     
    <div class="main-panel">
                <div class="content-wrapper">
                    {{-- FILTER --}}
                    <div class="row">
                        <div class="col-md-6 col-xl-7 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p style="font-size: 30px; text-align: center; margin-top: 6%">Our Blogs
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                    @if ($artikel->isEmpty())
                        <p style="font-size: 20px; text-align: center;">Tidak ada Artikel untuk Kategori ini.</p>
                    @else
                        <div class="row">
                            @foreach ($artikel as $data)
                                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                                    {{-- <a style="text-decoration: none" href="#"> --}}
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $data->judul }}</h4>
                                            <div class="item">
                                                <img src="{{ asset('images/artikel/' . $data->cover) }}"
                                                    alt="">
                                            </div>
                                            <div class="d-flex py-4">
                                                <div class="preview-list w-100">
                                                    <div class="preview-item p-0">
                                                        <div class="preview-thumbnail">
                                                            <img src="{{ asset('assets/images/admin.jpg') }}"
                                                                class="rounded-circle" alt="">
                                                        </div>
                                                        <div class="preview-item-content d-flex flex-grow">
                                                            <div class="flex-grow">
                                                                <div
                                                                    class="d-flex d-md-block d-xl-flex justify-content-between">
                                                                    <h6 class="preview-subject">
                                                                        Admin</h6>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <p class="text-muted text-small mt-1">
                                                                        {{ $data->tanggal }}</p>
                                                                </div>
                                                                <p class="text-muted">{{ $data->deskripsi }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button disabled type="button"
                                                class="btn btn-outline-secondary btn-icon-text">
                                                {{ $data->kategori->nama_kategori }}
                                        </div>
                                    </div>
                                    {{-- </a> --}}


                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
  
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