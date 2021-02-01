<?php
    require_once("Animal.php");
    class Ave {
        private $corPena;

        public function fazerNinho() {
            echo "Fazendo ninho";
        }

        public function getCorPena() {
            return $this->corPena;
        }
        public function setCorPena($cor) {
            $this->corPena = $cor;
        }
    }


?>