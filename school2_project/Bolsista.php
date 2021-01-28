<?php
    require_once("Aluno.php");

    class Bolsista extends Aluno {
        private $bolsa;
        
        public function renovarBolsa() {
            if($this->getBolsa = false) {
                $this->setBolsa(true);
                echo "<p>Bolsa Renovada</p>";
            } else {
                echo "<p>Bolsa não expirou</p>";
            }
        }
        
        

        public function getBolsa() {
            return $this->bolsa;
        }
        public function setBolsa($bolsa) {
            $this->bolsa = $bolsa;
        }
    }
?>