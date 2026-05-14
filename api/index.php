<?php
echo "<h1>PHP is working on Vercel!</h1>";
echo "<p>Current Directory: " . __DIR__ . "</p>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Testing Autoload: " . (file_exists(__DIR__ . '/../vendor/autoload.php') ? 'Found' : 'Not Found') . "</p>";
echo "<p>Testing Bootstrap: " . (file_exists(__DIR__ . '/../bootstrap/app.php') ? 'Found' : 'Not Found') . "</p>";
