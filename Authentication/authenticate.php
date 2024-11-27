<?php
session_start();
include 'dbConnect.php'; // Include database connection 

// Check if form is submitted 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query 
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Verify password 
        if (password_verify($password, $user['password'])) {
            // Set session variables 
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            echo "Welcome " . $user['password'] . "!";

            // Redirect to welcome page 
            header("Location: welcome.php");
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }
    $stmt->close();
    $conn->close();
}
?>