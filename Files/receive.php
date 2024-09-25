<?php
$name = $_FILES['myfile']['name'];
$tmp_name = $_FILES['myfile']['tmp_name'];
if (move_uploaded_file($tmp_name, $name)) {
    echo "File uploaded successfully!";
} else {
    echo "File not uploaded!";
}
?>