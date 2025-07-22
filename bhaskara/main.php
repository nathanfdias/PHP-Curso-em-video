<!DOCTYPE html> <!-- Declara que o documento segue o padrão HTML5 -->
<html lang="pt-br"> <!-- Define o idioma da página como português do Brasil -->

<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 (permite acentos, por exemplo) -->
    <title>Bhaskara</title> <!-- Título da aba no navegador -->
</head>

<body>
    <h2>Calculadora de Bhaskara</h2> <!-- Título visível na página -->

    <!-- Início do formulário HTML -->
    <form method="post"> <!-- Define que o formulário usará o método POST para enviar os dados -->
        <!-- Campo para o coeficiente 'a' da equação -->
        <label>a: <input type="number" name="a" step="any" required></label><br><br>

        <!-- Campo para o coeficiente 'b' da equação -->
        <label>b: <input type="number" name="b" step="any" required></label><br><br>

        <!-- Campo para o coeficiente 'c' da equação -->
        <label>c: <input type="number" name="c" step="any" required></label><br><br>

        <!-- Botão para enviar o formulário -->
        <input type="submit" value="Calcular">
    </form>
    <!-- Fim do formulário -->

    <?php
    // Verifica se o formulário foi enviado com o método POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Captura e converte os valores enviados para o tipo float
        $a = (float) $_POST["a"];
        $b = (float) $_POST["b"];
        $c = (float) $_POST["c"];

        echo "<h3>Resultado:</h3>";

        // Verifica se 'a' é igual a zero (o que tornaria a equação inválida como 2º grau)
        if ($a == 0) {
            echo "Não é uma equação do 2º grau (a ≠ 0).";
        } else {
            // Calcula o discriminante (delta) usando a fórmula: Δ = b² - 4ac
            $delta = pow($b, 2) - 4 * $a * $c;

            // Exibe o valor de delta
            echo "Delta: $delta<br>";

            // Se delta for negativo, não existem raízes reais
            if ($delta < 0) {
                echo "Não existem raízes reais.";

            // Se delta for zero, existe uma raiz real (única)
            } elseif ($delta == 0) {
                $x = -$b / (2 * $a); // Fórmula reduzida
                echo "Raiz única: x = $x";

            // Se delta for positivo, existem duas raízes reais distintas
            } else {
                $x1 = (-$b + sqrt($delta)) / (2 * $a); // Primeira raiz
                $x2 = (-$b - sqrt($delta)) / (2 * $a); // Segunda raiz

                // Exibe ambas as raízes
                echo "Duas raízes reais:<br>";
                echo "x1 = $x1<br>";
                echo "x2 = $x2";
            }
        }
    }
    ?>
</body>
</html>
