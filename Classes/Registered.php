<?php
    class Registered extends User {
        private $discount = 0.20;

        function __construct($_name, $_surname, $_email) {
            parent::__construct($_name, $_surname, $_email);
        }

        public function getDiscount() {     
            return $this->discount;
        }
        
    }
?>

