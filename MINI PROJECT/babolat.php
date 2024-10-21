<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babolat Racquets - Prime Tennis</title>
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
            right: 1%;
        }
        .nav-link {
            color: #ffffff;
            font: 1em sans-serif bold;
        }
        .hero {
            height: 50vh;
            background: url('babolat-hero.jpg') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        footer {
            background-color: #1a1a1a;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-1 fw-bold mb-4">Babolat Racquets</h1>
            <p class="lead mb-5">Power and spin for the modern game</p>
        </div>
    </section>

    <!-- Babolat Racquets Content -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Babolat Collection</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark text-white">
                        <img src="pureaero.png" class="card-img-top" alt="Babolat Pure Aero">
                        <div class="card-body">
                            <h5 class="card-title">Babolat Pure Aero</h5>
                            <p class="card-text">Rafael Nadal's choice, known for its exceptional spin and power.</p>
                            <p><strong>Price:</strong> Rs. 10,000 / Rs. 200/hr</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark text-white">
                        <img src="puredrive.png" class="card-img-top" alt="Babolat Pure Drive">
                        <div class="card-body">
                            <h5 class="card-title">Babolat Pure Drive</h5>
                            <p class="card-text">A popular all-court racquet offering a great blend of power and control.</p>
                            <p><strong>Price:</strong> Rs. 12,000 / Rs. 200/hr</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark text-white">
                        <img src="purestrike.png" class="card-img-top" alt="Babolat Pure Strike">
                        <div class="card-body">
                            <h5 class="card-title">Babolat Pure Strike</h5>
                            <p class="card-text">Designed for precision players who like to dictate play from all areas of the court.</p>
                            <p><strong>Price:</strong> Rs. 15,000 / Rs. 200/hr</p>
                            <div class="col-md-auto">
                    <button type="submit" name="register" class="btn btn-dark">REGISTER<i class="fas fa-chevron-right ms-2"></i></button>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <h5>Prime Tennis</h5>
                    <p>Elevating the game since 2022</p>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Products</h5>
                    <ul class="list-unstyled">
                        <li><a href="rackets.php">Rackets</a></li>
                        <li><a href="apparel.php">Apparel</a></li>
                        <li><a href="accessories.php">Accessories</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="careers.php">Careers</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="https://facebook.com/primetennis" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/primetennis" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/primetennis" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://youtube.com/primetennis"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <p class="text-center">© 2023 Prime Tennis. All rights reserved.</p> 
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>