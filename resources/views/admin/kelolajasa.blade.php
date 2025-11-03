@extends('layouts.dashboardadmin')

@section('title', 'Kelola Jasa - SiRoma')

@section('content')
  <!-- Sidebar -->
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

  <!-- Konten Utama -->
  <main class="main-content">

<!-- Baris judul + tombol tambah -->

<!-- Search bar di atas -->
<div class="search-section">
  <div class="search-box">
    <input type="text" placeholder="Search........">
    <button type="submit">🔍</button>
  </div>
</div>


<div class="product-header">
    <h1 class="title">📦 <b>Kelola Jasa</b></h1>
</div>

    <!-- Kartu Jasa -->
    <div class="service-card d-flex align-items-start">
      <div class="image-placeholder"></div>
      <div class="service-info">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="fw-bold">Banner <span class="badge bg-light text-dark">Cetak Besar</span></h5>
          <div class="d-flex align-items-center gap-2">
            <span class="text-secondary">Tersedia</span>
            <label class="switch">
              <input type="checkbox" checked>
              <span class="slider"></span>
            </label>
          </div>
        </div>
        <p class="text-muted mb-2">Cetak banner berkualitas tinggi dengan berbagai ukuran</p>

        <div class="row">
          <div class="col-md-6">
            <strong>Ukuran/Paket</strong>
            <p class="mb-0">1x2 meter — <span class="text-success">Rp 70.000</span></p>
            <p class="mb-0">2x2 meter — <span class="text-success">Rp 100.000</span></p>
            <p class="mb-0">3x2 meter — <span class="text-success">Rp 120.000</span></p>
          </div>
          <div class="col-md-6">
            <strong>Bahan</strong>
            <p class="mb-0">Art Paper — <span class="text-success">+ Rp 0</span></p>
            <p class="mb-0">Jasmine — <span class="text-success">+ Rp 50.000</span></p>
            <p class="mb-0">Premium Linen — <span class="text-success">+ Rp 100.000</span></p>
          </div>
        </div>

        <div class="mt-3">
          <button class="btn btn-outline-primary btn-sm me-2 add-product-btn" data-bs-toggle="modal" data-bs-target="#modalTambahProduk"> Edit Jasa </button>
        </div>
      </div>
    </div>

<!-- Modal Tambah Produk -->
<div class="modal fade" id="modalTambahProduk" tabindex="-1" aria-labelledby="modalTambahProdukLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-3 rounded-4">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold mx-auto" id="modalTambahProdukLabel">Edit Jasa</h5>
      </div>

      <div class="modal-body">
        <form>
          <!-- Nama Produk -->
          <div class="mb-3">
            <label class="form-label">Nama Jasa</label>
            <input type="text" class="form-control rounded-3" placeholder="Contoh: Pena Gel">
          </div>

          <!-- Deskripsi -->
          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control rounded-3" placeholder="Deskripsi Produk....."></textarea>
          </div>

          <!-- Kategori dan Upload -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label">Kategori</label>
              <input type="text" class="form-control rounded-3" placeholder="Alat Tulis">
            </div>
            <div class="col-md-6">
              <label class="form-label">Upload Gambar</label>
              <input type="file" class="form-control rounded-3">
            </div>
          </div>

          <!-- Switch tersedia -->
          <div class="form-check form-switch mb-4">
            <input class="form-check-input" type="checkbox" id="tersediaSwitch" checked>
            <label class="form-check-label" for="tersediaSwitch">Tersedia</label>
          </div>

          <!-- Varian Produk -->
          <div class="mb-3">
            <label class="form-label">Varian Jasa</label>
            <div class="d-flex gap-2 mb-2">
              <input type="text" class="form-control rounded-3" placeholder="Standard">
              <input type="number" class="form-control rounded-3" placeholder="0">
            </div>
            <button type="button" class="btn btn-outline-primary btn-sm rounded-pill">
              + Tambah Varian
            </button>
          </div>
        </form>
      </div>
  </main>
@endsection