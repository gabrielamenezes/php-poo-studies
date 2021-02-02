<?php
    require_once("Gafanhoto.php");
    require_once("Video.php");
    class Visualizacao 
    {
        private $espectador;
        private $filme;
        
        public function __construct($espec, $filme)
        {
            //sempre que instanciar essa classe, informar qual o espectador e filme
            $this->espectador = $espec;
            $this->filme = $filme;
        }
        //poliformismo de sobrecarga no php
        public function avaliar($msg) {
            echo "<p> COMENTÁRIO: " . $msg . "</p>";
        }
        public function avaliarN($nota) {
            echo "<p> NOTA: " . $nota . "</p>";
        }
        public function avaliarP($perc) {
            echo "<p> PERCENTUAL: " . $perc . "</p>";
        }

        //métodos getters e setters
        public function getEspectador() {
            return $this->espectador;
        }
        public function setEspectador($espectador) {
            $this->espectador = $espectador;
        }
        public function getFilme() {
            return $this->filme;
        }
        public function setFilme($filme) {
            $this->filme = $filme;
        }
    }


?>