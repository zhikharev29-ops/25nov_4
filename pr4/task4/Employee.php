<?php

abstract class Employee
{
    public const MIN_BONUS = 500;

    private static int $employeeCount = 0;

    public function __construct(
        protected string $name,
        protected float $salary,
    ) {
        self::$employeeCount++;
    }

    abstract public function calculateBonus(): float;

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getInfo(): string
    {
        return sprintf(
            '%s: оклад %s руб., премия %s руб.',
            $this->name,
            number_format($this->salary, 2, '.', ' '),
            number_format($this->calculateBonus(), 2, '.', ' ')
        );
    }

    public static function getEmployeeCount(): int
    {
        return self::$employeeCount;
    }
}
