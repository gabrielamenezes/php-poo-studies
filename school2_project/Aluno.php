<?php
    require_once("Pessoa.php");
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;
        
        public function pagarMensal() {
            //métodos de Pessoa estão protegidos e como Aluno é filho de pessoa, pode acessar diretamente o método
            echo "Pagando mensalidade do aluno $this->nome";
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