@extends('layouts.app')

@section('title', 'Infografis Desa')

@section('content')
<style>
/* CSS khusus Infografis menggunakan CSS variables bawaan */
.info-header {
    text-align: center;
    padding: 4rem 1rem 3rem;
    background-color: var(--bg-light);
    border-bottom: 1px solid var(--border-color);
}
.info-header h1 {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.info-header p {
    font-size: 1.1rem;
    color: var(--text-muted);
}
.info-section {
    padding: 3rem 1rem;
    max-width: 1000px;
    margin: 0 auto;
}
.info-section-title {
    font-size: 1.75rem;
    color: var(--text-main);
    margin-bottom: 2rem;
    border-bottom: 2px solid var(--primary-color);
    display: inline-block;
    padding-bottom: 0.5rem;
    text-transform: uppercase;
}
.info-subtitle {
    font-size: 1.25rem;
    color: var(--text-main);
    margin-bottom: 1.5rem;
    font-weight: 600;
}
.card-list {
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    overflow: hidden;
    margin-bottom: 2rem;
}
.card-list-header {
    background-color: var(--bg-light);
    padding: 1rem 1.5rem;
    font-weight: 700;
    font-size: 1.2rem;
    color: var(--primary-color);
    border-bottom: 1px solid var(--border-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}
.card-item {
    padding: 1rem 1.5rem;
    border-bottom: 1px solid var(--border-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--text-main);
}
.card-item:last-child {
    border-bottom: none;
}
.card-item-title {
    flex: 1;
    padding-right: 1rem;
}
.card-item-value {
    font-weight: 600;
    text-align: right;
    white-space: nowrap;
}
@media (max-width: 768px) {
    .card-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    .card-item-value {
        text-align: left;
        font-size: 1.1rem;
    }
}

/* Grid Kependudukan & Kesejahteraan */
.info-grid {
    display: grid;
    gap: 1.5rem;
    grid-template-columns: 1fr;
}
@media (min-width: 768px) {
    .info-grid.col-2 { grid-template-columns: repeat(2, 1fr); }
    .info-grid.col-5 { grid-template-columns: repeat(3, 1fr); } 
}
@media (min-width: 1024px) {
    .info-grid.col-5 { grid-template-columns: repeat(5, 1fr); }
}
.stat-card {
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-md);
    padding: 1.5rem;
    text-align: center;
}
.stat-card h4 {
    color: var(--text-muted);
    font-size: 0.95rem;
    margin-bottom: 0.5rem;
    font-weight: 500;
}
.stat-card .stat-value {
    color: var(--primary-color);
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}
.stat-card .stat-label {
    color: var(--text-main);
    font-weight: 600;
}
.stat-compare {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px dashed var(--border-color);
    font-size: 0.85rem;
    color: var(--text-muted);
    display: flex;
    justify-content: space-between;
}

/* Tabel */
.table-responsive {
    overflow-x: auto;
    width: 100%;
    margin-bottom: 2rem;
    border-radius: var(--radius-md);
    border: 1px solid var(--border-color);
}
.info-table {
    width: 100%;
    border-collapse: collapse;
    background: var(--bg-white);
    min-width: 600px; /* Force scroll on small screens */
}
.info-table th, .info-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid var(--border-color);
    color: var(--text-main);
}
.info-table th {
    background-color: var(--bg-light);
    font-weight: 600;
    color: var(--primary-color);
}
.info-table tr:last-child td {
    border-bottom: none;
}
.divider {
    height: 1px;
    background-color: var(--border-color);
    margin: 3rem 0;
}
.info-footer {
    text-align: center;
    font-size: 0.85rem;
    color: var(--text-muted);
    padding: 2rem 0;
    border-top: 1px solid var(--border-color);
    margin-top: 3rem;
}
</style>

<div class="info-header">
    <div class="container">
        <h1>Infografis Desa</h1>
        <p>Desa Kiara Payung<br>Kecamatan Pakuhaji, Kabupaten Tangerang</p>
        <p style="margin-top: 1rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">Informasi ringkas mengenai pendapatan dan belanja desa serta perkembangan kependudukan dan kesejahteraan keluarga.</p>
    </div>
</div>

<div class="container">
    
    <!-- APBDES -->
    <div class="info-section">
        <h2 class="info-section-title">APBDes 2026</h2>
        <div class="info-subtitle" style="color: var(--text-muted); font-weight: normal; margin-top:-1.5rem; margin-bottom:2rem;">Anggaran Pendapatan dan Belanja Desa</div>

        <div class="card-list">
            <div class="card-list-header">
                <span>Pendapatan Desa</span>
                <span>Rp{{ $apbdes['pendapatan']['total'] }}</span>
            </div>
            @foreach($apbdes['pendapatan']['rincian'] as $item)
            <div class="card-item">
                <span class="card-item-title">{{ $item['nama'] }}</span>
                <span class="card-item-value">Rp{{ $item['jumlah'] }}</span>
            </div>
            @endforeach
        </div>

        <div class="card-list">
            <div class="card-list-header" style="color: var(--text-main);">
                <span>Belanja Desa</span>
                <span>Rp{{ $apbdes['belanja']['total'] }}</span>
            </div>
            @foreach($apbdes['belanja']['rincian'] as $item)
            <div class="card-item">
                <span class="card-item-title">{{ $item['nama'] }}</span>
                <span class="card-item-value">Rp{{ $item['jumlah'] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    <div class="divider"></div>

    <!-- KEPENDUDUKAN -->
    <div class="info-section">
        <h2 class="info-section-title">Perkembangan Kependudukan</h2>
        <div style="margin-bottom: 2rem; color: var(--text-muted);">Data per tanggal: <strong>{{ $kependudukan['tanggal'] }}</strong></div>
        
        <h3 class="info-subtitle">Penduduk Tahun Ini</h3>
        <div class="info-grid col-2" style="margin-bottom: 2rem;">
            <div class="stat-card">
                <div class="stat-value">{{ $kependudukan['tahun_ini']['penduduk_laki'] }}</div>
                <div class="stat-label">Laki-laki</div>
                <div class="stat-compare">
                    <span>Tahun Lalu:</span>
                    <span>{{ $kependudukan['tahun_lalu']['penduduk_laki'] }} Laki-laki</span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-value">{{ $kependudukan['tahun_ini']['penduduk_perempuan'] }}</div>
                <div class="stat-label">Perempuan</div>
                <div class="stat-compare">
                    <span>Tahun Lalu:</span>
                    <span>{{ $kependudukan['tahun_lalu']['penduduk_perempuan'] }} Perempuan</span>
                </div>
            </div>
        </div>

        <h3 class="info-subtitle">Kepala Keluarga Tahun Ini</h3>
        <div class="info-grid col-2" style="margin-bottom: 3rem;">
            <div class="stat-card">
                <div class="stat-value">{{ $kependudukan['tahun_ini']['kk_laki'] }}</div>
                <div class="stat-label">KK Laki-laki</div>
                <div class="stat-compare">
                    <span>Tahun Lalu:</span>
                    <span>{{ $kependudukan['tahun_lalu']['kk_laki'] }} KK</span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-value">{{ $kependudukan['tahun_ini']['kk_perempuan'] }}</div>
                <div class="stat-label">KK Perempuan</div>
                <div class="stat-compare">
                    <span>Tahun Lalu:</span>
                    <span>{{ $kependudukan['tahun_lalu']['kk_perempuan'] }} KK</span>
                </div>
            </div>
        </div>

        <div style="margin-top: 3rem; margin-bottom: 3rem;">
            <h3 class="info-subtitle" style="text-align: center;">Komposisi Penduduk</h3>
            <div style="max-width: 400px; margin: 0 auto; background: var(--bg-white); padding: 1.5rem; border: 1px solid var(--border-color); border-radius: var(--radius-md); box-shadow: var(--shadow-sm);">
                <canvas id="kependudukanChart"></canvas>
            </div>
            <p style="text-align: center; font-size: 0.85rem; color: var(--text-muted); margin-top: 1rem;">Sumber: Data Kependudukan Sistem Informasi Desa</p>
        </div>

        <h3 class="info-subtitle">Riwayat Data Kependudukan</h3>
        <div class="table-responsive">
            <table class="info-table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Penduduk Laki-laki</th>
                        <th>Penduduk Perempuan</th>
                        <th>KK Laki-laki</th>
                        <th>KK Perempuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kependudukan['riwayat'] as $row)
                    <tr>
                        <td>{{ $row['tanggal'] }}</td>
                        <td>{{ $row['penduduk_laki'] }}</td>
                        <td>{{ $row['penduduk_perempuan'] }}</td>
                        <td>{{ $row['kk_laki'] }}</td>
                        <td>{{ $row['kk_perempuan'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="divider"></div>

    <!-- KESEJAHTERAAN -->
    <div class="info-section">
        <h2 class="info-section-title">Kesejahteraan Keluarga</h2>
        <div style="margin-bottom: 2rem; color: var(--text-muted);">Data per tanggal: <strong>{{ $kesejahteraan['tanggal'] }}</strong></div>
        
        <div class="info-grid col-5" style="margin-bottom: 3rem;">
            @foreach($kesejahteraan['terbaru'] as $item)
            <div class="stat-card">
                <h4>{{ $item['nama'] }}</h4>
                <div class="stat-value" style="font-size: 1.5rem;">{{ $item['jumlah'] }}</div>
                <div class="stat-label" style="font-size: 0.9rem;">KK</div>
            </div>
            @endforeach
        </div>

        <div style="margin-top: 3rem; margin-bottom: 3rem;">
            <h3 class="info-subtitle" style="text-align: center;">Komposisi Kesejahteraan Keluarga</h3>
            <div style="max-width: 400px; margin: 0 auto; background: var(--bg-white); padding: 1.5rem; border: 1px solid var(--border-color); border-radius: var(--radius-md); box-shadow: var(--shadow-sm);">
                <canvas id="kesejahteraanChart"></canvas>
            </div>
            <p style="text-align: center; font-size: 0.85rem; color: var(--text-muted); margin-top: 1rem;">Sumber: Data Kesejahteraan Sistem Informasi Desa</p>
        </div>

        <h3 class="info-subtitle">Riwayat Kesejahteraan Keluarga</h3>
        <div class="table-responsive">
            <table class="info-table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Pra-Sejahtera</th>
                        <th>Sejahtera 1</th>
                        <th>Sejahtera 2</th>
                        <th>Sejahtera 3</th>
                        <th>Sejahtera 3+</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kesejahteraan['riwayat'] as $row)
                    <tr>
                        <td>{{ $row['tanggal'] }}</td>
                        <td>{{ $row['pra'] }}</td>
                        <td>{{ $row['s1'] }}</td>
                        <td>{{ $row['s2'] }}</td>
                        <td>{{ $row['s3'] }}</td>
                        <td>{{ $row['s3plus'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="divider"></div>

    <!-- KESEHATAN -->
    <div class="info-section">
        <h2 class="info-section-title">Infografis Kesehatan</h2>
        <div style="margin-bottom: 2rem; color: var(--text-main); font-size: 1.1rem;">
            Informasi kesehatan dalam bentuk visual yang ringkas dan mudah dipahami.
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
            <div style="border: 1px solid var(--border-color); border-radius: var(--radius-md); overflow: hidden; background: var(--bg-white); box-shadow: var(--shadow-sm);">
                <img src="{{ asset('images/posyandu.png') }}" alt="Pencegahan Stunting" style="width: 100%; height: 200px; object-fit: cover; display: block;">
                <div style="padding: 1.25rem;">
                    <h3 style="font-size: 1.1rem; color: var(--text-main);">Pencegahan Stunting Sejak Dini</h3>
                </div>
            </div>
            
            <div style="border: 1px solid var(--border-color); border-radius: var(--radius-md); overflow: hidden; background: var(--bg-white); box-shadow: var(--shadow-sm);">
                <div style="width: 100%; height: 200px; background: var(--primary-color); display: flex; align-items: center; justify-content: center; color: white; padding: 2rem; text-align: center;">
                    <span style="font-size: 1.4rem; font-weight: 700; line-height: 1.4;">1.000 Hari Pertama Kehidupan (HPK)</span>
                </div>
                <div style="padding: 1.25rem;">
                    <h3 style="font-size: 1.1rem; color: var(--text-main);">Pentingnya 1000 HPK</h3>
                </div>
            </div>

            <div style="border: 1px solid var(--border-color); border-radius: var(--radius-md); overflow: hidden; background: var(--bg-white); box-shadow: var(--shadow-sm);">
                <div style="width: 100%; height: 200px; background: #10b981; display: flex; align-items: center; justify-content: center; color: white; padding: 2rem; text-align: center;">
                    <span style="font-size: 1.4rem; font-weight: 700; line-height: 1.4;">ASI Eksklusif & MPASI Sehat</span>
                </div>
                <div style="padding: 1.25rem;">
                    <h3 style="font-size: 1.1rem; color: var(--text-main);">Gizi Tepat Anak Balita</h3>
                </div>
            </div>
        </div>

        <h3 class="info-subtitle" style="border-bottom: 2px solid var(--border-color); padding-bottom: 0.5rem; display: inline-block;">Data Kesehatan</h3>
        <div style="background-color: var(--bg-light); border: 1px dashed var(--border-color); padding: 3rem 1.5rem; text-align: center; border-radius: var(--radius-md); color: var(--text-muted); font-size: 1.1rem; margin-top: 1.5rem;">
            <p style="margin: 0;">Data kesehatan Desa Kiara Payung akan ditampilkan berdasarkan data resmi yang tersedia.</p>
        </div>
    </div>

    <div class="info-footer">
        Sumber data: Infografik APBDes Desa Kiara Payung dan data Sistem Informasi Desa.
    </div>

</div>

<!-- Chart.js for Infografis -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const parseFormattedNumber = (str) => parseInt(str.replace(/\./g, ''), 10) || 0;

    // Data Kependudukan
    const laki = parseFormattedNumber("{{ $kependudukan['tahun_ini']['penduduk_laki'] }}");
    const perempuan = parseFormattedNumber("{{ $kependudukan['tahun_ini']['penduduk_perempuan'] }}");
    
    const ctxKependudukan = document.getElementById('kependudukanChart');
    if(ctxKependudukan) {
        new Chart(ctxKependudukan, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    data: [laki, perempuan],
                    backgroundColor: ['#3b82f6', '#ec4899'],
                    borderWidth: 1,
                    borderColor: '#ffffff'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: getComputedStyle(document.body).getPropertyValue('--text-main').trim() || '#1f2937'
                        }
                    }
                }
            }
        });
    }

    // Data Kesejahteraan
    const kesejahteraanLabels = [];
    const kesejahteraanData = [];
    
    @foreach($kesejahteraan['terbaru'] as $item)
        kesejahteraanLabels.push("{{ $item['nama'] }}");
        kesejahteraanData.push(parseFormattedNumber("{{ $item['jumlah'] }}"));
    @endforeach

    const ctxKesejahteraan = document.getElementById('kesejahteraanChart');
    if(ctxKesejahteraan) {
        new Chart(ctxKesejahteraan, {
            type: 'pie',
            data: {
                labels: kesejahteraanLabels,
                datasets: [{
                    data: kesejahteraanData,
                    backgroundColor: [
                        '#ef4444', // Pra-sejahtera
                        '#f59e0b', // S1
                        '#10b981', // S2
                        '#3b82f6', // S3
                        '#8b5cf6'  // S3+
                    ],
                    borderWidth: 1,
                    borderColor: '#ffffff'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: getComputedStyle(document.body).getPropertyValue('--text-main').trim() || '#1f2937'
                        }
                    }
                }
            }
        });
    }
});
</script>
@endsection
