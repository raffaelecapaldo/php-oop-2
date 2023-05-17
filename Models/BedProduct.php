<?php
include_once __DIR__ . '/../Models/Product.php';
class BedProduct extends Product
{
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
        parent::__construct($name, $category, $image, $price, $brand);
        $this->fabric = $fabric;
        $this->washingTemperature = $washingTemperature . '°';
    }
}
