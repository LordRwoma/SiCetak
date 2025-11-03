@extends('layouts.dashboard')

@section('title', 'Checkout - SiRoma')

@section('content')
<div class="checkout-container">
    <div class="checkout-header">
        <a href="{{ route('dashboard.katalog') }}" class="btn-back">← Kembali</a>
        <h2>Checkout</h2>
    </div>

    <div class="checkout-content scrollable-section">
        <!-- Data Pelanggan -->
        <div class="section-customer">
            <h3>Data Pelanggan</h3>
            <div class="form-group">
                <label>Nama Lengkap <span class="required">*</span></label>
                <input type="text" placeholder="Masukkan nama lengkap" class="input-field">
            </div>
            <div class="form-group">
                <label>Nomor HP (WhatsApp) <span class="required">*</span></label>
                <input type="text" placeholder="Masukkan nomor WhatsApp" class="input-field">
            </div>
        </div>

        <!-- Pesanan Anda -->
        <div class="section-order">
            <h3>Pesanan Anda</h3>
            <div class="order-item">
                <div class="item-img"></div>
                <div class="item-info">
                    <h4>Pena Gel</h4>
                    <p>Warna Hitam</p>
                    <div class="quantity-control">
                        <button class="qty-btn minus">-</button>
                        <span class="qty-value">2</span>
                        <button class="qty-btn plus">+</button>
                    </div>
                </div>
                <div class="item-price">Rp 11.000</div>
            </div>

            <div class="order-item">
                <div class="item-img"></div>
                <div class="item-info">
                    <h4>Banner 3 x 3 meter</h4>
                    <p>Standart</p>
                    <div class="quantity-control">
                        <button class="qty-btn minus">-</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn plus">+</button>
                    </div>
                </div>
                <div class="item-price">Rp 110.000</div>
            </div>
        </div>

        <!-- Total -->
        <div class="order-total">
            <h3>TOTAL</h3>
            <p>Rp 121.000</p>
        </div>

        <!-- Metode Pembayaran -->
        <div class="payment-method">
            <h3>Metode Pembayaran</h3>
            <div class="payment-options">
                <button class="payment-btn active" data-method="cash">💵 Cash</button>
                <button class="payment-btn" data-method="qris">📱 QRIS</button>
            </div>
        </div>

        <!-- Section QRIS (Hidden by default) -->
        <div id="qris-section" class="qris-section" style="display: none;">
            <div class="qris-container">
                <div class="qris-box">
                    <img src="{{ asset('images/qris-placeholder.png') }}" alt="QRIS" class="qris-image">
                </div>
                <div class="upload-box">
                    <label for="bukti-upload" class="upload-label">
                        <div class="upload-icon">⬆️</div>
                        <p>Klik untuk Upload bukti pembayaran</p>
                    </label>
                    <input type="file" id="bukti-upload" class="upload-input" accept="image/*" hidden>
                </div>
            </div>
        </div>

        <!-- Tombol Buat Pesanan -->
        <button class="btn-submit">Buat Pesanan</button>
    </div>
</div>

<!-- Floating Chat -->
<button class="floating-chat-btn">💬</button>
@endsection

<link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
<script src="{{ asset('js/checkout.js') }}" defer></script>
