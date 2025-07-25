<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>
    <div>
        <?php
            // Mostrar todos os erros (para ajudar em testes)
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            // Primeiro while: pega os dados enviados
            $i = 1;
            while ($i <= 5) {
                $v = "num" . $i;
                $url = "v" . $i;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                // echo "<br> $url $v $$v<br>";
                // v1 num1 $num1

                // v2 num2 $num2

                // v3 num3 $num3

                // v4 num4 $num4

                // v5 num5 $num5
                $i++;
            }

            // Mostra os valores em linha
            echo "<strong>Valores recebidos:</strong> ";
            echo "$num1 $num2 $num3 $num4 $num5<br><br>";

            // Segundo while: mostra os valores em lista
            $i = 1;
            while ($i <= 5) {
                $v = "num" . $i;
                echo "Valor $i: " . $$v . "<br>";
                $i++;
            }
        ?>
    </div>
</body>

</html>