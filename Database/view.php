<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>

<body>
    <table border="1px">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Instituition name</th>
            <th>Email</th>
            <th>Note</th>
        </tr>
        <?php
        $query = "SELECT * FROM `student`";
        $data = mysqli_query($conn, $query);
        $result = mysqli_num_rows($data);

        if ($result > 0) {
            while ($row = mysqli_fetch_array($data)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                echo "<td>" . htmlspecialchars($row['first']) . "</td>";
                echo "<td>" . htmlspecialchars($row['last']) . "</td>";
                echo "<td>" . htmlspecialchars($row['institute']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['organizer']) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>