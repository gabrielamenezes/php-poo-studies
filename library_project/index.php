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
        $p[0] = new Pessoa ("Clara Simões", 21, "F");
        //Livros
        $b = [];
        $b[0] = new Livro("Throne of Glass", "Sarah J. Mass", 400, 80,$p[0]);
        $b[0] -> abrir();
        $b[0] -> avancarPag();
        $b[0] -> detalhes();

    ?>
</body>
</html>