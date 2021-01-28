<?php
    require_once("Pessoa.php");

    class Professor extends Pessoa
    {
        private $especialidade;
        private $salario;
        
        public function receberAum($v) {
            $this->setSalario($this->getSalario() + $v);
        }

        public function getEspecialidade() {
            return $this->especialidade;
        }
        public function setEspecialidade($esp) {
            $this->especialidade = $esp;
        }
        public function getSalario() {
            return $this->salario;
        }
        public function setSalario($salario) {
            $this->salario = $salario;
        }
    }
    
?>