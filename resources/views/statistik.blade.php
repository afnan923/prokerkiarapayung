@extends('layouts.app')

@section('title', 'Statistik Kesehatan')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Statistik Kesehatan Data</h1>
        <p>Transparansi data kesehatan masyarakat dan program Posyandu di Desa Kiarapayung.</p>
    </div>
</div>

<div class="container content-section">
    
    <div class="grid-3" style="margin-bottom: 3rem;">
        <!-- Statistik 1 -->
        <div class="card card-hover" style="text-align: center;">
            <div style="font-size: 3rem; color: var(--primary-color); font-weight: bold;">450</div>
            <h3>a. Jumlah Balita</h3>
            <p class="desc">Balita tercatat di seluruh RW di Desa Kiarapayung.</p>
        </div>

        <!-- Statistik 2 -->
        <div class="card card-hover" style="text-align: center;">
            <div style="font-size: 3rem; color: var(--primary-color); font-weight: bold;">6</div>
            <h3>b. Jumlah Posyandu</h3>
            <p class="desc">Posyandu aktif yang tersebar di wilayah dusun.</p>
        </div>

        <!-- Statistik 3 -->
        <div class="card card-hover" style="text-align: center;">
            <div style="font-size: 3rem; color: #ef4444; font-weight: bold;">12</div>
            <h3>c. Jumlah Kasus Stunting</h3>
            <p class="desc">Balita dalam pengawasan dan penanganan intensif.</p>
        </div>
    </div>

    <div class="content-box">
        <h2>d. Kegiatan PMT (Pemberian Makanan Tambahan pada Balita)</h2>
        <p>Desa Kiarapayung berkomitmen untuk terus menurunkan angka stunting melalui kegiatan PMT (Pemberian Makanan Tambahan). Kegiatan ini dilaksanakan dengan rincian sebagai berikut:</p>
        <ul style="padding-left: 1.5rem; line-height: 1.8; margin-top: 1rem;">
            <li><strong>Jadwal Pelaksanaan:</strong> Dilakukan setiap kali kegiatan Posyandu bulanan berjalan.</li>
            <li><strong>Target Penerima:</strong> Seluruh balita yang hadir di Posyandu, dengan menu khusus tambahan untuk balita dengan gizi kurang atau BGM (Bawah Garis Merah).</li>
            <li><strong>Menu PMT:</strong> Terdiri dari makanan olahan lokal bernutrisi tinggi seperti bubur kacang hijau, telur rebus, puding susu buah, dan olahan ikan.</li>
            <li><strong>Anggaran:</strong> Bersumber dari Dana Desa (DD) bidang kesehatan masyarakat dan donasi swadaya masyarakat.</li>
        </ul>
    </div>
</div>
@endsection
