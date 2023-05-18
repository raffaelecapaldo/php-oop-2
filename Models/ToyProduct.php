<?php
include_once __DIR__. '/../Models/Product.php';
include_once __DIR__. '/../Traits/ObjectColor.php';

class ToyProduct extends Product{
    use ObjectColor;
    public $material, $requireSupervision;
    public $type = 'Toy';


    /**
     * Summary of ToyProduct
     *
     * @param string $name
     * @param Category $category
     * @param string $image
     * @param float $price
     * @param string $material
     * @param string $brand
     * @param boolean $requireSupervision
     */
    function __construct(string $brand, string $name, Category $category, string $image, float $price, string $material, bool $requireSupervision = false)
    {
        parent::__construct($brand, $name, $category, $image, $price);
        $this->material = $material;
        $this->requireSupervision = $requireSupervision;
        
    }
  
}