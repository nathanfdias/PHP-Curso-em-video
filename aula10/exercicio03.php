<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
                $estado = isset ($_GET["estado"])?$_GET["estado"]:0;
                switch ($estado){
                    case 1:
                    echo "Você está na região Sul.";
                    break;
                    case 2:
                    echo "Você está na região Sudeste.";
                    break;
                    case 3:
                    echo "Você está na região Centro-Oeste.";
                    break;
                    case 4:
                    echo "Você está na região Nordeste.";
                    break;
                    case 5:
                    echo "Você está na região Norte.";
                }
            ?>
    </div>
</body>

</html>