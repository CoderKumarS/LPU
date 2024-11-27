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
        }

        form {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
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
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
    <form action="formHandle.php" method="post">
        <h1>Medicine Symposium Registration Form</h1>
        <label for="title">Full name</label>
        <br>
        <div class="name">
            <select id="title" name="title">
                <option value="">Title</option>
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Dr.">Dr.</option>
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

        <input type="submit" value="Submit">
    </form>
</body>

</html>