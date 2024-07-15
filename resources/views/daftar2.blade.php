<!DOCTYPE html>
<html lang="en">

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
    <style>
        body {
            background-color: #FFF0E5;
            margin: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            text-align: center;
        }
        .notification {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #4CAF50;
            background-color: #E9F6EF;
            color: #4CAF50;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            line-height: 1.6;
        }
        .notification h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        .notification p {
            margin-bottom: 10px;
        }

        .info {
            background-color: #FDFBF8;
            margin-top: 9%;
            margin-left: auto;
            margin-right: auto;
            width: 82%;
            height: 200px;
            border-radius: 5px;
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .info h4 {
            font-size: 25px;
            padding: 3%;
            color: Black;
        }

        .info p {
            font-size: 20px;
            font-weight: 600;
            padding: 3%;
            color: rgb(86, 85, 85);
            margin-top: -5%;
        }

        .button-37 {
            background-color: rgb(0, 255, 0);
            border: 1px solid rgb(0, 255, 0);
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            outline: 0;
            padding: 10px 25px;
            text-align: center;
            transform: translateY(0);
            transition: transform 150ms, box-shadow 150ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            margin-left: 30px;
            margin-top: -5%;
            
        }

        .button-37:hover {
            box-shadow: rgba(255, 105, 105, 0.15) 0 5px 11px 0;
            transform: translateY(-2px);
        }

        @media (min-width: 768px) {
            .button-37 {
                padding: 10px 30px;
            }
        }

        .button-38 {
            background-color: rgb(255, 0, 0);
            border: 1px solid rgb(190, 38, 255);
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            outline: 0;
            padding: 10px 25px;
            text-align: center;
            transform: translateY(0);
            transition: transform 150ms, box-shadow 150ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            margin-left: 15px;
            margin-top: 10px;

        }

        .button-38:hover {
            box-shadow: rgba(219, 146, 255, 0.15) 0 5px 11px 0;
            transform: translateY(-2px);
        }

        @media (min-width: 768px) {
            .button-38 {
                padding: 10px 30px;
            }
        }

        /* daftar */
        .form-daftar {
            background-color: rgb(220, 251, 248);
            margin-top: 2%;
            margin-left: auto;
            margin-right: auto;
            width: 82%;
            height: 580px;
            border-radius: 5px;
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form-daftar h4 {
            font-size: 25px;
            padding: 3%;
            color: Black;
            text-align: center;
        }

        /* form */
        .form-daftar .container {
            width: 85%;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group label {
            width: 150px;
            /* Adjust the width as needed */
            margin-right: 10px;
        }

        .form-group input,
        .form-group select {
            flex: 1;
            padding: 5px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        
    </style>
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
    

@include('sweetalert::alert')

    

    {{-- header start --}}
    @include('include.fronend.header')
    {{-- header end --}}

    <br><br><br><br>

    <section>
        <div class="form-daftar">
            <h4>Formulir Pendaftaran</h4>
            <div class="container">
                <form action="{{ route('pendaftar.store') }}" method="post"
                    role="form"enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">Nama Lengkap</b></label>
                        <input type="text" id="judulArtikel" name="nama" placeholder="Nama Lengkap" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin"><b style="color: black;">Jenis Kelamin</b></label>
                        <select id="jenisKelamin" name="jenis_kelamin" required
                            style="color: black; padding-left: 10px;">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin"><b style="color: black;">Kelas</b></label>
                        <select id="jenisKelamin" name="kelas" required style="color: black; padding-left: 10px;">
                            <option style="color: gray;" value="">Pilih Kelas</option>
                            <option value="5 (SD)">5 (SD)</option>
                            <option value="6 (SD)">6 (SD)</option>
                            <option value="7 (SMP)">7 (SMP)</option>
                            <option value="8 (SMP)">8 (SMP)</option>
                            <option value="9 (SMP)">9 (SMP)</option>
                            <option value="10 (SMA)">10 (SMA)</option>
                            <option value="11 (SMA)">11 (SMA)</option>
                            <option value="12 (SMA)">12 (SMA)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">Asal Sekolah</b></label>
                        <input type="text" id="judulArtikel" name="asal_sekolah" placeholder="Asal Sekolah" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">No Telp Siswa</b></label>
                        <input type="text" id="judulArtikel" name="nomor_telp_siswa" placeholder="Nomor" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">No Telp Orang Tua</b></label>
                        <input type="text" id="judulArtikel" name="nomor_telp_ortu" placeholder="Nomor" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">Email</b></label>
                        <input type="email" id="judulArtikel" name="email" placeholder="Email" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group row" style="margin-left: 65%;">
                        <div class="col-sm-6">
                            <button type="reset" class="button-38 " style="color: black; margin-left: 40%;">
                                RESET
                            </button>
                        </div>
                        <div class="col-sm-6" style="margin-top: 15px;">
                            <button type="submit" class="button-37 " style="color: black;">
                                SUBMIT
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <br><br><br>
    @include('include.fronend.footer')

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