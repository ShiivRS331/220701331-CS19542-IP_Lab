<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tennis Class Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    body {
        background-image: url('tennisform.jpg');
        background-color: #039754;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: white;
    }
    .waiver-box {
        background-color: white; /* or use a specific green shade like #d4edda */
        color: black; /* Change text color for readability */
        padding: 20px; /* Add some padding */
        border-radius: 5px; /* Round corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: add shadow */
    }
    .clickable-row {
        cursor: pointer;
    }
</style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tennis Class Registration</h1>
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
        <form action="submit.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other" required>
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>
            </div>
            
            <h2 class="mt-4 mb-3">Select a Class</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Select</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Timing</th>
                        <th scope="col">Charges</th>
                        <th scope="col">No. of Classes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable-row">
                        <td>
                            <label>
                                <input type="radio" name="class" value="Beginners" required>
                            </label>
                        </td>
                        <td>Beginners</td>
                        <td>4:30-5:30 PM</td>
                        <td>Rs. 3500</td>
                        <td>3 days/week</td>
                    </tr>
                    <tr class="clickable-row">
                        <td>
                            <label>
                                <input type="radio" name="class" value="Intermediate" required>
                            </label>
                        </td>
                        <td>Intermediate</td>
                        <td>5:30 - 6:30 PM</td>
                        <td>Rs. 4000</td>
                        <td>3 days/week</td>
                    </tr>
                    <tr class="clickable-row">
                        <td>
                            <label>
                                <input type="radio" name="class" value="Advanced" required>
                            </label>
                        </td>
                        <td>Advanced</td>
                        <td>6:30-7:30 PM</td>
                        <td>Rs. 5000</td>
                        <td>3 days/week</td>
                    </tr>
                    <tr class="clickable-row">
                        <td>
                            <label>
                                <input type="radio" name="class" value="Adults" required>
                            </label>
                        </td>
                        <td>Adults</td>
                        <td>7:30-8:30 PM</td>
                        <td>Rs. 4000</td>
                        <td>3 days/week</td>
                    </tr>
                    <tr class="clickable-row">
                        <td>
                            <label>
                                <input type="radio" name="class" value="Court Booking" required>
                            </label>
                        </td>
                        <td>Court Booking</td>
                        <td>Morning/Evening</td>
                        <td>Rs. 500 (without lights) / 700 (with lights)</td>
                        <td>Any Days (except Rainy Days)</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Waiver and Consent Form</h3>
            <div class="mb-3 waiver-box">
    <div style="height: 200px; overflow-y: scroll;">
        <p>By agreeing to this waiver and consent form, I acknowledge and agree to the following:</p>
        <ol>
            <li>I understand that participating in tennis classes involves risks of injury, and I voluntarily assume those risks.</li>
            <li>I release the tennis club, its instructors, and staff from any liability for injuries or damages that may occur during the classes.</li>
            <li>I confirm that I am in good health and physically capable of participating in the tennis classes.</li>
            <li>I give permission for emergency medical treatment in case of injury or illness during the classes.</li>
            <li>I allow the tennis club to use photographs or videos of me taken during the classes for promotional purposes.</li>
            <li>I understand that the tennis club reserves the right to dismiss any participant whose conduct is detrimental to the program.</li>
            <li>I agree to follow all rules and instructions given by the instructors during the classes.</li>
        </ol>
        <p>By checking the box above, I confirm that I have read, understood, and agree to this waiver and consent form.</p>
    </div>
</div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                <label class="form-check-label" for="consent">I agree to the waiver and consent form</label>
            </div>
            <div class="col-md-auto">
                    <button type="submit" name="register" class="btn btn-dark">REGISTER<i class="fas fa-chevron-right ms-2"></i></button>
                </div>
        </form>
        <br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.clickable-row').forEach(row => {
            row.addEventListener('click', () => {
                const radio = row.querySelector('input[type="radio"]');
                if (radio) {
                    radio.checked = true;
                }
            });
        });
    </script>
</body>
</html>
