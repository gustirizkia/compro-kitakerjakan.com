@extends('layouts.front')

@section('title')
    Kitakerjakan
@endsection

@push('addStyle')
    <link rel="stylesheet" href="{{ asset('owl/docs/assets/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/docs/assets/owlcarousel/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
    <section id="intro-home" class="intro clearfix">
        <div class="container">
            <div class="row justify-content-center align-self-center align-items-center">

                <div class="col-md-6 mt-5 intro-info text-white">

                    <div class="owl-carousel owl-theme">
                        <div class="item active" data-bs-interval="1000">
                            <h1 class="h1 text-white">
                                Hadir untuk menjadi
                                patner bisnis anda
                            </h1>
                            Kami adalah perusahaan yang bergerak pada bidang jasa pengurusan administrasi
                            perpajakan, keuangan dan legalitas perusahaan.
                        </div>
                        <div class="item" data-bs-interval="2000">
                            <h1 class="h1 text-white">layanan berbasis online
                                dan offline</h1>
                            dengan berbagai
                            layanan konsultasi dibidang Perpajakan,
                            Keuangan dan Legalitas perusahaan.
                            Kami menyediakan layanan berbasis online
                            dan offline yang membantu memudahkan
                            anda dalam menyelesaikan permasalahan
                            anda dan layanan kami bisa dijangkau se-Indonesia
                        </div>
                        <div class="item">
                            <h1 class="h1 text-white">Mempermudah
                                dan meringankan pekerjaan anda.</h1>
                            Kami juga memberikan pelayanan yang cepat,
                            murah dan amanah dan berbagai fasilitas lainnya yang mempermudah anda dalam
                            mengurus persoalan perpajakan, keuangan dan legalitas perusahaan anda.
                        </div>
                    </div>


                </div>
                <div class="col-md-6 text-center d-md-block d-none" id="intro-absolute">
                    <picture>
                        <img src="{{ asset('images/header.png') }}" class="img-fluid mx-auto" alt="Kitakerjakan.com"
                            style="width: 70%">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-6 begin">

        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="">
                                <img src="{{ asset('images/pajak.png') }}" alt="" class="img-fluid"
                                    style="height: 40px">
                                <h1 class="h5 mb-0 mt-2">Perpajakan Perusahaan & Orang Pribadi</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="">
                                <img src="{{ asset('images/keuangan.png') }}" alt="" class="img-fluid"
                                    style="height: 40px">
                                <h1 class="h5 mb-0 mt-2">Laporan Keuangan
                                    Perusahaan & UMKM</h1>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="">
                                <img src="{{ asset('images/legal.png') }}" alt="" class="img-fluid"
                                    style="height: 40px">
                                <h1 class="h5 mb-0 mt-2">
                                    Pendirian Badan Usaha &
                                    Perkumpulan Lainnya
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="">
                                <img src="{{ asset('images/perizinan.png') }}" alt="" class="img-fluid"
                                    style="height: 40px">
                                <h1 class="h5 mb-0 mt-2">
                                    Perizin Lanjutan Perusahaan
                                    UMK & Non UMK
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    {{-- About --}}
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('wooLanding/public/assets/img/gallery/feature-3.png') }}" alt="Tentang Kitakerjakan"
                        class="img-fluid">
                </div>
                <div class="col-md-8 h-full d-flex flex-column justify-content-center mt-4 mt-md-0">
                    <h1>
                        Kita Kerjakan.com
                    </h1>
                    <p>
                        Kami adalah perusahaan yang bergerak pada bidang jasa pengurusan administrasi
                        perpajakan, keuangan dan legalitas perusahaan. Kami hadir untuk mempermudah
                        dan meringankan pekerjaan anda. Kami juga memberikan pelayanan yang cepat,
                        murah dan amanah dan berbagai fasilitas lainnya yang mempermudah anda dalam
                        mengurus persoalan perpajakan, keuangan dan legalitas perusahaan anda.
                    </p>

                    <div class="">

                        <a href="" class="btn btn-lg btn-primary btn-block text-center mt-3 rounded-pill">Hubungi
                            Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- About end --}}


    <section class="py-7 bg-light-gradient">

        <div class="container">
            <div class="row flex-center mb-5">
                <div class="col-auto text-center">
                    <h1 class="display-3 fw-bold fs-4 fs-md-6">Layanan Kami<br /><span>
                            Kitakerjakan.com</span></h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="">
                                    <div class="mb-3 text-center">
                                        <img src="{{ asset('images/legal.png') }}" alt="Legalitas kitakerjakan"
                                            class="img-fluid" style="height: 70px;">
                                        <h1 class="h3 mt-2">LEGALITAS</h1>
                                    </div>
                                    <ul>
                                        <li>Pendirian PT</li>
                                        <li>Pendirian CV</li>
                                        <li>Pendirian Yayasan</li>
                                        <li>Pendirian Perkumpulan</li>
                                    </ul>
                                </div>

                                <div class="">
                                    <a class="btn btn-lg btn-primary btn-block w-100 text-center mt-3 rounded-pill"
                                        href="#">Hubungi Tim</a>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <img src="{{ asset('images/perizinan.png') }}" alt="Legalitas kitakerjakan"
                                    class="img-fluid" style="height: 70px;">
                                <h1 class="h3 mt-2">PERIZINAN</h1>
                            </div>
                            <ul>
                                <li>Pembuatan NIB</li>
                                <li>Pembuatan SBU</li>
                                <li>Pembuatan IMB</li>
                                <li>Sertifikasi ISO</li>
                                <li>Sertifikasi SIUJPT</li>
                                <li>Pendaftaran Merek</li>
                                <li>Perizinan Halal</li>
                                <li>Perizinan BPOM</li>
                                <li>Perizinan PIRT</li>
                            </ul>

                            <a class="btn btn-lg btn-primary btn-block w-100 text-center mt-3 rounded-pill"
                                href="#">Hubungi Tim</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="">
                                    <div class="mb-3 text-center">
                                        <img src="{{ asset('images/keuangan.png') }}" alt="Keuangan kitakerjakan"
                                            class="img-fluid" style="height: 70px;">
                                        <h1 class="h3 mt-2">KEUANGAN</h1>
                                    </div>
                                    <ul>
                                        <li>laporan keuangan</li>
                                        <li>Laporan Auditor</li>
                                        <li>Perencanaan keuangan</li>
                                    </ul>
                                </div>

                                <div class="">
                                    <a class="btn btn-lg btn-primary btn-block w-100 text-center mt-3 rounded-pill"
                                        href="#">Hubungi Tim</a>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="">
                                    <div class="mb-3 text-center">
                                        <img src="{{ asset('images/pajak.png') }}" alt="PERPAJAKAN kitakerjakan"
                                            class="img-fluid" style="height: 70px;">
                                        <h1 class="h3 mt-2">PERPAJAKAN</h1>
                                    </div>
                                    <ul>
                                        <li>Adminitrasi Perpajakan</li>
                                        <li>Laporan SPT perusahaan</li>
                                        <li>Laporan SPT OP</li>
                                        <li>Pembuatan Efin</li>
                                        <li>Pembuatan NPWP</li>
                                        <li>Pembuatan PKP</li>
                                        <li>E-Faktur</li>
                                    </ul>
                                </div>

                                <div class="">
                                    <a class="btn btn-lg btn-primary btn-block w-100 text-center mt-3 rounded-pill"
                                        href="#">Hubungi Tim</a>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-100 pb-6">
        <div class="container">
            <div class="row flex-center">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label">
                                            Nama
                                        </label>
                                        <input type="text" class="form-control rounded-pill" name="nama" required
                                            placeholder="Input Nama">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label">
                                            Email
                                        </label>
                                        <input type="text" class="form-control rounded-pill" name="email" required
                                            placeholder="Input Email">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label">
                                            Nomor Telepon
                                        </label>
                                        <input type="text" class="form-control rounded-pill" name="telepon" required
                                            placeholder="Input Nomor Telepon">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label">
                                            Alamat
                                        </label>
                                        <input type="text" class="form-control rounded-pill" name="alamat" required
                                            placeholder="Input Alamat">
                                    </div>
                                    <div class="col-md- mb-3">
                                        <label for="" class="form-label">
                                            Jadwal
                                        </label>
                                        <input type="date" class="form-control rounded-pill" name="jadwal" required
                                            placeholder="Input Jadwal">
                                    </div>

                                    <div class="col-12">

                                        <button
                                            class="btn btn-lg btn-primary btn-block w-100 text-center mt-3 rounded-pill">Buat
                                            Jadwal</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 text-center mb-5 z-index-1">
                    <h1 class="display-3 fw-bold fs-4 fs-md-6">Kontak kami</h1>
                    <p>Buat Jadwal Dengan Kami</p>
                    <div class="text-start text-dark">
                        <div class="h5">
                            <div class="btn btn-primary btn-sm">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <span class="ms-2">087866075324 - 081998367365</span>
                        </div>
                        <div class="h5">
                            <div class="btn btn-primary btn-sm">
                                <i class="bi bi-envelope-at"></i>
                            </div>
                            <span class="ms-2">hub@kitakerjakan.com</span>
                        </div>
                        <div class="h5">
                            <div class="btn btn-primary btn-sm">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <span class="ms-2">Tangerang Selatan, Banten</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection


@push('addScript')
    <script src="{{ asset('owl/docs/assets/owlcarousel/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true
            });
        });
    </script>
@endpush
