<?php
require_once __DIR__ . "/product.php";

class Toy extends Product{

    private string $material;
    private string $typeCode;

    function __construct($name, $price, $barCode, $material) {
        parent::setName($name);
        parent::setPrice($price);
        parent::setBarCode($barCode);
        $this->setMaterial($material);;
        $this->typeCode="gioco";
      }

      public function getMaterial(){
        return $this->material;
      }
    
      public function setMaterial($material){
        $this->material = $material;
      }
}