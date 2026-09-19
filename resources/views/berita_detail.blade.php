@extends('layouts.app')

@section('title', $berita['judul'] . ' - Berita Desa')

@section('content')
<div class="page-header">
    <div class="container" style="display: flex; flex-direction: column; align-items: center;">
        <div style="margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; gap: 1rem;">
            <a href="{{ route('berita') }}" style="background-color: var(--primary-color); color: white; width: 32px; height: 32px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; text-decoration: none; font-size: 1.2rem; font-weight: bold; box-shadow: var(--shadow-sm); transition: transform 0.2s;" title="Kembali ke Berita" onmouseover="this.style.transform='translateX(-3px)'" onmouseout="this.style.transform='translateX(0)'">
                &larr;
            </a>
            <span style="background: var(--primary-color); color: white; padding: 0.3rem 0.8rem; border-radius: 99px; font-size: 0.9rem; font-weight: bold; text-transform: uppercase;">
                {{ $berita['kategori'] }}
            </span>
        </div>
        <h1>{{ $berita['judul'] }}</h1>
        <div style="display: flex; gap: 1.5rem; font-size: 0.95rem; color: var(--text-muted); justify-content: center; margin-top: 1rem;">
            <span><i class="fas fa-map-marker-alt"></i> {{ $berita['lokasi'] }}</span>
            <span><i class="fas fa-calendar-alt"></i> {{ $berita['tanggal'] }}</span>
        </div>
    </div>
</div>

<div class="container content-section" style="max-width: 900px; margin: 4rem auto;">
    <div class="card" style="padding: 0; overflow: hidden; border: none; box-shadow: var(--shadow-lg); margin-bottom: 3rem;">
        <img src="{{ asset('images/' . $berita['foto']) }}" alt="{{ $berita['judul'] }}" style="width: 100%; height: auto; max-height: 500px; object-fit: cover; display: block;">
    </div>
    <style>
        .berita-content p {
            text-align: justify;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }
        .berita-content ul.styled-list {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        .berita-content li {
            margin-bottom: 0.5rem;
            text-align: justify;
            line-height: 1.8;
        }
        .share-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.6rem 1.2rem;
            border-radius: 99px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: transform 0.2s, opacity 0.2s;
        }
        .share-btn:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }
        .share-fb { background-color: #1877F2; }
        .share-x { background-color: #000000; }
        .share-wa { background-color: #25D366; }
        .share-ig { background-color: #E1306C; }
    </style>
    
    <div class="berita-content" style="font-size: 1.1rem; color: var(--text-color);">
        {!! $berita['isi'] !!}
    </div>
    
    <!-- Bagian Share -->
    <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--border-color); text-align: center;">
        <p style="font-weight: bold; margin-bottom: 1.5rem; color: var(--text-muted);">Bagikan ke</p>
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <!-- Facebook -->
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="share-btn share-fb">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.597 0 0 .597 0 1.325v21.351C0 23.403.597 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.597 1.323-1.324V1.325C24 .597 23.403 0 22.675 0z"/></svg>
                Facebook
            </a>
            
            <!-- X / Twitter -->
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($berita['judul']) }}" target="_blank" rel="noopener noreferrer" class="share-btn share-x">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                X
            </a>
            
            <!-- WhatsApp -->
            <a href="https://api.whatsapp.com/send?text={{ urlencode($berita['judul'] . ' - ' . url()->current()) }}" target="_blank" rel="noopener noreferrer" class="share-btn share-wa">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M11.996 0C5.372 0 0 5.373 0 12c0 2.113.553 4.153 1.597 5.96L.108 23.856l6.046-1.585C7.892 23.327 9.912 24 11.996 24 18.623 24 24 18.627 24 12c0-6.627-5.377-12-12.004-12zM12 22.006c-1.782 0-3.522-.48-5.045-1.385l-.36-.214-3.754.985.998-3.663-.235-.373A9.99 9.99 0 0 1 2 12c0-5.514 4.486-10 10-10s10 4.486 10 10-4.486 10-10 10.006zm5.545-7.56c-.304-.152-1.796-.887-2.073-.988-.277-.101-.48-.152-.682.152-.202.304-.783.988-.96 1.19-.177.203-.354.228-.658.076-1.464-.73-2.585-1.458-3.535-3.05-.202-.34.202-.303.497-.893.101-.202.05-.379-.025-.531-.076-.152-.682-1.646-.935-2.253-.246-.593-.497-.513-.682-.522-.177-.01-.38-.01-.582-.01-.202 0-.53.076-.809.38-.278.304-1.06 1.037-1.06 2.531 0 1.493 1.087 2.936 1.238 3.14.152.202 2.14 3.264 5.184 4.577.723.312 1.288.498 1.728.638.726.231 1.386.198 1.905.12.583-.087 1.796-.733 2.048-1.442.253-.709.253-1.316.177-1.442-.075-.127-.278-.203-.581-.355z"/></svg>
                WhatsApp
            </a>
            
            <!-- Instagram -->
            <a href="javascript:void(0)" onclick="copyLink()" class="share-btn share-ig">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                Instagram
            </a>
        </div>
        <p id="copy-msg" style="display: none; color: #10b981; margin-top: 1rem; font-size: 0.9rem;">Link berita berhasil disalin ke clipboard!</p>
    </div>
    
    <script>
        function copyLink() {
            navigator.clipboard.writeText(window.location.href).then(function() {
                var msg = document.getElementById('copy-msg');
                msg.style.display = 'block';
                setTimeout(function() {
                    msg.style.display = 'none';
                }, 3000);
            });
        }
    </script>
    
    <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
        <p style="margin: 0; font-weight: bold; color: var(--primary-color);">Berita Desa Kiara Payung</p>
        <a href="{{ route('berita') }}" class="btn" style="background-color: var(--primary-color); color: white; padding: 0.6rem 1.2rem; border-radius: var(--radius-md); text-decoration: none; font-weight: bold; transition: background-color 0.3s;">
            &larr; Kembali ke Berita
        </a>
    </div>
</div>
@endsection
