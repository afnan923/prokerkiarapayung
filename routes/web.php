<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/umkm', [PageController::class, 'umkm'])->name('umkm');
Route::get('/desa-sehat', [PageController::class, 'desaSehat'])->name('desa_sehat');
Route::get('/desa-sehat/stunting', [PageController::class, 'stunting'])->name('stunting');
Route::get('/desa-sehat/statistik', [PageController::class, 'statistik'])->name('statistik');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
