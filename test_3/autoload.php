<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

spl_autoload_register(function ($class) {
    $prefix = 'Sq\\';
    $base_dir = __DIR__ . '/src/';
    $len = strlen($prefix);
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
