<?php
    require_once("Animal.php");

    class Peixe extends Animal {
        private $corEscama;
        
        public function soltarBolha() {
            echo "<p>Soltando bolha</p>";
        }
        public function locomover() {
            echo "<p>Nadando...</p>";
        }
        public function alimentar() {
            echo "<p>Comendo algas...</p>";
        }
        public function emitirSom() {
            echo "<p>Peixe não faz som</p>";
        }

        public function getCorEscama() {
            return $this->corEscama;
        }
        public function setCorEscama($corEscama) {
            $this->corEscama = $corEscama;
        }
    }

?>