<?php
    require_once("Animal.php");
    class Ave extends Animal {
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

        public function locomover() {
            echo "Voando...";
        }

        public function alimentar() {
            echo "Ciscando...";
        }
        public function emitirSom()
        {
            echo "Pruuu...";
        }
    }


?>