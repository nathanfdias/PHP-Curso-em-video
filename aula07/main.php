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
        $b = 5;
        
        // Correção 1: operador ternário correto
        // expressao?verdadeiro:falso
        $maior = ($a > $b) ? $a : $b;

        echo "Maior: $maior<br>";

        // Correção 2: variável $m não existe, precisa definir
        $m = 6;

        $sit = ($m > 7) ? "recuperação" : "aprovado";
        echo "Situação: $sit";

        //exercicio

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];

        echo "<br>os valores passados foram $n1 e $n2 <br>";
        $r = ($tipo == "soma") ? $n1+$n2 : $n1*$n2;
        echo "O resultado sera $r"

        // URL:  http://localhost:8000/main.php?a=5&b=3&op=soma
    ?>
</body>

</html>