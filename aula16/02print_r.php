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
                $v[0] = 4;
                $v[1] = 8;
                $v[2] = 3;
                print_r($v);
                print "<br>";
                $v2 = array(3,7,6,2,1,9);
                print_r($v2);
                print "<br>";
                var_dump($v);
                print "<br>";
                var_export($v2);
                
            ?>
    </div>
</body>

</html>