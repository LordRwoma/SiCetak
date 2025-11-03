@extends('layouts.dashboardadmin')

@section('title', 'Admin Login  - SiRoma')

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

    <!-- Main Content -->
    <main class="content flex-grow-1 p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center gap-3">
          <h3 class="fw-bold text-dark"><i class="bi bi-house-door-fill text-primary me-2"></i> Dashboard</h3>
        </div>
        <div class="d-flex gap-2">
          <button class="btn btn-outline-primary rounded-pill"><i class="bi bi-calendar-event "></i> Bulan Ini</button>
          <button class="btn btn-primary rounded-pill"><i class="bi bi-cloud-arrow-down"></i> Download Report</button>
        </div>
      </div>

      <!-- Summary Cards -->
      <div class="row g-3 mb-4">
        <div class="col-md-3">
          <div class="card card-summary">
            <h6>Pesanan Baru</h6>
            <h4>1</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-summary">
            <h6>Dalam Proses</h6>
            <h4>0</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-summary">
            <h6>Total Pesanan</h6>
            <h4>1</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-summary">
            <h6>Pendapatan Total</h6>
            <h4>Rp 0</h4>
          </div>
        </div>
      </div>

      <!-- Pendapatan & Inventory -->
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <div class="card p-3">
            <h6>Pendapatan Hari Ini</h6>
            <p class="text-success fw-bold mb-1">Rp 0</p>
            <small class="text-muted">Dari 0 pesanan selesai hari ini</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card p-3">
            <h6><b>Inventory</b></h6>
            <p class="mb-1">Produk Tersedia <span class="badge bg-success">4 / 4</span></p>
            <p>Jasa Aktif <span class="badge bg-success">4 / 4</span></p>
          </div>
        </div>
      </div>

      <!-- Pesanan Terbaru -->
      <div class="card p-3 mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h6 class="mb-0">Pesanan Terbaru</h6>
          <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Lihat Semua</a>
        </div>
        <div class="p-3 rounded bg-light border">
          <div class="d-flex justify-content-between">
            <div>
              <strong>ORD-849267</strong>
              <p class="text-muted mb-0">aca · 1 item</p>
            </div>
            <div class="text-end">
              <span class="text-primary fw-bold">Rp 11.000</span><br>
              <span class="badge bg-warning text-dark">Baru</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Actions -->
      <div class="row g-3">
        <div class="col-md-4">
          <div class="card card-action text-center p-3">
            <i class="bi bi-box-seam fs-3 text-primary"></i>
            <h6 class="mt-2">Kelola Produk</h6>
            <small>Tambah, edit, atau hapus produk</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-action text-center p-3">
            <i class="bi bi-gear fs-3 text-primary"></i>
            <h6 class="mt-2">Kelola Jasa</h6>
            <small>Atur jasa dan harga layanan</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-action text-center p-3">
            <i class="bi bi-graph-up fs-3 text-primary"></i>
            <h6 class="mt-2">Analitik & Keuangan</h6>
            <small>Lihat laporan penjualan</small>
          </div>
        </div>
      </div>
    </main>
  </div>
@endsection