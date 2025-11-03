@extends('layouts.dashboard')

@section('title', 'Keranjang - SiRoma')

@section('content')
<div class="keranjang-container">
    <h2 class="page-title">Keranjang Belanja</h2>
    
    <div class="keranjang-content">
        <div class="keranjang-items" id="keranjangItems">
            <!-- Items will be loaded here by JavaScript -->
        </div>
        
        <div class="keranjang-summary">
            <h3 class="summary-title">Ringkasan Belanja</h3>
            <div class="summary-row">
                <span>Subtotal</span>
                <span id="subtotal">Rp 0</span>
            </div>
            <div class="summary-row">
                <span>Ongkir</span>
                <span id="ongkir">Rp 0</span>
            </div>
            <div class="summary-divider"></div>
            <div class="summary-row total">
                <span>Total</span>
                <span id="total">Rp 0</span>
            </div>
            <button class="btn-checkout">Lanjut Pembayaran</button>
        </div>
    </div>
</div>

<div class="empty-cart" id="emptyCart" style="display: none;">
    <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
        <circle cx="9" cy="21" r="1"/>
        <circle cx="20" cy="21" r="1"/>
        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
    </svg>
    <h3>Keranjang Kosong</h3>
    <p>Belum ada produk di keranjang Anda</p>
    <button class="btn btn-primary" onclick="window.location.href='/dashboard/katalog'">
        Mulai Belanja
    </button>
</div>
@endsection