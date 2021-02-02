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
        require_once("Visualizacao.php");
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 3 de GIT");
        $v[2]->play();
        print_r($v);
        $g[0] = new Gafanhoto("Gabriela", 21, "F", "gabimmz");
        $g[1] = new Gafanhoto("Pedro", 18, "M", "pedroh");
        //$g->ganhaExp();
        print_r($g);
        
        //AGREGANDO a minha visualização, o gafanhoto ao video
        $vis[0] = new Visualizacao($g[0], $v[2]); // Gabriela assiste aula de GIT
        $vis[1] = new Visualizacao($g[0], $v[0]);
        $vis[0]->avaliarP(80);
        $vis[1]->avaliar();
        print_r($vis);
    ?>
    </pre>
</body>
</html>