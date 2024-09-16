<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <?php $name = $email = $gender = $comment = $website = " ";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Create Form for Personal Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name <input type="text" name="name"> <br><br>
        E-mail <input type="email" name="email"> <br><br>
        Website <input type="text" name="website"> <br><br>
        Comment <textarea name="comment" rows="3" cols="20"><?php echo $comment; ?> </textarea><br><br>
        Gender
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other<br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo "<h2>Your Input</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>
</body>

</html>