<?php

require_once __DIR__ . '/Animal.php';

class Product {

    protected  $id;
    protected  $name;
    protected  $price;
    protected  $animal;
    protected  $img;

    function __construct(int $_id,string $_name,float $_price,Animal $_animal,string $_img)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->animal = $_animal;
        $this->img = $_img;
    }
}