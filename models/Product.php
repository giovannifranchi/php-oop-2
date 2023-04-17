<?php

require_once __DIR__ . '/Animal.php';

class Product {

    private int $id;
    private string $name;
    private float $price;
    private Animal $animal;
    private string $img;

    function __construct($_id, $_name, $_price, $_animal, $_img)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->animal = $_animal;
        $this->img = $_img;
    }
}