<?php 
include_once __DIR__.'/../Models/Product.php';

$categories = [
    'dogs' => new Category('Dogs', 'icondog'),
    'cats' => new Category('Cats', 'iconcat')

];

$products = [
    new ToyProduct('Cibo', $categories['dogs'], 'image', 5.35, 'velluto')
];
var_dump($products[0]);