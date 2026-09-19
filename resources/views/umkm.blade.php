@extends('layouts.app')

@section('title', 'UMKM Desa Kiarapayung | Kecamatan Pakuhaji')
@section('description', 'Daftar produk UMKM lokal, kerajinan, dan kuliner khas dari masyarakat Desa Kiarapayung, Kecamatan Pakuhaji, Kabupaten Tangerang.')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>UMKM Desa Kiara Payung</h1>
        <p>Kenali dan dukung berbagai usaha lokal masyarakat Desa Kiara Payung. Temukan berbagai usaha masyarakat mulai dari kuliner, sembako, laundry, percetakan, hingga jasa lainnya.</p>
    </div>
</div>

<div class="container content-section" style="padding-top: 2rem;">
    <!-- Search & Filter Form -->
    <div style="max-width: 800px; margin: 0 auto 3rem auto;">
        <form method="GET" action="{{ route('umkm') }}" style="display: flex; gap: 0.5rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
            <!-- Preserve category if selected -->
            @if(request('category') && request('category') !== 'Semua')
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            
            <input type="text" name="search" value="{{ request('search') }}" placeholder="🔍 Cari UMKM..." style="flex-grow: 1; padding: 0.8rem 1.2rem; border: 1px solid var(--border-color); border-radius: var(--radius-md); font-size: 1rem; min-width: 250px; background-color: var(--bg-white); color: var(--text-main);">
            <button type="submit" class="btn" style="background-color: var(--primary-color); color: white; padding: 0.8rem 1.5rem; border: none; border-radius: var(--radius-md); font-weight: bold; cursor: pointer;">Cari</button>
        </form>

        <!-- Category Filters -->
        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center;">
            @foreach($categories as $cat)
                <a href="{{ request()->fullUrlWithQuery(['category' => $cat]) }}" 
                   style="padding: 0.5rem 1rem; border-radius: 99px; text-decoration: none; font-size: 0.9rem; font-weight: 500; border: 1px solid var(--primary-color); 
                   {{ $currentCategory === $cat ? 'background-color: var(--primary-color); color: white;' : 'background-color: var(--bg-white); color: var(--text-main);' }}">
                    {{ $cat }}
                </a>
            @endforeach
        </div>
        
        <!-- Search Results Message / Reset -->
        @if(request('search'))
            <div style="text-align: center; margin-top: 1.5rem;">
                <p style="margin-bottom: 0.5rem; color: var(--text-muted);">Hasil pencarian untuk: <strong>{{ request('search') }}</strong></p>
                <a href="{{ route('umkm', ['category' => request('category')]) }}" style="color: var(--danger-color); text-decoration: underline; font-size: 0.9rem;">Reset Pencarian</a>
            </div>
        @endif
    </div>

    <!-- UMKM Grid -->
    @if(count($umkmList) > 0)
        <div class="grid-3" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem;">
            @foreach($umkmList as $umkm)
            <div class="card" style="display: flex; flex-direction: column; border: 1px solid var(--border-color); border-radius: var(--radius-md); background-color: var(--bg-white); overflow: hidden; box-shadow: var(--shadow-sm); transition: var(--transition);">
                <a href="{{ route('umkm.detail', $umkm['slug']) }}" style="text-decoration: none; color: inherit; flex-grow: 1; display: flex; flex-direction: column;" onmouseover="this.parentNode.style.transform='translateY(-3px)'; this.parentNode.style.boxShadow='var(--shadow-md)';" onmouseout="this.parentNode.style.transform='translateY(0)'; this.parentNode.style.boxShadow='var(--shadow-sm)';">
                    @if(isset($umkm['foto']))
                        <img src="{{ asset('images/umkm/' . $umkm['foto']) }}" alt="{{ $umkm['nama'] }}" style="width: 100%; height: 200px; object-fit: cover; border-bottom: 1px solid var(--border-color);">
                    @else
                        <div style="width: 100%; height: 200px; background-color: var(--bg-light); display: flex; align-items: center; justify-content: center; color: var(--text-muted); border-bottom: 1px solid var(--border-color);">
                            <span>Tanpa Foto</span>
                        </div>
                    @endif
                    <div style="padding: 1.25rem; flex-grow: 1;">
                        <h3 style="margin-bottom: 0.3rem; color: var(--text-main); font-size: 1.15rem; font-weight: 700;">{{ $umkm['nama'] }}</h3>
                        <p style="font-weight: 500; font-size: 0.85rem; margin-bottom: 0.8rem; color: var(--text-muted);">{{ $umkm['jenis'] }}</p>
                        <p style="color: var(--text-main); font-size: 0.9rem; line-height: 1.5; opacity: 0.9;">{{ $umkm['deskripsi'] }}</p>
                    </div>
                </a>
                
                <div style="padding: 0 1.25rem 1.25rem 1.25rem;">
                    <a href="{{ $umkm['lokasi'] }}" target="_blank" rel="noopener noreferrer" style="display: block; text-align: center; background-color: var(--primary-color); color: white; padding: 0.5rem; border-radius: var(--radius-md); text-decoration: none; font-size: 0.95rem; font-weight: 600; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                        📍 Lokasi
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <!-- Empty State -->
        <div style="text-align: center; padding: 4rem 1rem; background-color: var(--bg-light); border-radius: var(--radius-lg);">
            <div style="font-size: 3rem; margin-bottom: 1rem;">📭</div>
            <h3 style="margin-bottom: 0.5rem;">Tidak ada UMKM yang ditemukan.</h3>
            <p style="color: var(--text-muted); margin-bottom: 1.5rem;">Coba gunakan kata kunci lain atau hapus filter yang ada.</p>
            <a href="{{ route('umkm') }}" class="btn" style="background-color: var(--primary-color); color: white; padding: 0.6rem 1.2rem; border-radius: var(--radius-md); text-decoration: none; font-weight: bold;">
                Reset Pencarian
            </a>
        </div>
    @endif
</div>
@endsection
