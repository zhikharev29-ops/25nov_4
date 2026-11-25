<?php

namespace App;

class Electronics extends Product
{
    public function __construct(
        string $title,
        float $price,
        private float $warrantyPercent,
    ) {
        parent::__construct($title, $price);
    }

    public function getFinalPrice(): float
    {
        return $this->price + $this->price * self::TAX + $this->price * $this->warrantyPercent / 100;
    }
}
