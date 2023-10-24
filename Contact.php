<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternationalPassphoto</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="/script/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
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
        <h2 class="my-4">Contact</h2>
        <hr>
    <form action="" method="post">
    <div class="form-group">
    <label for="name"><h3>Name:</h3></label>
    <input type="text" id="name" name="name" required>
    <br>
</div>
<div class="form-group">
    <label for="email"><h3>Email:</h3></label>
    <input type="email" id="email" name="email" required>
    <br>
</div>
<div class="form-group">
    <label for="message"><h3>Message:</h3></label>
    <input type="message" id="message" name="message" required></input>
    <br>
</div>
<br>
    <button type="submit" class="btnform">Submit</button>
  </form>


  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "international";

  // Create a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $name = ($_POST['name']);
  $email = ($_POST['email']);
  $message = ($_POST['message']);

 
  $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
  if ($conn->query($sql) === TRUE) {
    echo '<span class="span"><p>Message sent succesfully!</p></span>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the connection
  $conn->close();
} 
?>
<br>
   <hr style="margin: auto;">  
   <br> 

   <img class="conatctphoto" src="img/email.png" class="bi" width="50" height="50">
    <br>
    <p>Email: info@internationalpassphoto.nl</p>
<br>
    <img class="conatctphoto" src="img/phone.png" class="bi" width="50" height="50">
    <br>
    <p>Phone Number: +31657141596</p>
<br>
    <img class="conatctphoto" src="img/location.png" class="bi" width="50" height="50">
    <br>
    <p>Location: Herenstraat, 1015 CB Amsterdam</p>

</div>
  <br><br>

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