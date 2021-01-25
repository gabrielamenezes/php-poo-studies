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

        public function getVolume() {
            return $this->volume;
        }

        public function setVolume($volume) {
            $this->volume = $volume;
        }

        public function getLigado() {
            return $this->ligado;
        }

        public function setLigado($ligado) {
            $this->ligado = $ligado;
        }

        public function getTocando() {
            return $this->tocando;
        }
        public function setTocando($tocando) {
            $this->tocando = $tocando;
        }

        public function ligar() {
            $this->setLigado(true);
        }

        public function desligar() {
            $this->setLigado(false);
        }

        public function abrirMenu() {
            echo "<br>Está Ligado?: " . ($this->getLigado()) ?? "NÃO";
            echo "<br>Está tocando?: " . ($this->getTocando()) ?? "NÃO";
            echo "<br>Volume: " . ($this->getVolume());

            for($i = 0; $i<= $this->getVolume(); $i+=10) {
                echo "|";
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