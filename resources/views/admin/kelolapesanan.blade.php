@extends('layouts.dashboardadmin')

@section('title', 'Kelola Pesanan - SiRoma')

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

  <!-- Main Content -->
  <div class="main-content">
    <div class="search-container">
      <input type="text" placeholder="Search........">
      <button>🔍</button>
    </div>

    <div class="page-header">
      <div class="title-with-icon">
        <div class="icon-box">🛍️</div>
        <h1>Kelola Pesanan</h1>
      </div>
    </div>

<div class="tabs">
  <button class="tab active" onclick="showTab('baru')">Pesanan Baru </button>
  <button class="tab" onclick="showTab('proses')">Di Proses</button>
  <button class="tab" onclick="showTab('ambil')">Siap Diambil</button>
  <button class="tab" onclick="showTab('selesai')">Selesai</button>
</div>

    <!-- Tab: Pesanan Baru -->
    <div id="tab-baru" class="tab-content active">
      <div class="order-card">
        <div class="order-info">
          <h6>ORD-849268</h6>
          <p>Pelanggan: <b>Acaca</b> | 082335897112</p>
          <p><small>1 item • 21/10/2025</small></p>
          <p>Total: <span class="text-success">Rp 11.000</span> (Cash)</p>
        </div>
        <div class="order-buttons">
          <button class="btn btn-primary">Detail Pesanan</button>
          <button class="btn btn-success">Proses Pesanan</button>
          <button class="btn btn-danger">Hapus</button>
        </div>
      </div>
      <div class="order-card">
        <div class="order-info">
          <h6>ORD-732194</h6>
          <p>Pelanggan: <b>Budi</b> | 085233918222</p>
          <p><small>2 item • 22/10/2025</small></p>
          <p>Total: <span class="text-success">Rp 25.000</span> (Transfer)</p>
        </div>
        <div class="order-buttons">
          <button class="btn btn-primary">Detail Pesanan</button>
          <button class="btn btn-success">Proses Pesanan</button>
          <button class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>

    <!-- Tab: Di Proses -->
    <div id="tab-proses" class="tab-content">
      <div class="order-card">
        <div class="order-info">
          <h6>ORD-545213</h6>
          <p>Pelanggan: <b>Citra</b> | 082332233888</p>
          <p><small>3 item • 20/10/2025</small></p>
          <p>Total: <span class="text-success">Rp 40.000</span></p>
        </div>
        <div class="order-buttons">
          <button class="btn btn-primary">Detail</button>
          <button class="btn btn-success">Tandai Siap Diambil</button>
        </div>
      </div>
    </div>

    <!-- Tab: Siap Diambil -->
    <div id="tab-ambil" class="tab-content">
      <div class="order-card">
        <div class="order-info">
          <h6>ORD-219938</h6>
          <p>Pelanggan: <b>Dewi</b> | 081234567891</p>
          <p><small>1 item • 19/10/2025</small></p>
          <p>Total: <span class="text-success">Rp 30.000</span></p>
        </div>
        <div class="order-buttons">
          <button class="btn btn-primary">Detail</button>
          <button class="btn btn-success">Tandai Selesai</button>
        </div>
      </div>
    </div>

    <!-- Tab: Selesai -->
    <div id="tab-selesai" class="tab-content">
      <div class="order-card">
        <div class="order-info">
          <h6>ORD-110004</h6>
          <p>Pelanggan: <b>Eko</b> | 085123456789</p>
          <p><small>2 item • 18/10/2025</small></p>
          <p>Total: <span class="text-success">Rp 50.000</span></p>
        </div>
        <div class="order-buttons">
          <button class="btn btn-primary">Lihat Detail</button>
        </div>
      </div>
    </div>
  </main>
@endsection