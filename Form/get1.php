<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<body>
    Welcome <br>
    <?php echo "<strong>Name</strong>: " . $_GET["name"] ?>
    <?php echo $_GET["lname"] ?>


    <br><?php echo "<strong>Email</strong>: " . $_GET["email"] ?>
    <br><?php echo "<strong>Blood Group</strong>: " . $_GET["blood"] ?>
    <br><?php echo "<strong>Number</strong>: " . $_GET["number"] ?>
</body>

</html>