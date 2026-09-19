@extends('layouts.app')

@section('title', 'Berita Desa Kiarapayung | Kecamatan Pakuhaji')
@section('description', 'Kumpulan berita terbaru, pengumuman, dan kegiatan kemasyarakatan di Desa Kiarapayung, Kecamatan Pakuhaji, Kabupaten Tangerang.')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Berita Desa Kiara Payung</h1>
        <p>Kabar terbaru dan pengumuman dari desa.</p>
    </div>
</div>

<div class="container content-section">
    <div class="news-grid">
        @foreach($beritaList as $berita)
        <article class="news-card card-hover">
            <div class="news-img" style="height: 200px; overflow: hidden;">
                <img src="{{ asset('images/' . $berita['foto']) }}" alt="{{ $berita['judul'] }}" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
            <div class="news-content">
                <span class="news-date">{{ $berita['tanggal'] }} | <strong>{{ $berita['kategori'] }}</strong></span>
                <h3 style="margin: 0.5rem 0;">{{ $berita['judul'] }}</h3>
                <p style="color: var(--text-muted); margin-bottom: 1rem;"><i class="fas fa-map-marker-alt"></i> {{ $berita['lokasi'] }}</p>
                <a href="{{ route('berita.detail', $berita['slug']) }}" class="read-more">Baca Selengkapnya &rarr;</a>
            </div>
        </article>
        @endforeach
    </div>
</div>
@endsection
