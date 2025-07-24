<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"nao informado";
        $ano = isset($_GET["ano"])?$GET_["ano"]:0;
        $sexo = isset($_GET["sexo"])?$GET_["sexo"]:"sem sexo";
        $idade = date("Y") - $ano;

        echo "Nome: $nome <br>Sexo: $sexo <br>Idade: $idade anos.<br>";

    ?>
    <a href="02exercicio.html">Voltar</a>
</body>

</html>