<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $beritaList = [
        [
            'slug' => 'posyandu',
            'judul' => 'Mahasiswa KKN Global Institute Turut Serta Dampingi Pelayanan Kesehatan di Posyandu Payung VIII Desa Kiara Payung',
            'kategori' => 'Kesehatan',
            'lokasi' => 'Kiara Payung',
            'tanggal' => '11 September 2026',
            'foto' => 'berita_posyandu.png',
            'isi' => '<p>KIARA PAYUNG — Mahasiswa Kuliah Kerja Nyata (KKN) dari Global Institute turut serta mendampingi pelaksanaan kegiatan pelayanan kesehatan masyarakat di Posyandu Payung VIII, Desa Kiara Payung. Kehadiran para mahasiswa ini bertujuan untuk membantu para kader kesehatan dalam mengoptimalkan pelayanan bagi masyarakat setempat, khususnya balita, anak-anak, dan ibu hamil.</p>
                      <p>Suasana di lokasi pelaksanaan posyandu terlihat ramai dan penuh antusiasme. Para ibu yang membawa balita berdatangan dan mengantre secara tertib di area depan Posyandu Payung VIII untuk mendapatkan layanan pemeriksaan tumbuh kembang anak serta penimbangan rutin.</p>
                      <p>Beberapa bentuk peran dan kontribusi mahasiswa KKN Global Institute dalam kegiatan ini meliputi:</p>
                      <ul class="styled-list">
                          <li><strong>Pendataan dan Administrasi:</strong> Membantu pencatatan kehadiran warga serta pengisian buku registrasi kesehatan ibu dan anak.</li>
                          <li><strong>Pengukuran Tumbuh Kembang:</strong> Mendampingi kader saat penimbangan berat badan serta pengukuran tinggi badan balita.</li>
                          <li><strong>Pengaturan Alur Antrean:</strong> Menjaga kelancaran dan kerapian alur pemeriksaan agar pelayanan dapat berjalan lebih cepat serta teratur.</li>
                      </ul>
                      <p>Keikutsertaan mahasiswa KKN Global Institute ini disambut hangat oleh para kader Posyandu Payung VIII dan warga sekitar. Kegiatan ini menjadi wujud kepedulian nyata akademisi dalam mendukung program peningkatan kesehatan dan kesejahteraan masyarakat di tingkat desa.</p>'
        ],
        [
            'slug' => 'umkm',
            'judul' => 'Dukung Potensi Ekonomi Lokal, Camat Pakuhaji Tinjau Langsung Dapur UMKM Desa Kiara Payung',
            'kategori' => 'UMKM',
            'lokasi' => 'Kiara Payung',
            'tanggal' => '27 November 2025',
            'foto' => 'berita_kunjungan.png',
            'isi' => '<p>PAKUHAJI — Dalam rangka mendorong pertumbuhan dan penguatan ekonomi berbasis kemasyarakatan, Camat Pakuhaji melakukan kunjungan kerja langsung ke lokasi dapur produksi Usaha Mikro, Kecil, dan Menengah (UMKM) di Desa Kiara Payung pada Kamis (27/11).</p>
                      <p>Kunjungan ini dilakukan untuk melihat dari dekat alur proses produksi berbagai produk olahan lokal yang dihasilkan oleh para pelaku usaha warga setempat. Selain meninjau fasilitas dan kebersihan dapur produksi, peninjauan ini juga menjadi wadah dialog langsung antara pihak pemerintah kecamatan dan pelaku UMKM mengenai tantangan serta peluang pengembangan usaha di tingkat lokal.</p>
                      <p>Dalam kesempatan tersebut, Camat Pakuhaji memberikan apresiasi atas semangat para pelaku usaha desa yang terus berinovasi. Pemerintah Kecamatan Pakuhaji berkomitmen untuk terus memberikan dukungan, pendampingan, serta akses pengembangan agar produk-produk dari Desa Kiara Payung dapat semakin maju dan memiliki daya saing yang tinggi di pasar yang lebih luas.</p>
                      <p>Melalui kunjungan ini, diharapkan sinergi dan kolaborasi antara Pemerintah Kecamatan Pakuhaji, Pemerintah Desa Kiara Payung, serta para pelaku UMKM dapat terjalin semakin kuat. Langkah bersama ini menjadi komitmen nyata dalam memajukan perekonomian desa dan meningkatkan kesejahteraan masyarakat secara berkelanjutan.</p>'
        ],
        [
            'slug' => 'seminar-qris',
            'judul' => 'Dorong Digitalisasi Ekonomi Lokal, Mahasiswa KKN Global Institute Gelar Seminar QRIS untuk UMKM Desa',
            'kategori' => 'Digitalisasi',
            'lokasi' => 'Kiara Payung',
            'tanggal' => '17 September 2026',
            'foto' => 'berita_seminar.png',
            'isi' => '<p>KIARA PAYUNG — Mahasiswa Kuliah Kerja Nyata (KKN) Global Institute sukses menyelenggarakan kegiatan seminar edukasi bertajuk "Dari Tunai ke Digital: Mengenal QRIS untuk UMKM Desa". Acara yang ditujukan bagi para pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) setempat ini dihadiri langsung oleh dosen pembimbing dari Global Institute sebagai narasumber utama.</p>
                      <p>Suasana di dalam ruangan tampak interaktif saat pemateri menyampaikan pentingnya adopsi teknologi keuangan bagi keberlangsungan bisnis lokal. Para pelaku UMKM desa yang hadir mendengarkan dengan penuh antusias mengenai kemudahan transaksi non-tunai.</p>
                      <p>Beberapa poin utama yang dibahas dalam seminar ini meliputi:</p>
                      <ul class="styled-list">
                          <li><strong>Pentingnya Transaksi Digital:</strong> Mengenalkan manfaat pembayaran digital dalam mempermudah transaksi harian serta menjangkau konsumen yang lebih luas.</li>
                          <li><strong>Keunggulan dan Kemudahan QRIS:</strong> Menjelaskan keamanan, efisiensi, dan kepraktisan penggunaan satu kode QR untuk menerima pembayaran dari berbagai aplikasi dompet digital maupun m-banking.</li>
                          <li><strong>Pendampingan Pendaftaran:</strong> Memberikan panduan praktis dan langkah-langkah bagi pemilik UMKM desa agar dapat mendaftarkan usaha mereka menjadi mitra QRIS secara resmi.</li>
                      </ul>
                      <p>Melalui pelaksanaan seminar ini, mahasiswa KKN Global Institute bersama pihak kampus berharap para pelaku UMKM di desa dapat lebih siap menghadapi era digitalisasi ekonomi serta mampu meningkatkan daya saing usaha mereka.</p>'
        ]
    ];

    private $umkmList = [
        [
            'slug' => 'kiara-printing',
            'nama' => 'Kiara Printing',
            'jenis' => 'Percetakan & Digital Printing',
            'kategori_filter' => 'Percetakan',
            'deskripsi' => 'Layanan jasa percetakan dokumen, spanduk, banner, dan kebutuhan cetak lokal masyarakat.',
            'lokasi' => 'https://maps.google.com/?cid=8778781816850361701',
            'foto' => 'kiara-printing.png'
        ],
        [
            'slug' => 'warung-madura-kiara-payung',
            'nama' => 'Warung Madura Kiara Payung',
            'jenis' => 'Warung Kelontong / Sembako',
            'kategori_filter' => 'Sembako',
            'deskripsi' => 'Warung kelontong 24 jam yang menyediakan barang-barang kebutuhan pokok harian warga.',
            'lokasi' => 'https://maps.google.com/?cid=293161106647415095',
            'foto' => 'warung-madura.png'
        ],
        [
            'slug' => 'toko-sembako-h-ismail',
            'nama' => 'Toko Sembako H. Ismail',
            'jenis' => 'Grosir & Eceran Sembako',
            'kategori_filter' => 'Sembako',
            'deskripsi' => 'Penyedia sembako kebutuhan rumah tangga skala grosir dan eceran di Kiara Payung.',
            'lokasi' => 'https://maps.google.com/?cid=5415233413951226984',
            'foto' => 'toko-sembako-ismail.png'
        ],
        [
            'slug' => 'toko-sembako-zafran-edo',
            'nama' => 'Toko sembako Zafran&EDO',
            'jenis' => 'Toko Kelontong Sembako',
            'kategori_filter' => 'Sembako',
            'deskripsi' => 'Toko sembako lokal yang melayani penjualan bahan baku harian masyarakat sekitar.',
            'lokasi' => 'https://maps.google.com/?cid=13822329082686620858',
            'foto' => 'zafran-edo.png'
        ],
        [
            'slug' => 'dzulfikar-laundry',
            'nama' => 'Dzulfikar Laundry',
            'jenis' => 'Jasa Laundry Pakaian',
            'kategori_filter' => 'Laundry',
            'deskripsi' => 'Usaha jasa pencucian dan pengerjaan setrika pakaian harian warga lokal.',
            'lokasi' => 'https://maps.google.com/?cid=3233216124084064067',
            'foto' => 'dzulfikar-laundry.png'
        ],
        [
            'slug' => 'kyaa-laundry-expres',
            'nama' => 'Kyaa laundry expres',
            'jenis' => 'Jasa Express Laundry',
            'kategori_filter' => 'Laundry',
            'deskripsi' => 'Jasa pencucian pakaian kilat / express untuk masyarakat di wilayah Kiara Payung.',
            'lokasi' => 'https://maps.app.goo.gl/1SzVacfnn9edENiu5',
            'foto' => 'kyaa-laundry.png'
        ],
        [
            'slug' => 'syakira-cell',
            'nama' => 'Syakira Cell',
            'jenis' => 'Konter Pulsa & Aksesoris',
            'kategori_filter' => 'Konter & Teknologi',
            'deskripsi' => 'Outlet penyedia isi ulang pulsa, paket data internet, serta jual beli aksesoris gawai.',
            'lokasi' => 'https://maps.google.com/?cid=7913258929668410964',
            'foto' => 'syakira-cell.png'
        ],
        [
            'slug' => 'warung-beken-batagor',
            'nama' => 'Warung Beken Batagor',
            'jenis' => 'Kuliner / Jajanan Batagor',
            'kategori_filter' => 'Kuliner',
            'deskripsi' => 'Usaha kuliner jajanan lokal yang menjual batagor dan siomay untuk warga sekitar.',
            'lokasi' => 'https://maps.google.com/?cid=5007108888193701367',
            'foto' => 'warung-beken-batagor.png'
        ],
        [
            'slug' => 'rohman-fotocopy',
            'nama' => 'ROHMAN FOTOCOPY',
            'jenis' => 'Fotokopi & ATK',
            'kategori_filter' => 'Percetakan',
            'deskripsi' => 'Penyedia jasa penggandaan dokumen/fotokopi serta penjualan alat tulis kantor dan sekolah.',
            'lokasi' => 'https://maps.google.com/?cid=12643662728284600641',
            'foto' => 'rohman-fotocopy.png'
        ],
        [
            'slug' => 'warung-bakri',
            'nama' => 'Warung BAKRI',
            'jenis' => 'Warung Makan / Kuliner',
            'kategori_filter' => 'Kuliner',
            'deskripsi' => 'Warung makan lokal yang menyajikan menu olahan makanan rumahan harian.',
            'lokasi' => 'https://maps.google.com/?cid=16571855188400649021',
            'foto' => 'warung-bakri.png'
        ],
        [
            'slug' => 'kue-gipang-ibu-enjun-osin',
            'nama' => 'Kue Gipang Ibu Enjun/Osin',
            'jenis' => 'Produsen Kue Tradisional',
            'kategori_filter' => 'Kue & Makanan',
            'deskripsi' => 'Produsen kue tradisional Gipang khas Banten/Tangerang olahan beras ketan dan karamel gula.',
            'lokasi' => 'https://maps.google.com/?cid=5349044122290636160',
            'foto' => 'kue-gipang.png'
        ],
        [
            'slug' => 'kue-cincin-bu-niol',
            'nama' => 'Kue Cincin Bu Niol',
            'jenis' => 'Produsen Kue Tradisional',
            'kategori_filter' => 'Kue & Makanan',
            'deskripsi' => 'Usaha rumahan pembuat kue tradisional cincin (ali agrem) berbahan olahan tepung dan gula merah.',
            'lokasi' => 'https://maps.google.com/?cid=3553477159360393967',
            'foto' => 'kue-cincin.png'
        ],
        [
            'slug' => 'ibu-nasih-tukang-kue',
            'nama' => 'Ibu NASIH TUKANG KUE',
            'jenis' => 'Pembuat / Lapak Kue Basah',
            'kategori_filter' => 'Kue & Makanan',
            'deskripsi' => 'Pembuat kue tradisional basah dan jajanan pasar lokal untuk kebutuhan konsumsi harian/acara.',
            'lokasi' => 'https://maps.google.com/?cid=4006065192066056478',
            'foto' => 'ibu-nasih-kue.png'
        ],
        [
            'slug' => 'rosid-nastar-and-cake',
            'nama' => 'Rosid Nastar And Cake',
            'jenis' => 'Toko Kue & Olahan Pastry',
            'kategori_filter' => 'Kue & Makanan',
            'deskripsi' => 'Usaha olahan kue kering, nastar, dan aneka kue pesanan lokal.',
            'lokasi' => 'https://maps.google.com/?cid=8571692778530783464',
            'foto' => 'rosid-nastar-cake.png'
        ]
    ];

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
        return view('berita', ['beritaList' => $this->beritaList]);
    }

    public function beritaDetail($slug)
    {
        $berita = collect($this->beritaList)->firstWhere('slug', $slug);
        
        if (!$berita) {
            abort(404);
        }

        return view('berita_detail', ['berita' => $berita]);
    }

    public function umkm(Request $request)
    {
        $search = $request->query('search');
        $category = $request->query('category');

        $filtered = collect($this->umkmList);

        if ($category && $category !== 'Semua') {
            $filtered = $filtered->where('kategori_filter', $category);
        }

        if ($search) {
            $filtered = $filtered->filter(function($item) use ($search) {
                $s = strtolower($search);
                return str_contains(strtolower($item['nama']), $s) ||
                       str_contains(strtolower($item['jenis']), $s) ||
                       str_contains(strtolower($item['deskripsi']), $s);
            });
        }

        return view('umkm', [
            'umkmList' => $filtered->values()->all(),
            'search' => $search,
            'currentCategory' => $category ?? 'Semua',
            'categories' => ['Semua', 'Sembako', 'Percetakan', 'Laundry', 'Konter & Teknologi', 'Kuliner', 'Kue & Makanan']
        ]);
    }

    public function umkmDetail($slug)
    {
        $umkm = collect($this->umkmList)->firstWhere('slug', $slug);
        
        if (!$umkm) {
            abort(404);
        }

        return view('umkm_detail', ['umkm' => $umkm]);
    }

    public function stunting()
    {
        return view('stunting');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function infografis()
    {
        $apbdes = [
            'pendapatan' => [
                'total' => '3.375.448.000',
                'rincian' => [
                    ['nama' => 'Dana Desa (DDS)', 'jumlah' => '373.456.000'],
                    ['nama' => 'Bagi Hasil Pajak dan Retribusi (PBH)', 'jumlah' => '2.296.372.000'],
                    ['nama' => 'Alokasi Dana Desa (ADD)', 'jumlah' => '585.620.000'],
                    ['nama' => 'Bantuan Keuangan Provinsi (PBP)', 'jumlah' => '120.000.000'],
                    ['nama' => 'Pendapatan Lain-lain', 'jumlah' => '33.639.220'],
                ]
            ],
            'belanja' => [
                'total' => '4.302.756.636',
                'rincian' => [
                    ['nama' => 'Bidang Penyelenggaraan Pemerintahan Desa', 'jumlah' => '1.551.376.746'],
                    ['nama' => 'Bidang Pelaksanaan Pembangunan Desa', 'jumlah' => '2.463.478.690'],
                    ['nama' => 'Bidang Pembinaan Kemasyarakatan', 'jumlah' => '153.450.000'],
                    ['nama' => 'Bidang Pemberdayaan Masyarakat', 'jumlah' => '74.691.200'],
                    ['nama' => 'Bidang Penanggulangan Bencana, Darurat dan Mendesak Desa', 'jumlah' => '59.760.000'],
                ]
            ]
        ];

        $kependudukan = [
            'tanggal' => '10/02/2026',
            'tahun_ini' => [
                'penduduk_laki' => '9.409',
                'penduduk_perempuan' => '8.178',
                'kk_laki' => '5.570',
                'kk_perempuan' => '290'
            ],
            'tahun_lalu' => [
                'penduduk_laki' => '9.356',
                'penduduk_perempuan' => '8.123',
                'kk_laki' => '5.534',
                'kk_perempuan' => '278'
            ],
            'riwayat' => [
                ['tanggal' => '10/02/2026', 'penduduk_laki' => '9.409', 'penduduk_perempuan' => '8.178', 'kk_laki' => '5.570', 'kk_perempuan' => '290'],
                ['tanggal' => 'Tahun Lalu', 'penduduk_laki' => '9.356', 'penduduk_perempuan' => '8.123', 'kk_laki' => '5.534', 'kk_perempuan' => '278'],
            ]
        ];

        $kesejahteraan = [
            'tanggal' => '11/02/2026',
            'terbaru' => [
                ['nama' => 'Pra-Sejahtera', 'jumlah' => '5.570'],
                ['nama' => 'Sejahtera 1', 'jumlah' => '1.280'],
                ['nama' => 'Sejahtera 2', 'jumlah' => '2.135'],
                ['nama' => 'Sejahtera 3', 'jumlah' => '1.078'],
                ['nama' => 'Sejahtera 3+', 'jumlah' => '976'],
            ],
            'riwayat' => [
                ['tanggal' => '22/10/2025', 'pra' => '5.423', 's1' => '1.234', 's2' => '2.135', 's3' => '1.078', 's3plus' => '976'],
                ['tanggal' => '31/10/2024', 'pra' => '5.423', 's1' => '1.234', 's2' => '2.135', 's3' => '1.078', 's3plus' => '976'],
                ['tanggal' => '07/08/2024', 'pra' => '5.423', 's1' => '1.234', 's2' => '2.135', 's3' => '1.078', 's3plus' => '976'],
                ['tanggal' => '28/03/2023', 'pra' => '5.423', 's1' => '1.234', 's2' => '2.135', 's3' => '1.078', 's3plus' => '976'],
            ]
        ];

        return view('infografis', compact('apbdes', 'kependudukan', 'kesejahteraan'));
    }
}
