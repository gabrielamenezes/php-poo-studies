<?php
    require_once("Aluno.php");

    final class Tecnico extends Aluno {
        //registro profissional
        private $registroProf;
        
        public function praticar() {
            echo "<p>Praticando...</p>";
        }
        public function getRegistro() {
            return $this->registroProf;
        }
        public function setRegistro($registro) {
            $this->registroProf = $registro;
        }
    }
?>