<?php
    class Person {
        var $name;
        var $age;
        var $height;
        var $weight;
        var $alive;

        function walk() {
            if($this->alive == true) {
                echo("Walk");
            } else {
                echo("Impossible!");
            }
        }

        function run() {
            if($this->alive == true) {
                echo("Run");
            } else {
                echo("Impossible!");
            }
        }

        function speak() {
            if($this->alive == true) {
                echo("Speak");
            } else {
                echo("Impossible!");
            }
        }
    }
?>