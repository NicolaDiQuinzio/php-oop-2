<?php
$category1 = new Category(1, 'Dogs', 'fa-dog');
$category2 = new Category(2, 'Cats', 'fa-cat');

$product1 = new Product(1, 'Dog Food', 10.99, $category1, 'Food');
$product2 = new Product(2, 'Cat Toy', 5.99, $category2, 'Toy');
$product3 = new Product(3, 'Dog Bed', 29.99, $category1, 'Bed');
