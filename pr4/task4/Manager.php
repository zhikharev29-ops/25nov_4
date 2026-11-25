<?php

class Manager extends Employee
{
    public function calculateBonus(): float
    {
        $bonus = $this->salary * 0.2;
        return $bonus < self::MIN_BONUS ? self::MIN_BONUS : $bonus;
    }
}
