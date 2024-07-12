 <section class="bannerv2-section position-relative fix" id="scrollUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9">
                    <div class="herov2-content position-relative">
                        <h1 class="mb-lg-4 mb-3 wow fadeInUp" data-wow-delay=".3s">
                        Bimbingan belajar kombinasi online terbaik
                        </h1>
                        <div class="heros-btn">
                            <a href="{{ route('about') }}" class="theme-btn round100 p2-bg">
                                <span class="white fw-medium">
                                    Selengkapnya
                                </span>                          
                             </a>
                        </div>
                     </div>
                     <img src="{{ asset('fronend/assets/img/abanner/foto1.jpg')}}" alt="img"  class="banner-shape wow fadeInLeft"data-wow-delay=".3s">
                     <img src="{{ asset('fronend/assets/img/abanner/banner-shadow.png')}}" alt="img" class="banner-shadow">
                 </div>

    </section>


     <!-- News Testimoni Start -->
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
            
             <div class="row g-lg-4 g-4">
            @php
                $limitedArtikel = $artikel->take(3);
            @endphp
            @foreach ($limitedArtikel as $data)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ url('tampil', $data->id) }}">
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
                    </a>
                </div>
            @endforeach
        </div>
        <br><br><br>
        <div class="heros-btn">
            <a href="{{ route('blog') }}" style="align-items: center; width: 100%; height: 50px;"
                class="theme-btn round100 p2-bg">
                <b>Lihat lebih banyak......</b>
            </a>
        </div>
    </div>
            <!-- Element -->
        </section>




    <!-- Student Counting Section Start -->
    <section class="student-counting space-top mb-xxl-5 mb-lg-4">
        <div class="section-title text-center">
            <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                        STATISTIK BIMBEL
            </h3>
        <div class="container">
            <div class="row g-xxl-4 g-3">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="student-count-item">
                        <div class="icon">
                            <img src="{{ asset('fronend/assets/img/aicon/icon1.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h1>
                                <span class="count">1230</span>+
                            </h1>
                            <p>Lulusan Terbaik</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="student-count-item">
                        <div class="icon">
                            <img src="{{ asset('fronend/assets/img/aicon/icon3.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h1>
                                <span class="count">210</span>+
                            </h1>
                            <p>Ulasan Klien</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="student-count-item">
                        <div class="icon">
                            <img src="{{ asset('fronend/assets/img/aicon/icon4.jpg ')}}" alt="img">
                        </div>
                        <div class="content">
                            <h1>
                                <span class="count">1200</span>+
                            </h1>
                            <p>Penghargaan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="student-count-item">
                        <div class="icon">
                            <img src="{{ asset('fronend/assets/img/aicon/icon2.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h1>
                                <span class="count">230</span>+
                            </h1>
                            <p>Juara Olimpiade</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Clone Component Section Start -->
    <section class="clone-component-section  overflow-hidden position-relative">

            <!-- Brand Sponsor -->

            <!-- Product Proceesure -->

        </div>
        <!-- Sum Uncle -->
        <div class="sun-uncle-section space-top position-relative overflow-hidden">
            <img src="{{ asset('fronend/assets/img/aclient/upacara.png')}}" alt="img" class="w-100 sun-bg">
        </div>
        <!-- Element-->
        <img src="{{ asset('fronend/assets/img/aclient/upacara.jpg')}}" alt="img" class="bard-element d-md-block d-none">
    </section>



    <!-- News Section Start -->
    <section class="extra-sectionv position-relative fix section-padding">
            <div class="container">
                <div class="row justify-content-center mb-60">
                    <div class="col-lg-6">
                        <div class="section-title text-center">
                            <span class="sub-title wow fadeInUp p2-clr">
                                TESTIMONI ARTIKEL
                            </span>

                        </div>
                    </div>
                </div>
            
             <div class="row g-lg-4 g-4">
           
            @foreach ($testimoni as $data)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ url('tampil', $data->id) }}">
                        <div class="news-card-items">
                            <div style="height: 250px;" class="news-image mb-xxl-4 mb-4">
                                <img src="{{ asset('images/testimoni/' . $data->cover) }}" alt="img">
                            </div>
                            <div class="news-content">
                                <h4 class="mb-3">
                                    <a href="{{ url('tampil', $data->id) }}" class="black">
                                        {{ $data->nama }}
                                    </a>
                                </h4>
                                <p class="pra mb-4">
                                    {{ $data->jabatan }}
                                </p>
                                <p class="pra mb-4">
                                    {{ $data->pesan }}
                                </p>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
        
        </section>