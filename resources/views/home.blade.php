<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('backend/assets/img/favicon.png')}}">
  <title>
    Bimble
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

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
      </a>
       </div>
       
    <div class="container-scroller">
        {{-- SIDEBAR --}}
        @include('include.backend.sidebar')

        {{-- NAVBAR --}}
        <div class="container-fluid page-body-wrapper">
            @include('include.backend.navbar')

            {{-- ARTIKEL --}}
            {{-- <div class="main-panel">
                <div class="content-wrapper">
                    FILTER
                    <div class="row">
                        <div class="col-md-6 col-xl-7 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p style="font-size: 30px; text-align: center; margin-top: 6%">Selamat Datang di Dashboard Admin</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p>Filter by Category</p>
                                    <form method="GET" action="{{ route('home') }}">
                                        <select class="form-control" name="kategori_id" id="putih"
                                            id="exampleSelectGender">
                                            <option value=""
                                                {{ is_null(request()->get('kategori_id')) ? 'selected' : '' }}>
                                                Tampilkan Semua Artikel</option>
                                            @foreach ($kategori as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ request()->get('kategori_id') == $data->id ? 'selected' : '' }}>
                                                    {{ $data->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary mt-3">Go</button>
                                    </form>
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
                                    <a style="text-decoration: none" href="{{ url('tampil', $data->id) }}">
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
                                                                <img src="{{ asset('images/penulis/' . $data->penulis->foto_profil) }}"
                                                                    class="rounded-circle" alt="">
                                                            </div>
                                                            <div class="preview-item-content d-flex flex-grow">
                                                                <div class="flex-grow">
                                                                    <div
                                                                        class="d-flex d-md-block d-xl-flex justify-content-between">
                                                                        <h6 class="preview-subject">
                                                                            {{ $data->penulis->nama_penulis }}</h6>
                                                                        <p class="text-muted text-small">
                                                                            {{ $data->tanggal_publikasi }}</p>
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
                                    </a>


                                </div>
                            @endforeach

                        </div>
                    @endif
                </div>
            </div> --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="px-9 mx-8 grid-margin stretch-card ml-auto " style="">
                            <div class="card">
                                <div class="card-body">
                                    <p style="font-size: 30px; text-align: center; margin-top: 2%">Selamat Datang di
                                        Dashboard Admin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
    

 <script src="{{ asset('backend/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/plugins/chartjs.min.js')}}"></script>
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('backend/assets/js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>
