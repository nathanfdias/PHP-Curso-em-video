<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a == $b) ?"SIM":"NAO";
        $t = ($a === $b) ?"SIM":"NAO";

        echo"As variaveis sao iguais ? $r <br>";
        echo"As variaveis sao identicas ? $t <br>";

    ?>
</body>

</html>