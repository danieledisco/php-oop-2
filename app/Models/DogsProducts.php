<?php
class DogsProducts extends Products
{
    public function __construct($description, $price, public $kind, public $icons, public $img)
    {
        parent::__construct($description, $price);
        $this->kind = $kind;
        $this->icons = $icons;
        $this->img = $img;
    }
};
