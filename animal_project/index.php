<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("Ave.php");
        require_once("Mamifero.php");
        require_once("Peixe.php");
        require_once("Reptil.php");

        $m = new Mamifero();
        $m->setPeso(5.5);
        $m->setIdade(2);
        $m->setCorPelo("Preto");
        $m->locomover();

        $a = new Ave();
        $a->locomover();

        $p = new Peixe();
        $p->locomover();

        $r= new Reptil();
        $r->locomover();

    ?>
</body>
</html>