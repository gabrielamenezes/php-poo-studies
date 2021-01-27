<?php
    require_once("Pessoa.php");
    class Aluno extends Pessoa
    {
        //Atributos
        private $matricula;
        private $curso;

        //Métodos Públicos
        public function cancelarMatr() {
            $this->matricula = null;
        }

        //Métodos Especiais
        public function getMatricula() {
            return $this->matricula;
        }
        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }
        public function getCurso() {
            return $this->curso;
        }
        public function setCurso($curso) {
            $this->curso = $curso;
        }
    }
    

?>