<?php
/* Icinga Web 2 libpsr7 Module (c) 2017 Icinga Development Team | GPLv2+ */

spl_autoload_register(function ($class) {
    $prefix = 'Psr\\Http\\';
    $len = strlen($prefix);

    $baseDir = __DIR__ . '/library/vendor/Psr/Http/';

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative = substr($class, $len);

    $file = $baseDir . str_replace('\\', '/', $relative) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
