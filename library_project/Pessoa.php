<?php
    class Pessoa {
        //Atributos
        private $nome;
        private $idade;
        private $sexo;

        //Construtor 

        public function __construct($nome, $age, $genre)
        {
            $this->setPessoa($nome);
            $this->setIdade($age);
            $this->setSexo($genre);
        }
        //Métodos Públicos
        public function fazerAniver() {
            $this->setIdade($this->getIdade() + 1);
            echo "<p>Idade: " . $this->getIdade() . "</p>";
        }

        //Métodos Especiais
        public function getNome() {
            return $this->nome;
        }
        public function setPessoa($nome) {
            $this->nome = $nome;
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
            echo "<p>Nome: ". $this->getNome() . "</p>";
            echo "<p>Idade: " . $this->getIdade(). "</p>";
            echo "<p>Sexo: " . $this->getSexo(). "</p>";
            echo "<hr>";
        }
    }


?>