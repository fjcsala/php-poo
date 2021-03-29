<?php

    require_once ('class/BankAccount.php');

    $p1 = new BankAccount();
    $p1->openAccount("00001", "cp", "Jubileu");
    $p1->depositAccount(300);
    $p1->payTaxAccount();
    echo("Conta: ".$p1->getNumber()."</br>");
    if($p1->getType() == "cc") {
        echo("Tipo: Conta Corrente </br>");
    } else {
        echo("Tipo: Conta Poupança </br>");
    }
    echo("Nome: ".$p1->getOwner()."</br>");
    echo("Saldo: R$ ".$p1->getBalance()."</br>");

    echo("</p>");

    $p2 = new BankAccount();
    $p2->openAccount("00002", "cc", "Creusa");
    $p2->depositAccount(500);
    $p2->payTaxAccount();
    echo("Conta: ".$p2->getNumber()."</br>");
    if($p2->getType() == "cc") {
        echo("Tipo: Conta Corrente </br>");
    } else {
        echo("Tipo: Conta Poupança </br>");
    }
    echo("Nome: ".$p2->getOwner()."</br>");
    echo("Saldo: R$ ".$p2->getBalance()."</br>");

?>