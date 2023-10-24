<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Passphoto</title>
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
                <a href="index.html" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-white text-decoration-none">
                    <img class="bi me-2 test" height="50" src="img/internationalpassphoto.png">
                </a>
                <ul class="nav justify-content-center underline">
                    <li><a href="index.html" class="nav-link px-2  underline">Home</a></li>
                    <li><a href="Aboutus.html" class="nav-link px-2  underline">About us</a></li>
                    <li><a href="Appointment.php" class="nav-link px-2  underline">Appointment</a></li>
                    <li><a href="Contact.html" class="nav-link px-2  underline">Contact</a></li>
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
  
    <div class="containerlogin">
        
        <h1>Login</h1>
        <div class="form">
            <form  action="" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" class="btnlogin" >Login</button>
        </form>
        
        </div>

    </div>
   <?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password']) && $row['id'] == 1 ){ 
            header('Location: index.php');
        } else
        if (password_verify($password, $row['password']) ) {
            echo '<span class="span"><p>Login successful</p><span>';
            header('Location: index.html');
        } else {
            echo '<span class="span"><p>Invalid password</p><span>';
        }
    } else {
        echo '<span class="span"><p>Username does not exist</p><span>';
    }
}

$conn->close();
?>
      <br><br><br><br><br><br><br>
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

