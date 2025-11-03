@extends('layouts.dashboard')

@section('title', 'Katalog - SiRoma')

@section('content')
<div class="katalog-header">
    <h2 class="page-title">Katalog Lengkap</h2>
    <p class="page-description">Pilih produk dan jasa yang Anda butuhkan</p>
</div>

<div class="katalog-tabs">
    <button class="tab-btn active" data-tab="jasa">Jasa</button>
    <button class="tab-btn" data-tab="produk">Produk</button>
</div>

<div class="tab-content active" id="jasa">
    <div class="product-grid-large">
        @for($i = 1; $i <= 12; $i++)
        <div class="product-card">
            <div class="product-image">
                <div class="product-placeholder"></div>
            </div>
            <div class="product-info">
                <h4 class="product-name">Banner Cetak</h4>
                <p class="product-price">Rp 11.000</p>
                <p class="product-desc">Cetak banner berkualitas tinggi</p>
            </div>
            <button class="btn-add-cart">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"/>
                    <circle cx="20" cy="21" r="1"/>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                </svg>
                Tambah ke Keranjang
            </button>
        </div>
        @endfor
    </div>
</div>

<div class="tab-content" id="produk">
    <div class="product-grid-large">
        @for($i = 1; $i <= 12; $i++)
        <div class="product-card">
            <div class="product-image">
                <div class="product-placeholder"></div>
            </div>
            <div class="product-info">
                <h4 class="product-name">Produk {{ $i }}</h4>
                <p class="product-price">Rp 11.000</p>
                <p class="product-desc">Deskripsi produk</p>
            </div>
            <button class="btn-add-cart">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"/>
                    <circle cx="20" cy="21" r="1"/>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                </svg>
                Tambah ke Keranjang
            </button>
        </div>
        @endfor
    </div>
</div>
@endsection