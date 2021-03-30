<?php
    class BankAccount {
        public $number;
        protected $type;
        private $owner;
        private $balance;
        private $status;

        public function openAccount($n, $t, $o) {
            $this->setNumber($n);
            $this->setAccountType($t);
            $this->setOwner($o);
            $this->setStatus(true);

            if ($t == "cc") {
                $this->setBalance(50);
                echo("Conta corrente criada com sucesso!</br>");
            } else {
                $this->setBalance(150);
                echo("Conta poupança criada com sucesso!</br>");
            }
        }

        public function closeAccount() {
            if($this->getBalance() == 0 && $this->getStatus() == true) {
                $this->setStatus(false);
                echo("Sua conta foi encerrada com sucesso!</br>");
            } else {
                echo("Ocorreu um erro ao encerrar a sua conta!</br>");
            }
        }

        public function depositAccount($v) {
            if($this->getStatus() == true) {
                $this->setBalance($this->getBalance() + $v);
                echo("Depósito efetuado com sucesso!</br>");
            } else {
                echo("Ocorreu um erro ao efetuar o depósito!</br>");
            }
        }

        public function withdrawAccount($v) {
            if($this->getStatus() == true && $this->getBalance() >= $v) {
                $this->setBalance($this->getBalance() - $v);
                echo("Saque efetuado com sucesso!</br>");
            } else {
                echo("Ocorreu um erro ao efetuar o saque!</br>");
            }
        }

        public function payTaxAccount() {
            if($this->getAccountType() == "cc") {
                if ($this->getStatus() == true && $this->getBalance() >= 12) {
                    $this->setBalance($this->getBalance() - 12);
                    echo("Cobrança efetuada com sucesso!</br>");
                } else {
                    echo("Ocorreu um erro ao efetuar o pagamento da taxa!</br>");
                }
            } else {
                if ($this->getStatus() == true && $this->getBalance() >= 20) {
                    $this->setBalance($this->getBalance() - 20);
                    echo("Cobrança efetuada com sucesso!</br>");
                } else {
                    echo("Ocorreu um erro ao efetuar o pagamento da taxa!</br>");
                }
            }
        }

        public function __construct() {
            $this->balance = 0;
            $this->status = false;
        }

        public function getNumber() {
            return $this->number;
        }

        public function setNumber($n) {
            return $this->number = $n;
        }

        public function getAccountType() {
            return $this->type;
        }

        public function setAccountType($t) {
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