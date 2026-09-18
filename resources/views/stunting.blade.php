@extends('layouts.app')

@section('title', 'Stunting')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Stunting & Pencegahannya</h1>
        <p>Mengenal stunting, cara mencegahnya, dan program Desa Kiarapayung dalam menangani stunting.</p>
    </div>
</div>

<div class="container content-section">
    <div class="content-box" style="margin-bottom: 2rem;">
        <h2>A. Pengertian Stunting</h2>
        <p>Stunting adalah kondisi gagal tumbuh pada anak balita akibat kekurangan gizi kronis terutama pada 1.000 Hari Pertama Kehidupan (HPK). Anak stunting akan tampak lebih pendek dari usianya dan memiliki keterlambatan dalam perkembangan kognitif.</p>
    </div>

    <div class="content-box" style="margin-bottom: 2rem;">
        <h2>B. Pencegahan Stunting</h2>
        <p>Pencegahan stunting harus dilakukan sejak masa kehamilan hingga anak berusia 2 tahun:</p>
        <ul style="padding-left: 1.5rem; line-height: 1.8;">
            <li>Memenuhi kebutuhan gizi bagi ibu hamil (konsumsi zat besi, asam folat, dan protein).</li>
            <li>Memberikan ASI Eksklusif selama 6 bulan penuh.</li>
            <li>Memberikan Makanan Pendamping ASI (MPASI) yang sehat dan bergizi setelah usia 6 bulan.</li>
            <li>Membawa anak ke Posyandu secara rutin untuk memantau tumbuh kembangnya.</li>
            <li>Menjaga kebersihan lingkungan dan sanitasi untuk mencegah infeksi yang berulang.</li>
        </ul>
    </div>

    <div class="content-box">
        <h2>C. Program Desa</h2>
        <p>Desa Kiarapayung memiliki beberapa program unggulan untuk mencegah dan menangani stunting di lingkungan masyarakat:</p>
        <ul style="padding-left: 1.5rem; line-height: 1.8;">
            <li><strong>Kelas Ibu Hamil:</strong> Edukasi gizi dan kesehatan bagi ibu hamil secara rutin setiap bulan.</li>
            <li><strong>Pemantauan Gizi Anak:</strong> Melibatkan kader Posyandu untuk mendata tinggi dan berat badan balita.</li>
            <li><strong>Bantuan Pangan Bergizi:</strong> Penyaluran bahan makanan bernutrisi untuk keluarga berisiko stunting.</li>
            <li><strong>Pembangunan Sanitasi Layak:</strong> Pembangunan fasilitas air bersih dan jamban keluarga.</li>
        </ul>
    </div>
</div>
@endsection
