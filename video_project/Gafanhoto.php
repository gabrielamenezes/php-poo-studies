<?php
    require_once("Pessoa.php");
    class Gafanhoto extends Pessoa
    {
        private $login;
        private $totAssistido;

        public function __construct($nome, $idade, $sexo, $login)
        {
            // Construtores pais não são chamados implicitamente se a classe filha define um construtor. Para executar o construtor da classe pai, uma chamada a parent::__construct() dentro do construtor da classe filha é necessária. Se a classe filha não definir um construtor, será herdado da classe pai como um método normal (se não foi declarado como privado). 
            parent::__construct($nome, $idade, $sexo);
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setLogin($login);
            $this->totAssistido = 0;
        }
        public function viuMaisUm() {
            $this->setTotAssistido($this->getTotAssistido() + 1);
        }
        public function getLogin() {
            return $this->login;
        }
        public function setLogin($login) {
            $this->login = $login;
        }
        public function getTotAssistido() {
            return $this->totAssistido;
        }
        public function setTotAssistido($tot) {
            $this->totAssistido = $tot;
        }
    }
    

?>