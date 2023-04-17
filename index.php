<?php

require_once __DIR__. '/db.php';
require_once __DIR__. '/models/Product.php';
require_once __DIR__. '/models/Food.php';
require_once __DIR__. '/models/Toy.php';
require_once __DIR__. '/models/Gadjet.php';
require_once __DIR__. '/models/Size.php';
require_once __DIR__. '/models/Animal.php';
require_once __DIR__. '/models/helpers/Helper.php';

$result = [];

foreach($items as $key => $item){
    switch($item['item-type']){
        case 'food':
            array_push($result, new Food($item['id'], $item['name'], $item['price'], new Animal($item['animal']), 'prova', $item['weight'], $item['ingradients']));
            break;
        case 'toy':
            array_push($result, new Toy($item['id'], $item['name'], $item['price'], new Animal($item['animal']), 'prova', $item['features'], new Size($item['size']['height'],$item['size']['width'], $item['size']['depth'])));
            break;
        case 'gadjet': 
            array_push($result, new Gadjet($item['id'], $item['name'], $item['price'], new Animal($item['animal']), 'prova', $item['material'], new Size($item['size']['height'],$item['size']['width'], $item['size']['depth'])));
            break;
    }
}

var_dump($result);
