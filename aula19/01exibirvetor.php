<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <pre>
                <?php
                    $v = array("A","J","M","X","K");
                    echo "O vetor tem ".count($v)." elementos.<br>";
                    print_r($v);
                    $v[] = "O";
                    var_dump($v);
                    array_push($v,"U");
                    echo "<br>";
                    var_dump($v);
                    array_pop($v);
                    echo "<br>";
                    var_dump($v);
                    array_unshift($v,"U");
                    echo "<br>";
                    var_dump($v);
                    array_shift($v);
                    echo "<br>";
                    var_dump($v);
                    sort($v);
                    echo "<br>";
                    var_dump($v);
                    rsort($v);
                    echo "<br>";
                    var_dump($v);
                    $v0 = array("A","Z","M","U","K");
                    var_dump($v0);
                    asort($v0);
                    echo "<br>";
                    var_dump($v0);
                    arsort($v0);
                    echo "<br>";
                    var_dump($v0);
                    ksort($v0);
                    echo "<br>";
                    var_dump($v0);
                    krsort($v0);
                    echo "<br>";
                    var_dump($v0);
                ?>
            </pre>


    </div>
</body>

</html>