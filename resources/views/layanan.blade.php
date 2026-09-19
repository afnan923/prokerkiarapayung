@extends('layouts.app')

@section('title', 'Layanan & Kontak')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Layanan & Kontak</h1>
        <p>Hubungi kami untuk informasi lebih lanjut atau gunakan layanan yang tersedia di bawah ini.</p>
    </div>
</div>

<div class="container content-section">
    <!-- Menggunakan CSS Grid yang responsif (grid-3 ada di style.css) -->
    <div class="grid-3">
        <!-- Card 1: Hubungi Kami -->
        <div class="content-box card card-hover">
            <div class="card-icon" style="color: var(--primary-color);">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-main);">Hubungi Kami</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1.5rem;">Balai Desa Kiara Payung (Senin - Jumat, 08:00 - 15:00 WIB).</p>
            <ul style="list-style: none; padding: 0; line-height: 1.8; text-align: left; font-size: 0.95rem;">
                <li style="margin-bottom: 0.5rem;"><strong>Alamat:</strong> Jalan No.15570, Kiara Payung, Kecamatan Pakuhaji, Kabupaten Tangerang, Banten 15570</li>
                <li style="margin-bottom: 0.5rem;"><strong>Email:</strong> info@kiarapayung.desa.id</li>
                <li style="margin-bottom: 0.5rem;"><strong>Telepon:</strong> +62 812 3456 7890</li>
            </ul>
            <div style="display: flex; flex-direction: column; gap: 0.5rem; margin-top: 1rem;">
                <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-outline-primary" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                    WhatsApp Desa
                </a>
                <a href="https://maps.app.goo.gl/NNbNRJBZgSycvVy29" target="_blank" class="btn btn-outline-primary" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    Lokasi Kantor Desa
                </a>
            </div>
        </div>

        <!-- Card 2: Layanan Administrasi -->
        <div class="content-box card card-hover">
            <div class="card-icon" style="color: var(--primary-color);">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-main);">Layanan Administrasi</h3>
            <p style="font-size: 0.95rem; margin-bottom: 1.5rem;">Layanan kependudukan dan persuratan di Balai Desa Kiara Payung.</p>
            <ul class="styled-list" style="text-align: left; font-size: 0.95rem;">
                <li>Pembuatan KTP & KK</li>
                <li>Surat Keterangan Usaha (SKU)</li>
                <li>Surat Pengantar Nikah</li>
                <li>Surat Keterangan Domisili</li>
            </ul>
        </div>
        
        <!-- Card 3: Layanan Darurat 112 -->
        <div class="content-box card card-hover" style="border: 1px solid #ef4444; background: linear-gradient(to bottom right, #ffffff, #fef2f2);">
            <div class="card-icon" style="color: #ef4444;">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path><path d="M11.5 7h1M12 6.5v1"></path></svg>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #b91c1c;">Layanan Darurat 112</h3>
            <div style="margin: 0.5rem 0;">
                <span style="background-color: #fee2e2; color: #991b1b; padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 600;">Layanan Darurat</span>
            </div>
            <p style="font-size: 0.85rem; margin-bottom: 1rem; color: var(--text-muted);">Layanan nomor tunggal panggilan darurat Kabupaten Tangerang yang dapat digunakan masyarakat saat terjadi kondisi darurat.</p>
            
            <p style="font-size: 0.85rem; font-weight: 600; color: #b91c1c; margin-bottom: 1rem;">Siaga 24 Jam • Gratis • Bebas Pulsa</p>
            
            <ul style="list-style: none; padding: 0; line-height: 1.4; text-align: left; font-size: 0.85rem; margin-bottom: 1.5rem;">
                <li style="margin-bottom: 0.3rem;">• Kebakaran</li>
                <li style="margin-bottom: 0.3rem;">• Kerusuhan dan masalah ketertiban umum</li>
                <li style="margin-bottom: 0.3rem;">• Kecelakaan dan masalah lalu lintas</li>
                <li style="margin-bottom: 0.3rem;">• Bencana alam</li>
                <li style="margin-bottom: 0.3rem;">• Ambulans dan penanganan kesehatan</li>
                <li style="margin-bottom: 0.3rem;">• Kejadian kriminal</li>
                <li style="margin-bottom: 0.3rem;">• Pohon/hewan berbahaya dll.</li>
            </ul>
            
            <a href="tel:112" class="btn btn-primary" style="background-color: #ef4444; border-color: #ef4444; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Hubungi 112
            </a>
        </div>

        <!-- Card 4: SiSabar -->
        <div class="content-box card card-hover" style="border: 1px solid #8b5cf6; background: linear-gradient(to bottom right, #ffffff, #f5f3ff);">
            <div class="card-icon" style="color: #8b5cf6;">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M12 8v4"></path><path d="M12 16h.01"></path></svg>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #6d28d9;">SiSabar</h3>
            <div style="margin: 0.5rem 0;">
                <span style="background-color: #ede9fe; color: #5b21b6; padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 600;">Layanan Pengaduan Kekerasan</span>
            </div>
            <p style="font-size: 0.85rem; margin-bottom: 1rem; color: var(--text-muted);">Layanan informasi dan pengaduan terkait kekerasan terhadap perempuan dan anak di Kabupaten Tangerang.</p>
            
            <ul style="list-style: none; padding: 0; line-height: 1.4; text-align: left; font-size: 0.85rem; margin-bottom: 1.5rem;">
                <li style="margin-bottom: 0.3rem;">• Perundungan / Bullying</li>
                <li style="margin-bottom: 0.3rem;">• Pelecehan seksual / Kekerasan seksual</li>
                <li style="margin-bottom: 0.3rem;">• Kekerasan fisik / Kekerasan psikis</li>
                <li style="margin-bottom: 0.3rem;">• Kekerasan dalam rumah tangga (KDRT)</li>
                <li style="margin-bottom: 0.3rem;">• Perdagangan orang / TPPO / Trafficking</li>
            </ul>

            <div style="margin-bottom: 1.5rem; text-align: center;">
                <p style="font-size: 0.8rem; color: var(--text-muted); margin-bottom: 0.2rem;">WhatsApp Pengaduan</p>
                <p style="font-size: 1.1rem; font-weight: 700; color: #6d28d9; margin: 0;">0812 1321 0681</p>
            </div>
            
            <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                <a href="https://wa.me/6281213210681" target="_blank" class="btn btn-primary" style="background-color: #10b981; border-color: #10b981; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                    Hubungi WhatsApp
                </a>
                <a href="https://www.sisabartangerangkab.go.id" target="_blank" class="btn btn-outline-primary" style="color: #6d28d9; border-color: #6d28d9; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                    Website SiSabar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
