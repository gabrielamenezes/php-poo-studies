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
        require_once("Aluno.php");
        require_once("Bolsista.php");
        require_once("Professor.php");
        require_once("Tecnico.php");

        $t1 = new Tecnico();
        $t1->setNome("Maria");
        $t1->setCurso("Informática");
        $t1->setRegistro(12456);
        $t1->setMatricula(71028428);
        $t1->setSexo("F");
        $t1->setIdade(15);
        $t1->fazerAniv();
        $t1->pagarMensal();
        print_r($t1);

        $p1 = new Professor();
        $p1->setNome("Gustavo Guanabara");
        $p1->setIdade(38);
        $p1->setSexo("M");
        $p1->setEspecialidade("Programação Orientada à Objetos");
        $p1->receberAum(400);
        print_r($p1);

        $a1 = new Aluno();
        $a1->setNome("Lucas");
        $a1->setCurso("Biologia");
        $a1->setIdade(18);
        $a1->setSexo("M");
        $a1->setMatricula(32056244);
        $a1->pagarMensal();
        print_r($a1);

        $b1 = new Bolsista();
        $b1->setNome("Pedro");
        $b1->setCurso("Sistemas de Informação");
        $b1->setBolsa(62.2);
        $b1->setIdade(21);
        $b1->setMatricula(320154625);
        $b1->setSexo("M");
        $b1->pagarMensal();
        print_r($b1);
    ?>
</pre>
</body>
</html>