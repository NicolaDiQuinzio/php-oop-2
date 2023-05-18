<?php
class Product {
    public $id;
    public $title;
    public $price;
    public $image;
    public $category;
    public $type;

    public function __construct($id, $title, $price, $image, $category, $type) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
    }
    public function generateCard() {
        $categoryIcon = '<i class="fa-solid' . $this->category->icon . '"></i>';
    
        $card = '<div class="card">';
        $card .= '<div class="card-body">';
        $card .= '<h5 class="card-title">' . $this->title . '</h5>';
        $card .= '<p class="card-text">';
        $card .= '<strong>Price:</strong> $' . $this->price . '<br>';
        $card .= '<strong>Category:</strong> ' . $this->category->name . '<br>';
        $card .= '<strong>Type:</strong> ' . $this->type . '<br>';
        $card .= '</p>';
        $card .= '<div class="icon">' . $categoryIcon . '</div>';
        $card .= '</div>';
        $card .= '</div>';
    
        return $card;
    }
}

class Category {
    public $id;
    public $name;
    public $icon;

    public function __construct($id, $name, $icon) {
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;
    }
}

class Shop {
    public $products;
    public $categories;

    public function __construct() {
        $this->products = [];
        $this->categories = [];
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function addCategory($category) {
        $this->categories[] = $category;
    }

    public function getProductsByCategory($categoryName) {
        $productsByCategory = [];

        foreach ($this->products as $product) {
            if ($product->category->name === $categoryName) {
                $productsByCategory[] = $product;
            }
        }

        return $productsByCategory;
    }
}
