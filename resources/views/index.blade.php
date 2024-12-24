<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>PT. Nusa Mulya Travel</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo-white.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo-full-white.png') }}" alt="Nusa Mulya Travel" width="220">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ Request::is('/') ? 'active' : '' }} mx-2">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{ Request::is('about') ? 'active' : '' }} mx-2">
                                <a class="nav-link" href="/about"> About</a>
                            </li>
                            <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }} mx-2">
                                <a class="nav-link" href="/gallery">Gallery</a>
                            </li>
                            <li class="nav-item {{ Request::is('customer') ? 'active' : '' }} mx-2">
                                <a class=" nav-link" href="/customer">Our Customers</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <!-- <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active"> -->
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="{{ asset('images/header-img.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detail-box">
                            <p>
                                Selamat Datang di Travel
                            </p>
                            <h1>
                                Nusa Mulya
                            </h1>
                            <p>
                                Travel dengan pelayanan terbaik telah dipercaya sejak tahun 1998 dan telah berpengalaman
                                melayani
                                lebih dari 2000 pelanggan setiap bulannya. Mari wujudkan rencana perjalanan anda bersama
                                kami.
                            </p>
                            <div class="btn-box">
                                <a href="" class="btn1">
                                    <b>PESAN</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <!--
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Digital Marketing Experts
                    </h1>
                    <p>
                      Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit
                      amet, lobortis semper quam.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Digital Marketing Experts
                    </h1>
                    <p>
                      Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit
                      amet, lobortis semper quam.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          -->
            <!-- </div> -->

            <!--
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
        -->
            <!-- </div> -->
        </section>
        <!-- end slider section -->
    </div>

    <!-- service section -->
    <section class="service_section layout_padding">
        <div class="container container-produk">
            <div class="heading_container heading-container-produk">
                <h5>
                    <i class="bi bi-check-circle" style="color: green;"></i>
                    Produk dan Layanan
                </h5>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="box">
                        <div class="row" style="height: auto; padding: 15px;">
                            <div class="col-md-6 col-lg-6 col-12">
                                <div class="img-box mt-3 mt-md-2 mt-lg-5">
                                    <img src="{{ asset('images/travel-reguler.png') }}" alt=""
                                        width="100">
                                </div>
                            </div>

                            <div class="col-md-1 col-lg-1 col-12" style="height: 50px;"></div>

                            <div class="col-md-5 col-lg-5 col-12">
                                <div class="detail-box card-product"
                                    style="text-align: left !important; padding-top: 0; margin-top: 0;">
                                    <h5>
                                        Pekanbaru - Padang
                                    </h5>
                                    <h5>
                                        Padang - Pekanbaru
                                    </h5>
                                    <p>
                                        Tersedia kelas pelayanan :
                                    </p>
                                    <p>
                                        1. Super Executive
                                    </p>
                                    <p>
                                        2. Business Class
                                    </p>
                                    <div
                                        style="width: 100px; background-color: #f8842b; padding: 15px; border-radius: 30px; text-align: center; box-shadow: 10px 10px 25px grey;">
                                        <a href="" class="btn1" style="font-size: large; color: #fff;">
                                            PESAN
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="box">
                        <div class="row" style="height: auto; padding: 15px;">
                            <div class="col-md-6 col-lg-6 col-12">
                                <div class="img-box mt-3 mt-md-2 mt-lg-5">
                                    <img src="{{ asset('images/sewa-bus.png') }}" alt="" width="100">
                                </div>
                            </div>

                            <div class="col-md-1 col-lg-1 col-12" style="height: 50px;"></div>

                            <div class="col-md-5 col-lg-5 col-12">
                                <div class="detail-box card-product"
                                    style="text-align: left !important; padding-top: 0; margin-top: 0;">
                                    <p>
                                        Melayani <b>Bus Pariwisata</b> bagi pelanggan yang ingin menikmati perjalanan
                                        wisata bersama
                                        keluarga atau sahabat.
                                    </p>
                                    <h5>
                                        Pekanbaru <span style="font-weight: 100; font-size: medium;">Jl. Bangau No.
                                            30</span>
                                    </h5>
                                    <h5>
                                        Padang <span style="font-weight: 100; font-size: medium;">Jl. Khatib Sulaiman
                                            No. 65</span>
                                    </h5>

                                    <div
                                        style="width: 100px; background-color: #f8842b; padding: 15px; border-radius: 30px; text-align: center; margin-top: 30px; box-shadow: 10px 10px 25px grey;">
                                        <a href="" class="btn1" style="font-size: large; color: #fff;">
                                            PESAN
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="box">
                        <div class="row" style="height: auto; padding: 10px 15px;">
                            <div class="col-md-6 col-lg-6 col-12">
                                <div class="img-box mt-3 mt-md-2 mt-lg-5">
                                    <img src="{{ asset('images/rental mobil.png') }}" alt="" width="100">
                                </div>
                            </div>

                            <div class="col-md-1 col-lg-1 col-12" style="height: 50px;"></div>

                            <div class="col-md-5 col-lg-5 col-12">
                                <div class="detail-box card-product"
                                    style="text-align: left !important; padding-top: 0; margin-top: 0;">
                                    <p>
                                        Melayani <b>Rental Mobil</b> bagi pelanggan sekaligus dengan driver dari kami
                                        untuk menjamin
                                        kenyamanan dan keamanan pelanggan.
                                    </p>
                                    <h5>
                                        Pekanbaru <span style="font-weight: 100; font-size: medium;">Jl. Bangau No.
                                            30</span>
                                    </h5>
                                    <h5>
                                        Padang <span style="font-weight: 100; font-size: medium;">Jl. Khatib Sulaiman
                                            No. 65</span>
                                    </h5>
                                    <div
                                        style="width: 100px; background-color: #f8842b; padding: 15px; border-radius: 30px; text-align: center; box-shadow: 10px 10px 25px #868686; margin-top: 30px;">
                                        <a href="" class="btn1" style="font-size: large; color: #fff;">
                                            PESAN
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="box">
                        <div class="row"
                            style="height: auto; padding-top: 10px; margin-bottom: 23px; padding-left: 15px; padding-right: 15px;">
                            <div class="col-md-6 col-lg-6 col-12">
                                <div class="img-box mt-3 mt-md-2 mt-lg-5">
                                    <img src="{{ asset('images/kirim-barang.png') }}" alt="" width="100">
                                </div>
                            </div>

                            <div class="col-md-1 col-lg-1 col-12" style="height: 50px;"></div>

                            <div class="col-md-5 col-lg-5 col-12">
                                <div class="detail-box card-product"
                                    style="text-align: left !important; padding-top: 0; margin-top: 0;">
                                    <h5>
                                        Pekanbaru <span style="font-weight: 100; font-size: medium;">Jl. Bangau No.
                                            30</span>
                                    </h5>
                                    <h5>
                                        Padang <span style="font-weight: 100; font-size: medium;">Jl. Khatib Sulaiman
                                            No. 65</span>
                                    </h5>
                                    <h5>
                                        Bukittinggi <span style="font-weight: 100; font-size: medium;">Sanjai Mintuo
                                            Garegeh (Batas
                                            Kota)</span>
                                    </h5>
                                    <h5>
                                        Padang Panjang<span style="font-weight: 100; font-size: medium;">Jl. M. Yamin
                                            No. 02</span>
                                    </h5>
                                    <div
                                        style="width: 100px; background-color: #f8842b; padding: 15px; border-radius: 30px; text-align: center; margin-top: 50px; box-shadow: 10px 10px 25px grey;">
                                        <a href="" class="btn1" style="font-size: large; color: #fff;">
                                            PESAN
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end service section -->

    <!-- about section -->

    <section class="client_section" style="margin-top: -70px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-6 mx-auto">
                    <div class=" box">
                        <h3 style="font-weight: 600;">Super Executive</h3>
                        <div class="img-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                style="color: #f8842b; background-color: #e8e8e8; border-radius: 100%; margin-top: 25px;">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>
                        <div class="detail-box" style="background-color: #e8e8e8;">
                            <div class="client_info executive-info" style="color: #868686; width: 70px;">
                                <div class="client_name">
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        5 Seat
                                    </h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Air
                                        Mineral</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Mobil
                                        Full AC</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Makanan
                                        Ringan</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Bantal
                                        Penumpang</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Berhenti
                                        Sholat</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Jemput
                                        dan Antar</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-6 col-lg-6 mx-auto">
                    <div class="box">
                        <h3 style="font-weight: 600;">Business Class</h3>
                        <div class="img-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                style="color: #e8e8e8; background-color: #fff; box-shadow: #fff; border-radius: 100%; margin-top: 25px;">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>
                        <div class="detail-box" style="background-color: #e8e8e8;">
                            <div class="client_info business-info" style="color: #868686; width: 70px;">
                                <div class="client_name">

                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        6 Seat
                                    </h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Air
                                        Mineral</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Mobil
                                        Full AC</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Makanan
                                        Ringan</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Bantal
                                        Penumpang</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Berhenti
                                        Sholat</h6>
                                    <h6
                                        style="text-transform: capitalize; font-size: 12px; line-height: 30px; color: #868686; font-weight: bold;">
                                        Jemput
                                        dan Antar</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-6 mx-auto">
                    <div class="box">
                        <div class="client_info"
                            style="color: #868686; background-color: #e8e8e8; padding: 15px; width: 150px; border-radius: 20px;">
                            <div class="client_name">
                                <p style="font-weight: 600; margin: 0 auto;">Innova Reborn</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-6 mx-auto">
                    <div class="box">
                        <div class="client_info"
                            style="color: #868686; background-color: #e8e8e8; padding: 15px; width: 150px; border-radius: 20px;">
                            <div class="client_name">
                                <p style="font-weight: 600; margin: 0 auto;">Isuzu Panther</p>
                            </div>
                        </div>
                    </div>
                </div>


    </section>

    <section class="case_section layout_padding" style="margin-top: -80px;">
        <div class="container">
            <div class="heading_container">
                <div style="border: 7px solid #000; padding: 20px; border-radius: 100%; background-color: #e8e8e8;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-luggage-fill" viewBox="0 0 16 16" style="color: #f8842b;">
                        <path
                            d="M2 1.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V5h.5A1.5 1.5 0 0 1 8 6.5V7H7v-.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5H4v1H2.5v.25a.75.75 0 0 1-1.5 0v-.335A1.5 1.5 0 0 1 0 13.5v-7A1.5 1.5 0 0 1 1.5 5H2zM3 5h2V2H3z" />
                        <path
                            d="M2.5 7a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5m10 1v-.5A1.5 1.5 0 0 0 11 6h-1a1.5 1.5 0 0 0-1.5 1.5V8H8v8h5V8zM10 7h1a.5.5 0 0 1 .5.5V8h-2v-.5A.5.5 0 0 1 10 7M5 9.5A1.5 1.5 0 0 1 6.5 8H7v8h-.5A1.5 1.5 0 0 1 5 14.5zm9 6.5V8h.5A1.5 1.5 0 0 1 16 9.5v5a1.5 1.5 0 0 1-1.5 1.5z" />
                    </svg>
                </div>
            </div>
            <div class="row" style="margin-top: -40px;">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="box">
                        <div class="detail-box">
                            <h5>
                                Untuk keperluan kunjungan kerja, city tour, event-event maupun tour ke luar kota, kami
                                juga menyediakan
                                paket tour dalam maupun luar kota.
                            </h5>
                        </div>
                        <div
                            style="width: 100px; background-color: #f8842b; padding: 15px; border-radius: 30px; text-align: center; margin: 0 auto; box-shadow: 10px 10px 25px grey;">
                            <a href="" class="btn1"
                                style="font-size: large; color: #fff; font-weight: bold;">
                                PESAN
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>

            </div>
        </div>
    </section>

    <section class="about_section layout_padding" style="border-radius: 0;">
        <div class="container  ">
            <div class="detail-box">
                <h2>TRAVEL DENGAN PELAYANAN TERBAIK</h2>
                <p>
                    Dipercaya sejak tahun 1998 dan telah berpengalaman melayani lebih dari 2000 pelanggan setiap
                    bulannya.
                </p>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <div class="footer_container" style="border-radius: 0;">
        <!-- info section -->

        <section class="info_section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 ">
                        <div class="info_detail">
                            <img src="{{ asset('images/logo-full-white.png') }}" alt="Logo Nusa Mulya"
                                style="width: 150px;">
                            <p style="margin-top: 20px;">
                                Travel dengan pelayanan terbaik telah dipercaya sejak tahun 1998 dan telah berpengalaman
                                melayani lebih
                                dari 2000 pelanggan setiap bulannya.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <div class="info_link_box">
                            <h4>
                                Links
                            </h4>
                            <div class="info_links">
                                <a class="" href="/index">
                                    Home
                                </a>
                                <a class="" href="/about">
                                    About
                                </a>
                                <a class="" href="/gallery">
                                    Gallery
                                </a>
                                <a class="" href="/customer">
                                    Our Customers
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-0 ml-auto">
                        <div class="info_contact">
                            <h4>
                                Address
                            </h4>
                            <div class="contact_link_box">
                                <a href="https://maps.app.goo.gl/VRjqW6zQDBdCi9fd6">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>
                                        Jl. Bangau No. 10, Sukajadi, Kota Pekanbaru (Belakang kampus UMRI Ahmad Dahlan)
                                    </span>
                                </a>
                                <a href="tel:6281371879191">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                        Call +62 813-7187-9191 (Pekanbaru)
                                    </span>
                                </a>
                                <a href="tel:6285376667087">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                        Call +62 853-7666-7087 (Padang)
                                    </span>
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=100066497414402">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <span>
                                        @nusamulya
                                    </span>
                                </a>
                                <a href="https://www.instagram.com/nusamulyatravel/">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                    <span>
                                        @nusamulya
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end info section -->

        <!-- footer section -->
        <footer class="footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> Powered By
                    <a href="https://www.instagram.com/didi_riwanda/">Didi Riwanda</a>
                </p>
            </div>
        </footer>
        <!-- footer section -->
    </div>

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>
