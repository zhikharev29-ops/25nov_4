<?php

namespace App\Models;

class Product
{
    public function __construct(
        public string $title,
        public float $price,
    ) {}
}
