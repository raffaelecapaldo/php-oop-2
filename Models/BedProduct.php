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
     * @param integer $washingTemperature
     */
    function __construct(string $name, Category $category, string $image, float $price, string $fabric, int $washingTemperature)
    {
        parent::__construct($name, $category, $image, $price);
        $this->fabric = $fabric;
        $this->washingTemperature = $washingTemperature . '°';
    }
}
