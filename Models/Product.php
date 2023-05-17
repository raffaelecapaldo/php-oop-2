<?php
include_once __DIR__.'/../Models/Category.php';
include_once __DIR__. '/../Models/FoodProduct.php';
include_once __DIR__. '/../Models/ToyProduct.php';
include_once __DIR__. '/../Models/BedProduct.php';



class Product{
    public $name, $category, $image;
    protected $price;


    /**
     * Summary of Product
     *
     * @param string $name
     * @param Category $category
     * @param string $image
     * @param float $price
     */
    function __construct(string $name, Category $category, string $image, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->image = $image;
        $this->price = $this->validatePrice($price);
    }

    /**
     * Summary of validatePrice
     * @param float $price
     * @return string
    */
    private function validatePrice(float $price) {
        if ($price < 0) {
            return "Negative value";
        }
        else {
          return  '€' . number_format($price, 2, ',');
        }
    }
}