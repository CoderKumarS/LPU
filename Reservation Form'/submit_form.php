<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO railway (name, email, contact, departure_Station, destination_station, date, class, number_of_passenger, payment_Mode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssis", $name, $email, $contact, $departure_Station, $destination_station, $date, $class, $number_of_passenger, $payment_Mode);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$departure_Station = $_POST['departure_station'];
$destination_station = $_POST['destination'];
$date = $_POST['date_of_journey'];
$class = $_POST['class'];
$number_of_passenger = $_POST['num_passengers'];
$payment_Mode = $_POST['payment_Mode'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>