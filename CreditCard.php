<?php

trait CreditCard {
    protected $number;
    protected $expiration;
    protected $cvv;


    public function setPayment($_number, $_expiration, $_cvv){
        $this->number = $_number;
        $this->expiration = $_expiration;
        $this->cvv = $_cvv;

    }

    public function getPayment(){
        return 'Numero carta ' . $this->number . '<br>' . 'Data di Scadenza ' . $this->expiration . '<br>' . 'CVV ' . $this->cvv;
    }
}