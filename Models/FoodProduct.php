<?php
include_once __DIR__. '/../Models/Product.php';

class FoodProduct extends Product{
    public $expdate, $weight;
    public $type = 'Food';

    /**
     * Summary of FoodProduct
     *
     * @param string $name
     * @param Category $category
     * @param string $image
     * @param float $price
     * @param string $expdate
     *  @param string $brand
     * @param float $weight
     */
    function __construct(string $brand, string $name, Category $category, string $image, float $price, string $expdate, float $weight)
    {
        parent::__construct($brand, $name, $category, $image, $price);
        $this->expdate = $expdate;
        $this->weight = $this->addKg($weight);
    }
    /**
     * Summary of addKg
     *
     * @param float $weight
     * @return string
     */
    private function addKg($weight) {
        return $weight.'KG';
    }
}