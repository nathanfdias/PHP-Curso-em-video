<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <form action="02parte2.php" method="get">
            <?php
                $c = 1;
                while ($c <= 5) {
                    echo "Valor $c: <input type='number' name='v$c' id='v$c' max='100' min='0' value='0'><br>"; // Não pode ter aspas duplas dentro de um echo
                    $c++;
                }
                ?>
            <input type="submit" value="Enviar" class="botao">
        </form>


    </div>
</body>

</html>