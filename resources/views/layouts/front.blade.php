<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title', 'Kitakerjakan')</title>
    @stack('meta')
    <meta name="description"
        content="Kita Kerjakan.com hadir untuk menjadi
        patner bisnis anda dengan berbagai
        layanan konsultasi dibidang Perpajakan,
        Keuangan dan Legalitas perusahaan." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:title" content="Kitakerjakan" />
    <meta property="og:description"
        content="Kita Kerjakan.com hadir untuk menjadi patner bisnis anda dengan berbagai layanan konsultasi dibidang Perpajakan, Keuangan dan Legalitas perusahaan." />
    <meta property="og:image" content="{{ asset('images/LOGO.jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url('/') }}" />
    <meta property="twitter:title" content="Kitakerjakan" />
    <meta property="twitter:description"
        content="Kita Kerjakan.com hadir untuk menjadi patner bisnis anda dengan berbagai layanan konsultasi dibidang Perpajakan, Keuangan dan Legalitas perusahaan." />
    <meta property="twitter:image" content="{{ asset('images/LOGO.jpg') }}" />

    <!-- Meta Tags Generated with https://metatags.io -->
    @stack('meta')


    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/wooLanding/public/assets/css/theme.css" rel="stylesheet" />

    <style>
        .begin .h5 {
            font-size: 1rem;
        }

        body {
            color: rgb(17, 17, 17);
        }
    </style>

    <style>
        #intro-home {
            padding: 0;
            background: linear-gradient(0deg, rgba(0, 32, 74, 0.54) 0%, rgba(0, 32, 74, 0.881) 100%), url("https://izin.co.id/img/header-background/header.jpg"), lightgray 50% / cover no-repeat;
            background-size: cover;
        }

        .intro {
            background-position: center;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            min-height: 387px;
            width: 100%;
            position: relative;
            padding: 100px 0;
        }

        .offcanvas.layanan_canvas {
            height: unset;
            height: 80vh;
        }

        .btn.btn-primary {
            background-color: #003070;
            border-color: #003070;
        }

        .text-primary {
            color: #003070 !important;
        }

        a {
            text-decoration: unset;
        }

        p {
            font-size: 14px;
            color: rgb(17, 17, 17);
        }
    </style>
    @stack('addStyle')
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top" style="min-height: 100vh">
        <nav class="navbar navbar-expand-lg navbar-light py-3 bg-light" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid"
                            style="    height: 52px;" />
                        <b class="d-none d-md-block" style="color: #003070">Kitakerjakan</b>
                    </div>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul
                        class="navbar-nav ms-auto  border-bottom border-lg-bottom-0 pt-2 pt-lg-0 align-items-center d-md-flex d-block">
                        <li class="nav-item">
                            <a class="nav-link fw-medium active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#">Tentang</a></li>
                        <li class="nav-item d-md-block d-none">
                            <div class="nav-link fw-medium" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                                aria-controls="offcanvasTop">Layanan</div>
                        </li>

                        <li class="nav-item dropdown d-md-none">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu">
                                @foreach (getLayanan() as $itemLayananNavbar)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('detail-layanan', $itemLayananNavbar->slug) }}"
                                            style="font-size: 12px;">
                                            {{ $itemLayananNavbar->nama }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#">Kontak Kami</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="/artikel">Artikel</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#">
                                <div class="btn btn-lg btn-primary btn-block w-100 text-center btn-sm ">
                                    Kontak Kami
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </nav>



        {{-- Canva --}}
        <div class="offcanvas layanan_canvas offcanvas-top" tabindex="-1" id="offcanvasTop"
            aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h1 class="h1">Layanan Kami</h1>

                <div class="row">
                    @foreach (getLayanan() as $itemLayananNavbar)
                        <div class="col-md-3">
                            <div class="card  mb-3">
                                <div class="card-body">
                                    <a href="{{ route('detail-layanan', $itemLayananNavbar->slug) }}" class="">
                                        {{-- <img src="{{ asset('images/pajak.png') }}" alt="" class="img-fluid"
                                            style="height: 40px"> --}}
                                        <div class="fw-bold mb-0 mt-2 text-primary">
                                            {{ $itemLayananNavbar->nama }}
                                        </div>
                                        <p class="text-dark" style="font-size: 12px;">

                                            {{ Str::limit($itemLayananNavbar->deskripsi_singkat, 60, ' ...') }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        {{-- Canva end --}}

        <div class="" style="min-height: 100vh">
            @yield('content')
        </div>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-2">

            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-sm-2 text-md-start px-md-0 pt-md-2 text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item mr-3"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#272D4E" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                        </path>
                                    </svg></a></li>
                            <li class="list-inline-item mr-3"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#272D4E" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                        </path>
                                    </svg></a></li>
                            <li class="list-inline-item mr-3"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-rss" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#272D4E" viewBox="0 0 16 16">
                                        <path
                                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z">
                                        </path>
                                        <path
                                            d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-3-8.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1z">
                                        </path>
                                    </svg></a></li>
                            <li class="list-inline-item mr-3"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#272D4E" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                        </path>
                                    </svg></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-6 px-md-0 text-md-center order-1 order-md-0">
                        <div class="text-400 text-center d-md-flex align-items-center h-100 justify-content-end">
                            <p class="mb-0">

                                &copy; COPYRIGHT <a class="text-1000" href="https://themewagon.com/"
                                    target="_blank">KITAKERJAKAN.COM </a>
                            </p>
                        </div>
                    </div>

                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="/wooLanding/public/vendors/@popperjs/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('owl/docs/assets/vendors/jquery.min.js') }}"></script>
    <script src="/wooLanding/public/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/wooLanding/public/assets/js/theme.js"></script>

    @stack('addScript')

</body>

</html>
