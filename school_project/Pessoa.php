<?php
    class Pessoa
    {
        //Atributos
        private $nome;
        private $idade;
        private $sexo;

        //Não vou usar construtor porque se fosse usa-lo, teria que fazer construtor para todas as classes. O "correto" será utilizar p1->setNome(Nomex) 

        //Métodos Públicos
        public function fazerAniv() {
            $this->setIdade($this->getIdade() + 1);
        }

        //Métodos Especiais
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
    }
    

?>