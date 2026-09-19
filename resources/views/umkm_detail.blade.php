@extends('layouts.app')

@section('title', $umkm['nama'] . ' - UMKM Desa')

@section('content')
<div class="page-header">
    <div class="container" style="display: flex; flex-direction: column; align-items: center;">
        <div style="margin-bottom: 2rem;">
            <a href="{{ route('umkm') }}" style="background-color: var(--bg-white); color: var(--primary-color); padding: 0.6rem 1.2rem; border-radius: 99px; text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 0.5rem; box-shadow: var(--shadow-sm); transition: transform 0.2s;" onmouseover="this.style.transform='translateX(-5px)'" onmouseout="this.style.transform='translateX(0)'">
                &larr; Kembali ke UMKM
            </a>
        </div>
        
        <div style="margin-bottom: 1rem;">
            <span style="background: var(--primary-color); color: white; padding: 0.3rem 0.8rem; border-radius: 99px; font-size: 0.9rem; font-weight: bold; text-transform: uppercase;">
                {{ $umkm['jenis'] }}
            </span>
        </div>
        
        <h1>{{ $umkm['nama'] }}</h1>
    </div>
</div>

<div class="container content-section" style="max-width: 800px; margin: 4rem auto; min-height: 40vh;">
    <div class="card" style="padding: 0; border: 1px solid var(--border-color); box-shadow: var(--shadow-sm); border-radius: var(--radius-md); background-color: var(--bg-white); text-align: center; overflow: hidden;">
        @if(isset($umkm['foto']))
            <img src="{{ asset('images/umkm/' . $umkm['foto']) }}" alt="{{ $umkm['nama'] }}" style="width: 100%; height: 400px; object-fit: cover; border-bottom: 1px solid var(--border-color); display: block;">
        @endif
        
        <div style="padding: 3rem 2rem;">
            <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Deskripsi Usaha</h3>
            <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-main); margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto; opacity: 0.9;">
                {{ $umkm['deskripsi'] }}
            </p>
            
            <div style="padding-top: 2rem; border-top: 1px solid var(--border-color);">
                <p style="margin-bottom: 1rem; color: var(--text-muted); font-weight: 500;">Temukan lokasi usaha ini di Google Maps:</p>
                <a href="{{ $umkm['lokasi'] }}" target="_blank" rel="noopener noreferrer" style="display: inline-block; background-color: var(--primary-color); color: white; padding: 1rem 2rem; border-radius: var(--radius-md); text-decoration: none; font-size: 1.1rem; font-weight: bold; box-shadow: var(--shadow-md); transition: transform 0.2s, box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='var(--shadow-lg)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow-md)'">
                    📍 Buka Lokasi Maps
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
