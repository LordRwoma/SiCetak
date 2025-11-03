@extends('layouts.dashboardadmin')

@section('title', 'Kelola Keuangan - SiRoma')

@section('content')
    <aside class="sidebar">
      <div class="text-center py-4">
        <img src="img/robot.png" alt="logo" class="sidebar-logo mb-2">
        <h6 class="text-white fw-bold">SI<span class="text-light">Roma</span></h6>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="{{ route('admin.admindashboard') }}" class="nav-link active"><i class="bi bi-house-door"></i> Dashboard</a></li>
        <li class="nav-item"><a href="{{ route('admin.kelolaproduk') }}"class="nav-link"><i class="bi bi-box-seam"></i> Kelola Produk</a></li>
        <li class="nav-item"><a href="{{ route('admin.kelolajasa') }}" class="nav-link"><i class="bi bi-gear"></i> Kelola Jasa</a></li>
        <li class="nav-item"><a href="{{ route('admin.kelolapesanan') }}" class="nav-link"><i class="bi bi-bag"></i> Kelola Pesanan</a></li>
        <li class="nav-item"><a href="{{ route('admin.kelolakeuangan') }}" class="nav-link"><i class="bi bi-cash-coin"></i> Kelola Keuangan</a></li>
        <li class="nav-item mt-auto"><a href="index.html" class="nav-link logout"><i class="bi bi-box-arrow-right"></i> Keluar</a></li>
      </ul>
    </aside>

  <div class="main-content">
    <div class="search-box">
      <input type="text" placeholder="Search........">
      <button>🔍</button>
    </div>

    <h2 class="mb-4"><span class="me-2">💼</span><b>Kelola Keuangan</b></h2>

    <div class="content-box">
      <div class="content-title">Filter Tanggal</div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label>Tanggal Mulai</label>
          <input type="date" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
          <label>Tanggal Batas</label>
          <input type="date" class="form-control">
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between">
      <div class="stat-box">
        <h6>Total Pendapatan</h6>
        <div class="stat-value">Rp 11.000</div>
        <small>3 transaksi</small>
      </div>
      <div class="stat-box">
        <h6>Pembayaran Cash</h6>
        <div class="stat-value">Rp 6.000</div>
        <small>2 transaksi</small>
      </div>
      <div class="stat-box">
        <h6>Pembayaran QRIS</h6>
        <div class="stat-value">Rp 5.000</div>
        <small>1 transaksi</small>
      </div>
    </div>

    <div class="content-box mt-4">
      <div class="content-title">Riwayat Transaksi</div>
      <div class="no-transaction">Tidak ada transaksi selesai</div>
    </div>
  </div>
@endsection