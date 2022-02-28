<?php

require_once __DIR__ . "/classes/food.php";
require_once __DIR__ . "/classes/toy.php";

$item1= new Food("cibo1", 12.40, 1001, 5);

var_dump($item1);