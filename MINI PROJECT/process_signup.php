<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "tennis", 3307);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Account created successfully. Please log in.";
    } else {
        $_SESSION['error'] = "Error creating account: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: login_signup.php");
    exit();
}