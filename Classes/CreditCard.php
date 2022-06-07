<?php
class creditCard{
    protected $number;
    protected $name;
    protected $surname;
    protected $expiration_date;
    

    function __construct($_number, $_name, $_surname, $expiration_date)
    {
        $this->number = $_number;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->expiration_date = $_expiration_date;
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
    public function setNumber($_number){
        $this->number = $_number;
    }
    public function getNumber(){
        return $this->number;
    }
    public function setExpirationDate($_expiration_date){
        if(strtotime(date('m/y')) > strtotime($_expiration_date)){
            throw new Exception('Carta non valida');
        }else{
            $this->expirationDate = $_expiration_date;
        }
    }
    public function getExpirationDate(){
        return $this->expirationDate;
    }
}
?>