<?php
    //Classe raiz - uma classe que não é filha de ninguém
    //Classe abstrata - não pode ser instanciada, só pode servir como progenitora
    abstract class Pessoa
    {
        private $nome;
        private $idade;
        private $sexo;
        
        //Métodos Públicos
        public function FazerAniv() {
            $this->setIdade($this->getIdade() + 1);
        }
        //Métodos Especiais (getters e setters)

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