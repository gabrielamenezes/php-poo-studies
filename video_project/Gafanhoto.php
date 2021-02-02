<?php
    require_once("Pessoa.php");
    class Gafanhoto extends Pessoa
    {
        private $login;
        private $totAssistido;
        
        private function viuMaisUm() {
            $this->setTotAssistido($this->getTotAssistido() + 1);
        }
        public function getLogin() {
            return $this->login;
        }
        public function setLogin($login) {
            $this->login = $login;
        }
        public function getTotAssistido() {
            return $this->totAssistido;
        }
        public function setTotAssistido($tot) {
            $this->totAssistido = $tot;
        }
    }
    

?>