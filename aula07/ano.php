<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $ano = $_GET["ano"];
        $idade = 2025 - $ano;

        echo "Quem nasceu em $ano tem idade de $idade anos.";

        $tipo = ($idade>=18 && $idade>65)?"OBRIGATORIO":"ISENTO";
        echo "<br>Voto: $tipo";
    ?>
</body>

</html>