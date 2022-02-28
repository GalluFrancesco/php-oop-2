<?php

class User{
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
        $this->cart[] = $item;
    }

    public function getSub(){
        return $this->subscribed;
    }

    public function setSub($subscribed){
        $this->subscribed = $subscribed;
    }

    public function discount(){

        //se l'utente è iscritto la funzione restituisce il tasso
        //scontato dell'oggetto ovvero dovrò moltiplicare
        //il valore originale dell'oggetto per questo tasso per ottenere
        //il nuovo valore
        if($this->subscribed){
            return 0.8;
        }

        return 1;
    }
}