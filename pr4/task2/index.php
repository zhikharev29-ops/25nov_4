<?php

spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/src/';

    if (str_starts_with($class, $prefix)) {
        $relative = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', '/', $relative) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});

use App\Models\Product;
use App\Services\PriceFormatter;

$product = new Product('Клавиатура', 1250.5);

echo 'Товар: ' . $product->title . PHP_EOL;
echo 'Цена: ' . PriceFormatter::format($product->price) . PHP_EOL;
