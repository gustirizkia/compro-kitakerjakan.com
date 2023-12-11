@extends('layouts.front')

@section('title')
    Layanan {{ $item->nama }}
@endsection

@push('meta')
    <meta name="description" content="{{ $item->deskripsi_singkat }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('detail-layanan', $item->slug) }}" />
    <meta property="og:title" content="Kitakerjakan" />
    <meta property="og:description" content="{{ $item->deskripsi_singkat }}" />
    <meta property="og:image" content="{{ asset('storage/' . $item->image) }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ route('detail-layanan', $item->slug) }}" />
    <meta property="twitter:title" content="Kitakerjakan" />
    <meta property="twitter:description" content="{{ $item->deskripsi_singkat }}" />
    <meta property="twitter:image" content="{{ asset('storage/' . $item->image) }}" />
@endpush

@push('addStyle')
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
            min-height: 267px;
            width: 100%;
            position: relative;
            padding: 100px 0;
        }
    </style>
@endpush

@section('content')
    <section id="intro-home" class="intro clearfix d-flex flex-column justify-content-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center">
                        <h1 class="text-white">
                            {{ $item->nama }}
                        </h1>
                        <p class="text-white">
                            {!! $item->deskripsi_singkat !!}
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="py-2">
        <div class="container">

            <div class="mt-3">
                <div class="row justify-content-center">
                    @foreach ($item->detail as $detail)
                        <div class="col-md-4 mb-3">
                            <div class="card border h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div class="">
                                        <img src="{{ asset('storage/' . $detail->image) }}" alt=""
                                            class="img-fluid rounded">
                                        <div class="fw-bold text-dark mt-2">
                                            {{ $detail->nama }}
                                        </div>
                                        {!! $detail->deskripsi_singkat !!}
                                    </div>

                                    <div class="mt-2">
                                        <a href=""
                                            class="btn-block w-100 btn btn-lg btn-primary btn-block text-center mt-3 rounded-pill d-flex align-items-center justify-content-center">
                                            <div class="text-start">

                                                Rp. {{ number_format($detail->harga) }}

                                            </div>
                                            <div class="text-end ms-2">
                                                <i class="bi bi-arrow-right-circle"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-100 pb-6 mt-5">
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
