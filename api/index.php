<?php

try {
    require __DIR__ . '/../vendor/autoload.php';

    /** @var \Illuminate\Foundation\Application $app */
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    $app->useStoragePath('/tmp');

    $app->handleRequest(\Illuminate\Http\Request::capture());
} catch (\Throwable $e) {
    header('Content-Type: text/plain');
    echo "DIAGNOSTIC ERROR:\n";
    echo "Message: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . " (Line: " . $e->getLine() . ")\n";
    echo "\nTrace:\n" . $e->getTraceAsString();
}
