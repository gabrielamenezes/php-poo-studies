<?php
    class Pessoa {
        //Atributos
        private $pessoa;
        private $idade;
        private $sexo;

        //Construtor 

        public function __construct($person, $age, $genre)
        {
            $this->setPessoa($person);
            $this->setIdade($age);
            $this->setSexo($genre);
        }
        //Métodos Públicos
        public function fazerAniver() {
            $this->setIdade($this->getIdade() + 1);
        }

        //Métodos Especiais
        public function getPessoa() {
            return $this->pessoa;
        }
        public function setPessoa($pessoa) {
            $this->pessoa = $pessoa;
        }

        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        public function perfil() {
            echo "<p>Nome: ". $this->getPessoa() . "</p>";
            echo "<p>Idade: " . $this->getIdade(). "</p>";
            echo "<p>Sexo: " . $this->getSexo(). "</p>";
            echo "<hr>";
        }
    }


?>