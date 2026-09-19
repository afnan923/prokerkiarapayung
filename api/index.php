<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Set storage path to /tmp to prevent read-only filesystem error on Vercel
$app->useStoragePath('/tmp');

$app->handleRequest(Illuminate\Http\Request::capture());