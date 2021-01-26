<?php
    require_once("Pessoa.php");
    class Livro {
        //Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //Construtor 

        public function __construct($title, $aut, $totp, $pag, $open, $leit)
        {
            
        }
        //Métodos Públicos
        public function detalhes() {
            echo "Título: " . $this->getTitulo();
            echo "Autor(a): " . $this->getAutor();
            echo "Páginas: ". $this->getTotPaginas();
        }

        //Métodos Especiais
        public function getTitulo() {

        }
        public function setTitulo() {

        }
        

        public function getAutor() {

        }
        public function setAutor() {

        }

        public function getTotPaginas() {

        }
        public function setTotPaginas() {

        }

        public function getPagAtual() {

        }
        public function setPagAtual() {

        }

        public function getAberto() {

        }
        public function setAberto() {

        }

        public function getLeitor() {

        }
        public function setLeitor() {

        }
    }

?>