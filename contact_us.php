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

    <div class="container">
    <div class="contact-form-wrapper d-flex justify-content-center">
        <div class="contact-form">
            <h3>Get in touch</h3>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <div class="contact-info">
            <h3>Contact us</h3>
            <p><strong>Address:</strong> Prishtine, Kosovo</p>
            <p><strong>Phone:</strong> +383 49 111 111</p>
            <p><strong>Email:</strong> info@audi.com</p>
            <p><strong>Website:</strong> audi.com</p>
        </div>
    </div>
</div>
   
<style>
    .footer{
        margin-top: 2%;
    }
    .contact-form-wrapper {
        margin-top: 2em;
        display: flex;
        justify-content: center;
    }
    .contact-form {
        background-color: #fff;
        padding: 2em;
        border-radius: 5px;
        margin-right: 2em;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        flex-basis: 50%;
    }
    .contact-info {
        background-color: #007bff;
        color: #fff;
        padding: 2em;
        border-radius: 5px;
        flex-basis: 40%;
    }
    .contact-form h3,
    .contact-info h3 {
        margin-bottom: 1em;
    }
    .contact-form .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .form-group {
        margin-bottom: 1em;
    }
    .form-control {
        border-radius: 0;
        border: 1px solid #ccc;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: none;
    }
    .contact-form .form-control {
        margin-bottom: 1em;
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