<?php

    class Product{
        protected $name;
        protected $genre;
        protected $price;

        function __construct($_name, $_price){
            $this->name = $_name;
            $this->price = $_price;

        }

        public function getPrice(){
            return $this->price;
        }


    }