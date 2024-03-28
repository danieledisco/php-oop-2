<?php
class DogsProducts extends Products
{
    public function __construct($description, $price, public bool $isDog, public string $training, public string $walking, public string $kind, public string $img)
    {
        parent::__construct($description, $price);
        $this->isDog = $isDog;
        $this->training->$training;
        $this->walking->$walking;
        $this->kind = $kind;
        $this->img = $img;
    }
};
