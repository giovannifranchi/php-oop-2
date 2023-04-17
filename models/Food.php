<?php

require_once __DIR__. '/Product.php';

class Food extends Product {
    private int $weight;
    private array $ingradients;

    function __construct($_id, $_name, $_price, $_animal, $_img, $_weight, $_ingradients)
    {
        parent::__construct($_id, $_name, $_price, $_animal, $_img);    
        
        $this->weight = $_weight;
        $this->ingradients = $_ingradients;
    }


    public function _get_ingradients_string(){
        return implode(", ", $this->ingradients);
    }


    public function _get_weight(){
        return $this->weight;
    }

    public function _get_weight_in_grams(){
        return "{$this->weight}g";
    }


}