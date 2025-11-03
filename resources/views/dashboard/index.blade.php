@extends('layouts.dashboard')

@section('title', 'Dashboard - SiRoma')

@section('content')
<div class="hero-banner">
    <div class="hero-banner-content">
        <div class="hero-path">
            <svg class="path-decoration" viewBox="0 0 500 300" preserveAspectRatio="none">
                <path d="M0,150 Q100,50 200,150 T400,150" stroke="#fff" stroke-width="2" fill="none" stroke-dasharray="5,5"/>
            </svg>
            <span class="path-text">Hayuk Yuk! Bureng Si Roma</span>
        </div>
        
        <h2 class="hero-banner-title">
            Cetak <span class="text-white">Instan</span>, Bebas <span class="text-white">Antrean.</span>
        </h2>
        
        <p class="hero-banner-description">
            Butuh cetak <span class="text-highlight">urgent</span>? Kirim dari smartphone atau web-laman dengan 
            upload file dan berikan kami cek silannya. Tinggal nge<span class="text-highlight">-print</span> 
            aja lah iya! kak!
        </p>
        
        <button class="btn-pesan-sekarang">Pesan Sekarang</button>
    </div>
    
    <div class="hero-banner-image">
        <img src="{{ asset('images/printer-machine-dashboard.png') }}" alt="Printer Machine">
    </div>
</div>

<section class="katalog-section">
    <div class="section-header">
        <h3 class="section-title-dashboard">Katalog Jasa</h3>
        <a href="{{ route('dashboard.katalog') }}" class="link-lihat-semua">
            Lihat Semua
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"/>
            </svg>
        </a>
    </div>
    
    <div class="product-grid">
        @for($i = 1; $i <= 6; $i++)
        <div class="product-card">
            <div class="product-image">
                <div class="product-placeholder"></div>
            </div>
            <div class="product-info">
                <h4 class="product-name">Banner</h4>
                <p class="product-price">Rp 11.000</p>
            </div>
            <button class="btn-add-cart">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"/>
                    <circle cx="20" cy="21" r="1"/>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                </svg>
            </button>
        </div>
        @endfor
    </div>
</section>

<section class="katalog-section">
    <div class="section-header">
        <h3 class="section-title-dashboard">Katalog Produk</h3>
        <a href="{{ route('dashboard.katalog') }}" class="link-lihat-semua">
            Lihat Semua
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"/>
            </svg>
        </a>
    </div>
    
    <div class="product-grid">
        @for($i = 1; $i <= 6; $i++)
        <div class="product-card">
            <div class="product-image">
                <div class="product-placeholder"></div>
            </div>
            <div class="product-info">
                <h4 class="product-name">Banner</h4>
                <p class="product-price">Rp 11.000</p>
            </div>
            <button class="btn-add-cart">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"/>
                    <circle cx="20" cy="21" r="1"/>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                </svg>
            </button>
        </div>
        @endfor
    </div>
</section>

<!-- Chat Button -->
<button class="floating-chat-btn">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
    </svg>
</button>
@endsection