<?php
    class Registered extends User {
        public $discount = 0.20;
    
        


        function __construct($_name, $_surname, $_email, $_discount) {
            parent::__construct($_name, $_surname, $_email, $_discount);
            $this->discount = $_discount;
        }

        
    
        public function getDiscount() {     
            return $this->discount;
        }
        
    }
?>

