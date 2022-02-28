<?php
require_once __DIR__ . "/product.php";

class Toy extends Product{

    private string $material;
    private string $typeCode;

    function __construct($name, $price, $barCode, $material) {
        parent::setName($name);
        parent::setPrice($price);
        parent::setName($barCode);
        $this->weight=$this->setWeight($material);;
        $this->typeCode="gioco";
      }

      public function getMaterial(){
        return $this->material;
      }
    
      public function setMaterial($material){
        $this->material = $material;
      }
}