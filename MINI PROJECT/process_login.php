<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection

    $conn = new mysqli("localhost", "root", "", "tennis", 3307);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: tennisWebsite.php");
            exit();
        } else {
            $_SESSION['error'] = "Invalid email or password";
        }
    } else {
        $_SESSION['error'] = "Invalid email or password";
    }

    $stmt->close();
    $conn->close();

    header("Location: tennisWebsite.php");
    exit();
}