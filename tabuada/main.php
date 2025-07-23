<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Gerador de Tabuada</h2>
    <form method="post" action="">
        Digite um número: <input type="number" name="numero" required>
        <input type="submit" value="Gerar Tabuada">
    </form>

    <?php
        function gerarTabuada($num){
            echo "<h3>Tabuada do $num</h3>";
            for($i = 1; $i <= 10; $i++){
                $resultado = $num * $i;
                echo "$num x $i = $resultado <br>";
            }
        }

        // Verifica se o formulário foi enviado
        if (isset($_POST["numero"])) {
            $numero = $_POST["numero"];
            gerarTabuada($numero);
        }
    ?>
</body>

</html>