<?php
    require_once("Pessoa.php");
    require_once("Publicacao.php");
    class Livro implements Publicacao {
        //Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($t, $a, $totp, $pagA, $reader)
        {
            $this->setTitulo($t);
            $this->setAutor($a);
            $this->setTotPaginas($totp);
            $this->setPagAtual($pagA);
            $this->aberto = false;
            $this->setLeitor($reader);
        }
        //Métodos Públicos
        public function detalhes() {
            echo "<p>Título: " . $this->getTitulo() . "</P>";
            echo "<p>Autor(a): " . $this->getAutor(). "</p>";
            echo "<p>Páginas: ". $this->getTotPaginas() . "</p>";
            echo "<p> Página Atual: ". $this->getPagAtual() . "</p>";
            echo "<hr>";
        }

        //Métodos Especiais
        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        

        public function getAutor() {
            return $this->autor;
        }
        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getTotPaginas() {
            return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }

        public function getPagAtual() {
            return $this->pagAtual;
        }
        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }

        public function getAberto() {
            return $this->aberto;
        }
        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }

        public function getLeitor() {
            return $this->leitor;
        }
        public function setLeitor($l1) {
            $this->leitor = $l1;
        }

        //Métodos da interface

        public function abrir() {
            $this->setAberto(true);
        }
        public function fechar() {
            $this->setAberto(false);
        }
        public function folhear() {

            if($this->aberto == true) {
                echo "<p>Página Atual: " . $this->getPagAtual() . "</p>";

                for($c = $this->pagAtual; $c < $this->totPaginas; $c+=10) {
                    $this->setPagAtual($this->getPagAtual() + 10);
                } 
            } else {
                echo "<p>Você deve abrir o livro antes de folhear</p>";
            }
        }
        public function avancarPag()
        {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
        public function voltarPag()
        {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }

?>