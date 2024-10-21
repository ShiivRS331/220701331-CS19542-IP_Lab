<?php
session_start();

$error = '';
$success = '';

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup - Prime Tennis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000;
            color: #fff;
        }
        .navbar-brand {
            color: #ffffff;
            font: 1em sans-serif bold;
            font-size: x-large;
        }
        .navbar-nav {
            position: absolute;
            right: 3%;
        }
        .nav-link {
            color: #ffffff;
            font: 1em sans-serif bold;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 30px;
            margin-top: 50px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="tennisWebsite.php">Prime Tennis</a>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <h2 class="text-center mb-4">Login / Signup</h2>
                <?php if ($error): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php endif; ?>
                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">Signup</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form action="process_login.php" method="post">
                            <div class="mb-3">
                                <label for="login-email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="login-email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="login-password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="login-password" name="password" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <form action="process_signup.php" method="post">
                            <div class="mb-3">
                                <label for="signup-name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="signup-name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="signup-email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="signup-email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="signup-password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="signup-password" name="password" required>
                            </div>
                            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>