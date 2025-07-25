<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Empréstimo</title>
</head>

<body>

    <h2>Solicitar Empréstimo</h2>
    <form method="post">
        <label for="valor">Valor do Empréstimo:</label>
        <input type="number" name="valorEmprestimoBruto" step="0.01" required><br><br>

        <!-- necessiddade de corrigir a quantia de parcelas junto ao envio do valor -->
        <label for="parcelas">Escolha a quantidade de parcelas:</label>
        <select name="parcelas" id="parcelas" required>
            <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $valor = (float) $_POST["valorEmprestimoBruto"];

                    if ($valor <= 10000) {
                        for ($i = 3; $i <= 12; $i++) {
                            echo "<option value='$i'>$i parcelas</option>";
                        }
                    } else if ($valor <= 50000) {
                        for ($i = 3; $i <= 24; $i++) {
                            echo "<option value='$i'>$i parcelas</option>";
                        }
                    } else {
                        for ($i = 3; $i <= 48; $i++) {
                            echo "<option value='$i'>$i parcelas</option>";
                        }
                    }
                } else {
                    echo "<option disabled selected>Informe um valor primeiro</option>";
                }
            ?>
        </select><br><br>

        <input type="submit" value="Calcular empréstimo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $valor = (float) $_POST["valorEmprestimoBruto"];
        $parcelas = (int) $_POST["parcelas"];
        $juros = 0;

        switch (true) {
            case ($parcelas >= 3 && $parcelas <= 12):
                $juros = 0.10;
                break;
            case ($parcelas >= 13 && $parcelas <= 24):
                $juros = 0.13;
                break;
            case ($parcelas >= 25 && $parcelas <= 48):
                $juros = 0.16;
                break;
            default:
                echo "Quantidade de parcelas inválida.";
                exit;
        }

        $valorFinal = $valor * (1 + $juros);
        $valorParcela = $valorFinal / $parcelas;

        echo "<h3>Resultado da Simulação:</h3>";
        echo "Valor solicitado: R$ ".number_format($valor, 2, ',', '.')."<br>";
        echo "Parcelas: $parcelas x R$ ".number_format($valorParcela, 2, ',', '.')."<br>";
        echo "Total com juros: R$ ".number_format($valorFinal, 2, ',', '.')."<br>";
        echo "Juros aplicados: ".($juros * 100)."%";
    }
    ?>

</body>

</html>