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
        require_once("Video.php");
        require_once("Gafanhoto.php");
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 3 de GIT");
        $v[2]->play();
        print_r($v);
        $g[0] = new Gafanhoto("Gabriela", 21, "F", "gabimmz");
        //$g->ganhaExp();
        print_r($g);
    ?>
    </pre>
</body>
</html>