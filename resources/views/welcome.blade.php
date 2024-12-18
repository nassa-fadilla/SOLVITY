<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SOLVITY</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.svg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    @include('includes.landing.stylesheet')

    <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    @include('includes.landing.navbar')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Layanan Laporan Mahasiswa Universitas Teknologi Yogyakarta</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Sampaikan laporan masalah Anda di sini, kami akan
                        memprosesnya dengan cepat, aman, dan nyaman.</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ url('login')}}" class="btn-get-started scrollto">Laporkan!</a>

                        <a href="#services" class="btn-get-started-2 scrollto">Alur laporan</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/hero.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

    <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>TENTANG KAMI</h2>
                </div>

                <div class="about-row d-flex justify-content-center gap-4" >
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bx-message-dots'></i></div>
                            <h4 class="title"><a href="">SOLVITY</a></h4>
                            <p class="description">adalah aplikasi pengaduan mahasiswa Universitas Teknologi Yogyakarta untuk menyampaikan keluhan, kritik, dan saran terkait layanan kampus.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-calendar-check"></i></div>
                            <h4 class="title"><a href="">TUJUAN</a></h4>
                            <p class="description">adalah untuk menciptakan solusi layanan pengaduan digital yang efisien, responsif, dan transparan bagi mahasiswa Universitas Teknologi Yogyakarta.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-message-dots"></i></div>
                            <h4 class="title"><a href="">SOLVITY</a></h4>
                            <p class="description">berkomitmen untuk memberikan layanan pengaduan yang transparan, efisien, dan responsif, dan meningkatkan kualitas pelayanan kampus.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Gambar -->
                    <div class="col-lg-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="150">
                        <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
                    </div>

                    <!-- Count Box -->
                    <div class="col-lg-7 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="300">
                        <div class="content d-flex flex-wrap justify-content-between">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Pengguna</strong><br>Daftar pengguna SOLVITY</p>
                            </div>

                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Pengaduan</strong><br>Jumlah pengaduan yang sudah dilaporkan</p>
                            </div>

                            <div class="count-box">
                                <i class="bi bi-clock"></i>
                                <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Tuntas</strong><br>Jumlah laporan yang sudah ditangani</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>TATA CARA</h2>
                    <p>Nah ini dia alur pelaporan yang ada di website SOLVITY</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-edit-alt'></i></div>
                            <h4 class="title"><a href="">Kirim Laporan</a></h4>
                            <p class="description">Tulis laporan keluhan Anda dengan jelas.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-shuffle"></i></div>
                            <h4 class="title"><a href="">Proses Verifikasi</a></h4>
                            <p class="description">Tunggu sampai laporan Anda diverifikasi oleh admin/pihak kampus.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Tindak Lanjut</a></h4>
                            <p class="description">Laporan Anda sedang diproses dan ditindaklanjuti.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class='bx bx-check-shield'></i></div>
                            <h4 class="title"><a href="">Selesai</a></h4>
                            <p class="description">Laporan pengaduan telah selesai ditindak.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


        @include('includes.landing.footer')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        @include('includes.landing.javascript')

</body>

</html>