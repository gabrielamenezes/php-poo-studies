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
        require("ContaBanco.php");
        $contaJubileu = new ContaBanco(false, 0);
        $contaJubileu -> setTipo("CP");
        $contaJubileu -> setDono("Jubileu Faria");
        $contaJubileu -> abrirConta();
        $contaJubileu -> setNumConta(1248);
        $contaJubileu -> getSaldo();
        $contaJubileu -> depositar(300);
        print_r($contaJubileu);

        $contaCleusa = new ContaBanco(false, 0);
        $contaCleusa -> setTipo("CC");
        $contaCleusa -> setDono("Cleusa Maria");
        $contaCleusa -> abrirConta();
        $contaCleusa -> setNumConta("3202");
        $contaCleusa -> depositar(500);
        $contaCleusa -> sacar(100);
        print_r($contaCleusa);

    ?>
    <pre>
</body>
</html>