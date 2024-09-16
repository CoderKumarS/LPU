<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>

<body>
    Welcome <?php echo $_POST["fname"] . " " . $_POST["mname"] . " " . $_POST["lname"]; ?><br>
    Your Email address is : <?php echo $_POST["email"]; ?><br>
    Your Address is : <?php echo $_POST["address"]; ?><br>
    Your Remarks is : <?php echo $_POST["remarks"]; ?><br>
</body>

</html>