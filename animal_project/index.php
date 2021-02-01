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
        require_once("Canguru.php");
        require_once("Cachorro.php");
        require_once("Cobra.php");
        require_once("Goldfish.php");
        require_once("Tartaruga.php");

        $m = new Mamifero();
        $c = new Canguru();
        $k = new Cachorro();
        $s = new Cobra();
        $t = new Tartaruga();

        $m-> locomover();
        $c->locomover();
        $k->locomover();
        $t->locomover();
        $k->emitirSom();
        $c->emitirSom();

    ?>
</body>
</html>