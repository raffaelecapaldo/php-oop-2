<?php
include_once __DIR__ . '/../Models/Product.php';
include_once __DIR__. '/../Traits/ObjectColor.php';

class BedProduct extends Product
{
    use ObjectColor;

    public $fabric, $washingTemperature;
    public $type = 'Bed';

    /**
     * BedProduct summary
     *
     * @param string $name
     * @param Category $category
     * @param string $image
     * @param float $price
     * @param string $fabric
     * @param string $brand
     * @param integer $washingTemperature
     */
    function __construct(string $brand, string $name, Category $category, string $image, float $price, string $fabric, int $washingTemperature)
    {
        parent::__construct($brand, $name, $category, $image, $price);
        $this->fabric = $fabric;
        $this->washingTemperature = $washingTemperature . '°';
    }
}
