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
                $i = 1; // 1º while pega os dados da url
                while($i <= 5) {
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url])?$_GET[$url]:0;
                    $i++;
                }

                echo "$num1 $num2 $num3 $num4 $num5<br>";
                
                $i = 1; // Este bloco mostra os dados pegos pela url
                while($i <= 5){
                    $v = "num".$i;
                    echo "Valor $i: ". $$v ."<br/>";
                    $i++;
                }
            ?>
    </div>
</body>

</html>