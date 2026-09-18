@extends('layouts.app')

@section('title', 'Layanan & Kontak')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Layanan & Kontak</h1>
        <p>Hubungi kami untuk informasi lebih lanjut atau kunjungi kantor desa.</p>
    </div>
</div>

<div class="container content-section">
    <div class="grid-2">
        <div class="content-box">
            <h2>Hubungi Kami</h2>
            <p>Silakan hubungi kami melalui kontak di bawah ini atau datang langsung ke Balai Desa pada jam kerja (Senin - Jumat, 08:00 - 15:00 WIB).</p>
            
            <ul style="list-style: none; padding: 0; line-height: 2;">
                <li><strong>Alamat:</strong> Jl. Raya Kiarapayung No. 1, Desa Kiarapayung</li>
                <li><strong>Email:</strong> info@kiarapayung.desa.id</li>
                <li><strong>Telepon:</strong> +62 812 3456 7890</li>
                <li><strong>WhatsApp:</strong> +62 812 3456 7890 (Layanan Cepat)</li>
            </ul>

            <h3 style="margin-top: 2rem; margin-bottom: 1rem;">Layanan Administrasi</h3>
            <ul>
                <li>Pembuatan KTP & KK</li>
                <li>Surat Keterangan Usaha (SKU)</li>
                <li>Surat Pengantar Nikah</li>
                <li>Surat Keterangan Domisili</li>
            </ul>
        </div>
        
        <div class="content-box">
            <h2>Peta Lokasi Desa</h2>
            <p>Berikut adalah lokasi Balai Desa Kiarapayung:</p>
            <div style="width: 100%; height: 400px; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <!-- Menggunakan embed peta Google Maps generik (contoh) -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.5634786311!2d107.57311682701198!3d-6.903444341656094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1698765432100!5m2!1sen!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
