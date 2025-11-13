<!-- resources/views/partials/header.blade.php -->
<header class="header-fixed">
    <div class="header-container">
        <div class="logo">
            <a href="{{ route('home') }}" style="text-decoration: none;">
                <span class="logo-text">SIROMA</span>
            </a>
        </div>
        <button class="btn-masuk-app" id="btnMasukApp">Masuk App</button>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnMasukApp = document.getElementById('btnMasukApp');
        if (btnMasukApp) {
            btnMasukApp.addEventListener('click', function() {
                sessionStorage.setItem('isDashboard', 'true');
                window.location.href = '/dashboard';
            });
        }
    });
</script>