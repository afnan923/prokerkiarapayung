<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function berita()
    {
        return view('berita');
    }

    public function umkm()
    {
        return view('umkm');
    }

    public function desaSehat()
    {
        return view('desa_sehat');
    }

    public function stunting()
    {
        return view('stunting');
    }

    public function statistik()
    {
        return view('statistik');
    }

    public function layanan()
    {
        return view('layanan');
    }
}
