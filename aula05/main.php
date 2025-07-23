<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            
            echo "<h2>Valores recebiddos: " .$n1. " e ". $n2. "</h2>";
            // URL: ?a=3&b=2

            // $n1 =3;
            // $n2 = 2;
            $m = ($n1 + $n2) / 2;
            echo "A soma vale ". ($n1+$n2);
            echo "<br/> A subtracao vale ". ($n1-$n2);
            echo "<br/> A multiplicacao vale ". ($n1*$n2);
            echo "<br/> A divisao vale ". ($n1/$n2);
            echo "<br/> O modulo vale ". ($n1%$n2);
            echo "<br/> A media vale ". ($m);

            echo "<br/> Retorna o valor absoluto de um número. EX: ". abs(-5);
            echo "<br/> Calcula uma potência. EX: ". pow(5, 2);
            echo "<br/> Calcula a raiz quadrada de um número. EX: ". sqrt(25);
            echo "<br/> Arredonda valores. EX: ". round(4.9);
            echo "<br/> Retorna a parte inteira do valor. EX: ". intval(4.9);
            echo "<br/> Formata um numero Real. EX: ". number_format(3258.754, 2, “,”, “.”);

        ?>
    </div>
</body>
</html>