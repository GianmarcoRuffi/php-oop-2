<?php
    Class Product {
        public $type;
        public $price;
        public $description;

        function __construct($type,$price,$description)
        {
            $this->type = $type;
            $this->price = $price;
            $this->price = $description;
        }
    }
?>