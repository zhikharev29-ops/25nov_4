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

use App\Book;
use App\Electronics;
use App\Product;

$catalog = [
    new Book('Мастер и Маргарита', 650),
    new Book('Война и мир', 1200),
    new Book('Преступление и наказание', 480),
    new Electronics('Смартфон', 30000, 10),
    new Electronics('Наушники', 5000, 5),
    new Electronics('Ноутбук', 70000, 15),
];

$sum = 0.0;
foreach ($catalog as $item) {
    echo $item->getInfo() . PHP_EOL;
    $sum += $item->getFinalPrice();
}

echo PHP_EOL . 'Сумма конечных цен по каталогу: ' . number_format($sum, 2, '.', ' ') . ' руб.' . PHP_EOL;
echo 'Всего создано товаров: ' . Product::getCount() . PHP_EOL;
