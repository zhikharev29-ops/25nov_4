<?php

spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$employees = [
    new Manager('Анна Смирнова', 100000),
    new Manager('Пётр Орлов', 2000),
    new Developer('Олег Иванов', 90000, 5),
    new Developer('Мария Петрова', 70000, 2),
    new Developer('Игорь Кузнецов', 3000, 0),
];

$total = 0.0;
foreach ($employees as $employee) {
    echo $employee->getInfo() . PHP_EOL;
    $total += $employee->getSalary() + $employee->calculateBonus();
}

echo PHP_EOL . 'Общая сумма выплат: ' . number_format($total, 2, '.', ' ') . ' руб.' . PHP_EOL;
echo 'Количество сотрудников: ' . Employee::getEmployeeCount() . PHP_EOL;
