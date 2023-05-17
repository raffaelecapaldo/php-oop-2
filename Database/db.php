<?php 
include_once __DIR__.'/../Models/Product.php';

$categories = [
    'dogs' => new Category('Dogs', 'https://png.pngtree.com/png-vector/20230114/ourmid/pngtree-cute-dog-sticker-png-image_6562190.png'),
    'cats' => new Category('Cats', 'https://png.pngtree.com/png-clipart/20230308/ourmid/pngtree-cute-cat-sticker-cartoon-kitten-kitty-png-image_6635286.png')

];

$products = [
    new BedProduct('Shiba', 'Letto', $categories['dogs'], 'https://www.rainews.it/resizegd/768x-/dl/img/2022/05/29/1653823152586_abrainridingarocketship.jpg', 5.35, 'velluto', 5),
    new ToyProduct('Shiba', 'lol', $categories['cats'], 'https://www.rainews.it/resizegd/768x-/dl/img/2022/05/29/1653823152586_abrainridingarocketship.jpg', 1.35, 'legno', true),
    new FoodProduct('Shiba', 'Creazioni speciali in salsa', $categories['cats'], 'https://m.media-amazon.com/images/I/61xgVYbBgfL._AC_SX679_PIbundle-22,TopRight,0,0_SH20_.jpg', 3.44, 'December 2024', 0.22)
];
