<?php

class Products
{
    public function __construct(
        public string $description,
        public string $price
    ) {
        $this->description = $description;
        $this->price = $price;
    }
}
