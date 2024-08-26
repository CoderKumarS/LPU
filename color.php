<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color the text with php</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .red{
            color:red;
        }
        .green{
            color:green;
        }
        .blue{
            color:blue;
        }
    </style>
</head>
<body>
    <h1>Color the text with PHP</h1>
    <?php
    echo "<p class='red'>This is a red text</p>";
    echo "<p class='blue'>This is a blue text</p>";
    echo "<p class='green'>This is a green text</p>";
    ?>
</body>
</html>