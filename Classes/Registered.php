<?php
    class Registered extends User {
        private $discount = 0.20;

        function __construct($_name, $_surname, $_email, $card_number, $card_expiration_date) {
            parent::__construct($_name, $_surname, $_email, $card_number, $card_expiration_date);
        }

        public function getDiscount() {     
            return $this->discount;
        }
        
    }
?>

