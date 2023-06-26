<?php

    abstract class Shape{

        protected $color;
        protected $isFilled;

        public function __construct($color,$isFilled){
            $this->color=$color;
            $this->isFilled=$isFilled;
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color=$color;
        }

        public function isFilled(){
            return $this->isFilled;
        }

        public function setFilled($isFilled){
            $this->isFilled=$isFilled;
        }

        public function fill(){
            $this->isFilled=true;
        }

        abstract public function getArea();

    }

    class Square extends Shape{
        private $length;
        public function __construct($color,$isFilled,$length){
            parent::__construct($color,$isFilled);
            $this->length=$length;
        }

        public function getLength(){
            return $this->length;
        }

        public function setLength($length){
            $this->length=$length;
        }

        public function getArea(){
            return pow($this->length,2);
        }

    }

    class Circle extends Shape{
        
        public function __construct($color,$isFilled,$radius){
            parent::__construct($color,$isFilled);
            $this->radius=$radius;
        }

        public function getRadius(){
            return $this->radius;
        }

        public function setRadius($radius){
            $this->radius = $radius;
        }

        public function getArea(){
            return pi*pow($this->radius,2);
        }

    }
?>