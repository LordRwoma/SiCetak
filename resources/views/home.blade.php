@extends('layouts.app')

@section('title', 'SiRoma - Cetak Instan Bebas Antrean')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <span class="hero-badge">Mulai Sekarang</span>
                <h1 class="hero-title">
                    Si Roma Ahlinya<br>
                    <span class="hero-highlight">Cetak Instan Bebas Antrean</span>
                </h1>
                <p class="hero-description">
                    Memperkenalkan sebuah aplikasi yang dapat membantu Anda mengirim file digital ke mesin cetak fotokopi
                    secara instan tanpa perlu menunggu dan membawa Flashdisk!
                </p>

                <!-- Tombol utama -->
                <div class="hero-buttons">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">
                        Belanja Sekarang
                    </a>
                    <a href="https://wa.me/6281234567890?text=Halo%20Admin%20SiRoma%2C%20saya%20ingin%20bertanya"
                        target="_blank" class="btn btn-secondary">
                        Hubungi Kami
                    </a>
                </div>

                <!-- Sosial Media -->
                <div class="hero-social">
                    <span class="social-label">Ikuti Sosmed Kami</span>
                    <div class="social-links-hero">
                        <a href="https://instagram.com" target="_blank" class="social-link-hero">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="#000000ff">
                                <path
                                    d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5A4.25 4.25 0 0 0 20.5 16.25v-8.5A4.25 4.25 0 0 0 16.25 3.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zm5.25-.88a.88.88 0 1 1 0 1.76.88.88 0 0 1 0-1.76z" />
                            </svg>
                            <span>Instagram</span>
                        </a>

                        <a href="https://facebook.com" target="_blank" class="social-link-hero">
                            <!-- Facebook icon -->
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12S0 5.446 0 12.073c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953h-1.514c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                            <span>Facebook</span>
                        </a>

                        <a href="https://wa.me/6285755173739" target="_blank" class="social-link-hero">
                            <!-- WhatsApp icon -->
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                            </svg>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <img src="{{ asset('images/printer-machine.png') }}" alt="Mesin Printer">
            </div>
        </div>
    </section>

    <!-- Chat Bot Section -->
    <section class="chatbot-section">
        <div class="chatbot-container">
            <div class="chatbot-image">
                <img src="{{ asset('images/chatbot-illustration.png') }}" alt="Chatbot Illustration">
            </div>
            <div class="chatbot-content">
                <span class="section-badge">Informasi Dashboard</span>
                <h2 class="section-title">
                    Butuh Bantuan?<br>
                    <span class="section-highlight">Chat dengan SiBot!</span>
                </h2>
                <p class="section-description">
                    Akses mudah ke panduan lengkap aplikasi melalui dashboard. SiBot siap membantu Anda 24/7!
                </p>

                <div class="features-grid">
                    <div class="feature-card">
                        <h3 class="feature-title">Respon Jawab INSTAN</h3>
                    </div>
                    <div class="feature-card">
                        <h3 class="feature-title">Informasi Efisiensi Lengkap</h3>
                    </div>
                    <div class="feature-card">
                        <h3 class="feature-title">Lihat Invoices</h3>
                    </div>
                    <div class="feature-card">
                        <h3 class="feature-title">Hubungi Admin</h3>
                    </div>
                </div>

                <a href="{{ route('dashboard.si-bot') }}" class="btn btn-primary">Mulai Chat</a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="testimonial-container">
            <span class="section-badge">Testimoni Kami</span>
            <h2 class="section-title">
                Apa Kata Mereka Tentang <span class="section-highlight">SiRoma?</span>
            </h2>
            <p class="section-description">
                Pendapat pengguna tentang pengalaman menggunakan SiRoma.
            </p>

            <div class="testimonial-slider">
                <div class="testimonial-card">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                        Layanan SiBot sangat membantu atas penjelasan yang diberikan. Aplikasi mudah digunakan, UI/UX-nya
                        juga friendly.
                    </p>
                    <div class="testimonial-author">
                        <strong>Kefin Rico</strong>
                        <span>Mahasiswa</span>
                    </div>
                </div>

                <div class="testimonial-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>
    </section>

    <script>
        function masukDashboard() {
            window.location.href = "{{ route('dashboard') }}";
        }
    </script>
@endsection