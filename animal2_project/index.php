<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("Mamifero.php");
        require_once("Lobo.php");
        require_once("Cachorro.php");

        $m = new Mamifero();
        $l = new Lobo();
        $c = new Cachorro();
        
        $m->emitirSom();
        $l->emitirSom();
        $c->emitirSom();

        $c->reagirFrase("Olá");
        $c->reagirDono(false);
        $c->reagirHora(11,45);
        $c->reagirIdade(7,10);

    ?>
</body>
</html>