<?php 
include_once __DIR__.'/../Models/Product.php';

$categories = [
    'dogs' => new Category('Dogs', 'icondog'),
    'cats' => new Category('Cats', 'iconcat')

];

$products = [
    new BedProduct('Cibo', $categories['dogs'], 'image', 5.35, 'velluto', 5)
];
var_dump($products[0]);