<?php
class Product{
    // Propriétés de la classe
    private $name = '';
    private $category = '';
    private float $price = 0.0;
    private bool $promotion = false;
    private float $discount = 0.0;

    public function __construct($name='',$category='',$price=0.0,$promotion=false,$discount=0.0)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->promotion = $promotion;
        $this->discount = $discount;
    }

    public function getName(){
        return $this->name;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getPromotion(){
        return $this->promotion;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public static function sortByName($l1, $l2){
        return strtolower($l1->name) <=> strtolower($l2->name);
    }

    public static function sortByNameCategory($l1, $l2){
        if(strtolower($l1->category) <=> strtolower($l2->category)){
            return strtolower($l1->name) <=> strtolower($l2->name);
        } else {
            return strtolower($l1->category) <=> strtolower($l2->category);
        }
    }

}
