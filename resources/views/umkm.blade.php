@extends('layouts.app')

@section('title', 'UMKM Desa')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Produk UMKM Kiarapayung</h1>
        <p>Mendukung ekonomi lokal melalui karya dan produk masyarakat.</p>
    </div>
</div>

<div class="container content-section">
    <div class="grid-3">
        <!-- UMKM 1 -->
        <div class="product-card card-hover">
            <div class="product-img placeholder-image medium"><span>Kripik Pisang</span></div>
            <div class="product-info">
                <h3>Keripik Pisang "Manis Madu"</h3>
                <p class="owner">Oleh: Ibu Tini (RT 01)</p>
                <p class="desc">Camilan khas Kiarapayung yang gurih dan renyah. Cocok untuk teman minum teh.</p>
                <div style="display: flex; gap: 0.5rem; justify-content: center; margin-top: 1rem;">
                    <a href="#" class="btn btn-outline-primary btn-sm">Hubungi Penjual</a>
                    <a href="https://maps.google.com" target="_blank" class="btn btn-primary btn-sm">📍 Lokasi</a>
                </div>
            </div>
        </div>

        <!-- UMKM 2 -->
        <div class="product-card card-hover">
            <div class="product-img placeholder-image medium"><span>Kerajinan Anyaman</span></div>
            <div class="product-info">
                <h3>Anyaman Bambu Tradisional</h3>
                <p class="owner">Oleh: Kelompok Tani Mekar</p>
                <p class="desc">Kerajinan tangan berkualitas tinggi, mulai dari bakul, tampah, hingga hiasan dinding.</p>
                <div style="display: flex; gap: 0.5rem; justify-content: center; margin-top: 1rem;">
                    <a href="#" class="btn btn-outline-primary btn-sm">Hubungi Penjual</a>
                    <a href="https://maps.google.com" target="_blank" class="btn btn-primary btn-sm">📍 Lokasi</a>
                </div>
            </div>
        </div>

        <!-- UMKM 3 -->
        <div class="product-card card-hover">
            <div class="product-img placeholder-image medium"><span>Kopi Bubuk</span></div>
            <div class="product-info">
                <h3>Kopi Bubuk Asli Kiarapayung</h3>
                <p class="owner">Oleh: Pak Yanto</p>
                <p class="desc">Kopi hasil panen kebun lokal yang disangrai dengan metode tradisional.</p>
                <div style="display: flex; gap: 0.5rem; justify-content: center; margin-top: 1rem;">
                    <a href="#" class="btn btn-outline-primary btn-sm">Hubungi Penjual</a>
                    <a href="https://maps.google.com" target="_blank" class="btn btn-primary btn-sm">📍 Lokasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
