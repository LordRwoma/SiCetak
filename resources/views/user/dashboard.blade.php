<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | SiRoma</title>
  <link rel="stylesheet" href="{{ asset('asset/css/dashboard.css') }}">
  <link rel="icon" href="{{ asset('asset/image/logo.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-header">
      <img src="{{ asset('asset/image/logo.png') }}" alt="Logo" class="sidebar-logo">
      <h2 class="sidebar-title">SiRoma</h2>
    </div>

    <ul class="sidebar-menu">
      <li class="active"><i class="fa-solid fa-house"></i> Dashboard</li>
      <li><i class="fa-solid fa-list"></i> 
        <a href="{{ route(name: 'katalog') }}"> Katalog
        </a></li>
      <li><i class="fa-solid fa-robot"></i> SiBot</li>
      <li><i class="fa-solid fa-box"></i> Lacak Pesanan</li>
      <li><i class="fa-solid fa-cart-shopping"></i> Keranjang</li>
      <li><i class="fa-solid fa-right-from-bracket"></i> Keluar</li>
    </ul>
  </aside>

  <!-- Main Content -->
  <section class="main-content">
    <header class="topbar">
      <h1 class="title">Dashboard</h1>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
      <img src="{{ asset('asset/image/admin.png') }}" alt="Admin" class="admin-pic">
    </header>

    <!-- Banner -->
    <div class="banner-box">
      <div class="banner-left">
        <h2>Cetak Instan, <br> Bebas Antrean.</h2>
        <p>Pesan layanan cetak dokumen, banner, dan kebutuhan printing lainnya secara online tanpa antre.</p>
        <button class="btn-pesan">Pesan Sekarang</button>
      </div>
      <div class="banner-right">
        <img src="{{ asset('asset/image/Bayangan.png') }}" alt="Bayangan" class="bayangan-img">
      </div>
    </div>

    <!-- Katalog Jasa -->
    <section class="katalog-section">
      <div class="katalog-header">
        <h3>Katalog Jasa</h3>
        <a href="#" class="lihat-semua">Lihat Semua <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="katalog-grid">
        @for($i=0; $i<6; $i++)
        <div class="katalog-card">
          <img src="{{ asset('asset/image/banner.png') }}" alt="Banner">
          <p class="nama-produk">Banner</p>
          <span class="harga">Rp11.000</span>
        </div>
        @endfor
      </div>
    </section>

    <!-- Katalog Produk -->
    <section class="katalog-section">
      <div class="katalog-header">
        <h3>Katalog Produk</h3>
        <a href="#" class="lihat-semua">Lihat Semua <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="katalog-grid">
        @for($i=0; $i<6; $i++)
        <div class="katalog-card">
          <img src="{{ asset('asset/image/invoice.png') }}" alt="Produk">
          <p class="nama-produk">Banner</p>
          <span class="harga">Rp10.000</span>
        </div>
        @endfor
      </div>
    </section>

  </section>

  <!-- Chat Bubble -->
  <div class="chat-button">
    <img src="{{ asset('asset/image/gelembungchat.png') }}" alt="Chat">
  </div>

</body>
</html>
