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

<body class="sub_page">

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
                            <li class="nav-item {{ request()->is('/') ? 'active' : '' }} mx-2">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{ request()->is('about') ? 'active' : '' }} mx-2">
                                <a class="nav-link" href="/about"> About</a>
                            </li>
                            <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }} mx-2">
                                <a class="nav-link" href="/gallery">Gallery</a>
                            </li>
                            <li class="nav-item {{ request()->is('customer') ? 'active' : '' }} mx-2">
                                <a class=" nav-link" href="/customer">Our Customers</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- service section -->
    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Our Gallery
                </h2>
                <p>
                    Galeri dan Jenis Jasa yang disediakan oleh Nusa Mulya.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 53px; padding-bottom: 53px;">
                        <div class="img-box">
                            <img src="images/gallery/21.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 53px; padding-bottom: 53px;">
                        <div class="img-box">
                            <img src="images/gallery/22.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 46px; padding-bottom: 46px;">
                        <div class="img-box">
                            <img src="images/gallery/12.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 46px; padding-bottom: 46px;">
                        <div class="img-box">
                            <img src="images/gallery/16.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 75px; padding-bottom: 75px;">
                        <div class="img-box">
                            <img src="images/gallery/1.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 75px; padding-bottom: 75px;">
                        <div class="img-box">
                            <img src="images/gallery/2.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 75px; padding-bottom: 75px;">
                        <div class="img-box">
                            <img src="images/gallery/4.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 75px; padding-bottom: 75px;">
                        <div class="img-box">
                            <img src="images/gallery/5.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 75px; padding-bottom: 75px;">
                        <div class="img-box">
                            <img src="images/gallery/7.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 75px; padding-bottom: 75px;">
                        <div class="img-box">
                            <img src="images/gallery/9.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 75px; padding-bottom: 75px;">
                        <div class="img-box">
                            <img src="images/gallery/10.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 75px; padding-bottom: 75px;">
                        <div class="img-box">
                            <img src="images/gallery/11.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 76px; padding-bottom: 76px;">
                        <div class="img-box">
                            <img src="images/gallery/20.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 117px; padding-bottom: 117px;">
                        <div class="img-box">
                            <img src="images/gallery/3.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 117px; padding-bottom: 117px;">
                        <div class="img-box">
                            <img src="images/gallery/6.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 117px; padding-bottom: 117px;">
                        <div class="img-box">
                            <img src="images/gallery/14.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 117px; padding-bottom: 117px;">
                        <div class="img-box">
                            <img src="images/gallery/19.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 173px; padding-bottom: 173px;">
                        <div class="img-box">
                            <img src="images/gallery/17.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 245px; padding-bottom: 245px;">
                        <div class="img-box">
                            <img src="images/gallery/8.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 245px; padding-bottom: 245px;">
                        <div class="img-box">
                            <img src="images/gallery/13.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 245px; padding-bottom: 245px;">
                        <div class="img-box">
                            <img src="images/gallery/15.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 245px; padding-bottom: 245px;">
                        <div class="img-box">
                            <img src="images/gallery/18.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="box" style="padding-top: 245px; padding-bottom: 245px;">
                        <div class="img-box">
                            <img src="images/gallery/23.jpeg" alt="Gallery 1" class="rounded">
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </section>
    <!-- end service section -->


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
                                <a class="" href="/">
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
