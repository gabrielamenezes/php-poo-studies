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
            echo "<p>Voando...</p>";
        }

        public function alimentar() {
            echo "<p>Comendo frutinhos</p>";
        }
        public function emitirSom()
        {
            echo "<p>Pruuu...</p>";
        }
    }


?>