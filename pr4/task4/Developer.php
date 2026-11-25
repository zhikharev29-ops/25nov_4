<?php

class Developer extends Employee
{
    public function __construct(
        string $name,
        float $salary,
        private int $experienceYears,
    ) {
        parent::__construct($name, $salary);
    }

    public function calculateBonus(): float
    {
        $bonus = $this->salary * 0.15 + 1000 * $this->experienceYears;
        return $bonus < self::MIN_BONUS ? self::MIN_BONUS : $bonus;
    }
}
