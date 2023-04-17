<?php

require_once __DIR__. '/Product.php';
require_once __DIR__. '/Size.php';
require_once __DIR__. '/helpers/Helper.php';

class Gadjet extends Product{
    private $material;
    private $size;

    function __construct(int $_id,string $_name,float $_price,Animal $_animal,string $_img, string $_material, Size $_size)
    {
        parent::__construct($_id, $_name, $_price, $_animal, $_img);
        $this->material = $_material;
        $this->size = Helper::_set_size($_size);
    }
}