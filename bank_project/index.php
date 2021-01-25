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
        $contaJubileu = new ContaBanco();
        $contaJubileu -> abrirConta("CP");
        $contaJubileu -> setDono("Jubileu Faria");
        $contaJubileu -> setNumConta(1248);
        $contaJubileu -> depositar(300);
        $contaJubileu -> pagarMensal();
        print_r($contaJubileu);

        $contaCleusa = new ContaBanco();
        $contaCleusa -> abrirConta("CC");
        $contaCleusa -> setDono("Cleusa Maria");
        $contaCleusa -> setNumConta("3202");
        $contaCleusa -> depositar(500);
        $contaCleusa -> sacar(100);
        print_r($contaCleusa);

    ?>
    <pre>
</body>
</html>