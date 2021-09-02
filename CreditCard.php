<?php

trait CreditCard {
    protected $number;
    protected $yearExpiration;
    protected $cvv;


    public function setPayment($_number, $_yearExpiration, $_cvv){
        $this->number = $_number;
        $this->yearExpiration = $_yearExpiration;
        $this->cvv = $_cvv;

        if(!is_numeric($_yearExpiration)){
            throw new Exception('La carta deve contenere solo valori numerici');
        }
        elseif($_yearExpiration < 2021){
            throw new Exception('La carta potrebbe essere scaduta');
        }
        else{
            $this->yearExpiration = $_yearExpiration;
        }

    }

    public function getPayment(){
        return 'Numero carta ' . $this->number . '<br>' . 'Data di Scadenza ' . $this->yeraExpiration . '<br>' . 'CVV ' . $this->cvv;
    }
}