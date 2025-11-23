<?php

$corePath = __DIR__ ."/cores/";
$coreFiles = scandir($corePath);

foreach ($coreFiles as $file) {
    if ($file !== "." && $file !== ".." && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        require_once $corePath . $file;
    }
}

require_once __DIR__ . '/../config.php';