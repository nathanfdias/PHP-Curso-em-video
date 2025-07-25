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
                $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap.";
                $r = wordwrap($t,20,"<br>");
                echo $r;
                echo "<br><br>";
                $r0 = wordwrap($t,20,"<br>\n"); // quebra linha no code tbm
                echo $r0;
                echo "<br><br>";
                $r1 = wordwrap($t,5,"<br>",false);
                echo $r1;
                echo "<br><br>";
                $r2 = wordwrap($t,5,"<br>",true);
                echo $r2;
                echo "<br><br>";
                $txt = "Curso em Vídeo";
                $tam = strlen($txt);
                echo "A variável TXT tem $tam caracteres";
                echo "<br><br>";
                /* $txt0 = "Curso em Vídeo";
                $tam0 = mb_strlen($txt0); // não funcionou, está contanto acentos como caractere..
                echo "A variável TXT tem $tam0 caracteres";
                echo "<br><br>";*/
                $nome = "   José da Silva   ";
                echo "A variável NOME tem ".strlen($nome)." caracteres";
                echo "<br><br>";
                echo "A variável NOME sem espaços tem ".strlen(trim($nome))." caracteres";
                echo "<br><br>";
                echo "A variável NOME sem espaços à esquerda tem ".strlen(ltrim($nome))." caracteres";
                echo "<br><br>";
                echo "A variável NOME sem espaços à direita tem ".strlen(rtrim($nome))." caracteres";
                echo "<br><br>";
            ?>
    </div>
</body>

</html>