<?php

class User {
    protected $name;
    protected $surname;
    protected $email;
    protected $card_number;
    protected $card_expiration_date;
    

    function __construct($name, $surname, $email, $card_number, $card_expiration_date){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->card_number = $card_number;
        $this->card_expiration_date = $card_expiration_date;
    }

    public function setName($_name){
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }
    public function setSurname($_surname){
        $this->surname = $_surname;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setEmail($_email){
        if(!strpos($_email,'@')){
            throw new Exception("Inserire una email valida");
          } 
        $this->email = $_email;
    }
    public function getEmail(){
        return $this->email;
    }
    
    public function setCard($card_number){
        $this->card_number = $card_number;
    }
    public function getCard(){
        return $this->card_number;
    }
    public function setExpirationDate($card_expiration_date){
        if(strtotime(date('m/y')) > strtotime($card_expiration_date)){
            throw new Exception('Carta non valida');
        }else{
            $this->card_expiration_date = $card_expiration_date;
        }
    }
    public function getExpirationDate(){
        return $this->card_expiration_date;
    }
}

?>