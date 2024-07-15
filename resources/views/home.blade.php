<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('backend/assets/img/favicon.png')}}">
  <title>
    Bimbel
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('backend/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('backend/assets/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>
</head>

<body>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{ asset('backend/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">BimbelQu</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">

    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{ route('home') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">house</i>
            </div>
            <span class="nav-link-text ms-1">Beranda</span>
          </a>
        </li>
        
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('kategori.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Kategori</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white  " href="{{ route('pendaftar.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">list</i>
            </div>
            <span class="nav-link-text ms-1">Pendaftaran</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('testimoni.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Testimoni</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('artikel.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">book</i>
            </div>
            <span class="nav-link-text ms-1">Artikel</span>
          </a>
        </li>
        <br><br><br><br><br><br><br>
    
    
        <li class="nav-item">
          <a class="nav-link text-white " class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">power_settings_new</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
        </li>
      </ul>
    </div>
    </div>
</div>
  </aside>


        {{-- NAVBAR --}}
        <div class="container-fluid page-body-wrapper">
            @include('include.backend.navbar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="px-9 mx-8 col-md-6 col-xl-12 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p style="font-size: 30px; text-align: center; margin-top: 2%">Selamat Datang di
                                        Dashboard Admin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Statistik --}}
                    <div class="row">
                        <div class="px-9 mx-8  grid-margin ">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Testimoni</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0">{{$total_testimoni}}</h2>
                                            </div>
                                            <h6 class="text-muted font-weight-normal">Total Testimoni Dari Alumni</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-account-star text-primary ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-9 mx-8  grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Artikel</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0">{{$total_artikel}}</h2>
                                            </div>
                                            <h6 class="text-muted font-weight-normal">Total Artikel yang ditambahkan</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-book-open-page-variant text-primary ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-9 mx-8  grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Kategori Artikel</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0">{{$total_kategori}}</h2>
                                            </div>
                                            <h6 class="text-muted font-weight-normal">Jumlah Total data Kategori Artikel</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-book-multiple text-primary ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-9 mx-8  grid-margin" style="align-items: center">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Pendaftar</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0">{{$total_pendaftar}}</h2>
                                            </div>
                                            <h6 class="text-muted font-weight-normal">Jumlah Total Pendaftar Ke Bimbel Ini</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-face text-primary ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('backend/assets/js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>