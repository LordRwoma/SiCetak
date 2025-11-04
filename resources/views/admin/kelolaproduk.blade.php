@extends('layouts.dashboardadmin')

@section('title', 'Kelola Produk - SiRoma')

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

  <main class="main-content">
<!-- Search bar di atas -->
<div class="search-section">
  <div class="search-box">
    <input type="text" placeholder="Search........">
    <button type="submit">🔍</button>
  </div>
</div>

<!-- Baris judul + tombol tambah -->
<div class="product-header">
    <h1 class="title">📦 <b>Kelola Produk</b></h1>
    <button class="add-product-btn" data-bs-toggle="modal" data-bs-target="#modalTambahProduk">
        + Tambah Produk
    </button>
</div>

<!-- Modal Tambah Produk -->
<div class="modal fade" id="modalTambahProduk" tabindex="-1" aria-labelledby="modalTambahProdukLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-3 rounded-4">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold mx-auto" id="modalTambahProdukLabel">Tambah Produk Baru</h5>
      </div>

      <div class="modal-body">
        <form>
          <!-- Nama Produk -->
          <div class="mb-3">
            <label class="form-label">Nama Produk</label>
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
            <label class="form-label">Varian Produk</label>
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

      <div class="modal-footer border-0 justify-content-end">
        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary rounded-pill">Tambah</button>
      </div>
    </div>
  </div>
</div>


    <div class="product-grid">
      <div class="product-card">
        <div class="image-placeholder"></div>
        <div class="product-info">
          <span class="tag">Alat Tulis</span>
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
          <p class="status">Tersedia</p>
          <h3>Pena Gel</h3>
          <p class="desc">Pena gel berkualitas tinggi dengan tinta halus</p>
          <div class="price">
            <p>Hitam <span>Rp 5.000</span></p>
            <p>Merah <span>Rp 6.000</span></p>
          </div>
          <div class="buttons">
            <button>Edit</button>
            <button>Varian</button>
          </div>
        </div>
      </div>

      <!-- duplikat kartu lain -->
      <div class="product-card">
        <div class="image-placeholder"></div>
        <div class="product-info">
          <span class="tag">Alat Tulis</span>
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
          <p class="status">Tersedia</p>
          <h3>Pena Gel</h3>
          <p class="desc">Pena gel berkualitas tinggi dengan tinta halus</p>
          <div class="price">
            <p>Hitam <span>Rp 5.000</span></p>
            <p>Merah <span>Rp 6.000</span></p>
          </div>
          <div class="buttons">
            <button>Edit</button>
            <button>Varian</button>
          </div>
        </div>
      </div>

            <!-- duplikat kartu lain -->
      <div class="product-card">
        <div class="image-placeholder"></div>
        <div class="product-info">
          <span class="tag">Alat Tulis</span>
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
          <p class="status">Tersedia</p>
          <h3>Pena Gel</h3>
          <p class="desc">Pena gel berkualitas tinggi dengan tinta halus</p>
          <div class="price">
            <p>Hitam <span>Rp 5.000</span></p>
            <p>Merah <span>Rp 6.000</span></p>
          </div>
          <div class="buttons">
            <button>Edit</button>
            <button>Varian</button>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection