<?php
    require_once('class\Person.php');

    $p1 = new Person;

    $p1->name = "João";
    $p1->age = 23;
    $p1->height = 1.88;
    $p1->weight = 65;
    $p1->alive = true;

    $p1->walk();
    $p1->speak();

    print_r($p1);
?>