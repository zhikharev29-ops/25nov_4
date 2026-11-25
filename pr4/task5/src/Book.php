<?php

namespace App;

class Book extends Product
{
    public function getFinalPrice(): float
    {
        return $this->price + $this->price * self::TAX;
    }
}
