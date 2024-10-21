<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "tennis", 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$name = "";
$bookings = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    
    // Query to retrieve bookings
    $sql = "SELECT * FROM tennis_registration WHERE name = '$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $bookings[] = $row; // Store bookings in an array
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previous Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('tennisform.jpg');
            background-color: #039754;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
        }
        .content-box {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            color: black; /* Text color */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            margin: 50px auto; /* Centering the box */
            width: 95%;
            max-width: 900px;
        }
        .bookings-box {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            color: black; /* Text color */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            margin: 50px auto; /* Centering the box */
            width: 95%;
            max-width: 900px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
<h1 class="mb-4">View All Previous Bookings</h1>
        <!-- Navigation -->
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
                        <a class="nav-link" href="#classes">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rackets">Rackets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container mt-5">
    <div class="content-box">
        <h2>Previous Bookings</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
            </div>
            <div class="col-md-auto">
                    <button type="submit" name="view" class="btn btn-dark">VIEW BOOKINGS<i class="fas fa-chevron-right ms-2"></i></button>
                </div>
        </form>
    </div>

    <?php if (!empty($bookings)): ?>
        <div class="bookings-box">
            <h3>Your Bookings</h3>
            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Class</th>
                        <th scope="col">Name</th>
                        <th scope="col">Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookings as $booking): ?>
                        <tr>
                            <td><?php echo $booking['id']; ?></td>
                            <td><?php echo $booking['class']; ?></td>
                            <td><?php echo $booking['name']; ?></td>
                            <td><?php echo $booking['registration_date']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="bookings-box">
            <p class="text-danger">No bookings found for this name.</p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
