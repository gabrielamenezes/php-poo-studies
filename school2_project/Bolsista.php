<?php
    require_once("Aluno.php");

    class Bolsista extends Aluno {
        private $bolsa;
        
        public function renovarBolsa() {
            echo "<p>Bolsa Renovada</p>";
        }
        
        public function pagarMensal() {
            //Sobrepõe método de Aluno.php porque eles tem o mesmo nome e mesma assinatura
            //PHP sobrepoe o método automaticamente
            echo "<p>$this->nome é bolsista! Então, paga com desconto!</p>";
        }

        public function getBolsa() {
            return $this->bolsa;
        }
        public function setBolsa($bolsa) {
            $this->bolsa = $bolsa;
        }
    }
?>