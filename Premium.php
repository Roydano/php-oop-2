<?php

   require_once 'User.php';
   require_once 'CreditCard.php';

   
   
   class Premium extends User{
       use CreditCard;
        
       protected $premium = true;
       protected $sale = 20;

       public function setPremium($_premium, $_sale){
           $this->premium = $_premium;
           $this->sale = $_sale;
       }
   }