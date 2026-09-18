@extends('layouts.app')

@section('title', 'Desa Sehat')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Program Desa Sehat</h1>
        <p>Upaya kami dalam mewujudkan masyarakat Kiarapayung yang sehat dan sejahtera.</p>
    </div>
</div>

<div class="container content-section">
    <div class="grid-2">
        <div class="content-box">
            <h2>Posyandu & Kesehatan Ibu Anak</h2>
            <p>Program rutin Posyandu diadakan setiap bulan di tiap-tiap RW untuk memantau tumbuh kembang balita, serta memberikan penyuluhan kesehatan bagi ibu hamil dan menyusui.</p>
            <ul>
                <li>Pemeriksaan kesehatan rutin</li>
                <li>Pemberian makanan tambahan (PMT)</li>
                <li>Imunisasi dasar lengkap</li>
            </ul>
        </div>
        
        <div class="content-box">
            <h2>Sanitasi & Lingkungan Bersih</h2>
            <p>Desa Kiarapayung terus menggalakkan program lingkungan bersih dan sehat (PHBS). Kami mengadakan kerja bakti mingguan dan edukasi pengelolaan sampah mandiri.</p>
            <ul>
                <li>Pengelolaan bank sampah</li>
                <li>Kerja bakti rutin hari Minggu</li>
                <li>Program jamban sehat keluarga</li>
            </ul>
        </div>
    </div>
</div>
@endsection
