<?php
    require_once("Acoesvideo.php");
    class Video implements Acoesvideo
    {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function __construct($titulo)
        {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function play() {
            if($this->reproduzindo == false) {
                $this->setReproduzindo(true);
            }
        }
        public function pause() {
            if($this->reproduzindo == true) {
                $this->setReproduzindo(false);
            }
        }
        public function like() {
            $this->setCurtidas($this->getCurtidas() + 1);
            echo "<p>LIKED!</p>";
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        public function getAvaliacao() {
            return $this->avaliacao;
        }
        public function setAvaliacao($avaliacao) {
            $media = ($this->avaliacao + $avaliacao) / $this->views;
            $this->avaliacao = $media;
        }
        public function getViews() {
            return $this->views;
        }
        public function setViews($views) {
            $this->views = $views;
        }
        public function getCurtidas() {
            return $this->curtidas;
        }
        public function setCurtidas($curtidas) {
            $this->curtidas = $curtidas;
        }
        public function getReproduzindo() {
            return $this->reproduzindo;
        }
        public function setReproduzindo($reproduzindo) {
            $this->reproduzindo = $reproduzindo;
        }
    }
    
?>