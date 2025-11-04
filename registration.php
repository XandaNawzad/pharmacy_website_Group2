<?php 
session_start();
include 'connection.php';

/*if (isset($_SESSION['user_id'])) {
  // Redirect logged-in users to the homepage or any other page
  header("Location: index.php");
  exit();
}*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Validate data (adjust validation as needed)
    if (empty($username) || empty($password) || empty($email)) {
        echo "Please fill in all fields.";
    } else {
        // Hash the password using a strong algorithm like bcrypt
        $hashed_password = md5($password);

        // Prepare and execute an SQL statement to insert the user
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $hashed_password, $email);

        if ($stmt->execute())  
 {
            
            header("Location: login.php"); // Redirect to login page
            exit();

        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/med_bottle.png" type="image/x-icon">

  <title>
    Pharmacy
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    .reg-btn:hover{
      background-color: #89CFF0;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Pharmacy
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About us.php">
                About US
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Products.php">
                 Products
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="Services.php">
                Services
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="Login.php">Login</a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="Registration.php">Registration</a>
            </li>
          </ul>

          <div class="user_option">
            <!--a href="">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a-->
           
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!--  Registeration section -->

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Registeration
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        
        <div class="col-md-6 col-lg-5 px-0">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
              <input type="text" name="username" placeholder="username" autocomplete="new-username"/>
            </div>
            <div>
              <input type="email" name="email" placeholder="Email" autocomplete="new-email"/>
            </div>
            <div>
              <input type="password" name="password" placeholder="Password" autocomplete="new-password"/>
            </div>

            <div class="d-flex ">
            <input class="reg-btn" type="submit" value="Register">
            </div>
            
          </form>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <img src="images/register.webp" alt="" srcset="">
        </div>
      </div>
    </div>
  </section>

  <!-- end Registeration section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              NEED HELP
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Gb road 123 london Uk </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+01 12345678901</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> demo@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>