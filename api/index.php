<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

try {
    require __DIR__ . '/../vendor/autoload.php';

    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // Buat struktur direktori storage di /tmp agar Laravel bisa menyimpan cache dan session
    $storagePath = '/tmp/storage';
    $directories = [
        $storagePath . '/framework/cache/data',
        $storagePath . '/framework/sessions',
        $storagePath . '/framework/testing',
        $storagePath . '/framework/views',
        $storagePath . '/logs',
    ];

    foreach ($directories as $dir) {
        if (!is_dir($dir)) {
            @mkdir($dir, 0777, true);
        }
    }

    // WAJIB: Ganti lokasi storage ke /tmp agar terhindar dari Read-Only Filesystem error
    $app->useStoragePath($storagePath);

    // Jalankan aplikasi (jangan panggil public/index.php karena dia akan menggunakan storage lokal)
    $app->handleRequest(Illuminate\Http\Request::capture());

} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/plain');
    echo "========== LARAVEL FATAL ERROR ==========\n";
    echo "TYPE: " . get_class($e) . "\n";
    echo "MESSAGE: " . $e->getMessage() . "\n";
    echo "FILE: " . $e->getFile() . "\n";
    echo "LINE: " . $e->getLine() . "\n";
    echo "\nTRACE:\n";
    echo $e->getTraceAsString();
    echo "\n=========================================\n";
}