@extends('layouts.dashboard')

@section('title', 'Checkout - SiRoma')

@section('content')
    <form class="checkout-container" method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data">
        @csrf

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
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" class="input-field" required>
                    @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group">
                    <label>Nomor HP (WhatsApp) <span class="required">*</span></label>
                    <input type="text" name="phone" placeholder="Masukkan nomor WhatsApp" class="input-field" required>
                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <!-- Pesanan Anda (contoh statis) -->
            <div class="section-order">
                <h3>Pesanan Anda</h3>

                <div class="order-item">
                    <div class="item-img"></div>
                    <div class="item-info">
                        <h4>Pena Gel</h4>
                        <p>Warna Hitam</p>
                        <div class="quantity-control">
                            <button type="button" class="qty-btn minus">-</button>
                            <span class="qty-value">2</span>
                            <button type="button" class="qty-btn plus">+</button>
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
                            <button type="button" class="qty-btn minus">-</button>
                            <span class="qty-value">1</span>
                            <button type="button" class="qty-btn plus">+</button>
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
                    <button type="button" class="payment-btn active" data-method="cash">💵 Cash</button>
                    <button type="button" class="payment-btn" data-method="qris">📱 QRIS</button>
                </div>
                <input type="hidden" name="payment_method" id="payment_method" value="cash">
                @error('payment_method') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- QRIS -->
            <div id="qris-section" class="qris-section" style="display:none;">
                <div class="qris-container">
                    <div class="qris-box">
                        <img src="{{ asset('images/qris-placeholder.png') }}" alt="QRIS" class="qris-image">
                    </div>
                    <div class="upload-box">
                        <label for="bukti-upload" class="upload-label">
                            <div class="upload-icon">⬆️</div>
                            <p>Klik untuk Upload bukti pembayaran</p>
                        </label>
                        <input type="file" id="bukti-upload" name="bukti" class="upload-input" accept="image/*" hidden>
                        @error('bukti') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
            </div>

            <!-- Tombol Buat Pesanan -->
            <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <button type="submit" class="btn-submit">Buat Pesanan</button>
            </form>

        </div>
    </form>

    <!-- Floating Chat -->
    <button type="button" class="floating-chat-btn">💬</button>
@endsection

<link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
<script src="{{ asset('js/checkout.js') }}" defer></script>