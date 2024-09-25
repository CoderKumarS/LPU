<?php
$cookie_name = "user";
setcookie($cookie_name, "", time() - 3600, "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    // if (!isset($_COOKIE[$cookie_name])) {
    //     echo "Cookie named '" . $cookie_name . "' is not modify!";
    // } else {
    //     echo "Cookie '" . $cookie_name . "' is modify!<br>";
    //     echo "Value is: " . $_COOKIE[$cookie_name];
    // }
    echo "Cookie '" . $cookie_name . "' is deleted!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    ?>
</body>

</html>