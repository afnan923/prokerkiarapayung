@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero-section hero-home" id="hero-slider" style="background-image: url('{{ asset('images/hero_kiara_payung.png') }}'); background-position: center; transition: background-image 0.6s ease-in-out, background-position 0.6s ease-in-out;">
    <div class="hero-overlay"></div>
    <div class="hero-content-new container">
        <h1 class="fade-in-up">DESA<br>KIARAPAYUNG</h1>
        
        <!-- Pagination / vertical nav on the right -->
        <div class="hero-pagination fade-in-up" id="hero-pagination">
            <span class="active" data-index="0">01</span>
            <span class="line"></span>
            <span data-index="1">02</span>
            <span data-index="2">03</span>
            <span data-index="3">04</span>
        </div>
        
        <!-- Bottom blurbs -->
        <div class="hero-blurbs fade-in-up delay-1">
            <div class="blurb">
                <p>Desa Kiarapayung adalah desa maju yang menjunjung tinggi nilai budaya dan kesejahteraan masyarakat.</p>
            </div>
            <div class="blurb">
                <p>Terletak di kawasan strategis, desa ini memiliki potensi unggulan di bidang pertanian dan UMKM.</p>
            </div>
            <div class="blurb">
                <p>Kami berkomitmen memberikan pelayanan publik terbaik untuk seluruh warga secara inklusif.</p>
            </div>
        </div>
        <a href="javascript:void(0)" onclick="nextSlide()" class="swipe-indicator fade-in-up delay-2" style="text-decoration: none; color: inherit; display: inline-block; cursor: pointer;">
            SWIPE &gt;&gt;
        </a>
    </div>
</section>

<script>
    const sliderImages = [
        "{{ asset('images/hero_kiara_payung.png') }}",
        "{{ asset('images/card_potensi.png') }}",
        "{{ asset('images/hero_kiara_payung.png') }}",
        "{{ asset('images/card_potensi.png') }}"
    ];
    let currentSlideIndex = 0;
    let slideInterval;
    
    function updatePaginationUI() {
        const paginationContainer = document.getElementById('hero-pagination');
        let html = '';
        for (let i = 0; i < sliderImages.length; i++) {
            if (i === currentSlideIndex) {
                html += `<span class="active" data-index="${i}">0${i + 1}</span>`;
                html += `<span class="line"></span>`;
            } else {
                html += `<span data-index="${i}">0${i + 1}</span>`;
            }
        }
        paginationContainer.innerHTML = html;
    }
    
    function nextSlide() {
        const slider = document.getElementById('hero-slider');
        
        // Animasi "swipe" dengan menggeser posisi background ke kiri sebelum mengganti gambar
        slider.style.backgroundPosition = 'left center';
        
        setTimeout(() => {
            currentSlideIndex = (currentSlideIndex + 1) % sliderImages.length;
            slider.style.backgroundImage = `url('${sliderImages[currentSlideIndex]}')`;
            
            // Kembalikan ke tengah setelah gambar berganti
            setTimeout(() => {
                slider.style.backgroundPosition = 'center';
            }, 50);
            
            updatePaginationUI();
        }, 300); // Waktu tunggu separuh durasi transisi
        
        // Reset timer otomatis agar tidak dobel jika diklik manual
        resetAutoSwipe();
    }
    
    function resetAutoSwipe() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 5000); // Otomatis geser setiap 5 detik
    }
    
    // Mulai auto-swipe saat halaman dimuat
    resetAutoSwipe();
</script>

<section id="potensi" class="potensi-section container">
    <div class="potensi-header">
        <p class="subtitle">Bingung? Ini rekomendasinya</p>
        <h2 class="section-title">Potensi Unggulan</h2>
    </div>
    <div class="grid-4-vertical">
        <div class="vertical-card">
            <img src="{{ asset('images/card_potensi.png') }}" alt="Potensi 1">
            <div class="card-overlay">
                <h3>Pertanian</h3>
                <p>Hasil bumi melimpah</p>
            </div>
        </div>
        <div class="vertical-card">
            <img src="{{ asset('images/card_potensi.png') }}" alt="Potensi 2">
            <div class="card-overlay">
                <h3>UMKM Lokal</h3>
                <p>Kerajinan & Kuliner</p>
            </div>
        </div>
        <div class="vertical-card">
            <img src="{{ asset('images/card_potensi.png') }}" alt="Potensi 3">
            <div class="card-overlay">
                <h3>Pariwisata</h3>
                <p>Keindahan Alam</p>
            </div>
        </div>
        <div class="vertical-card">
            <img src="{{ asset('images/card_potensi.png') }}" alt="Potensi 4">
            <div class="card-overlay">
                <h3>Budaya</h3>
                <p>Kearifan Lokal</p>
            </div>
        </div>
    </div>
</section>

<section class="explore-section">
    <div class="container explore-content">
        <div class="explore-text">
            <h2>JELAJAHI DAN<br>NIKMATI DESA KAMI</h2>
            <p>Jelajahi keindahan alam, keramahan penduduk, dan potensi luar biasa yang dimiliki oleh Desa Kiarapayung. Kami mengundang Anda untuk melihat lebih dekat.</p>
        </div>
        <div class="explore-thumbnails">
            <div class="thumbnail">
                <img src="{{ asset('images/hero_kiara_payung.png') }}" alt="Thumb 1">
            </div>
            <div class="thumbnail">
                <img src="{{ asset('images/card_potensi.png') }}" alt="Thumb 2">
            </div>
        </div>
    </div>
</section>
@endsection
