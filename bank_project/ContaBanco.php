<?php
    class ContaBanco {

        //criando os atributos 
        public $numconta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;


        //construtor 

        public function __construct($status, $saldo) {
            $this->setStatus($status);
            $this->setSaldo($saldo);
        }

        // criando os métodos

        public function getNumConta() {
            return $this ->numconta;
        }

        public function setNumConta($num) {
            $this ->numconta = $num;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($t) {
            $this->tipo = $t;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setDono($d) {
            $this->dono = $d;
        }

        public function getSaldo() {
            return $this ->saldo;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setStatus($stat) {
            $this->status = $stat;
        }

        public function abrirConta() {
            if($this->tipo == "CC" ) {
                $this->status = true;
                $this-> setSaldo(50);
                echo "Você solicitou a abertura de uma Conta Corrente. Abrindo... <br>";
                echo "Sua conta está {$this->getStatus()} <br>";
                echo "Por ter aberto uma CC. Nosso banco te beneficia com R$50,00 <br><br>";
            } else {
                $this ->status = true;
                $this ->setSaldo(150);
                echo "Você solicitou a abertura de uma Conta Poupança. Abrindo... <br>";
                echo "Sua conta está {$this->getStatus()} <br>";
                echo "Por ter aberto uma CP. Nosso banco te beneficia com R$150,00 <br><br>";
            }
        }

        public function depositar($valor) {
            if($this->status = true) {
                $this->setSaldo(($this->getSaldo() + $valor));
                echo "Você depositou R$". number_format($valor,2) . "<br>";
                echo "Saldo Atual: R$" . number_format($this->getSaldo(),2) . "<br><br>"; 
            } else {
                echo ("Não foi possível efetuar o depósito. Conta fechada <br>");
            }
        }

        public function sacar($valorSaque) {
            if($valorSaque > $this->getSaldo() || $this->status = false) {
                echo "Não foi possível sacar <br>";
            } else {
                echo "Você está sacando R$" . number_format($valorSaque, 2) . "<br>";
                $this->setSaldo($this->getSaldo() - $valorSaque);
                echo "Saldo Atual: R$" . number_format($this->getSaldo(),2) . "<br><br>";
            }
        }

        public function pagarMensal() {
            if($this->tipo = "CC") {
                $mensalC = 12;
                echo "Mensalidade: R$" . number_format($mensalC, 2) . "<br>";
                $this->setSaldo($this->getSaldo() - $mensalC);
                echo "Saldo Atual: R$" . number_format($this->getSaldo(), 2) . "<br>";
            } else {
                $mensalP = 20;
                echo "Mensalidade: R$" . number_format($mensalP, 2) . "<br>";
                $this->setSaldo($this->getSaldo() - $mensalP) . "<br>";
                echo "Saldo Atual: R$" . number_format($this->getSaldo(), 2) . "<br>";
            }
        }


    }


?>