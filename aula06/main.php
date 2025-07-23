<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preco do produto e R$". number_format($preco, 2);
        $preco = $preco + ($preco*10/100);
        echo "<br/> E o novo preco com 10% de aumento: R$". number_format($preco, 2);

        $a = 3;
        $b = &$a;
        $b += 5;
        echo "<br/>A variavel A vale $a";
        echo "<br/>A variavel B vale $b";

        $site = "cursoemvideo";
        $$site = "cursoPHP";

        echo "<br/> $site";
        echo "<br/> $cursoemvideo";
    ?>
</body>
</html>