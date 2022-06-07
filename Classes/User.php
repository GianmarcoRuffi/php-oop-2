<?php

class User {
    protected $name;
    protected $surname;
    protected $email;

    function __construct($name, $surname, $email){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
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
}

?>