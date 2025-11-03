<aside class="sidebar">
    <div class="sidebar-logo">
        <div class="logo-circle">
            <span class="logo-text-sidebar">IR</span>
        </div>
        <span class="logo-subtitle">FOTOCOPY ROMA</span>
    </div>
    
    <nav class="sidebar-nav">
        <a href="{{ route('dashboard') }}" class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
            </svg>
            <span>Dashboard</span>
        </a>
        
        <a href="{{ route('dashboard.katalog') }}" class="nav-item {{ request()->routeIs('dashboard.katalog') ? 'active' : '' }}">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20 7H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2z"/>
                <path d="M9 22v-8h6v8M2 7v15h20V7"/>
            </svg>
            <span>Katalog</span>
        </a>
        
        <a href="{{ route('dashboard.si-bot') }}" class="nav-item {{ request()->routeIs('dashboard.si-bot') ? 'active' : '' }}">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="11" width="18" height="10" rx="2"/>
                <circle cx="12" cy="5" r="2"/>
                <path d="M12 7v4"/>
                <line x1="8" y1="16" x2="8" y2="16"/>
                <line x1="16" y1="16" x2="16" y2="16"/>
            </svg>
            <span>Si Bot</span>
        </a>
        
        <a href="{{ route('dashboard.lacak-pesanan') }}" class="nav-item {{ request()->routeIs('dashboard.lacak-pesanan') ? 'active' : '' }}">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="8.5" cy="7" r="4"/>
                <polyline points="17 11 19 13 23 9"/>
            </svg>
            <span>Lacak Pesanan</span>
        </a>
        
        <a href="{{ route('dashboard.keranjang') }}" class="nav-item {{ request()->routeIs('dashboard.keranjang') ? 'active' : '' }}">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
                <polyline points="10 9 9 9 8 9"/>
            </svg>
            <span>Keranjang</span>
        </a>
        
        <a href="#" class="nav-item nav-keluar" id="btnKeluar">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
            <span>Keluar</span>
        </a>
    </nav>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnKeluar = document.getElementById('btnKeluar');
        if (btnKeluar) {
            btnKeluar.addEventListener('click', function(e) {
                e.preventDefault();
                
                if (confirm('Apakah Anda yakin ingin keluar dari dashboard?')) {
                    sessionStorage.removeItem('isDashboard');
                    localStorage.removeItem('chatDraft');
                    window.location.href = '/';
                }
            });
        }
    });
</script>