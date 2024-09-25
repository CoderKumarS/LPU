<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <h1>Session</h1>
    <?php
    $_SESSION['username'] = 'PHP';
    $_SESSION['key'] = '97vt3hl674fn5r58flecv4gsfd';
    $_SESSION['color'] = 'blue';
    $_SESSION['animal'] = 'dog';
    echo 'Session started and set';
    echo '<br>';
    echo 'Color: ' . $_SESSION['color'];
    echo '<br>';
    echo 'Animal: ' . $_SESSION['animal'];
    echo '<br>';
    print_r($_SESSION);
    ?>
</body>

</html>