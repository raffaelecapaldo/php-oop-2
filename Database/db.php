<?php 
include __DIR__.'/../Models/Product.php';

$categories = [
    'dogs' => new Category('Dogs', 'icondog'),
    'cats' => new Category('Cats', 'iconcat')

];

$products = [
    new Product('Cibo', $categories['dogs'], 'image', 5.35)
];
var_dump($products[0]);