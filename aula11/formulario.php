<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Formulário com PHP</title>
</head>

<body>
    <div>
        <form action="processa.php" method="get">
            <?php
                $c = 1;
                while ($c <= 5) {
                    echo "Valor $c: <input type='number' name='v$c' id='v$c' max='100' min='0' value='0'><br>";
                    $c++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>