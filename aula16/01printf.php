<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
                $p = "Leite";
                $pr = 4.5;
                echo "<p>O $p custa R$ $pr!</p>";
                echo "<p>O $p custa R$ ".number_format($pr,2)."!</p>";
                printf("O %s custa R$ %.2f!",$p,$pr);
                /*
                %d - valor decimal
                %u - Valor decimal sem sinal
                %f - valor real
                %s - string
                */
            ?>
    </div>
</body>

</html>