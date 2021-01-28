<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        //Não precisa dar require_once na classe de Pessoa pois qualquer filho dela, mandará a classe
        require_once("Pessoa.php");
        require_once("Professor.php");
        require_once("Funcionario.php");
        require_once("Aluno.php");

        //Programa Principal

        $p1 = new Pessoa();
        $p2 = new Professor();
        $p3 = new Funcionario();
        $p4 = new Aluno();

        $p1->setNome("Pedro");
        $p2->setNome("Gabriela");
        $p3->setNome("Bruna");
        $p4->setNome("Bernardo");

        $p2->setEspecialidade("PHP");
        $p2->setSalario(12000);
        $p2->receberAumento();
        $p3->setSetor("Administração");
        $p3->mudarTrabalho();
        $p4->setCurso("Informática");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
    ?>
</pre>
</body>
</html>