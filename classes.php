<?php
trait Discountable {
    public function applyDiscount($percentage) {
        $discount = $this->price * ($percentage / 100);
        $this->price -= $discount;
    }
}

class InvalidCategoryException extends Exception {
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

class Product {
    use Discountable;

    public $id;
    public $title;
    public $price;
    public $category;
    public $type;

    public function __construct($id, $title, $price, $category, $type) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }

    public function generateCard() {
        $categoryIcon = '<i class="fas ' . $this->category->icon . '"></i>';

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

    public function generateProductCards() {
        $cards = '';
        foreach ($this->products as $product) {
            $cards .= $product->generateCard();
        }
        return $cards;
    }
}
