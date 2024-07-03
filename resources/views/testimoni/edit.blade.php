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
    <div class="container-scroller">
        {{-- SIDEBAR --}}
        @include('include.backend.sidebar')

        {{-- NAVBAR --}}
        <div class="container-fluid page-body-wrapper">
            @include('include.backend.navbar')

            {{-- FORM --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="px-9 mx-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Data Testimoni</h4>
                                <p class="card-description"> Ubah data Testimoni yang anda inginkan </p>
                                <form class="forms-sample" action="{{ route('testimoni.update', $testimoni->id) }}"
                                    method="post" role="form" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama
                                            testimoni</label>
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-outline mb-3">
                                            <input type="text" class="form-control" id="putih" name="nama"
                                                value="{{ $testimoni->nama }}" required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Pencapaian
                                         </label>
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-outline mb-3">
                                            <input type="text" class="form-control" id="putih" name="jabatan"
                                                value="{{ $testimoni->jabatan }}" required>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2"
                                            class="col-sm-3 col-form-label">Pesan & Kesan</label>
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-outline mb-3">
                                            <textarea class="form-control" name="pesan" id="putih" rows="4" required>{{ $testimoni->pesan }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cover</label>
                                        <input type="file" name="cover" class="file-upload-default"
                                            {{ $testimoni->cover }}>
                                        <div class="input-group col-sm-9">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image" required>
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a href="{{ url('testimoni') }}" class="btn btn-dark">Cancel</a><br>

                                </form>
                            </div>
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
  <script src="{{ asset('backend/assets/js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>