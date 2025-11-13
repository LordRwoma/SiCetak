@extends('layouts.dashboard')

@section('title', 'Lacak Pesanan - SiRoma')

@section('content')
    <div class="lacak-container">
        <h2 class="page-title">Lacak Pesanan</h2>
        <p class="page-description">Pantau status pesanan Anda secara real-time</p>

        <div class="lacak-search">
            <div class="lacak-input-group">
                <input type="text" class="lacak-input" id="lacakInput"
                    placeholder="Masukkan nomor pesanan atau nomor invoice...">
                <button class="btn-lacak" onclick="lacakPesanan()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        style="display: inline-block; vertical-align: middle; margin-right: 0.5rem;">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.35-4.35" />
                    </svg>
                    Lacak
                </button>
            </div>
        </div>

        <div class="pesanan-list" id="pesananList">
            <!-- Sample data - akan diisi dengan JavaScript -->
            <div class="pesanan-card">
                <div class="pesanan-header">
                    <span class="pesanan-id">#ORD-2024-001</span>
                    <span class="pesanan-status status-proses">Sedang Diproses</span>
                </div>
                <div class="pesanan-detail">
                    <div class="detail-row">
                        <span>Tanggal Pesanan</span>
                        <strong>03 Nov 2024, 14:30</strong>
                    </div>
                    <div class="detail-row">
                        <span>Produk</span>
                        <strong>Banner Cetak A3</strong>
                    </div>
                    <div class="detail-row">
                        <span>Total</span>
                        <strong>Rp 45.000</strong>
                    </div>
                    <div class="detail-row">
                        <span>Estimasi Selesai</span>
                        <strong>03 Nov 2024, 17:00</strong>
                    </div>
                </div>
            </div>

            <div class="pesanan-list" id="pesananList">
                @forelse ($orders as $order)
                    <div class="pesanan-card">
                        <div class="pesanan-header">
                            <span class="pesanan-id">#ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</span>
                            <span
                                class="pesanan-status {{ $order->payment_method === 'cash' ? 'status-proses' : 'status-selesai' }}">
                                {{ $order->payment_method === 'cash' ? 'Sedang Diproses' : 'Selesai' }}
                            </span>
                        </div>

                        <div class="pesanan-detail">
                            <div class="detail-row">
                                <span>Tanggal Pesanan</span>
                                <strong>{{ $order->created_at->format('d M Y, H:i') }}</strong>
                            </div>
                            <div class="detail-row">
                                <span>Nama Pemesan</span>
                                <strong>{{ $order->nama }}</strong>
                            </div>
                            <div class="detail-row">
                                <span>No. HP</span>
                                <strong>{{ $order->phone }}</strong>
                            </div>
                            <div class="detail-row">
                                <span>Metode Pembayaran</span>
                                <strong>{{ strtoupper($order->payment_method) }}</strong>
                            </div>

                            @if ($order->bukti)
                                <div class="detail-row">
                                    <span>Bukti Pembayaran</span>
                                    <strong><a href="{{ asset('storage/' . $order->bukti) }}" target="_blank">Lihat
                                            Bukti</a></strong>
                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500">Belum ada pesanan yang tercatat.</p>
                @endforelse
            </div>

        </div>
    </div>
    <style>
        .status-proses {
            color: orange;
            font-weight: bold;
        }

        .status-selesai {
            color: green;
            font-weight: bold;
        }
    </style>

@endsection