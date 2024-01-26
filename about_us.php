<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Audi Store</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="home">
<header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                    data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="./images/audi-logo.png" width="90px" alt=""></a></a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span
                                    class="sr-only">(current)</span></a> </li>
                        <?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{		
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My orders</a> </li>';
                                    echo  '<li class="nav-item"><a href="admin/index.php" class="nav-link active">Dashboard</a> </li>';
                                    echo  '<li class="nav-item"><a href="contact_us.php" class="nav-link active">Contact Us</a> </li>';
                                    echo  '<li class="nav-item"><a href="about_us.php" class="nav-link active">About Us</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}
						?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   <section class="hero">
   <style>
        .hero {
            background-image: url('images/ABT.jpg');
            background-position: center top -240px;
            padding-top: 22%;
        }
    </style>
      
    </section>

    <div class="container about-us-container">
    <h2 class="about-us-title">About Audi</h2>
    <p class="about-us-text">
        Audi stands for excellence, innovation, and the allure of the open road. With over a century of engineering triumphs, Audi has continuously set the standard for luxury and performance vehicles. Our commitment to quality and design is matched only by our dedication to creating the most advanced and sustainable cars of tomorrow. Join us as we pave the way forward in automotive excellence.
    </p>
    <p class="about-us-text">
        From the sleek curves of our exteriors to the cutting-edge technology within, an Audi car is more than a vehicle—it's a lifestyle. Experience the perfect blend of comfort, style, and power at Audi. We don't just drive, we inspire.
    </p>
</div>
   
<style>
    .footer{
        margin-top: 2%;
    }
    .about-us-container {
        max-width: 800px;
        margin: auto;
        padding: 2em;
        text-align: center;
    }
    .about-us-title {
        margin-bottom: 1em;
        font-size: 2.5em;
        color: #333;
    }
    .about-us-text {
        font-size: 1.2em;
        line-height: 1.6;
        margin-bottom: 1em;
        color: #555;
    }
</style>

    <?php include "include/footer.php" ?>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>