<?php
include 'connection.php';
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
            <li class="nav-item active">
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
<?php 
session_start();
if(isset($_SESSION['user_id'])){
?>
            <li class="nav-item">
              <a class="nav-link" href="#">Hi, <?php echo $_SESSION['user_id'];?></a>
            </li>
            <li class="nav-item">
              <form action="logout.php" method="post">
                <input class="nav-link" type="submit" value="Logout">
              </form>
           </li>
            <?php
}else{
            ?>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Registration.php">Registration</a>
            </li>            
            <?php }      
            ?>
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

    <!-- slider section -->
    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Empowering Health, <br>
                        Inspiring Wellness
                      </h1>
                      <p>
Discover a new era of pharmacy care.
Your trusted source for medications, expert advice, and a healthier tomorrow.                      </p>
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/med_bottle.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Empowering Health,<br>
                        Inspiring Wellness
                      </h1>
                      <p>
                        Discover a new era of pharmacy care.
Your trusted source for medications, expert advice, and a healthier tomorrow.
                      </p>
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/med_bottle.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Empowering Health, 
 <br>
                Inspiring Wellness
                      </h1>
                      <p>
                        Discover a new era of pharmacy care.
Your trusted source for medications, expert advice, and a healthier tomorrow.
                      </p>
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/med_bottle.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <img src="images/line.png" alt="" />
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->
<br><br>
  <!-- start about us section-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://raw.githubusercontent.com/farazc60/Project-Images/refs/heads/main/Pharmacy%20Website%20Template/welcome-to-pharmasleek.webp" alt="About PharmaSleek Team" class="img-fluid about-us-img">
                </div>
                <div class="col-lg-6 about-us-content">
                    <div class="section-title text-start ps-lg-3">
                        <h2 class="text-start">Welcome to Pharmacy</h2>
                    </div>
                    <p class="ps-lg-3">Is more than just a pharmacy; we are your partners in health. Our mission is to provide accessible, high-quality pharmaceutical care, innovative health solutions, and compassionate support to every individual we serve.</p>
                    <p class="ps-lg-3">We believe in a holistic approach to wellness, combining expert knowledge with a deep commitment to our community's health. Our values of integrity, patient-centricity, and excellence guide everything we do.</p>
                    <ul class="list-unstyled mt-4 ps-lg-3">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Personalized medication management</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Comprehensive range of health & wellness products</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Dedicated to fostering a healthier community</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
 <!-- end about us section-->

  <!-- Products section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        <?php
        $sql = "SELECT `product_title`,`product_img1`,`product_price` FROM `products` ORDER BY `date` DESC LIMIT 8";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="<?php echo "admin_area/product_images/".$row["product_img1"];?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  <?php echo $row["product_title"];?>
                </h6>
                <h6>
                  Price
                  <span>
                  <?php echo "$".$row["product_price"];?>
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
          <?php
          }
        } 
        ?>
      </div>
      <div class="btn-box">
        <a href="Products.php">
          View All Products
        </a>
      </div>
    </div>
  </section>
  <!-- Products shop section -->

  <!-- Start Services section -->
   <section id="services" class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
              <br>
             <div class="heading_container heading_center">
             <h2>Our Comprehensive Services</h2>
             <p>Delivering excellence in pharmaceutical care, tailored to your needs.</p>
      </div>
      <br><br>
                
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4>Prescription Services</h4>
                        <p>Accurate, fast, and reliable prescription filling, with options for easy refills and medication synchronization.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-syringe"></i></div>
                        <h4>Immunizations & Vaccines</h4>
                        <p>Protect yourself and your loved ones with a wide range of vaccines, administered by our certified pharmacists.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-stethoscope"></i></div> 
                        <h4>Health Screenings</h4>
                        <p>Convenient health monitoring services, including blood pressure, cholesterol, and glucose screenings.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-capsules"></i></div> 
                        <h4>OTC & Wellness Products</h4>
                        <p>An extensive selection of over-the-counter medications, vitamins, supplements, and personal care items.</p>
                    </div>
                </div>
                 <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-shipping-fast"></i></div> 
                        <h4>Express Delivery</h4>
                        <p>Get your prescriptions and health essentials delivered to your doorstep, quickly and discreetly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-card">
                        <div class="icon"><i class="fas fa-user-nurse"></i></div>
                        <h4>Medication Therapy Management</h4>
                        <p>Personalized consultations to review your medications, optimize effectiveness, and minimize side effects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- end Services section -->


  <!-- gift section -->

  <!-- <section class="gift_section layout_padding-bottom">
    <div class="box ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="img_container">
              <div class="img-box">
                <img src="images/gifts.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Gifts for your <br>
                  loved ones
                </h2>
              </div>
              <p>
                Omnis ex nam laudantium odit illum harum, excepturi accusamus at corrupti, velit blanditiis unde perspiciatis, vitae minus culpa? Beatae at aut consequuntur porro adipisci aliquam eaque iste ducimus expedita accusantium?
              </p>
              <div class="btn-box">
                <a href="#" class="btn1">
                  Buy Now
                </a>
                <a href="#" class="btn2">
                  See More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->


  <!-- end gift section -->
<br><br>

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Contact Us
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207719.88735627674!2d45.21284548382486!3d35.56300600482014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40002c0536d143b1%3A0xf791750d4e215dea!2sSulaymaniyah%2C%20Kurdistan%20Region!5e0!3m2!1sen!2siq!4v1730408429638!5m2!1sen!2siq" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
<br><br>
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