<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Buat struktur direktori storage di /tmp agar Laravel bisa menyimpan cache dan session
$storagePath = '/tmp/storage';
$directories = [
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Set storage path ke folder yang baru dibuat di /tmp
$app->useStoragePath($storagePath);

$app->handleRequest(Illuminate\Http\Request::capture());