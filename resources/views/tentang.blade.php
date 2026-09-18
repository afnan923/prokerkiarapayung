@extends('layouts.app')

@section('title', 'Tentang Desa')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Tentang Desa Kiarapayung</h1>
        <p>Mengenal lebih dekat sejarah, visi, dan misi desa kami.</p>
    </div>
</div>

<div class="container content-section">
    <div class="about-grid">
        <div class="about-text" style="text-align: justify;">
            <h2>Sejarah Desa</h2>
            <p>Sejarah Desa Kiara Payung berawal dari Desa Gaga. Pada tahun 1976, terjadi pemekaran wilayah yang membagi Desa Gaga menjadi dua desa tersendiri. Wilayah hasil pemekaran tersebut sempat dinamakan Desa Gagara Payung, sebelum akhirnya diubah secara resmi menjadi Desa Kiara Payung.</p>
            <p>Keunikan dari pemekaran ini terletak pada letak geografisnya: keberadaan Kampung Gaga secara historis justru berada di wilayah administrasi Desa Kiara Payung, sementara wilayah Desa Gaga yang baru tidak memiliki area yang bernama Kampung Gaga.</p>
            <p>Pada masa transisi pemekaran tahun 1976 tersebut, roda pemerintahan sementara dijalankan oleh pejabat perwakilan unsur Bintara Pembina Desa (Babinsa) dan Bhayangkara Pembina Keamanan dan Ketertiban Masyarakat (Bhabinkamtibmas). Pejabat Bhabinkamtibmas bertugas memimpin Desa Gaga, sedangkan pejabat Babinsa mengawal kepemimpinan di Desa Kiara Payung hingga diselenggarakannya pemilihan kepala desa definitif di kedua desa tersebut.</p>
            
            <h2>Visi & Misi</h2>
            <h3>Visi</h3>
            <p>Mewujudkan Desa Kiara Payung yang Sejahtera, Berkompetensi, dan Religius.</p>
            <h3>Misi</h3>
            <ul class="styled-list">
                <li>Menumbuhkan rasa kepedulian yang tinggi terhadap sesama dalam kehidupan bertetangga, bermasyarakat, dan bersahabat.</li>
                <li>Menjaga keharmonisan dan kepedulian terhadap kelestarian lingkungan alam sekitar.</li>
                <li>Memperkuat nilai-nilai keagamaan dan toleransi dalam kehidupan sehari-hari masyarakat yang mayoritas muslim.</li>
            </ul>
        </div>
        <div class="about-image">
            <div class="placeholder-image" style="background: none; height: auto;">
                <img src="{{ asset('images/hero_kiara_payung.png') }}" alt="Pemandangan Desa" style="width: 100%; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
            </div>
        </div>
    </div>

    <div style="margin-top: 5rem;">
        <h2 class="section-title" style="margin-bottom: 2rem;">Struktur Organisasi</h2>
        <div style="text-align: center; margin-bottom: 4rem;">
            <img src="{{ asset('images/struktur_organisasi.png') }}" alt="Struktur Organisasi Desa Kiarapayung" style="max-width: 100%; height: auto; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
        </div>
    </div>

    <div style="margin-top: 5rem;">
        <h2 class="section-title" style="text-align: left; margin-bottom: 2rem;">Peta Lokasi Desa</h2>
        
        <div class="about-grid" style="align-items: stretch;">
            <!-- Kiri: Data Desa -->
            <div class="card" style="text-align: left; display: flex; flex-direction: column; justify-content: center; padding: 2rem;">
                <h3 style="margin-bottom: 1.5rem; color: var(--primary-color);">Batas Wilayah:</h3>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                    <div>
                        <strong style="display: block; margin-bottom: 0.2rem;">Utara</strong>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Kali Cirarab / Ds. Gaga</p>
                    </div>
                    <div>
                        <strong style="display: block; margin-bottom: 0.2rem;">Timur</strong>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Kec. Teluknaga</p>
                    </div>
                    <div>
                        <strong style="display: block; margin-bottom: 0.2rem;">Selatan</strong>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Kec. Kosambi</p>
                    </div>
                    <div>
                        <strong style="display: block; margin-bottom: 0.2rem;">Barat</strong>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Kec. Sepatan / Kec. Pakuhaji</p>
                    </div>
                </div>
                
                <hr style="border: 0; border-top: 1px solid var(--border-color); margin: 1rem 0;">
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 0;">
                    <strong style="font-size: 1rem;">Luas Wilayah:</strong>
                    <span style="font-weight: 500;">330 Ha</span>
                </div>
                
                <hr style="border: 0; border-top: 1px solid var(--border-color); margin: 0;">
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 0;">
                    <strong style="font-size: 1rem;">Jumlah Penduduk:</strong>
                    <span style="font-weight: 500;">17.587 Jiwa</span>
                </div>

                <hr style="border: 0; border-top: 1px solid var(--border-color); margin: 0;">
                
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 0 0.5rem 0;">
                    <strong style="font-size: 1rem;">Jumlah KK:</strong>
                    <span style="font-weight: 500;">11.039 KK</span>
                </div>
            </div>
            
            <!-- Kanan: Google Maps -->
            <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm); height: 100%; min-height: 400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15000.583344682054!2d106.5956!3d-6.0717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a0323e597c5e5%3A0xb36b5ec6bc68ba60!2sKiarapayung%2C%20Kec.%20Pakuhaji%2C%20Kabupaten%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
