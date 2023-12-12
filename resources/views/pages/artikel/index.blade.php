@extends('layouts.front')

@section('title')
    Artikel Kitakerjakan
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            @foreach ($artikel as $item)
                <div class="col-md-4 mb-3">
                    <a href="{{ route('artikel-detail', $item->slug) }}">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid rounded">
                                <div class="fw-bold text-dark mt-2">
                                    {{ $item->judul }}
                                </div>
                            </div>
                        </div>

                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
