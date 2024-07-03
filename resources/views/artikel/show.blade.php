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
                    <div class="row">
                        <div class="px-9 mx-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Detail Data Artikel</h3>
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama
                                            Artikel</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="putih" name="judul"
                                                value="{{ $artikel->judul }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal
                                            Publikasi</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="tanggal" class="form-control"
                                                id="putih" value="{{ $artikel->tanggal }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2"
                                            class="col-sm-3 col-form-label">Kategori</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="id_kategori" id="exampleSelectGender"
                                                disabled>
                                                @foreach ($kategori as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $artikel->id_kategori ? 'selected' : '' }}>
                                                        {{ $data->nama_kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2"
                                            class="col-sm-3 col-form-label">Deskripsi</label>
                                        <div class="col-sm-9" style="height: 100px">
                                            <textarea style="height: 100px"  class="form-control" name="deskripsi" id="putih" rows="4" disabled>{{ $artikel->deskripsi }}</textarea>
                                        </div>
                                    </div><br>
                                    <a href="{{ url('artikel') }}" class="btn btn-info">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="px-9 mx-8 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Cover</h4>
                                    @csrf
                                    <center><img class="card" src="{{ asset('images/artikel/' . $artikel->cover) }}"
                                            width="380"></center>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Isi
                                        Artikel</label>
                                    <div class="col-sm-12" style="height: 500px">
                                        <textarea style="height: 500px" class="form-control" name="isi"  id="putih" rows="4" disabled>{{ $artikel->isi }}</textarea>
                                    </div>
                                    <br>
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
