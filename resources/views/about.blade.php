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
    <!-- Header Section End -->
     <br><br>

     <section>
        <div class="container" data-aos="fade-up" 
            style="margin-top: 8%; width: 83.5%; height: 500px;  ">
            <img style="margin-left: -6px; width: 101%; height: 500px;" src="{{ asset('fronend/assets/img/about/foto3.jpg')}}" alt="img">
        </div><br>
        <div>
            <div class="container" >
                <h2 data-aos="fade-right">Profile</h2>
                <div style="background-color: #fe832b; height: 5px; width: 20%; margin-top: 1.5px; border-radius: 5px;" >
                </div><br>
                <div data-aos="fade-right"  data-aos-duration="1000" class="text"  >
                    <p style="font-size: 20px;">
                        <b style="font-color: orange; " >BimbelQu</b> BimbelQu adalah lembaga pendidikan tambahan yang menyediakan 
                        berbagai program untuk meningkatkan kemampuan belajar siswa. Mereka fokus pada pengajaran yang efektif dan
                        berkualitas, dengan menawarkan metode pembelajaran yang interaktif dan didukung oleh tenaga pengajar yang
                        berpengalaman. BimbelQu juga menitikberatkan pada pembinaan karakter dan motivasi siswa untuk mencapai
                        prestasi akademik yang optimal. Dengan pendekatan yang komprehensif, BimbelQu berkomitmen untuk mendukung 
                        perkembangan potensi setiap individu dalam mencapai tujuan akademik mereka.
                    </p>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Keunggulan</h2>
                        <div class="text">
                            <div
                                style="background-color: #fe832b; height: 5px; width: 52%; margin-top: 1.5px; border-radius: 5px;">
                            </div><br>
                            <p style="font-size: 20px;" data-aos="fade-up-right" data-aos-duration="1500">
                                <b style="font-color: orange;">BimbelQu</b> Keunggulan BimbelQu terletak pada pendekatan pembelajaran
                                yang interaktif dan efektif. Mereka menyediakan program-program yang dirancang untuk meningkatkan
                                kemampuan belajar siswa secara holistik. Dukungan dari tenaga pengajar yang berpengalaman memastikan
                                pembelajaran berlangsung optimal, dengan fokus pada pemahaman konsep-konsep akademik yang mendalam.
                                Selain itu, BimbelQu juga mengutamakan pembinaan karakter dan motivasi siswa, sehingga membantu mereka
                                mencapai prestasi akademik yang maksimal. Pendekatan komprehensif ini membedakan BimbelQu sebagai
                                pilihan utama bagi siswa yang ingin meraih kesuksesan dalam pendidikan mereka.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-1" data-aos="zoom-in" data-aos-duration="1000" style="margin-top: 7.5%;">
                        <div style="border-left: 4px solid #fe832b; height: 400px; border-radius: 1px;"></div>
                    </div>
                    <div class="col-md-5">
                        <h2>Visi Misi</h2>
                        <div class="text">
                            <div
                                style="background-color: #fe832b; height: 5px; width: 50%; margin-top: 1.5px; border-radius: 5px;">
                            </div><br>
                            <p style="font-size: 20px;" data-aos="fade-up-left" data-aos-duration="1500">
                                <b style="font-color: orange;">BimbelQu</b>
                                <br>
                                1. Memberikan pendekatan pembelajaran yang inovatif dan efektif untuk meningkatkan pemahaman konsep-konsep akademik.
                                <br>
                                2. Mengembangkan potensi siswa secara holistik melalui program-program pembelajaran yang komprehensif.
                                <br>
                                3. Menyediakan lingkungan belajar yang kondusif dan dukungan yang profesional dari tenaga pengajar yang berpengalaman.
                                <br>
                                4. Membina karakter dan motivasi siswa untuk mencapai prestasi akademik yang optimal.
                                <br>
                                5. Berkomitmen untuk menjadi mitra pendidikan yang dapat diandalkan bagi sekolah, orang tua, dan siswa dalam mengejar kesuksesan pendidikan.
                                <br>
                                Visi BimbelQu adalah menjadi lembaga pendidikan tambahan terkemuka yang memberikan dampak positif yang signifikan terhadap perkembangan akademik dan karakter siswa di Indonesia.
                                <br>
                            </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Footer Section Start >>-->
    @include('include.fronend.footer')
    <!--<< Footer Section Start >>-->
   

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