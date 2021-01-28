<?php
    require_once("Pessoa.php");
    //classe final não pode ter filhos
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;
        
        // Se eu usasse método final, ele não pode ser sobrescrito por suas subclasses. Então, pagarMensal de Aluno não seria mais sobrescrito por pagarMensal de bolsista
        public function pagarMensal() {
            //métodos de Pessoa estão protegidos e como Aluno é filho de pessoa, pode acessar diretamente o método
            echo "<p>Pagando mensalidade do aluno(a) <strong>$this->nome</strong></p>";
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