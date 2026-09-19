@extends('layouts.app')

@section('title', 'Stunting & Pencegahannya - Desa Kiara Payung')

@section('content')
<style>
/* CSS khusus untuk halaman Stunting menyesuaikan Light/Dark Mode dengan CSS Variables */
.stunting-hero {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
    padding: 3rem 0;
    align-items: center;
}
@media (min-width: 768px) {
    .stunting-hero {
        flex-direction: row;
        justify-content: space-between;
        padding: 5rem 0;
    }
    .stunting-hero-content {
        flex: 1;
        padding-right: 2rem;
    }
    .stunting-hero-img {
        flex: 1;
        max-width: 550px;
    }
}
.stunting-hero h1 {
    font-size: 2.5rem;
    color: var(--text-main);
    margin-bottom: 1rem;
    line-height: 1.2;
}
.stunting-hero h2 {
    font-size: 1.4rem;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
    line-height: 1.4;
}
.stunting-hero p {
    font-size: 1.1rem;
    color: var(--text-muted);
    line-height: 1.8;
    border-left: 4px solid var(--primary-color);
    padding-left: 1rem;
}

/* Sections */
.stunting-section {
    padding: 3rem 0;
}
.stunting-section h2 {
    font-size: 2rem;
    color: var(--text-main);
    margin-bottom: 2rem;
    text-align: center;
}
.stunting-text {
    font-size: 1.1rem;
    color: var(--text-main);
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto 1.5rem auto;
    opacity: 0.9;
}
.info-box {
    background-color: transparent;
    border: 1px solid var(--primary-color);
    border-left: 4px solid var(--primary-color);
    border-radius: var(--radius-md);
    padding: 1.5rem;
    max-width: 800px;
    margin: 2rem auto;
    color: var(--text-main);
    font-size: 1.05rem;
    line-height: 1.6;
}

/* Cards */
.stunting-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    max-width: 1000px;
    margin: 0 auto;
}
@media (min-width: 768px) {
    .stunting-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (min-width: 1024px) {
    .stunting-grid.grid-3 {
        grid-template-columns: repeat(3, 1fr);
    }
}
.stunting-card {
    background-color: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    padding: 1.5rem;
    box-shadow: var(--shadow-sm);
}
.stunting-card h3 {
    color: var(--text-main);
    margin-bottom: 0.8rem;
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.stunting-card p {
    color: var(--text-muted);
    font-size: 1rem;
    line-height: 1.6;
}

/* Timeline */
.timeline {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    max-width: 600px;
    margin: 0 auto;
}
.timeline-item {
    background-color: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    padding: 1.5rem;
    text-align: center;
}
.timeline-item h3 {
    color: var(--text-main);
    margin-bottom: 0.5rem;
}
.timeline-item p {
    color: var(--text-muted);
}
.timeline-arrow {
    text-align: center;
    color: var(--primary-color);
    font-size: 1.5rem;
    font-weight: bold;
}

/* Checklist */
.checklist {
    max-width: 700px;
    margin: 0 auto;
    background-color: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    padding: 2rem;
}
.checklist ul {
    list-style: none;
    padding: 0;
}
.checklist li {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1rem;
    color: var(--text-main);
    font-size: 1.05rem;
    line-height: 1.5;
}
.checklist li:last-child {
    margin-bottom: 0;
}
.checklist li::before {
    content: '✓';
    color: var(--primary-color);
    font-weight: bold;
    font-size: 1.2rem;
}

/* References */
.references {
    max-width: 800px;
    margin: 4rem auto 0 auto;
    border-top: 1px solid var(--border-color);
    padding-top: 2rem;
}
.references h2 {
    font-size: 1.5rem;
    text-align: left;
    margin-bottom: 1.5rem;
    color: var(--text-main);
}
.ref-item {
    margin-bottom: 1.5rem;
}
.ref-item h4 {
    color: var(--text-main);
    margin-bottom: 0.3rem;
    font-size: 1.1rem;
}
.ref-item p {
    color: var(--text-muted);
    font-size: 0.95rem;
    margin-bottom: 0.25rem;
}
.ref-item a {
    color: var(--primary-color);
    font-size: 0.95rem;
    word-break: break-all;
    text-decoration: underline;
}
</style>

<div class="container content-section">

    <!-- 1. HERO -->
    <div class="stunting-hero">
        <div class="stunting-hero-content">
            <h1>Stunting & Pencegahannya</h1>
            <h2>Kenali stunting dan lakukan pencegahan sejak dini untuk mendukung tumbuh kembang anak.</h2>
            <p>Stunting merupakan kondisi gangguan pertumbuhan pada anak yang berkaitan dengan kekurangan gizi dalam waktu yang lama. Pencegahan perlu dilakukan sejak masa kehamilan hingga anak berusia dua tahun melalui pemenuhan gizi, pemantauan pertumbuhan, serta penerapan hidup bersih dan sehat.</p>
        </div>
        <div class="stunting-hero-img">
            <img src="{{ asset('images/balita.png') }}" alt="Balita Indonesia" style="width: 100%; border-radius: var(--radius-md); object-fit: cover;">
        </div>
    </div>

    <!-- 3. APA ITU STUNTING -->
    <div class="stunting-section">
        <h2>Apa Itu Stunting?</h2>
        <p class="stunting-text">Stunting merupakan kondisi gangguan pertumbuhan pada anak akibat kekurangan gizi dalam waktu yang lama. Kondisi ini dapat menyebabkan anak memiliki tinggi badan lebih rendah dibandingkan anak seusianya dan dapat berkaitan dengan gangguan perkembangan.</p>
        <p class="stunting-text">Periode penting dalam pencegahan stunting adalah <strong>1.000 Hari Pertama Kehidupan</strong>, yaitu sejak masa kehamilan hingga anak berusia sekitar dua tahun.</p>
        
        <div class="info-box">
            <strong>Penting:</strong> Anak yang memiliki tubuh pendek belum tentu mengalami stunting. Penilaian stunting perlu dilakukan berdasarkan standar pertumbuhan anak sesuai usia dan pemeriksaan kesehatan.
        </div>
    </div>

    <!-- 4. PENYEBAB STUNTING -->
    <div class="stunting-section">
        <h2>Penyebab Stunting</h2>
        <div class="stunting-grid grid-3">
            <div class="stunting-card">
                <h3>1. Kekurangan Gizi Ibu Selama Hamil</h3>
                <p>Asupan gizi ibu selama kehamilan berperan dalam mendukung pertumbuhan dan perkembangan janin.</p>
            </div>
            <div class="stunting-card">
                <h3>2. Kebutuhan Nutrisi Anak Tidak Tercukupi</h3>
                <p>Setelah lahir, kebutuhan nutrisi anak harus dipenuhi melalui ASI dan makanan pendamping ASI (MPASI) sesuai tahap pertumbuhan.</p>
            </div>
            <div class="stunting-card">
                <h3>3. Infeksi Berulang</h3>
                <p>Infeksi atau penyakit yang terjadi berulang dapat memengaruhi kondisi kesehatan dan pertumbuhan anak.</p>
            </div>
            <div class="stunting-card">
                <h3>4. Air Bersih dan Sanitasi yang Kurang</h3>
                <p>Keterbatasan air bersih dan sanitasi dapat meningkatkan risiko masalah kesehatan yang dapat mengganggu pertumbuhan anak.</p>
            </div>
            <div class="stunting-card">
                <h3>5. Akses Pelayanan Kesehatan</h3>
                <p>Keterbatasan akses terhadap pelayanan kesehatan dapat menjadi salah satu faktor yang memengaruhi pencegahan dan penanganan masalah pertumbuhan anak.</p>
            </div>
            <div class="stunting-card">
                <h3>6. Faktor Lain</h3>
                <p>Siloam Hospitals menyebutkan faktor seperti kelahiran prematur dan berat badan lahir rendah sebagai faktor yang berkaitan dengan stunting.</p>
            </div>
        </div>
    </div>

    <!-- 5. CIRI-CIRI -->
    <div class="stunting-section">
        <h2>Ciri-Ciri yang Perlu Diperhatikan</h2>
        <div class="checklist" style="margin-bottom: 2rem;">
            <ul>
                <li>Pertumbuhan anak berjalan lebih lambat</li>
                <li>Berat badan tidak naik atau cenderung menurun</li>
                <li>Perkembangan anak perlu diperhatikan</li>
                <li>Pertumbuhan gigi dapat mengalami keterlambatan</li>
                <li>Anak lebih mudah mengalami infeksi atau penyakit</li>
            </ul>
        </div>
        
        <div class="info-box">
            <strong>Penting:</strong> Ciri-ciri tersebut bukan pengganti pemeriksaan tenaga kesehatan. Jika orang tua memiliki kekhawatiran mengenai pertumbuhan atau perkembangan anak, lakukan pemeriksaan ke Posyandu atau fasilitas pelayanan kesehatan.
        </div>
    </div>

    <!-- 6. CARA MENCEGAH STUNTING -->
    <div class="stunting-section">
        <h2>Cara Mencegah Stunting</h2>
        <div class="stunting-grid grid-3">
            <div class="stunting-card">
                <h3>🤰 1. Penuhi Gizi Ibu Hamil</h3>
                <p>Ibu hamil perlu mendapatkan makanan bergizi, suplementasi sesuai anjuran tenaga kesehatan, dan melakukan pemantauan kesehatan selama kehamilan.</p>
            </div>
            <div class="stunting-card">
                <h3>🍼 2. Berikan ASI Eksklusif</h3>
                <p>Berikan ASI eksklusif sampai bayi berusia 6 bulan. Setelah usia 6 bulan, lanjutkan dengan pemberian MPASI yang cukup jumlah dan kualitasnya.</p>
            </div>
            <div class="stunting-card">
                <h3>🥗 3. Penuhi Kebutuhan Gizi Anak</h3>
                <p>Berikan makanan yang beragam dan bergizi sesuai kebutuhan anak. Perhatikan asupan makanan yang menjadi sumber protein, mineral, dan zat gizi lainnya.</p>
            </div>
            <div class="stunting-card">
                <h3>📊 4. Pantau Pertumbuhan di Posyandu</h3>
                <p>Bawa balita ke Posyandu secara rutin untuk memantau pertumbuhan dan perkembangan serta membantu mendeteksi gangguan pertumbuhan sejak dini.</p>
            </div>
            <div class="stunting-card">
                <h3>💧 5. Jaga Air Bersih dan Sanitasi</h3>
                <p>Gunakan air bersih, jaga kebersihan lingkungan, dan terapkan perilaku hidup bersih dan sehat untuk membantu mengurangi risiko infeksi.</p>
            </div>
        </div>
    </div>

    <!-- 7. 1000 HARI PERTAMA KEHIDUPAN -->
    <div class="stunting-section">
        <h2>1000 Hari Pertama Kehidupan</h2>
        <div class="timeline">
            <div class="timeline-item">
                <h3>Masa Kehamilan</h3>
                <p>Perhatikan kebutuhan gizi dan kesehatan ibu selama kehamilan.</p>
            </div>
            <div class="timeline-arrow">&darr;</div>
            <div class="timeline-item">
                <h3>0–6 Bulan</h3>
                <p>Berikan ASI eksklusif.</p>
            </div>
            <div class="timeline-arrow">&darr;</div>
            <div class="timeline-item">
                <h3>6–24 Bulan</h3>
                <p>Berikan MPASI yang cukup jumlah dan kualitasnya serta tetap memperhatikan kebutuhan gizi anak.</p>
            </div>
        </div>
    </div>

    <!-- 8. PERAN POSYANDU -->
    <div class="stunting-section">
        <h2>Pantau Tumbuh Kembang Anak di Posyandu</h2>
        <p class="stunting-text" style="text-align: center;">Pemantauan pertumbuhan balita di Posyandu dapat membantu orang tua mengetahui perkembangan anak dan mendeteksi gangguan pertumbuhan sejak dini.</p>
    
        
        <div style="max-width: 700px; margin: 0 auto;">
            <img src="{{ asset('images/berita_posyandu.png') }}" alt="Pemeriksaan anak di Posyandu" style="width: 100%; border-radius: var(--radius-md); object-fit: cover;">
        </div>
    </div>

    <!-- 9. PENCEGAHAN KELUARGA -->
    <div class="stunting-section">
        <h2>Pencegahan Dimulai dari Keluarga</h2>
        <div class="checklist">
            <ul>
                <li>Memenuhi kebutuhan gizi ibu selama kehamilan</li>
                <li>Memberikan ASI eksklusif sampai 6 bulan</li>
                <li>Memberikan MPASI setelah anak berusia 6 bulan</li>
                <li>Memenuhi kebutuhan gizi anak</li>
                <li>Membawa balita ke Posyandu secara rutin</li>
                <li>Menjaga kebersihan rumah dan lingkungan</li>
                <li>Menggunakan air bersih dan menjaga sanitasi</li>
                <li>Memperhatikan pertumbuhan dan perkembangan anak</li>
            </ul>
        </div>
    </div>

    <!-- 10. REFERENSI -->
    <div class="stunting-section">
        <div class="references">
            <h2>Referensi</h2>
            
            <div class="ref-item">
                <h4>Kementerian Kesehatan Republik Indonesia – Keslan</h4>
                <p>“Stunting dan Pencegahannya”</p>
                <p>Gustri Putri, SST – RSUP dr. Mohammad Hoesin Palembang.</p>
                <a href="https://keslan.kemkes.go.id/view_artikel/2483/stunting-dan-pencegahannya" target="_blank" rel="noopener noreferrer">https://keslan.kemkes.go.id/view_artikel/2483/stunting-dan-pencegahannya</a>
                <p style="margin-top: 0.5rem;"><em>Sumber gambar pendukung: www.p2ptm.kemkes.go.id</em></p>
            </div>
            
            <div class="ref-item">
                <h4>Siloam Hospitals</h4>
                <p>“Mengenal Stunting - Pengertian, Penyebab, dan Pencegahannya”</p>
                <p>Tim Medis Siloam Hospitals, 21 Agustus 2025.</p>
                <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/apa-itu-stunting" target="_blank" rel="noopener noreferrer">https://www.siloamhospitals.com/informasi-siloam/artikel/apa-itu-stunting</a>
            </div>
        </div>
    </div>

</div>
@endsection
