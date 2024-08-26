<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Casting</title>
</head>
<body>
    <h2>Type Casting</h2>
    <pre>
        <?php
            $a = 5;
            $b = 5.34;
            $c = "hello";
            $d = true;
            $e = NULL;
 
            $a = (string) $a;
            $b = (string) $b;
            $c = (string) $c;
            $d = (string) $d;
            $e = (string) $e;
echo "<br>";
            var_dump($a);
            var_dump($b);
            var_dump($c);
            var_dump($d);
            var_dump($e);

        ?>
    </pre>

</body>
</html>