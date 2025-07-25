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
                $frase = "Eu vou estudar PHP agora";
                $cont = str_word_count($frase,0);
                echo $cont;
                echo "<br><br>";
                $cont0 = str_word_count($frase,1);
                print_r($cont0);
                echo "<br><br>";
                $cont1 = str_word_count($frase,2);
                print_r($cont1);
                echo "<br><br>";
                $site = "Curso em Video";
                $vetor = explode(" ",$site);
                print_r($vetor);
                echo "<br><br>";
                print (implode("#",$vetor));
                echo "<br><br>";
                print (implode(" ",$vetor));
                echo "<br><br>";
                $vetor0 = str_split($site);
                print_r($vetor0);
                echo "<br><br>";
                print (implode($vetor0));
                echo "<br><br>";
                $site0 = "Curso em Vídeo";
                $vetor1 = explode(" ",$site0);
                print_r($vetor1);
                echo "<br><br>";
                print (join("#",$vetor1));
                echo "<br><br>";
                print (join(" ",$vetor1));
                echo "<br><br>";
                $vetor2 = str_split($site0);
                print_r($vetor2);
                echo "<br><br>";
                print (join($vetor2));
                echo "<br><br>";
                $letra = chr(67);
                echo "A letra de código 67 é $letra";
                echo "<br><br>";
                $letra0 = chr(99);
                echo "A letra de código 99 é $letra0";
                echo "<br><br>";
                $letra1 = "C";
                $cod = ord($letra1);
                echo "O código da letra C é $cod";
                echo "<br><br>";
                $letra2 = "c";
                $cod0 = ord($letra2);
                echo "O código da letra c é $cod0";
                echo "<br><br>";
            ?>
    </div>
</body>

</html>