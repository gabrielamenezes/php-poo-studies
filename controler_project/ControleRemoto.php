<?php
require_once("Controlador.php");
    class ControleRemoto implements Controlador {
        
        //Atributos
        private $volume;
        private $ligado;
        private $tocando;

        //Métodos especiais
        public function __construct()
        {
            $this->setVolume(30);
            $this->setLigado(false);
            $this->setTocando(false);
        }

        private function getVolume() {
            return $this->volume;
        }

        private function setVolume($volume) {
            $this->volume = $volume;
        }

        private function getLigado() {
            return $this->ligado;
        }

        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }

        private function getTocando() {
            return $this->tocando;
        }

        private function setTocando($tocando) {
            $this->tocando = $tocando;
        }

        public function ligar() {
            $this->setLigado(true);
        }

        public function desligar() {
            $this->setLigado(false);
        }

        public function abrirMenu() {
            echo "<p>-------------MENU-----------</p>";
            echo "<br>Está Ligado?: " . ($this->getLigado()? "SIM" : "NÃO");
            echo "<br>Está tocando?: " . ($this->getTocando()? "SIM" : "NÃO");
            echo "<br>Volume: " . ($this->getVolume());

            for($i = 0; $i<= $this->getVolume(); $i+=10) {
                echo " |";
            }
            echo "<br>";
        }

        public function fecharMenu() {
            echo "<br>Fechando Menu...";
        }

        public function maisVolume() {
            if($this->getLigado()) {
                $this->setVolume($this->getVolume() + 5);
            }
        }

        public function menosVolume() {
            if($this->getLigado()) {
                $this->setVolume($this->getVolume() - 5);
            }

        }

        public function ligarMudo() {
            if($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }

        public function desligarMudo() {
            if($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(30);
            }
        }

        public function play() {
            if($this->getLigado() && !($this->getTocando())) {
                $this->setTocando(true);
            }
        }

        public function pause() {
            if($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }

    }


?>