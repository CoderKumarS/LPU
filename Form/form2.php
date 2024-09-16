<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <style>
        html,
        body {
            margin: 0;
            height: 100vh;
            box-sizing: border-box;
            background-color: aliceblue;
        }

        form {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40%;
            display: grid;
            row-gap: 1vh;
            border: 1px solid black;
            border-radius: 10px;
            padding: 2rem;
            background-color: rgb(203 213 225);
        }

        input {
            padding: 5px;
            font-weight: 300;
            font-size: medium;
            border-radius: 5px;
            border: 1px solid black;
        }

        input::placeholder {
            font-weight: normal;
        }

        input[type="submit"] {
            background-color: rgb(0, 0, 255);
            color: white;
            font-weight: 500;
            cursor: pointer;
            border: none;
        }
    </style>
</head>

<body>
    <form action="get1.php" method="get">
        <h1>Form Handling</h1>
        <label for="name">First Name: </label>
        <input type="text" name="name" placeholder="Enter Your Name" />

        <label for="lname">Last Name: </label>
        <input type="text" name="lname" placeholder="Enter Your Name" />

        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="Enter Your Email" />

        <label for="skills">Skills</label>
        <div>
            <input type="checkbox" name="skills[]" value="HTML">HTML
            <input type="checkbox" name="skills[]" value="CSS">CSS
            <input type="checkbox" name="skills[]" value="JS">JS
            <input type="checkbox" name="skills[]" value="PHP">PHP
        </div>

        <label for="blood">Blood Group: </label>
        <input type="text" name="blood" placeholder="Enter Your Blod Group" />

        <label for="number">Mobile no : </label>
        <input type="number" name="number" placeholder="Enter Mobile Number" />

        <input type="submit" value="Submit">
    </form>
</body>

</html>