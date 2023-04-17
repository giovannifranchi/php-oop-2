<?php

require_once __DIR__. '/Product.php';

class Food extends Product {
    private  $weight;
    private  $ingradients;

    public function __construct(int $_id,string $_name,float $_price,Animal $_animal,string $_img,int $_weight, array $_ingradients)
    {
        parent::__construct($_id, $_name, $_price, $_animal, $_img);    
        $this->weight = $_weight;
        $this->ingradients = $_ingradients;
    }

    public function getFood(): Food {
        return $this;
    }

    public function getJsonData() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'animal' => $this->animal,
            'img' => $this->img,
            'weight' => $this->weight,
            'ingradients' => $this->ingradients
        ];
    }
}


