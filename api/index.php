<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

header('Content-Type: text/plain');

echo "STEP 1: api/index.php OK\n";

try {
    echo "STEP 2: before public/index.php\n";

    $_ENV['LOG_CHANNEL'] = 'stderr';
    $_SERVER['LOG_CHANNEL'] = 'stderr';

    require __DIR__ . '/../public/index.php';

    echo "\nSTEP 3: public/index.php finished\n";

} catch (\Throwable $e) {

    echo "\n========== LARAVEL ERROR ==========\n";
    echo "TYPE: " . get_class($e) . "\n";
    echo "MESSAGE: " . $e->getMessage() . "\n";
    echo "FILE: " . $e->getFile() . "\n";
    echo "LINE: " . $e->getLine() . "\n";
    echo "\nTRACE:\n";
    echo $e->getTraceAsString();
    echo "\n===================================\n";
}