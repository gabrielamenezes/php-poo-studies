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

        public function __construct($t, $a, $totp, $leitor)
        {
            $this->setTitulo($t);
            $this->setAutor($a);
            $this->setTotPaginas($totp);
            $this->setPagAtual(0);
            $this->aberto = false;
            $this->leitor = $leitor;
        }
        //Métodos Públicos
        public function detalhes() {
            echo "<p>Título: " . $this->getTitulo() . "</P>";
            echo "<p>Autor(a): " . $this->getAutor(). "</p>";
            echo "<p>Páginas: ". $this->getTotPaginas() . "</p>";
            echo "<p>Página Atual: ". $this->getPagAtual() . "</p>";
            echo "<p>Leitor: ". $this->leitor->getNome() . "</p>";
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
        //parâmetro de folhear diz qual página eu quero ir
        public function folhear($p) {

            if($this->aberto == true) {
                if($p < $this->totPaginas) {
                    $this->setPagAtual($p);
                }else {
                    echo $this->setPagAtual(0);
                } 
            } else {
                echo "<p>Você deve abrir o livro antes de folhear</p>";
            }
        }
        public function avancarPag()
        {
            if($this->pagAtual <= $this->totPaginas) {
                $this->setPagAtual($this->getPagAtual() + 1);
            } else {
                echo "Você finalizou o livro". $this->getTitulo;
            }
        }
        public function voltarPag()
        {
            if($this->pagAtual <= 1) {
            
                echo "Impossível voltar";
             
            } else {
                $this->setPagAtual($this->getPagAtual() - 1);
            }
        }
    }

?>