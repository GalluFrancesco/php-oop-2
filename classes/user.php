<?php

class Product{
    private string  $name;
    private bool    $subscribed;
    private array   $cart;

    function __construct($name, $subscribed){
        $this->setName($name);
        $this->setSub($subscribed);

    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getCart(){
        return $this->cart;
    }

    public function addItem($item){
        $this->cart = $item;
    }

    public function getSub(){
        return $this->subscribed;
    }

    public function setSub($subscribed){
        $this->subscribed = $subscribed;
    }
}