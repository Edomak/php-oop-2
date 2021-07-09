<?php

class Product {
    protected $name;
    protected $price;
    protected $discount;
    protected $quantity;

    function __construct($name, $price, $discount, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
        $this->quantity = $quantity;
    }

    public function getName() {
        return $this->name;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function discount() {
       return $this->price -= $this->price * $this->discount / 100;
    }
}