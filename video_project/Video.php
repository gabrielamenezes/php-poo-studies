<?php
    require_once("Acoesvideo.php");
    class Video implements Acoesvideo
    {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function play() {
            if($this->pause == true || $this->reproduzindo == false) {
                $this->setReproduzindo(true);
            }
        }
        public function pause() {
            if($this->play == true || $this->reproduzindo == true) {
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
            $this->avaliacao = $avaliacao;
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