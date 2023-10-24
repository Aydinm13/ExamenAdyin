<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternationalPassphoto</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="script/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <!-- Menu -->
    <header class="p-3 text-bg-dark" style=" background-color: #1a1a1a !important;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                <a href="index.html"
                    class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-white text-decoration-none">
                    <img class="bi me-2 test" height="50" src="img/internationalpassphoto.png">
                </a>
                <ul class="nav justify-content-center underline">
                    <li><a href="index.html" class="nav-link px-2  underline">Home</a></li>
                    <li><a href="Aboutus.html" class="nav-link px-2  underline">About us</a></li>
                    <li><a href="Appointment.php" class="nav-link px-2  underline">Appointment</a></li>
                    <li><a href="Contact.php" class="nav-link px-2  underline">Contact</a></li>
                </ul>
                <div class="col-md-3 text-end">
                    <a href="login.php">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                    </a>
                    <a href="signup.php">
                        <button type="button" class="btn btn-outline-light btn-warning">Sign-up</button>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container containerform">
        <h2 class="my-4">Appointment Booking</h2>
        <hr>
        <form action="" method="post">
            <div class="form-group">
                <label for="first_name">
                    <h3>First Name:</h3>
                </label>
                <input type="text" name="first_name" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label for="last_name">
                    <h3>Last Name:</h3>
                </label>
                <input type="text" name="last_name" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label for="email">
                    <h3>Email:</h3>
                </label>
                <input type="email" name="email" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label for="phone_number">
                    <h3>Phone Number:</h3>
                </label>
                <input type="text" name="phone_number" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label for="appointment_date">
                    <h3>Date:</h3>
                </label>
                <input type="date" name="appointment_date" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label for="appointment_time">
                    <h3>Time:</h3>
                </label>
                <input type="time" name="appointment_time" class="form-control" required min="09:00" max="18:00"><br>

            </div>
            <input type="submit" value="Submit" class="btnform">
        </form>

    </div>
<?php 
include('submit_appointment.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $conn->real_escape_string($_POST["first_name"]);
    $last_name = $conn->real_escape_string($_POST["last_name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone_number = $conn->real_escape_string($_POST["phone_number"]);
    $appointment_date = $conn->real_escape_string($_POST["appointment_date"]);
    $appointment_time = $conn->real_escape_string($_POST["appointment_time"]);

    
        $sql = "INSERT INTO users (first_name, last_name, email, phone_number, appointment_date, appointment_time)
        VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$appointment_date', '$appointment_time')";

        if ($conn->query($sql) === TRUE) {
            echo '<span class="span"><p>New appointment created successfully </p></span>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } 

$conn->close();
?>



    <!-- footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="index.html" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <img src="img/internationalpassphoto.png" class="bi" width="40" height="40">
                    <use xlink:href="#bootstrap" />
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary" style="color: #fffd00 !important;">&copy; 2023
                    International Passphoto</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><img src="img/Twitter.png" class="bi"
                            width="24" height="24">
                        <use xlink:href="#twitter" />
                    </a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><img src="img/Instagram.png" class="bi"
                            width="24" height="24">
                        <use xlink:href="#instagram" />
                    </a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><img src="img/Facebook.png" class="bi"
                            width="24" height="24">
                        <use xlink:href="#facebook" />
                    </a></li>
            </ul>
        </footer>
    </div>
</body>

</html>