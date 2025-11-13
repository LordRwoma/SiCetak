@extends('layouts.dashboard')

@section('title', 'Katalog Produk - SiRoma')

@section('content')
<div class="katalog-wrapper">

    <div class="back-section">
        <a href="{{ route('dashboard.katalog') }}" class="btn-back">← Kembali ke Katalog</a>
    </div>

    <section class="kategori-section">
        <h3 class="section-title">Kategori</h3>
        <div class="kategori-scroll">
            @php
                $kategori = ['Banner', 'Alat Tulis', 'Laminating', 'Dokumen', 'Printing', 'Undangan', 'Card Case', 'ID Card'];
            @endphp
            @foreach ($kategori as $item)
                <button class="kategori-btn">{{ $item }}</button>
            @endforeach
        </div>
    </section>
    
    <section class="produk-section produk-section-spaced">
        <h3 class="section-title">Semua Produk</h3>
        <div class="produk-grid center-grid">
            @for ($i = 1; $i <= 15; $i++)
                <div class="produk-card">
                    <div class="produk-img"></div>
                    <div class="produk-info">
                        <h4>Produk {{ $i }}</h4>
                        <p class="produk-price">Rp {{ 10000 + ($i * 500) }}</p>
                        <p class="produk-desc">Produk berkualitas tinggi dari SiRoma</p>
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
