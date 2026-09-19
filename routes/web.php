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
