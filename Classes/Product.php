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

        public function setType($type){
            $this->type = $type;
        }
        public function getType(){
            return $this->type;
        }
        public function setPrice($_price){
            $this->price = $price;
        }
        public function getPrice(){
            return $this->price;
        }
        public function setDescription($_description){
            $this->description = $description;
        }
        public function getDescription(){
            return $this->description;
        }
    }
?>