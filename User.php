<?php

class User{
    protected $name;
    protected $surname;   
    protected $shoppingCart = [];
    protected $sale = 0;

    function __construct( $_name, $_surname){
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function getFullName(){
        return $this->name . ' ' . $this->surname;
    }

    public function buy( Product $product){
       
        $this->shoppingCart[] = $product;
    }

    public function totalCart(){

        $count = 0;
        
        foreach($this->shoppingCart as $product){
            $count += $product->getPrice();

            if($this->sale != 0){
                $count = $count - (($count * $this->sale) / 100);
            }
        }

        return number_format((float)$count, 2, '.', '');

        
        

    }
}