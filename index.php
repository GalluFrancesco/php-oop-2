<?php

require_once __DIR__ . "/classes/food.php";
require_once __DIR__ . "/classes/toy.php";
require_once __DIR__ . "/classes/user.php";

$item1= new Food("cibo1", 12.40, 1001, 5);
$item2= new Food("cibo2", 10.00, 1002, 10);
$item3= new Food("cibo3", 7.35, 1003, 15);
$item4= new Toy("gioco1", 12.40, 2001, "gomma");
$item5= new Toy("gioco2", 12.40, 2002, "legno");

$user = new User("Pippo Baudo", true);

$user->addItem($item1);
$user->addItem($item3);
$user->addItem($item4);

var_dump($user);

