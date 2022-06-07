<?php
    Class Product {
        public $name;
        public $price;

        function __construct($name,$price)
        {
            $this->name = $name;
            $this->price = $price;
        }
    }
?>