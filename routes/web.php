<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [PageController::class, 'beritaDetail'])->name('berita.detail');
Route::get('/umkm', [PageController::class, 'umkm'])->name('umkm');
Route::get('/umkm/{slug}', [PageController::class, 'umkmDetail'])->name('umkm.detail');
Route::get('/cegah-stunting', [PageController::class, 'stunting'])->name('stunting');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/infografis', [PageController::class, 'infografis'])->name('infografis');

Route::get('/sitemap.xml', function () {
    $urls = [
        url('/'),
        url('/tentang'),
        url('/berita'),
        url('/umkm'),
        url('/layanan'),
        url('/infografis'),
        url('/cegah-stunting')
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    
    foreach ($urls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . htmlspecialchars($url) . '</loc>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';
    }
    
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
});
