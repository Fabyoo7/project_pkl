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
          <a class="nav-link text-white " href="{{ route('home') }}">
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
          <a class="nav-link text-white active bg-gradient-primary " href="{{ route('testimoni.index') }}">
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

            {{-- FORM --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="px-9 mx-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Data Testimoni</h4>
                                <p class="card-description"> Masukkan data Testimoni yang ingin anda tambahkan </p>
                                <form class="forms-sample" action="{{ route('testimoni.store') }}" method="post"
                                    role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="form-label">Nama
                                            </label>
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-outline mb-3">
                                            <input type="text" class="form-control" id="putih" name="nama"
                                                placeholder="Nama Alumni" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jabatan
                                            </label>
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-outline mb-3">
                                            <input type="text" class="form-control" id="putih" name="jabatan"
                                                placeholder="Jabatan" required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Pesan & Kesan</label>
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-outline mb-3">
                                            <textarea class="form-control" name="pesan" id="putih" rows="4" required></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cover</label>
                                        <input type="file" name="cover" class="file-upload-default">
                                        <div class="input-group col-sm-9">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a href="{{ url('testimoni') }}" class="btn btn-dark">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadButton = document.querySelector('.file-upload-browse');
            const fileInput = document.querySelector('.file-upload-default');

            uploadButton.addEventListener('click', function() {
                fileInput.click();
            });

            fileInput.addEventListener('change', function() {
                const fileName = fileInput.files[0] ? fileInput.files[0].name : '';
                document.querySelector('.file-upload-info').value = fileName;
            });
        });
    </script>

    <script src="{{ asset('backend/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/plugins/chartjs.min.js')}}"></script>
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('backend/assets/js/material-dashboard.min.js?v=3.0.0')}}">

  </script>
</body>

</html>
