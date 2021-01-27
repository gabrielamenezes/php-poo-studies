<?php
    class Professor extends Pessoa
    {
        //Atributos
        private $especialidade;
        private $salario;
        //Métodos Publicos
        public function receberAumento() {
            $this->setSalario($this->getSalario() + 200);
        }
        //Métodos Especiais
        public function getEspecialidade() {
            return $this->especialidade;
        }
        public function setEspecialidade($especialidade) {
            $this->especialidade = $especialidade;
        }
        public function getSalario() {
            return $this->salario;
        }
        public function setSalario($salario) {
            $this->salario = $salario;
        }
    }
    

?>