<?php

spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});
$shapes = [
    new Circle(5),
    new Rectangle(4, 6),
    new Triangle(3, 4, 5),
    new Circle(2.5),
];
foreach ($shapes as $shape) {
    echo $shape->describe() . PHP_EOL;
}
// new Shape(); - выдаст ошибку "Cannot instantiate abstract class Shape".
// Shape абстрактный: в нём area() и perimeter() объявлены без тела, и если бы объект
// можно было создать, вызов этих методов было бы нечем выполнить. Объекты создаются
// только у наследников, которые реализуют все абстрактные методы.
