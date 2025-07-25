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
        
             $c = 1;
            while ($c <= 10) {
                echo $c."<br>";
                $c++;
            }

            $c = 9;
            while ($c >= 1) {
                echo $c."<br>";
                $c--;
            }

            $c = 10;
            while ($c >= 0) {
                echo $c."<br>";
                $c-=2;
            }

        ?>

    </div>
</body>

</html>