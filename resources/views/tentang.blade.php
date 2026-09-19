@extends('layouts.app')

@section('title', 'Tentang Desa Kiara Payung Pakuhaji')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Tentang Desa Kiara Payung, Pakuhaji</h1>
        <p>Mengenal lebih dekat sejarah, visi, dan misi Desa Kiara Payung, Kecamatan Pakuhaji, Kabupaten Tangerang.</p>
    </div>
</div>

<div class="container content-section">
    <div class="about-grid" style="align-items: flex-start;">
        <div class="about-text" style="text-align: justify;">
            <h2>Sejarah Desa</h2>
            <p>Sejarah Desa Kiara Payung berawal dari Desa Gaga. Pada tahun 1976, terjadi pemekaran wilayah yang membagi Desa Gaga menjadi dua desa tersendiri. Wilayah hasil pemekaran tersebut sempat dinamakan Desa Gagara Payung, sebelum akhirnya diubah secara resmi menjadi Desa Kiara Payung.</p>
            <p>Keunikan dari pemekaran ini terletak pada letak geografisnya: keberadaan Kampung Gaga secara historis justru berada di wilayah administrasi Desa Kiara Payung, sementara wilayah Desa Gaga yang baru tidak memiliki area yang bernama Kampung Gaga.</p>
            <p>Pada masa transisi pemekaran tahun 1976 tersebut, roda pemerintahan sementara dijalankan oleh pejabat perwakilan unsur Bintara Pembina Desa (Babinsa) dan Bhayangkara Pembina Keamanan dan Ketertiban Masyarakat (Bhabinkamtibmas). Pejabat Bhabinkamtibmas bertugas memimpin Desa Gaga, sedangkan pejabat Babinsa mengawal kepemimpinan di Desa Kiara Payung hingga diselenggarakannya pemilihan kepala desa definitif di kedua desa tersebut.</p>
            
            <h2 style="margin-top: 2rem; margin-bottom: 1rem;">Visi & Misi</h2>
            <div style="display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-top: 1rem;">
                <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary-color); border-radius: 0 8px 8px 0; box-shadow: var(--shadow-sm);">
                    <h3 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.2rem;">Visi</h3>
                    <p style="font-weight: 600; font-style: italic; margin: 0; color: var(--text-color);">"Mewujudkan Desa Kiara Payung yang Sejahtera, Berkompetensi, dan Religius."</p>
                </div>
                <div class="card" style="padding: 1.5rem; border-left: 4px solid #10b981; border-radius: 0 8px 8px 0; box-shadow: var(--shadow-sm);">
                    <h3 style="color: #10b981; margin-bottom: 0.5rem; font-size: 1.2rem;">Misi</h3>
                    <ul class="styled-list" style="margin: 0; padding-left: 1.2rem; color: var(--text-color);">
                        <li>Menumbuhkan rasa kepedulian terhadap sesama dan bermasyarakat.</li>
                        <li>Menjaga keharmonisan & kelestarian lingkungan alam.</li>
                        <li>Memperkuat nilai-nilai keagamaan & toleransi.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="about-image" style="display: flex; align-items: flex-start; justify-content: center;">
            <div style="width: 100%;">
                <img src="{{ asset('images/kantor_desa.png') }}" alt="Kantor Desa Kiara Payung" style="width: 100%; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); margin-top: 1rem;">
            </div>
        </div>
    </div> <!-- Menutup .about-grid -->

    <!-- Section Profil Kepala Desa -->
    <div style="margin-top: 6rem;">
        <h2 class="section-title" style="text-align: center; margin-bottom: 3rem;">Profil Kepala Desa</h2>
        <div class="about-grid card" style="padding: 3rem; align-items: center; border: none; box-shadow: var(--shadow-md);">
            <!-- Foto Kades -->
            <div style="display: flex; justify-content: center;">
                <div style="position: relative;">
                    <div style="position: absolute; inset: -6px; background: linear-gradient(45deg, #3b82f6, #10b981, #3b82f6); border-radius: 50%; filter: blur(12px); opacity: 0.65; animation: pulse 3s infinite alternate;"></div>
                    <img src="{{ asset('images/kades.png') }}" alt="Kepala Desa Kiara Payung - Mudarip" style="position: relative; width: 220px; height: 220px; object-fit: cover; border-radius: 50%; border: 6px solid var(--bg-color); box-shadow: var(--shadow-md); background-color: var(--bg-color);">
                </div>
            </div>
            
            <!-- Info Kades -->
            <div>
                <h3 style="color: var(--text-color); font-size: 2.5rem; font-weight: 800; margin-bottom: 0.5rem; font-family: 'Inter', sans-serif; letter-spacing: -0.025em;">Mudarip</h3>
                <p style="color: var(--primary-color); font-size: 1.2rem; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 1.5rem;">Kepala Desa Kiara Payung</p>
                
                <div style="background: rgba(59, 130, 246, 0.1); border: 1px solid rgba(59, 130, 246, 0.2); padding: 0.8rem 1.5rem; border-radius: 9999px; display: inline-flex; align-items: center; gap: 0.8rem; margin-bottom: 1.5rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span style="color: var(--text-color); font-weight: 600; font-size: 1.1rem;">Masa Jabatan: <span style="color: var(--primary-color); font-weight: 800;">2019 - 2027</span></span>
                </div>
                
                <div style="position: relative; padding-top: 1rem;">
                    
                    <p style="color: var(--text-muted); font-size: 1.1rem; font-style: italic; line-height: 1.6; position: relative; z-index: 1;">"Bersama membangun Desa Kiara Payung yang mandiri, sejahtera, dan berbudaya."</p>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Section Struktur Organisasi -->
    <div style="margin-top: 6rem; text-align: center;">
        <h2 class="section-title" style="margin-bottom: 1rem;">Struktur Organisasi</h2>
        <p style="color: var(--text-muted); margin-bottom: 2rem; font-size: 0.95rem;">(Klik gambar untuk memperbesar)</p>
        <div class="card" style="padding: 1.5rem; cursor: pointer; transition: transform 0.3s ease, box-shadow 0.3s ease; display: block; width: 100%; box-sizing: border-box;" onclick="openModal(this)" onmouseover="this.style.transform='scale(1.01)'; this.style.boxShadow='var(--shadow-lg)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='var(--shadow-md)';">
            <img src="{{ asset('images/struktur_organisasi.png') }}" alt="Struktur Organisasi Desa Kiara Payung" style="width: 100%; max-width: 100%; height: auto; display: block; margin: 0 auto; border-radius: var(--radius-md);">
        </div>
    </div>

    <div style="margin-top: 5rem; margin-bottom: 5rem;">
        <h2 class="section-title" style="margin-bottom: 3rem;">Peta Lokasi & Wilayah</h2>
        
        <div class="about-grid card" style="padding: 0; overflow: hidden; gap: 0; box-shadow: var(--shadow-lg); border: none;">
            <!-- Kiri: Data Desa -->
            <div style="padding: 3rem;">
                <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); font-size: 1.4rem;">Batas Wilayah</h3>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 2.5rem;">
                    <div style="background: rgba(150,150,150,0.1); padding: 1rem; border-radius: 8px;">
                        <strong style="display: block; margin-bottom: 0.3rem; color: var(--text-color);">Utara</strong>
                        <p style="color: var(--text-muted); font-size: 0.95rem; margin: 0;">Kali Cirarab / Ds. Gaga</p>
                    </div>
                    <div style="background: rgba(150,150,150,0.1); padding: 1rem; border-radius: 8px;">
                        <strong style="display: block; margin-bottom: 0.3rem; color: var(--text-color);">Timur</strong>
                        <p style="color: var(--text-muted); font-size: 0.95rem; margin: 0;">Kec. Teluknaga</p>
                    </div>
                    <div style="background: rgba(150,150,150,0.1); padding: 1rem; border-radius: 8px;">
                        <strong style="display: block; margin-bottom: 0.3rem; color: var(--text-color);">Selatan</strong>
                        <p style="color: var(--text-muted); font-size: 0.95rem; margin: 0;">Kec. Kosambi</p>
                    </div>
                    <div style="background: rgba(150,150,150,0.1); padding: 1rem; border-radius: 8px;">
                        <strong style="display: block; margin-bottom: 0.3rem; color: var(--text-color);">Barat</strong>
                        <p style="color: var(--text-muted); font-size: 0.95rem; margin: 0;">Kec. Sepatan / Pakuhaji</p>
                    </div>
                </div>
                
                <div style="background: rgba(150,150,150,0.1); padding: 1.5rem; border-radius: 12px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.8rem;">
                        <strong style="font-size: 1.1rem; color: var(--text-color);">Luas Wilayah</strong>
                        <span style="font-weight: 700; color: var(--primary-color); font-size: 1.1rem;">330 Ha</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.8rem;">
                        <strong style="font-size: 1.1rem; color: var(--text-color);">Jumlah Penduduk</strong>
                        <span style="font-weight: 700; color: var(--primary-color); font-size: 1.1rem;">17.587 Jiwa</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <strong style="font-size: 1.1rem; color: var(--text-color);">Jumlah KK</strong>
                        <span style="font-weight: 700; color: var(--primary-color); font-size: 1.1rem;">11.039 KK</span>
                    </div>
                </div>
            </div>
            
            <!-- Kanan: Google Maps -->
            <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm); height: 100%; min-height: 400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15000.583344682054!2d106.5956!3d-6.0717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a0323e597c5e5%3A0xb36b5ec6bc68ba60!2sKiarapayung%2C%20Kec.%20Pakuhaji%2C%20Kabupaten%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Image Zoom -->
<div id="imageModal" style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: hidden; background-color: rgba(0,0,0,0.85); align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; backdrop-filter: blur(5px);">
    <span style="position: absolute; top: 20px; right: 40px; color: #ffffff; font-size: 45px; font-weight: bold; cursor: pointer; text-shadow: 0 2px 4px rgba(0,0,0,0.5); z-index: 10000;" onclick="closeModal()">&times;</span>
    <img id="modalImg" style="margin: auto; display: block; max-width: 90%; max-height: 90vh; object-fit: contain; border-radius: 8px; box-shadow: 0 10px 40px rgba(0,0,0,0.5);">
</div>

<script>
    function openModal(element) {
        var modal = document.getElementById("imageModal");
        var modalImg = document.getElementById("modalImg");
        var img = element.querySelector('img');
        
        modal.style.display = "flex";
        setTimeout(() => modal.style.opacity = "1", 10);
        modalImg.src = img.src;
        document.body.style.overflow = "hidden"; // Prevent scrolling
    }
    
    function closeModal() {
        var modal = document.getElementById("imageModal");
        modal.style.opacity = "0";
        setTimeout(() => {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        }, 300);
    }
    
    // Close modal when clicking outside the image
    document.getElementById("imageModal").addEventListener('click', function(e) {
        if(e.target === this) closeModal();
    });
</script>
@endsection
