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
        require_once("Livro.php");
        //pessoas
        $p = [];
        $p[0] = new Pessoa ("Clara Maria", 21, "F");
        $p[1] = new Pessoa("Pedro",  18, "M");
        //Livros
        $b = [];
        $b[0] = new Livro("Throne of Glass", "Sarah J. Mass", 400, $p[0]);
        $b[0] -> abrir();

        $b[1] = new Livro("Rainha Vermelha", "Victoria Aveyard", 600, $p[1]);
        $b[1] -> abrir();
        $b[1] -> folhear(80);
        $b[1]-> detalhes();
    ?>
</body>
</html>