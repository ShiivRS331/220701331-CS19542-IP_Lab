<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-image: url('tennisform.jpg'); /* Replace with your image URL */
            background-color: #039754;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content-box {
            background-color: rgba(255, 255, 255, 0.9); /* White background with transparency */
            color: black; /* Text color inside the box */
            padding: 30px; /* Add some padding */
            border-radius: 10px; /* Round corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Optional: add shadow */
            width: 80%; /* Responsive width */
            max-width: 600px; /* Max width */
        }
    </style>
</head>
<body>

<div class="content-box">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Prime Tennis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a class="nav-link" href="tennisWebsite.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tennisWebsite.php#classes">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tennisWebsite.php#rackets">Rackets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Database connection
        $conn = new mysqli("localhost", "root", "", "tennis", 3307);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $class = $_POST['class'];
        $consent = isset($_POST['consent']) ? 1 : 0;

        // Prepare SQL statement
        $sql = "INSERT INTO tennis_registration (name, email, phone, dob, gender, class, consent) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssi", $name, $email, $phone, $dob, $gender, $class, $consent);
        
        // Execute the statement
        if ($stmt->execute()) {
            // Success message
            echo "<h1>Registration Successful!</h1>";
            echo "<h3>Submitted Information:</h3>";
            echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>";
            echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($dob) . "</p>";
            echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
            echo "<p><strong>Class:</strong> " . htmlspecialchars($class) . "</p>";
            echo "<p><strong>Consent:</strong> " . ($consent ? 'Agreed' : 'Not Agreed') . "</p>";
            echo "<p><strong>Thank you For Registering</strong</p>";
            echo "<p>We will contact you for further details and payment status</p>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "No data submitted.";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
