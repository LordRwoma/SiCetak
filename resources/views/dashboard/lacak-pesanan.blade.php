@extends('layouts.dashboard')

@section('title', 'Lacak Pesanan - SiRoma')

@section('content')
<div class="lacak-container">
    <h2 class="page-title">Lacak Pesanan</h2>
    <p class="page-description">Pantau status pesanan Anda secara real-time</p>
    
    <div class="lacak-search">
        <div class="lacak-input-group">
            <input type="text" class="lacak-input" id="lacakInput" placeholder="Masukkan nomor pesanan atau nomor invoice...">
            <button class="btn-lacak" onclick="lacakPesanan()">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: inline-block; vertical-align: middle; margin-right: 0.5rem;">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.35-4.35"/>
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
        
        <div class="pesanan-card">
            <div class="pesanan-header">
                <span class="pesanan-id">#ORD-2024-002</span>
                <span class="pesanan-status status-selesai">Selesai</span>
            </div>
            <div class="pesanan-detail">
                <div class="detail-row">
                    <span>Tanggal Pesanan</span>
                    <strong>01 Nov 2024, 10:15</strong>
                </div>
                <div class="detail-row">
                    <span>Produk</span>
                    <strong>Fotocopy Dokumen 50 lembar</strong>
                </div>
                <div class="detail-row">
                    <span>Total</span>
                    <strong>Rp 25.000</strong>
                </div>
                <div class="detail-row">
                    <span>Diselesaikan</span>
                    <strong>01 Nov 2024, 12:30</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection