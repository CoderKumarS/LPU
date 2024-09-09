<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>

<body>
    <p>Staic Variable</p>
    <?php
    function myTest()
    {
        static $x = 1;
        echo $x;
        $x++;
    }
    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
    ?>
    <p>Local Variabe</p>
    <?php
    
    ?>
</body>

</html>