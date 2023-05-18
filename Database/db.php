<?php
include_once __DIR__ . '/../Models/Product.php';

$categories = [
    'dogs' => new Category('Dogs', 'https://png.pngtree.com/png-vector/20230114/ourmid/pngtree-cute-dog-sticker-png-image_6562190.png'),
    'cats' => new Category('Cats', 'https://png.pngtree.com/png-clipart/20230308/ourmid/pngtree-cute-cat-sticker-cartoon-kitten-kitty-png-image_6635286.png')

];

$products = [
    new BedProduct('JOEJOY', 'Cuccia per cani interno', $categories['dogs'], 'https://m.media-amazon.com/images/I/71CulR93wEL._AC_SY450_.jpg', 37.99, 'Coton', 40),
    new ToyProduct('Diwujiji', 'Palla interattiva per gatti', $categories['cats'], 'https://m.media-amazon.com/images/I/61A68yzVSAL._AC_SY450_.jpg', 14.35, 'legno', false),
    new FoodProduct('Sheba', 'Creazioni speciali in salsa', $categories['cats'], 'https://m.media-amazon.com/images/I/61xgVYbBgfL._AC_SX679_PIbundle-22,TopRight,0,0_SH20_.jpg', 3.44, 'December 2024', 0.22),
    new BedProduct('MANRED', 'Cuccia per gatti con cuscino interno', $categories['cats'], 'https://m.media-amazon.com/images/I/91qaQd84TrL._AC_SY450_.jpg', 45.99, 'brushed cotton', 33),
    new FoodProduct('Caesar', 'Pollo e manzo saporiti', $categories['dogs'], 'https://m.media-amazon.com/images/I/71nSzTZ+kHL._AC_SX679_PIbundle-14,TopRight,0,0_SH20_.jpg', 3.99, 'March 2024', 0.55),
    new ToyProduct('Diwujiji', 'Palla interattiva per gatti', $categories['cats'], 'https://m.media-amazon.com/images/I/61A68yzVSAL._AC_SY450_.jpg', 14.35, 'legno', false),
    new BedProduct('MANRED', 'Cuccia per gatti con cuscino interno', $categories['cats'], 'https://m.media-amazon.com/images/I/91qaQd84TrL._AC_SY450_.jpg', 45.99, 'brushed cotton', 33),
    new BedProduct('JOEJOY', 'Cuccia per cani interno', $categories['dogs'], 'https://m.media-amazon.com/images/I/71CulR93wEL._AC_SY450_.jpg', 37.99, 'Coton', 40),







];

// Extra settings
try {
    $products[0]->setColor('Grey');
} catch (Exception $e) {
    echo 'Expection: ' . $e->getMessage();
}

//Scritto appositamente Pink con 1, simulazione di errore
try {
    $products[1]->setColor('P1nk');
} catch (Exception $e) {
    echo 'Expection: ' . $e->getMessage();
}

try {
    $products[3]->setColor('Brown');
} catch (Exception $e) {
    echo 'Expection: ' . $e->getMessage();
}

try {
    $products[5]->setColor('Pink');
} catch (Exception $e) {
    echo 'Expection: ' . $e->getMessage();
}


