@extends('layouts.app')

@section('title', 'Berita Desa')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Berita Desa Kiarapayung</h1>
        <p>Kabar terbaru dan pengumuman dari desa.</p>
    </div>
</div>

<div class="container content-section">
    <div class="news-grid">
        <!-- Berita 1 -->
        <article class="news-card card-hover">
            <div class="news-img placeholder-image small"><span>Foto Kegiatan</span></div>
            <div class="news-content">
                <span class="news-date">15 Agustus 2026</span>
                <h3>Persiapan Lomba Desa Tingkat Kabupaten</h3>
                <p>Warga bergotong royong membersihkan lingkungan dan menyiapkan berbagai atribut untuk menyambut penilaian lomba desa...</p>
                <a href="#" class="read-more">Baca Selengkapnya &rarr;</a>
            </div>
        </article>

        <!-- Berita 2 -->
        <article class="news-card card-hover">
            <div class="news-img placeholder-image small"><span>Foto Pertanian</span></div>
            <div class="news-content">
                <span class="news-date">10 Agustus 2026</span>
                <h3>Panen Raya Padi Berlangsung Sukses</h3>
                <p>Musim panen tahun ini membawa hasil yang melimpah bagi para petani di Kiarapayung, diharapkan dapat meningkatkan...</p>
                <a href="#" class="read-more">Baca Selengkapnya &rarr;</a>
            </div>
        </article>

        <!-- Berita 3 -->
        <article class="news-card card-hover">
            <div class="news-img placeholder-image small"><span>Foto Rapat</span></div>
            <div class="news-content">
                <span class="news-date">05 Agustus 2026</span>
                <h3>Musyawarah Perencanaan Pembangunan (Musrenbang) 2027</h3>
                <p>Pemerintah Desa telah melaksanakan Musrenbang untuk menyerap aspirasi warga terkait prioritas pembangunan tahun depan...</p>
                <a href="#" class="read-more">Baca Selengkapnya &rarr;</a>
            </div>
        </article>
    </div>
</div>
@endsection
