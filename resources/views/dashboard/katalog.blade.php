@extends('layouts.dashboard')

@section('title', 'Katalog - SiRoma')

@section('content')
<div class="page-header">
    <h2 class="page-title">Katalog SiRoma</h2>
    <p class="page-subtitle">Temukan berbagai produk & jasa percetakan terbaik dengan harga bersahabat.</p>
</div>

<div class="katalog-wrapper">

    {{-- =======================
        KATALOG JASA
    ======================== --}}
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

                    {{-- Tombol Beli ke Checkout --}}
                    <button class="btn-cart" onclick="addToCart('Jasa Cetak {{ $i }}', 11000)">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="9" cy="21" r="1"/>
                            <circle cx="20" cy="21" r="1"/>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                        </svg>
                        Beli
                    </button>
                </div>
            @endfor
        </div>
    </section>

    {{-- =======================
        KATALOG PRODUK
    ======================== --}}
    <section class="produk-section produk-section-spaced">
        <div class="section-header">
            <h3 class="section-title">Katalog Produk</h3>

            {{-- "Lihat Semua" diarahkan ke dashboard.produk --}}
            <a href="{{ route('dashboard.produk') }}" class="lihat-semua">
                Lihat Semua →
            </a>
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

                    {{-- Tombol Beli ke Checkout --}}
                    <button class="btn-cart" onclick="addToCart('Banner Cetak {{ $i }}', 11000)">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="9" cy="21" r="1"/>
                            <circle cx="20" cy="21" r="1"/>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                        </svg>
                        Beli
                    </button>
                </div>
            @endfor
        </div>
    </section>

</div>
@endsection

{{-- Link CSS --}}
<link rel="stylesheet" href="{{ asset('css/katalog.css') }}">

{{-- Script untuk fungsi tombol Beli --}}
<script>
function addToCart(nama, harga) {
    fetch("{{ route('keranjang.add') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            nama: nama,
            harga: harga
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            alert('✅ ' + data.message);
            window.location.href = "{{ route('dashboard.keranjang') }}"; // langsung ke keranjang
        } else {
            alert('❌ Gagal menambahkan ke keranjang');
        }
    })
    .catch(err => console.error(err));
}
</script>
