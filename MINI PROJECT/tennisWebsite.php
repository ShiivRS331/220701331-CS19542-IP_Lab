<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Tennis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000;
            color: #fff;
        }
        .navbar-brand{
            color: #ffffff;
            font: 1em sans-serif bold;
            font-size:x-large;
            position: relative;
            left: -10%; /* Move it to the left */
        }
        .navbar-log{
            color: #ffffff;
            font: 1em sans-serif bold;
            font-size:medium;
            position: relative;
            left: -13%; /* Move it to the left */
            text-decoration:none;
        }
        .navbar-nav{
            position: absolute;
            right:2.5%;
        }
        .nav-link{
            color: #ffffff;
            font: 1em sans-serif bold;
        }
        .hero {
            height: 100vh;
            background: url('tennis.jpeg') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .product-card {
            position: relative;
            overflow: hidden;
        }
        .product-card img {
            transition: transform 0.3s ease;
        }
        .product-card:hover img {
            transform: scale(1.05);
        }
        .product-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.7);
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }
        .product-card:hover .product-overlay {
            height: 100%;
        }
        .product-text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }
        .cta {
            background-color: #fff;
            color: #000;
        }
        footer {
            background-color: #1a1a1a;
        }
        footer a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-log" href="login_signup.php">Login/SignUp</a>
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
                        <a class="nav-link" href="#classes">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rackets">Racquets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-1 fw-bold mb-4">Precision Perfected</h1>
            <p class="lead mb-5">Experience the future of tennis with Prime Tennis</p>
            <a href="#classes" class="btn btn-light btn-lg">
                Class Details <i class="fas fa-chevron-right ms-2"></i>
            </a>
            <a href="#rackets" class="btn btn-light btn-lg">
                Explore Collection <i class="fas fa-chevron-right ms-2"></i>
            </a>
        </div>
    </section>

    <!-- Product Showcase -->
    <section id="rackets" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Signature Series</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="racquet.jpg" alt="Pro Tour Racket" class="img-fluid">
                        <div class="product-overlay">
                            <div class="product-text">
                                <h3>Wilson Racquets</h3>
                                <a href="wilson.php" class="btn btn-outline-light mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="head.jpg" alt="Grand Slam Racket" class="img-fluid">
                        <div class="product-overlay">
                            <div class="product-text">
                                <h3>Head Racquets</h3>
                                <a href="head.php" class="btn btn-outline-light mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="bab.png" alt="Master Class Racket" class="img-fluid">
                        <div class="product-overlay">
                            <div class="product-text">
                                <h3>Babolat Racquets</h3>
                                <a href="babolat.php" class="btn btn-outline-light mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Class Details -->
    <section id="classes" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Classes</h2>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Batch</th>
                        <th scope="col">Timing</th>
                        <th scope="col">Charges</th>
                        <th scope="col">No. of Classes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Beginners</td>
                        <td>4:30-5:30 PM</td>
                        <td>Rs. 3500</td>
                        <td>3 days/week</td>
                        
                    </tr>
                    <tr>
                        <td>Intermediate</td>
                        <td>5:30 - 6:30 PM</td>
                        <td>Rs. 4000</td>
                        <td>3 days/week</td>
                    </tr>
                    <tr>
                        <td>Advanced</td>
                        <td>6:30-7:30 PM</td>
                        <td>Rs.5000</td>
                        <td>3 days/week</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>7:30-8:30 PM</td>
                        <td>Rs.4000</td>
                        <td>3 days/week</td>
                    </tr>
                    <tr>
                        <td>Court Booking</td>
                        <td>Morning/Evening</td>
                        <td>Rs. 500 (without lights) / 700 (with lights)</td>
                        <td>Any Days (except Rainy Days)</td>
                    </tr>
                </tbody>
            </table>
            <a href="Register.php" class="btn btn-light btn-lg">
                Apply for Classes <i class="fas fa-chevron-right ms-2"></i>
            </a>
            <a href="previous.php" class="btn btn-light btn-lg">
                Previous Bookings <i class="fas fa-chevron-right ms-2"></i>
            </a>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta py-5">
        <div class="container text-center">
            <h2 class="mb-4">Subscribe to Prime Tennis</h2>
            <p class="lead mb-5">Subscribe for exclusive offers and early access to new releases</p>
            <form id="subscribe-form" class="row justify-content-center" method="POST" action="#">
                <div class="col-md-6 col-lg-4 mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="col-md-auto">
                    <button type="submit" name="subscribe" class="btn btn-dark">Subscribe</button>
                </div>
            </form>
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
            <p class="text-center">© 2022 Prime Tennis. All rights reserved.</p> 
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Smooth scrolling for navigation links
            $('a.nav-link, a.btn').on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }
            });

            // Add parallax effect to hero section
            $(window).scroll(function() {
                var scrollPosition = $(this).scrollTop();
                $('.hero').css('background-position-y', -(scrollPosition * 0.5) + 'px');
            });
        });
    </script>
</body>
</html>