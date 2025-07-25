<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprestimo</title>
</head>

<body>
    <div>

        <h2>Solicitação de Empréstimo</h2>
        <form method="post" action="">
            <label>Qual valor deseja pegar emprestado:</label>
            <input type="number" name="valorEmprestimoBruto" required><br><br>

            <fieldset>
                <legend>Parcelamento</legend>
                <label for="parcelas">Escolha a quantidade de parcelas:</label>
                <select name="parcelas" id="parcelas">
                    <?php
                    for ($i = 3; $i <= 48; $i++) {
                        if ($i <= 12) {
                            $value = "juros1";
                        } elseif ($i <= 24) {
                            $value = "juros2";
                        } else {
                            $value = "juros3";
                        }
                        echo "<option value='$value'>$i parcelas</option>";
                    }
                ?>
                </select>
            </fieldset><br>

            <input type="submit" value="Solicitar Empréstimo">
        </form>

        <?php
            if (isset($_POST["valorEmprestimoBruto"]) && isset($_POST["parcelas"])) {
                    $valor = (float) $_POST["valorEmprestimoBruto"];
                    $parcelasTipo = $_POST["parcelas"];

                    switch ($parcelasTipo) {
                        case "juros1":
                            $juros = 0.10; 
                            $qtdParcelas = 12;
                            break;
                        case "juros2":
                            $juros = 0.13; 
                            $qtdParcelas = 24;
                            break;
                        case "juros3":
                            $juros = 0.16; 
                            $qtdParcelas = 48;
                            break;
                        default:
                            $juros = 0;
                            $qtdParcelas = 0;
                            break;
                    }

                    $valorComJuros = $valor * (1 + $juros);
                    $valorParcela = $valorComJuros / $qtdParcelas;

                    echo "<h3>Resultado da Simulação:</h3>";
                    echo "Valor solicitado: R$ " . number_format($valor, 2, ',', '.') . "<br>";
                    echo "Juros aplicados: " . ($juros * 100) . "%<br>";
                    echo "Quantidade de parcelas: $qtdParcelas<br>";
                    echo "Valor total com juros: R$ " . number_format($valorComJuros, 2, ',', '.') . "<br>";
                    echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";
                }
        ?>
    </div>
</body>

</html>