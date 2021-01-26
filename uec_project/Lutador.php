<?php
require_once("Combate.php");
    class Lutador implements Combate {
        //Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Construtor 

        public function __construct($no, $na, $age, $alt, $pe, $win, $lose, $emp)
        {
            $this->setNome($no);
            $this->setNacionalidade($na);;
            $this->setIdade($age);
            $this->setAltura($alt);
            $this->setPeso($pe);
            $this->setVitorias($win);
            $this->setDerrotas($lose);
            $this->setEmpates($emp);
        }
        //Métodos Especiais
        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getAltura() {
            return $this->altura;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function getPeso() {
            return $this->peso;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
            //toda vez que eu setar um peso, vou setar uma categoria
            $this->setCategoria();
        }

        public function getCategoria() {
            return $this->categoria;
        }
        private function setCategoria() {
            if($this->peso < 52.2) {
                //muito abaixo do peso mínimo necessário
                $this->categoria = "Inválido";
            }else if($this->peso <= 70.3) {
                // Já se o lutador estiver acima de 52.2 e até 70.3, ele é da categoria LEVE
                $this->categoria = "Leve";
            }else if($this->peso <= 83.9) {
                //Se estiver acima 70.3 e abaixo ou igual a 83.9 - MÉDIO 
                $this->categoria = "Médio";
            }else if($this->peso <= 120.2) {
                //Se estiver acima de 83.9 e até 120.2 - PESADO
                $this->categoria = "Pesado";
            } else {
                //acima de 120.2 - INVÁLIDO
                $this->categoria = "Inválido";
            }
        }

        public function getVitorias() {
            return $this->vitorias;
        }
        public function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }
        public function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }
        public function getEmpates() {
            return $this->empates;
        }
        public function setEmpates($empates) {
            $this->empates = $empates;
        }

        //métodos abstratos

        public function apresentar() {
            echo "<p>-------------------------------------</p>";
            echo "CHEGOU A HORA! O Lutador " . $this->getNome();
            echo "veio diretamente de " . $this->getNacionalidade();
            echo "<p>Tem " . $this->getIdade() . " anos </p>";
            echo "<p>".$this->getAltura() . "m de altura</p>";
            echo "<p>Ele ganhou: " . $this->getVitorias() . " lutas</p>";
            echo "<p>Perdeu: " . $this->getDerrotas() . "</p>";
            echo "<p>Empatou: " . $this->getEmpates() . "</p>";
        }

        public function status() {
            echo "<p>-----------------------------------------</p>";
            echo "<p><strong>" . $this->getNome() . "</strong></p>";
            echo "<p><strong>CATEGORIA:</strong> " . $this->getCategoria() . "</p>";
            echo "<p>" . $this->getVitorias() . " vitórias </p>";
            echo "<p>" . $this->getDerrotas() . " derrotas </p>";
            echo "<p>" . $this-> getEmpates() . " empates </p>";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

    }

?>