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
            $newItem = new Food($item['id'], $item['name'], $item['price'], new Animal($item['animal']), $item['image'], $item['weight'], $item['ingradients']);
            $json = $newItem->getJsonData();
            array_push($result, $json);
            break;
        case 'toy':
            $newItem = new Toy($item['id'], $item['name'], $item['price'], new Animal($item['animal']), $item['image'], $item['features'], new Size($item['size']['height'],$item['size']['width'], $item['size']['depth']));
            $json = $newItem->getJsonData();
            array_push($result, $json);
            break;
        case 'gadjet': 
            $newItem = new Gadjet($item['id'], $item['name'], $item['price'], new Animal($item['animal']), $item['image'], $item['material'], new Size($item['size']['height'],$item['size']['width'], $item['size']['depth']));
            $json = $newItem->getJsonData();
            array_push($result, $json);
            break;
    }
}


header('Content-Type: application/json');

echo json_encode($result);


