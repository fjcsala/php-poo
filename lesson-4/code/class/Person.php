<?php
    class Person {
        public $name;
        private $age;
        public $alive;

        public function __construct($n, $a) {
            $this->name = $n;
            $this->age = $a;
            $this->alive = true;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($n) {
            $this->name = $n;
        }

        public function getAge() {
            return $this->age;
        }

        public function setAge($a) {
            $this->age = $a;
        }

        public function getAlive() {
            return $this->alive;
        }

        public function setAlive($a) {
            $this->alive = $a;
        }
    }
?>