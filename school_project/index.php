<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("Pessoa.php");
        require_once("Professor.php");
        require_once("Funcionario.php");
        require_once("Aluno.php");

        $p = [];

        $p[0] = new Pessoa();
        $p[1] = new Funcionario();
        $p[3] = new Professor();


    ?>
</body>
</html>