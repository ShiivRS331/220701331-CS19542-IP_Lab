<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Prime Tennis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-image: url('tennis.jpeg'); /* Your background image */
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
        .carousel-item {
            text-align: center; /* Centering the carousel items */
        }
        .carousel-item img {
            width: 80%; /* Reduced size */
            height: 70%; /* Maintain aspect ratio */
            margin: 0 auto; /* Center the image */
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: black; /* Change arrow color to black */
            border-radius: 50%; /* Optional: round arrows */
        }
        .team-name {
            text-align: center;
            margin-top: 10px; /* Space between image and name */
            font-weight: bold; /* Make the name bold */
        }
    </style>
</head>
<body>

<div class="container mt-5 pt-5">
    <div class="content-box">
         <!-- Carousel for Team Image -->
         <h2 class="mt-4 mb-3">Meet Our Team</h2>
         <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="fed.png" alt="Team Member 1"> <!-- Replace with actual image path -->
                    <div class="team-name">Roger Federer</div>
                </div>
                <div class="carousel-item">
                    <img src="nad.png" alt="Team Member 2"> <!-- Replace with actual image path -->
                    <div class="team-name">Rafael Nadal</div>
                </div>
                <div class="carousel-item">
                    <img src="nole.png" alt="Team Member 3"> <!-- Replace with actual image path -->
                    <div class="team-name">Novak Djokovic</div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h1 class="mb-4">About Prime Tennis</h1>
        <p>Prime Tennis is dedicated to providing the highest quality tennis equipment and training to players of all levels. Founded in 2022, we have quickly become a leader in the tennis industry, known for our innovative products and expert instruction.</p>
        <p>Our team of experienced professionals is committed to helping you improve your game, whether you're a beginner just starting out or an advanced player looking to take your skills to the next level.</p>
        
        <h2 class="mt-4 mb-3">Our Mission</h2>
        <p>To inspire and empower tennis players worldwide by providing top-quality equipment, expert instruction, and a supportive community that fosters growth and passion for the sport.</p>
        
        <h2 class="mt-4 mb-3">Our Values</h2>
        <ul>
            <li>Excellence in everything we do</li>
            <li>Innovation in product design and teaching methods</li>
            <li>Integrity in our business practices</li>
            <li>Passion for the sport of tennis</li>
            <li>Community support and engagement</li>
        </ul>
        
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
