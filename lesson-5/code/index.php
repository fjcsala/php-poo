<?php
    require_once ('class/BankAccount.php');

    $p1 = new BankAccount();
    $p1->openAccount(00001, "cp", "Jubileu");
    $p1->depositAccount(300);
    $p1->payTaxAccount();
    echo("Conta: ".$p1->getNumber()."</br>");
    verifyAccountType($p1->getAccountType());
    echo("Nome: ".$p1->getOwner()."</br>");
    echo("Saldo: R$ ".$p1->getBalance()."</br>");

    echo("</p>");

    $p2 = new BankAccount();
    $p2->openAccount(00002, "cc", "Creusa");
    $p2->depositAccount(500);
    $p2->payTaxAccount();
    $p2->withdrawAccount(100);
    echo("Conta: ".$p2->getNumber()."</br>");
    verifyAccountType($p2->getAccountType());
    echo("Nome: ".$p2->getOwner()."</br>");
    echo("Saldo: R$ ".$p2->getBalance()."</br>");

    function verifyAccountType($o) {
        if($o == "cc") {
            echo("Tipo: Conta Corrente </br>");
        } else {
            echo("Tipo: Conta Poupança </br>");
        }
    }
?>