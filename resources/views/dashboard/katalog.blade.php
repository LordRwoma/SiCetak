@extends('layouts.dashboard')

@section('title', 'Katalog - SiRoma')

@section('content')
<div class="page-header">
    <h2 class="page-title">Katalog Produk SiRoma</h2>
    <p class="page-subtitle">Temukan berbagai produk percetakan dengan kualitas terbaik dan harga bersahabat.</p>
</div>

<div class="katalog-wrapper">
    <section class="produk-section jasa-section">
        <div class="section-header">
            <h3 class="section-title">Katalog Jasa</h3>
        </div>
        <div class="jasa-grid center-grid">
            @for ($i = 1; $i <= 5; $i++)
                <div class="jasa-card">
                    <div class="jasa-img"></div>
                    <div class="jasa-info">
                        <h4>Jasa Cetak {{ $i }}</h4>
                        <p class="jasa-price">Rp 11.000</p>
                        <p class="jasa-desc">Cetak cepat dan berkualitas tinggi</p>
                    </div>
                    <button class="btn-cart">Beli</button>
                </div>
            @endfor
        </div>
    </section>

    <section class="produk-section produk-section-spaced">
        <div class="section-header">
            <h3 class="section-title">Katalog Produk</h3>
            <a href="{{ route('dashboard.katalog.produk') }}" class="lihat-semua">Lihat Semua →</a>
        </div>
        <div class="produk-grid center-grid">
            @for ($i = 1; $i <= 5; $i++)
                <div class="produk-card">
                    <div class="produk-img"></div>
                    <div class="produk-info">
                        <h4>Banner Cetak {{ $i }}</h4>
                        <p class="produk-price">Rp 11.000</p>
                        <p class="produk-desc">Banner berkualitas tinggi dan tahan lama</p>
                    </div>
                    <button class="btn-cart">Beli</button>
                </div>
            @endfor
        </div>
    </section>
</div>
@endsection

<link rel="stylesheet" href="{{ asset('css/katalog.css') }}">
<script src="{{ asset('js/katalog.js') }}" defer></script>
