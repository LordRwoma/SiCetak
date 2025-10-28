<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katalog | SiRoma</title>

  <!-- Font & Icon -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="{{ asset('asset/css/katalog.css') }}">
</head>

<body>

  <div class="catalog-container">
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="logo-section">
        <img src="{{ asset('asset/image/logo.png') }}" alt="Logo" class="logo-img">
        <h3>SiRoma</h3>
      </div>
      <nav class="menu">
        <a href="#" class="menu-item active"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="#" class="menu-item"><i class="fa-solid fa-store"></i> Katalog</a>
        <a href="#" class="menu-item"><i class="fa-solid fa-robot"></i> SiBot</a>
        <a href="#" class="menu-item"><i class="fa-solid fa-cart-shopping"></i> Keranjang</a>
        <a href="#" class="menu-item"><i class="fa-solid fa-right-from-bracket"></i> Keluar</a>
      </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
      <!-- HEADER -->
      <div class="header-katalog">
        <h2>Katalog</h2>
        <i class="fa-solid fa-cart-shopping icon-cart"></i>
      </div>

      <!-- SEARCH & FILTER -->
      <div class="search-filter-container">
        <div class="search-bar">
          <input type="text" placeholder="Cari produk atau jasa...">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <button class="btn-filter">
          <i class="fa-solid fa-sliders"></i> Filter Pencarian
        </button>
      </div>

      <!-- KATEGORI -->
      <section class="kategori-section">
        <h3 class="kategori-title">Kategori</h3>
        <div class="kategori-list">
          <div class="kategori-item active">
            <img src="{{ asset('asset/image/trending.png') }}" alt="Banner">
          </div>
          <div class="kategori-item">
            <span>Alat Tulis</span>
          </div>
          <div class="kategori-item">
            <span>Laminating</span>
          </div>
          <div class="kategori-item">
            <span>Undangan</span>
          </div>
          <div class="kategori-item">
            <span>Card Case</span>
          </div>
          <div class="kategori-item">
            <span>Map</span>
          </div>
          <div class="kategori-item">
            <span>dll</span>
          </div>
        </div>
      </section>

      <!-- KATALOG JASA -->
      <section class="katalog-wrapper">
        <div class="header-row">
          <h3>Katalog Jasa</h3>
          <a href="#" class="lihat-semua">Lihat Semua</a>
        </div>

        <div class="katalog-grid">
          <div class="katalog-card">
            <img src="{{ asset('asset/image/Banner.png') }}" alt="Banner">
            <div class="nama-produk">Banner</div>
            <div class="harga">Rp 11.000</div>
          </div>
          <div class="katalog-card">
            <img src="{{ asset('asset/image/invoice.png') }}" alt="Invoice">
            <div class="nama-produk">Invoice</div>
            <div class="harga">Rp 12.000</div>
          </div>
          <div class="katalog-card">
            <img src="{{ asset('asset/image/kalkulator.png') }}" alt="Kalkulator">
            <div class="nama-produk">Kalkulator</div>
            <div class="harga">Rp 10.000</div>
          </div>
          <div class="katalog-card">
            <img src="{{ asset('asset/image/gelembungchat.png') }}" alt="Chat">
            <div class="nama-produk">Poster</div>
            <div class="harga">Rp 15.000</div>
          </div>
        </div>
      </section>

      <!-- KATALOG PRODUK -->
      <section class="katalog-wrapper">
        <div class="header-row">
          <h3>Katalog Produk</h3>
          <a href="#" class="lihat-semua">Lihat Semua</a>
        </div>

        <div class="katalog-grid">
          <div class="katalog-card">
            <img src="{{ asset('asset/image/book.png') }}" alt="Buku">
            <div class="nama-produk">Buku</div>
            <div class="harga">Rp 10.000</div>
          </div>
          <div class="katalog-card">
            <img src="{{ asset('asset/image/pena.png') }}" alt="Pena">
            <div class="nama-produk">Pena</div>
            <div class="harga">Rp 5.000</div>
          </div>
          <div class="katalog-card">
            <img src="{{ asset('asset/image/pensil.png') }}" alt="Pensil">
            <div class="nama-produk">Pensil</div>
            <div class="harga">Rp 3.000</div>
          </div>
          <div class="katalog-card">
            <img src="{{ asset('asset/image/map.png') }}" alt="Map">
            <div class="nama-produk">Map</div>
            <div class="harga">Rp 7.000</div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- CHAT BUTTON -->
  <div class="chat-button">
    <img src="{{ asset('asset/image/gelembungchat.png') }}" alt="Chat">
  </div>

</body>
</html>
