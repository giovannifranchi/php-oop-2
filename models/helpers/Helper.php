<?php

class Helper{
    static function _set_size($_size){
        if($_size->height == 0 || $_size->width == 0){
            return 'ND';
        }elseif($_size->depth == 0){
            return "{$_size->height} cm x {$_size->width} cm";
        }else {
            return "L{$_size->height} x P{$_size->width} x H{$_size->depth}";
        }
    }
}