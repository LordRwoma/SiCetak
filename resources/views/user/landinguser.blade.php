<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SiBot Landing</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
</head>

<body>

  <!-- ===== NAVBAR ===== -->
  <header class="navbar">
    <div class="nav-container">
      <img src="{{ asset('asset/image/logopage.png') }}" class="logo" alt="Logo SiBot" />
      <ul class="nav-menu">
        <li><a href="#home">Beranda</a></li>
        <li><a href="#chatbot">Chatbot</a></li>
        <li><a href="#testimoni">Testimoni</a></li>
        <li><a href="#footer">Kontak</a></li>
      </ul>
    </div>
  </header>

  <!-- ===== LANDING SECTION ===== -->
  <section id="home" class="landing">
    <div class="landing-left">
      <h1>Temukan Kemudahan Bersama <span>SiBot</span></h1>
      <p>Teman digital yang siap membantu kamu dalam setiap langkah. Yuk, mulai obrolan dengan SiBot sekarang!</p>
      <button class="btn-primary">Masuk App</button>
    </div>
    <div class="landing-right">
      <img src="{{ asset('asset/image/Sibot.png') }}" class="sibot-img" alt="Sibot" />
      <img src="{{ asset('asset/image/Bayangan.png') }}" class="shadow" alt="Bayangan" />
    </div>
    <div class="icon-row">
      <img src="{{ asset('asset/image/tandatanya.png') }}" alt="Tanya" />
      <img src="{{ asset('asset/image/invoice.png') }}" alt="Invoice" />
      <img src="{{ asset('asset/image/kalkulator.png') }}" alt="Kalkulator" />
      <img src="{{ asset('asset/image/trending.png') }}" alt="Trending" />
    </div>
  </section>

  <!-- ===== CHATBOT SECTION ===== -->
  <section id="chatbot" class="chatbot-section">
    <div class="chatbox">
      <div class="chat-header">Chat dengan SiBot</div>
      <div class="chat-body">
        <div class="bot-msg">
          <img src="{{ asset('asset/image/gelembungchat.png') }}" />
          <p>Hai! Ada yang bisa SiBot bantu hari ini?</p>
        </div>
        <div class="user-msg"><p>Tolong jelaskan fitur utama kamu.</p></div>
        <div class="bot-msg"><p>SiBot bisa bantu cari informasi, catat tugas, dan kasih rekomendasi cepat!</p></div>
      </div>
      <div class="chat-input">
        <input type="text" placeholder="Ketik pesan..." />
        <button>Kirim</button>
      </div>
    </div>
  </section>

  <!-- ===== TESTIMONI ===== -->
  <section id="testimoni" class="testimoni">
    <h2>Testimoni Pengguna</h2>
    <div class="testimoni-container">
      <div class="testi-card">
        <img src="{{ asset('asset/image/Facebook.png') }}" />
        <p>"SiBot sangat membantu saya mencari informasi penting!"</p>
        <h4>@andi.fb</h4>
      </div>
      <div class="testi-card">
        <img src="{{ asset('asset/image/Instagram.png') }}" />
        <p>"Desainnya keren, responsnya cepat. Mantap!"</p>
        <h4>@lina.ig</h4>
      </div>
      <div class="testi-card">
        <img src="{{ asset('asset/image/medsosLine.png') }}" />
        <p>"Serasa ngobrol sama asisten pribadi beneran."</p>
        <h4>@rizky.line</h4>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer id="footer" class="footer">
    <img src="{{ asset('asset/image/bayangancopyright.png') }}" class="footer-bg" />
    <div class="footer-content">
      <div class="footer-left">
        <img src="{{ asset('asset/image/logopage.png') }}" alt="Logo" />
        <p>© 2025 SiBot. All Rights Reserved.</p>
      </div>
      <div class="footer-right">
        <a href="#"><img src="{{ asset('asset/image/Facebook.png') }}" /></a>
        <a href="#"><img src="{{ asset('asset/image/Instagram.png') }}" /></a>
        <a href="#"><img src="{{ asset('asset/image/medsosLine.png') }}" /></a>
        <a href="#"><img src="{{ asset('asset/image/WhatsApp.png') }}" /></a>
      </div>
    </div>
  </footer>

</body>
</html>
