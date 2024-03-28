<?php
class CatsProducts extends Products
{
    public function __construct($description, $price, public $isDog, public $kind, public $img)
    {
        parent::__construct($description, $price);
        $this->isDog = $isDog;
        $this->kind = $kind;
        $this->img = $img;
    }
};
