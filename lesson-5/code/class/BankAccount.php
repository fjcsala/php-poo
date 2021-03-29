<?php

    class BankAccount {
        public $number;
        protected $type;
        private $owner;
        private $balance;
        private $status;

        public function openAccount($n, $t, $o) {
            $this->number = $n;
            $this->type = $t;
            $this->owner = $o;

            if ($t == "cc") {
                $this->balance = 50;
                echo("Conta corrente criada com sucesso!</br>");
            } else {
                $this->balance = 150;
                echo("Conta poupança criada com sucesso!</br>");
            }

            $this->status = 1;
        }

        public function closeAccount() {
            if($this->balance == 0 && $this->status == 1) {
                $this->status = 0;
                echo("Sua conta foi encerrada com sucesso!</br>");
            } else {
                echo("Ocorreu um erro ao encerrar a sua conta!</br>");
            }
        }

        public function depositAccount($v) {
            if($this->status == 1) {
                $this->balance = ($this->balance + $v);
                echo("Depósito efetuado com sucesso!</br>");
            } else {
                echo("Ocorreu um erro ao efetuar o depósito!</br>");
            }
        }

        public function withdrawAccount($v) {
            if($this->status == 1 && $this->balance >= $v) {
                $this->balance = ($this->balance - $v);
                echo("Saque efetuado com sucesso!</br>");
            } else {
                echo("Ocorreu um erro ao efetuar o saque!</br>");
            }
        }

        public function payTaxAccount() {
            if($this->type == "cc") {
                if ($this->status == 1 && $this->balance >= 12) {
                    $this->balance = ($this->balance - 12);
                    echo("Cobrança efetuada com sucesso!</br>");
                } else {
                    echo("Ocorreu um erro ao efetuar o pagamento da taxa!</br>");
                }
            } else {
                if ($this->status == 1 && $this->balance >= 20) {
                    $this->balance = ($this->balance - 20);
                    echo("Cobrança efetuada com sucesso!</br>");
                } else {
                    echo("Ocorreu um erro ao efetuar o pagamento da taxa!</br>");
                }
            }
        }

        public function __construct() {
            $this->status = 0;
            $this->balance = 0;
        }

        public function getNumber() {
            return $this->number;
        }

        public function setNumber($n) {
            return $this->number = $n;
        }

        public function getType() {
            return $this->type;
        }

        public function setType($t) {
            return $this->type = $t;
        }

        public function getOwner() {
            return $this->owner;
        }

        public function setOwner($o) {
            return $this->owner = $o;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function setBalance($b) {
            return $this->balance = $b;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setStatus($s) {
            return $this->status = $s;
        }
    }

?>