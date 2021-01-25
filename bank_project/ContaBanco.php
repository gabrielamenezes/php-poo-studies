<?php
    class ContaBanco {

        //criando os atributos 
        public $numconta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;


        //construtor 

        public function __construct() {
            $this->saldo = 0;
            $this->status = false;
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

        public function setTipo($tipo) {
            $this->tipo = $tipo;
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

        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);

            if($t == "CC" ) {
                $this-> setSaldo(50); //Conta corrente recebe 50 reais por ter aberto a conta

            } else if($t == "CP") {
                $this ->setSaldo(150); //Conta poupança recebe 150 reais por ter aberto a conta

            } else {
                echo "Tipo não reconhecido. Tente CP ou CC";
            }
        }

        public function fecharConta() {
            if($this->getSaldo() > 0) {
                echo "<p>A conta tem dinheiro. Impossível fechá-la</p>";
            } else if($this->getSaldo() < 0) {
                echo "<p>A conta está em débito</p>";
            } else {
                $this->setStatus(false);
                echo "Conta fechada<br>";
            }
        }

        public function depositar($valor) {
            if($this->getStatus()) { // não precisa colocar = true
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
                $mensal= 12;
            } else if ($this->tipo = "CP") {
                $mensal= 20;
            } else {
                echo "Tipo Inválido";
            }
            if($this->status=true) {
                if($this->getSaldo() > $mensal) {
                    $this->setSaldo($this->getSaldo() - $mensal);
                    echo "SALDO ATUAL: R$". number_format($this->getSaldo(), 2) . "<br>";
                } else {
                    echo "Saldo Insuficiente";
                }
            } else {
                echo "Impossível pagar. Verifique o status da sua conta";
            }
        }


    }


?>