<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

try {
    require __DIR__ . '/../vendor/autoload.php';

    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // WAJIB: Ganti lokasi cache bootstrap ke /tmp agar PackageManifest tidak crash
    $app->useBootstrapPath('/tmp/storage/bootstrap');

    // Buat struktur direktori storage di /tmp agar Laravel bisa menyimpan cache dan session
    $storagePath = '/tmp/storage';
    $directories = [
        $storagePath . '/framework/cache/data',
        $storagePath . '/framework/sessions',
        $storagePath . '/framework/testing',
        $storagePath . '/framework/views',
        $storagePath . '/logs',
        $storagePath . '/bootstrap/cache',
    ];

    foreach ($directories as $dir) {
        if (!is_dir($dir)) {
            @mkdir($dir, 0777, true);
        }
    }

    $app->useStoragePath($storagePath);

    // Bypass Laravel's Exception Handler so we can see the ORIGINAL exception, 
    // not the "Target class [view] does not exist" secondary exception.
    $app->singleton(
        \Illuminate\Contracts\Debug\ExceptionHandler::class,
        new class implements \Illuminate\Contracts\Debug\ExceptionHandler {
            public function report(\Throwable $e) {}
            public function shouldReport(\Throwable $e) { return false; }
            public function render($request, \Throwable $e) {
                // Throw the original exception instead of trying to render a view
                throw $e;
            }
            public function renderForConsole($output, \Throwable $e) {}
        }
    );

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