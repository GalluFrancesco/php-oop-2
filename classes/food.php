<?php
require_once __DIR__ . "/product.php";

class Food extends Product{

    private int $weight;
    private string $typeCode;

    function __construct($name, $price, $barCode, $weight) {
        parent::setName($name);
        parent::setPrice($price);
        parent::setbarCode($barCode);
        $this->setWeight($weight);;
        $this->typeCode="cibo";
      }

      public function getWeight(){
        return $this->weight;
      }
    
      public function setWeight($weight){
        $this->weight = $weight;
      }
}