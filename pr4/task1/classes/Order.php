<?php

class Order
{
    public function __construct(
        private User $user,
        private array $products,
    ) {}

    public function getTotal(): float
    {
        $total = 0.0;
        foreach ($this->products as $product) {
            $total += $product->price;
        }
        return $total;
    }
}
