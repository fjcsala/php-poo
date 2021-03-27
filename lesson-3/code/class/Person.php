<?php
    class Person {
        public $name;
        private $age;
        protected $height;
        protected $weight;
        public $alive;
        // protected $documentNumber; // test

        public function walk() {
            if($this->alive == true) {
                echo("Walk");
            } else {
                echo("Impossible!");
            }
        }

        private function run() {
            if($this->alive == true) {
                echo("Run");
            } else {
                echo("Impossible!");
            }
        }

        protected function speak() {
            if($this->alive == true) {
                echo("Speak");
            } else {
                echo("Impossible!");
            }
        }

        /*
        public function setDocument($value) {
            $this->documentNumber = $value;
        }
        */
    }
?>