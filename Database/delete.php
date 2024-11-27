<?php include 'connection.php' ?>
<?php
$id = $_GET['id'];
$query = "DELETE FROM student WHERE id = '5'";
$data = mysqli_query($conn, $query);
if ($data) {
    echo "<pre>Deleted</pre>";
} else {
    echo "<pre>Not Deleted</pre>";
}
?>