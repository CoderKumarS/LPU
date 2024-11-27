<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f1f1;
            flex-direction: column;
        }

        form {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            max-width: 50rem;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        form>input[type="text"],
        input[type="email"],
        textarea {
            margin-top: 5px;
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background-color: #f1f1f1;
            font: 1em sans-serif;
        }

        input[type="submit"] {
            padding: 10px;
            width: 50%;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button {
            padding: 10px;
            background-color: #4af;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 49%;
        }

        button a {
            width: 100%;
            color: white;
            text-decoration: none;
            display: block;
        }

        .name {
            display: grid;
            grid-template-columns: 0.4fr 1fr 1.6fr;
            gap: 10px;
        }

        .name input,
        .name select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f1f1f1;
            font: 1em sans-serif;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Medicine Symposium Registration Form</h1>
        <label for="title">Full name</label>
        <br>
        <div class="name">
            <select id="title" name="title">
                <option value="" name="title">Title</option>
                <option value="Mr." name="title">Mr.</option>
                <option value="Ms." name="title">Ms.</option>
                <option value="Mrs." name="title">Mrs.</option>
                <option value="Dr." name="title">Dr.</option>
            </select>
            <input type="text" id="first_name" name="first_name" placeholder="First" required>
            <input type="text" id="last_name" name="last_name" placeholder="Last" required>
        </div>
        <label for="institution">Institution:</label>
        <br>
        <input type="text" id="institution" name="institution" required>
        <br>

        <label for="email">Email Address:</label>
        <br>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="note">Note to the Organizers:</label>
        <br>
        <textarea id="note" name="note" rows="4" cols="50"></textarea>
        <br>

        <input type="submit" value="Submit" name="save_btn">
        <button type="button">
            <a href="view.php">View</a>
        </button>
    </form>
    <?php
    if (isset($_POST['save_btn'])) {
        $title = $_POST['title'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $institute = $_POST['institution'];
        $email = $_POST['email'];
        $note = $_POST['note'];

        $sql = "INSERT INTO student (title, first, last, institute, email, organizer) VALUES ('$title', '$fname', '$lname', '$institute', '$email', '$note')";
        $data = mysqli_query($conn, $sql);
        if ($data) {
            echo "<pre>Entered data is saved successfully</pre>";
        } else {
            echo "<pre>Again save data</pre>";
        }
    }
    ?>
</body>

</html>