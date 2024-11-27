<?php
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'not provide';
$last = isset($_POST['last']) ? htmlspecialchars($_POST['last']) : 'not provide';
$date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : 'not provide';
$visit = isset($_POST['visit']) ? htmlspecialchars($_POST['visit']) : 'not provide';
$docfirst = isset($_POST['docfirst']) ? htmlspecialchars($_POST['docfirst']) : 'not provide';
$doclast = isset($_POST['doclast']) ? htmlspecialchars($_POST['doclast']) : 'not provide';
echo 'Your Details';
echo "<br>";
echo "Name : " . $name . " " . $last;
echo "<br>";
echo "Date : " . $date;
echo "<br>";
echo "Is your first time visit : " . $visit;
echo "<br>";
echo "Doctor name : " . $docfirst . " " . $doclast;
