<?php
    require_once("Mamifero.php");

    class Cachorro extends Mamifero
    {
        public function emitirSom()
        {
            echo "<p>Auauauau</p>";
        }

        public function abanarRabo() {
            echo "<p>Abanando rabo...</p>";
        }

        public function enterrarOsso() {
            echo "<p>Enterrando Osso...</p>";
        }
    }
    

?>