
<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';

$categories = [
    new Category('dog', 'fa-dog'),
    new Category('cat', 'fa-cat'),
];

$product = new Product('prod', 3.73, 'https://tse3.mm.bing.net/th?id=OIP.QPQctaJJ0pDX0kKpqqK_twHaK5&pid=Api&P=0', $categories[0], 'product', 'pollo, verdure');
$crocchette = new Food('Royal Canini', 36, 'https://tse3.explicit.bing.net/th?id=OIP.LANbuhH_lLUA3h2l1EbxlgHaDt&pid=Api&P=0', $categories[1], 'food', 'pesce');
$ball = new Toy('Bouncy', 5, 'https://tse3.mm.bing.net/th?id=OIP.P1BMhoR1AJEr1sxaPTy5jQHaHa&pid=Api&P=0', $categories[0], 'toy', 'plastic');


$products = [

    $product,
    $crocchette,
    $ball,
];