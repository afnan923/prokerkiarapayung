@extends('layouts.app')

@section('title', 'Desa Kiarapayung Kecamatan Pakuhaji Kabupaten Tangerang')
@section('description', 'Desa Kiarapayung merupakan desa yang berada di Kecamatan Pakuhaji, Kabupaten Tangerang, Provinsi Banten. Website ini menyajikan informasi pemerintahan, berita, dan layanan desa.')

@section('content')
<!-- Structured Data JSON-LD -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "GovernmentOrganization",
  "name": "Pemerintah Desa Kiarapayung",
  "description": "Website resmi Desa Kiarapayung, Kecamatan Pakuhaji, Kabupaten Tangerang.",
  "url": "{{ url('/') }}",
  "address": {
    "@@type": "PostalAddress",
    "streetAddress": "Kiarapayung",
    "addressLocality": "Kecamatan Pakuhaji",
    "addressRegion": "Kabupaten Tangerang",
    "addressCountry": "Indonesia"
  }
}
</script>
<section class="hero-section hero-home" id="hero-slider" style="background-image: url('{{ asset('images/sawah1.png') }}'); background-position: center; transition: background-image 0.6s ease-in-out, background-position 0.6s ease-in-out;">
    <div class="hero-overlay"></div>
    <div class="hero-content-new container">
        <h1 class="fade-in-up">DESA<br>KIARA PAYUNG</h1>
        
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
                <p>Desa Kiara Payung, Kecamatan Pakuhaji, Kabupaten Tangerang adalah desa maju yang menjunjung tinggi nilai budaya dan kesejahteraan masyarakat.</p>
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
        "{{ asset('images/sawah1.png') }}",
        "{{ asset('images/sawah2.png') }}",
        "{{ asset('images/pohon.png') }}",
        "{{ asset('images/kantor_desa.png') }}"
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

    function prevSlide() {
        const slider = document.getElementById('hero-slider');
        
        slider.style.backgroundPosition = 'right center';
        
        setTimeout(() => {
            currentSlideIndex = (currentSlideIndex - 1 + sliderImages.length) % sliderImages.length;
            slider.style.backgroundImage = `url('${sliderImages[currentSlideIndex]}')`;
            
            setTimeout(() => {
                slider.style.backgroundPosition = 'center';
            }, 50);
            
            updatePaginationUI();
        }, 300);
        
        resetAutoSwipe();
    }
    
    function resetAutoSwipe() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 7000); // Otomatis geser setiap 7 detik (sedikit lebih lambat)
    }

    // Swipe support for mobile
    const heroSlider = document.getElementById('hero-slider');
    let touchStartX = 0;
    let touchEndX = 0;

    heroSlider.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    }, {passive: true});

    heroSlider.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, {passive: true});

    function handleSwipe() {
        if (touchEndX < touchStartX - 50) {
            // Swiped left -> next
            nextSlide();
        } else if (touchEndX > touchStartX + 50) {
            // Swiped right -> prev
            prevSlide();
        }
    }
    
    // Mulai auto-swipe saat halaman dimuat
    resetAutoSwipe();
</script>

<section id="potensi" class="potensi-section container">
    <div class="potensi-header">
        <p class="subtitle">Bingung? Ini rekomendasinya</p>
        <h2 class="section-title">Potensi Desa</h2>
    </div>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; align-items: stretch;">
        
        <!-- Potensi Pertanian -->
        <div class="vertical-card" style="width: 100%; height: 100%; overflow: hidden; border-radius: 12px; position: relative;">
            <img src="{{ asset('images/potensi_pertanian.png') }}" alt="Potensi Pertanian" style="width: 100%; height: 350px; object-fit: cover; display: block;">
            <div class="card-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); color: white;">
                <h3 style="margin: 0 0 0.5rem 0;">Potensi Pertanian</h3>
                <p style="margin: 0; font-size: 0.95rem; opacity: 0.9;">Hasil bumi melimpah</p>
            </div>
        </div>

        <!-- Potensi UMKM -->
        <a href="{{ route('umkm') }}" style="text-decoration: none; display: block; height: 100%;">
            <div class="vertical-card" style="width: 100%; height: 100%; overflow: hidden; border-radius: 12px; position: relative; cursor: pointer; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                <img src="{{ asset('images/potensi_umkm.png') }}" alt="Potensi UMKM" style="width: 100%; height: 350px; object-fit: cover; display: block;">
                <div class="card-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); color: white;">
                    <h3 style="margin: 0 0 0.5rem 0;">Potensi UMKM</h3>
                    <p style="margin: 0; font-size: 0.95rem; opacity: 0.9;">Kerajinan & Kuliner</p>
                </div>
            </div>
        </a>

    </div>
</section>

<section class="explore-section">
    <div class="container explore-content">
        <div class="explore-text">
            <h2>JELAJAHI DAN<br>NIKMATI DESA KAMI</h2>
            <p>Jelajahi keindahan alam, keramahan penduduk, dan potensi luar biasa yang dimiliki oleh Desa Kiara Payung, Pakuhaji. Kami mengundang Anda untuk melihat lebih dekat.</p>
        </div>
        <div class="explore-thumbnails">
            <div class="thumbnail">
                <img src="{{ asset('images/sawah1.png') }}" alt="Sawah" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="thumbnail">
                <img src="{{ asset('images/pohon.png') }}" alt="Pohon" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>
@endsection
