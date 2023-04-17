<?php

class Animal {
    public $type;
    public $icon;

    function __construct($_type)
    {
        $this->type = $_type;
        $this->icon = $this->_set_icon($_type);
    }

    public function _set_icon($_type){
        switch($_type){
            case 'fish':
                return 'fa-solid fa-fish-fins';
            case 'dog':
                return 'fa-solid fa-dog';
            case 'cat': 
                return 'fa-solid fa-cat';
            case 'bird':
                return 'fa-solid fa-crow';
            default:
                return 'fa-solid fa-question';
        }
    }
}

