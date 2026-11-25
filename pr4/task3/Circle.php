<?php

class Circle extends Shape
{
    public function __construct(private float $radius) {}

    public function getName(): string
    {
        return 'Круг';
    }

    public function area(): float
    {
        return pi() * $this->radius ** 2;
    }

    public function perimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
}
