<?php
require_once 'classes.php';

// Creo delle categorie
$category1 = new Category(1, "Cani", "fa-dog");
$category2 = new Category(2, "Gatti", "fa-cat");

// Crep degli oggetti Product
$product1 = new Product(1, "Cibo per cani", 10.99, "", $category1, "Cibo");
$product2 = new Product(2, "Gioco per gatti", 5.99, "", $category2, "Gioco");

// Creo dello Shop
$shop = new Shop();
$shop->addProduct($product1);
$shop->addProduct($product2);
$shop->addCategory($category1);
$shop->addCategory($category2);

// Genero le cards dei prodotti
$productCards = '';
foreach ($shop->products as $product) {
    $productCards .= $product->generateCard();
}

echo $productCards;
?>
