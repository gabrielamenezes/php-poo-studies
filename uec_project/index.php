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
        //requerir classe
        require_once("Lutador.php");
        require_once("Luta.php");
        //array de lutadores
        $l = [];
        
        //lutadores (parâmetros para construtor)
        $l[0] = new Lutador("Pretty Boy",
         "França",31,1.75,68.9,11,3,1);
        $l[1] = new Lutador("Putscript",
         "Brasil", 29, 1.68, 57.8,14, 2, 3);
        $l[2] = new Lutador("ShapShadow", "EUA", 35,1.65,80.9,12,2,1);
        $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $l[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $l[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[5],$l[4]);
        $UEC01->lutar();
        $l[4]->status();
        $l[5]->status();
    ?>
    </pre>
</body>
</html>