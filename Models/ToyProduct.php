<?php
include_once __DIR__. '/../Models/Product.php';
class ToyProduct extends Product{
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
        parent::__construct($name, $category, $image, $price, $brand);
        $this->material = $material;
        $this->requireSupervision = $requireSupervision;
        
    }
  
}