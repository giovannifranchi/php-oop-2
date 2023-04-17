<?php

require_once __DIR__. '/Product.php';

class Toy extends Product{
    private $features;
    private $size;

    function __construct($_id, $_name, $_price, $_animal, $_img,array $_features, $_size)
    {
        
    }
}