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

        //Construtor 

        public function __construct($title, $aut, $totp, $pag)
        {
            $this->setTitulo($title);
            $this->setAutor($aut);
            $this->setTotPaginas($totp);
            $this->setPagAtual($pag);
            $this->setAberto(false); //sempre que eu mostrar um livro, este estará fechado
            $this->setLeitor->getPessoa();
        }
        //Métodos Públicos
        public function detalhes() {
            echo "Título: " . $this->getTitulo();
            echo "Autor(a): " . $this->getAutor();
            echo "Páginas: ". $this->getTotPaginas();
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
        public function setAberto() {

        }

        public function getLeitor() {
            return $this->getLeitor();
        }
        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }

        //Métodos da interface

        public function abrir() {
            $this->setAberto(true);
        }
        public function fechar() {
            $this->setAberto(false);
        }
        public function folhear() {
            echo "<p>Página Atual: " . $this->getPagAtual() . "</p>";
            for($c = $this->pagAtual; $c <= $this->totPaginas; $c+=10) {
                echo "<p>Página: " . $this->setPagAtual($this->getPagAtual() + 10). "</p>";
            }
        }
        public function voltarPag()
        {
            
        }
    }

?>