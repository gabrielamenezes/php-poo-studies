<?php
    abstract class Pessoa
    {
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        public function __construct($nome, $idade, $sexo)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia = 0;
        }

        protected function ganhaExp() {
            $this->setExp($this->getExp() + 5);
        }

        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
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
        public function getExp() {
            return $this->exp;
        }
        public function setExp($exp) {
            $this->exp = $exp;
        }
    }
    

?>