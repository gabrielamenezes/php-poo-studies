<?php
require_once("Lutador.php");
    class Luta {
        //Desafiado e Desafiante vão ser uma instância (diferentes) da classe Lutador. Um objeto da class Lutador --> Isso se chama tipo abstrato de dados 

        //Sendo assim, eu vou ter uma instância de Lutador e essa instância de Lutador vai ser o meu $desafiado e $desafiante. Então, eu crio uma relação entre esse tipo abstrato e uma instância de uma determinada classe

        // A agregação é conhecida como um relacionamento do tipo "TEM 1". Ou seja, Uma luta tem 1 lutador --> A classe B tem 1 atributo que é da classe A

        //atributos

        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //Métodos Públicos

        public function marcarLuta($l1,$l2) {
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            } else {
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }
        public function lutar() {
            if($this->aprovada) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch($vencedor) {
                    case 0: //Empate
                        echo "<p><strong>Empate</strong></p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1: // Ganhou desafiado
                        echo "<p><strong>" . $this->desafiado->getNome() . " GANHOU! </strong></p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2: // Ganhou desafiante
                        echo "<p><strong>". $this->desafiante->getNome() . " GANHOU!</strong></p>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                }
            } else {
                echo "<p>Luta não pode acontecer</p>";
            }
        }

        //Métodos especiais

        #Os métodos set desafiado e set desafiante vão receber um parâmetro do tipo Lutador. EU posso usar tipo abstrato de dados como parâmetros tb

        public function getDesafiado() {
            return $this->desafiado;
        }
        public function setDesafiado($desafiado) {
            $this->desafiado = $desafiado;
        }

        public function getDesafiante() {
            return $this->desafiante;

        }
        public function setDesafiante($desafiante) {
            $this->desafiante = $desafiante;
        }

        public function getRounds() {
            return $this->rounds;

        }

        public function setRounds($rounds) {
            $this->rounds = $rounds;
        }

        public function getAprovada() {
            return $this->aprovada;

        }

        public function setAprovada($aprovada) {
            $this->aprovada = $aprovada;
        }
    }

?>