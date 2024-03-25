<?php

class Products
{
    public function __construct(
        public $description,
        public $price
    ) {
        $this->description = $description;
        $this->price = $price;
    }
}
