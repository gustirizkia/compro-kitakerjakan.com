@extends('layouts.front')

@section('title')
    Artikel Kitakerjakan
@endsection

@push('addStyle')
    <style>
        .artikel_lainnya img {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }

        .artikel_lainnya p {
            font-size: 12px;
        }

        .artikel img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endpush

@push('meta')
    <meta name="description" content="{{ $item->keyword }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('artikel-detail', $item->slug) }}" />
    <meta property="og:title" content="Kitakerjakan" />
    <meta property="og:description" content="{{ $item->keyword }}" />
    <meta property="og:image" content="{{ asset('storage/' . $item->image) }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ route('artikel-detail', $item->slug) }}" />
    <meta property="twitter:title" content="Kitakerjakan" />
    <meta property="twitter:description" content="{{ $item->keyword }}" />
    <meta property="twitter:image" content="{{ asset('storage/' . $item->image) }}" />
@endpush

@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8 mb-3 artikel">
                <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid rounded">
                <div class="mt-3">
                    <h1 class="h4">
                        {{ $item->judul }}
                    </h1>

                    {!! $item->body !!}
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="artikel_lainnya">
                    <h1 class="h5">Artikel Lainnya</h1>
                    @foreach ($artikelLain as $artikel)
                        <a href="{{ route('artikel-detail', $artikel->slug) }}">

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/' . $artikel->image) }}" class="img-fluid rounded"
                                    alt="">
                                <p class="ms-2 mb-0">
                                    {{ $artikel->judul }}
                                </p>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
