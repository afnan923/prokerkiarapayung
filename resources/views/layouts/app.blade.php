<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Kiara Payung - @yield('title')</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
</head>
<body class="{{ request()->routeIs('home') ? 'home-page' : '' }}">
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-brand">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Kiara Payung" style="height: 40px; margin-right: 10px; vertical-align: middle;">
                Kiara Payung
            </a>
            <div class="nav-links">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang Desa</a>
                <a href="{{ route('infografis') }}" class="{{ request()->routeIs('infografis') ? 'active' : '' }}">Infografis</a>
                <a href="{{ route('berita') }}" class="{{ request()->routeIs('berita') ? 'active' : '' }}">Berita Desa</a>
                <a href="{{ route('umkm') }}" class="{{ request()->routeIs('umkm') ? 'active' : '' }}">UMKM Desa</a>
                <a href="{{ route('stunting') }}" class="{{ request()->routeIs('stunting') ? 'active' : '' }}">Cegah Stunting</a>
                <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a>
            </div>
            <button class="mobile-menu-btn" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <h3>Desa Kiara Payung</h3>
                <p>Website resmi profil Desa Kiara Payung, menyajikan informasi terkini, potensi desa, dan layanan publik.</p>
            </div>
            <div class="footer-links">
                <h4>Tautan Cepat</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang Desa</a></li>
                    <li><a href="{{ route('berita') }}">Berita Desa</a></li>
                    <li><a href="{{ route('umkm') }}">UMKM Desa</a></li>
                    <li><a href="{{ route('stunting') }}">Cegah Stunting</a></li>
                    <li><a href="{{ route('infografis') }}">Infografis</a></li>
                    <li><a href="{{ route('layanan') }}">Layanan</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Kontak</h4>
                <p>Email: info@kiarapayung.desa.id</p>
                <p>Telepon: +62 812 3456 7890</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Desa Kiara Payung. All rights reserved.</p>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('show');
        }
    </script>
</body>
</html>
