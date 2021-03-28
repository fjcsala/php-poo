<?php
    require_once('class/Person.php');
    
    /*
    // no constructor
    $p1 = new Person;

    $p1->setName("Lucas");
    $p1->setAge(18);
    $p1->setAlive(true);

    echo("Nome: ".$p1->getName()."</br>");
    echo("Idade: ".$p1->getAge()."</br>");
    if($p1->getAlive() == 1) {
        echo("Vivo: Sim");
    } else {
        echo("Vivo: Não");
    }
    */

    /*
    // with constructor, no param
    $p2 = new Person;

    $p2->setName("Lucas");
    $p2->setAge(18);

    echo("Nome: ".$p2->getName()."</br>");
    echo("Idade: ".$p2->getAge()."</br>");
    if($p2->getAlive() == 1) {
        echo("Vivo: Sim");
    } else {
        echo("Vivo: Não");
    }
    */

    // with constructor, with param
    $p3 = new Person("Lucas", 18);

    echo("Nome: ".$p3->getName()."</br>");
    echo("Idade: ".$p3->getAge()."</br>");
    if($p3->getAlive() == 1) {
        echo("Vivo: Sim");
    } else {
        echo("Vivo: Não");
    }

?>