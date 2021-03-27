<?php
    require_once('class/Person.php');

    $p1 = new Person;

    $p1->name = "João";
    // $p1->age = 23; // não é possível pois este atributo é privado
    // $p1->height = 1.88; // não é possível pois este atributo é protegido
    // $p1->weight = 65; // não é possível pois este atributo é protegido
    $p1->alive = true;

    $p1->walk();
    // $p1->speak(); // não é possível pois este método é protegido
    
    // $p1->setDocument(123456); // teste

    print_r($p1);
?>