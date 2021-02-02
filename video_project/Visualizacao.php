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
            //quando a visualização começar, dar +1 view para o vídeo
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }
        //poliformismo de sobrecarga no php
        public function avaliar() {
            $this->filme->setAvaliacao(5);
        }
        public function avaliarN($nota) {
            $this->filme->setAvaliacao($nota);
        }
        public function avaliarP($perc) {
            $nota = 0;
            if($perc < 20) {
                $nota = 3;
            } else if($perc <= 50) {
                $nota = 5;
            } else if($perc <= 80) {
                $nota = 8;
            } else {
                $nota = 10;
            }
        
            $this->filme->setAvaliacao($nota);
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