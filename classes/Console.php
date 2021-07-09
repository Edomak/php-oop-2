<?php

require_once __DIR__ . "/Product.php";

class Console extends Product {

    protected $brand;
    protected $gb;

    function __construct($name, $price, $discount, $quantity, $brand, $gb) {

        parent::__construct($name, $price, $discount, $quantity);

        $this->brand = $brand;
        $this->size = $gb;
    }
}
