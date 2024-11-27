<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>

<body>
    Welcome <?php echo $_POST["title"] . " " . $_POST["first_name"] . " " . $_POST["last_name"]; ?><br>
    $email = $_POST["email"];
    $pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
    if (preg_match($pattern, $email)) {
    echo "Your Email address is : " . $email . "<br>";
    } else {
    echo "Invalid Email address<br>";
    }
    ?>
    Your institution is : <?php echo $_POST["institution"]; ?><br>
    Your note is : <?php echo $_POST["note"]; ?><br>
</body>

</html>