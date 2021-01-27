<?php
    class Aluno extends Pessoa
    {
        //Atributos
        private $matricula;
        private $curso;

        //Métodos Públicos
        public function cancelarMatr() {
            $this->matricula = false;
        }

        //Métodos Especiais
    }
    

?>