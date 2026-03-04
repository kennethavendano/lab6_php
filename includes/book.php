<?php

class Book {

    public string $image;
    public string $title;
    public string $author;
    public int $rating;
    public float $price;
    public int $quantity;

    public function __construct($image, $title, $author, $rating, $price, $quantity) {
        $this->image = $image;
        $this->title = $title;
        $this->author = $author;
        $this->rating = $rating;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function checkInStock(): string {
        $message = "Out Of Stock";
        if ($this->quantity > 0) {
            $message = "In Stock";
        }
        return $message;
    }

    public function buy(): int {
        if ($this->quantity > 0) {
            $this->quantity = $this->quantity - 1;
        }
        return $this->quantity;
    }

    public function showRatingStars(): string {
        $stars = "";
        $tempRating = $this->rating;

        for ($i = 0; $i < 5; $i++) {
            if ($tempRating > 0) {
                $stars .= '<span class="fa fa-star checked"></span>';
                $tempRating = $tempRating - 1;
            } else {
                $stars .= '<span class="fa fa-star"></span>';
            }
        }

        return $stars;
    }
}


$books = [
    new Book("images/hunger-games.jpeg", "The Hunger Games", "Suzanne Collins", 5, 14.99, 1),
    new Book("images/catching-fire.jpeg", "Catching Fire", "Suzanne Collins", 4, 13.99, 3),
    new Book("images/mockingjay.jpeg", "Mockingjay", "Suzanne Collins", 3, 10.99, 5)
];

?>
