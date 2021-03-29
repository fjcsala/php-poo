<?php

class BankAccount {
    public $number;
    protected $type;
    private $owner;
    private $balance;
    private $status;

    public function openAccount($n) {
        $this->number;
    }

    public function closeAccount() {
        if($this->balance == 0 && $this->status == 1) {
            $this->status = 0;
            echo("Sua conta foi encerrada com sucesso!");
        } else {
            echo("Ocorreu um erro ao encerrar a sua conta!");
        }
    }

    public function depositAccount($v) {
        if($this->status == 1) {
            $this->balance = ($this->balance + $v);
            echo("Depósito efetuado com sucesso!");
        } else {
            echo("Ocorreu um erro ao efetuar o depósito!");
        }
    }

    public function withdrawAccount($v) {
        if($this->status == 1 && $this->balance >= $v) {
            $this->balance = ($this->balance - $v);
            echo("Saque efetuado com sucesso!");
        } else {
            echo("Ocorreu um erro ao efetuar o saque!");
        }
    }

    public function payTaxAccount() {
        if($this->type == "cc") {
            if ($this->status == 1 && $this->balance >= 12) {
                $this->balance = ($this->balance - 12);
                echo("Cobrança efetuada com sucesso!");
            } else {
                echo("Ocorreu um erro ao efetuar o pagamento da taxa!");
            }
        } else {
            if ($this->status == 1 && $this->balance >= 20) {
                $this->balance = ($this->balance - 20);
                echo("Cobrança efetuada com sucesso!");
            } else {
                echo("Ocorreu um erro ao efetuar o pagamento da taxa!");
            }
        }
    }

    public function __construct($n, $t, $o) {
        $this->number = $n;
        $this->typer = $t;
        $this->owner = $o;
        $this->status = 1;

        if ($t == "cc") {
            $this->balance = 50;
        } else {
            $this->balance = 150;
        }
    }

    public function getNumber() {

    }

    public function setNumber() {
        
    }

    public function getType() {

    }

    public function setType() {
        
    }

    public function getOwner() {

    }

    public function setOwner() {
        
    }

    public function getBalance() {

    }

    public function setBalance() {
        
    }

    public function getStatus() {

    }

    public function setStatus() {
        
    }
}

?>