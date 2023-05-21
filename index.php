<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdzXAJnK3UmJv5CXqeuwXeuFjkN7/Q8Lei6K4zAIp8M/PKKOYLUKB1XTF+noJC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Animal Shop</title>
</head>
<body>
    <div class="container">
        <h1>Animal Shop</h1>
        <div class="row">
            <?php
            require 'classes.php';
            require 'products.php';
            $shop = new Shop();
            $shop->addCategory($category1);
            $shop->addCategory($category2);
            $shop->addProduct($product1);
            $shop->addProduct($product2);
            $shop->addProduct($product3);
            echo $shop->generateProductCards();
            ?>
        </div>
    </div>
</body>
</html>



