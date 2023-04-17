<?php

class Size{
    public $height;
    public $width;
    public $depth;

    public function __construct(float $_height = 0,float $_width = 0,float $_depth = 0)
    {
        $this->height = $_height;
        $this->width = $_width;
        $this->depth = $_depth;
    }
}
