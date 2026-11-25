<?php

spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/classes/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$user = new User('Иван', 'ivan@example.com');
$book = new Product('Книга', 1200);
$pen = new Product('Ручка', 350);
$order = new Order($user, [$book, $pen]);

echo 'Пользователь: ' . $user->getInfo() . PHP_EOL;
echo 'Итоговая сумма заказа: ' . $order->getTotal() . ' руб.' . PHP_EOL;
