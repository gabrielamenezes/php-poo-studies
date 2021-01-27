<?php
    class Funcionario extends Pessoa
    {
        //Atributos
        private $setor;
        private $trabalhando;

        //Métodos Publicos
        public function mudarTrabalho() {
            if($this->trabalhando = true) {
                $this->trabalhando = false;
                echo "<br>Até amanha!";
            } else {
                $this->trabalhando = true;
                echo "<br>Bem vindo!";
            }
        }

        //Métodos especiais
        public function getSetor() {
            return $this -> setor;
        }
        public function setSetor($setor) {
            $this->setor = $setor;
        }
        public function getTrabalhando() {
            return $this->trabalhando;
        }
        public function setTrablhando($trabalhando) {
            $this->trabalhando = $trabalhando;
        }
    }
    


?>