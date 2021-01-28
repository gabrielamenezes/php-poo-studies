<?php
    require_once("Pessoa.php");
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;
        
        public function pagarMensal() {

        }

        public function getMatricula() {
            return $this->matricula;
        }
        public function setMatricula($matr) {
            $this->matricula = $matr;
        }
        public function getCurso() {
            return $this->curso;
        }
        public function setCurso($curso) {
            $this->curso = $curso;
        }
    }

?>