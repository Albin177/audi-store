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
        <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your Favorite Shopping</h1>
                             
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Best offers <br>of the year</h1>
                            
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get yourself a <br>brand new car</h1>    
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
    </section>
    <section class="popular">
        <div class="container">
            <div class="title text-xs-center m-b-30">
                <h2>Our Products</h2>
                <p class="lead">The best deals for you</p>
            </div>
            <div class="row">
            <?php 					
    $query_res = mysqli_query($db, "SELECT * FROM products LIMIT 6"); 
    while ($r = mysqli_fetch_array($query_res)) {                      
        echo '  
            <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                <div class="food-item-wrap">
                    <a class="restaurant-logo pull-left" href="products.php?d_id='.$r['d_id'].'">
                        <img src="admin/Res_img/dishes/' . $r['img'] . '" alt="product Photo" width="350" height="250">
                    </a>
                    <div class="content">
                        <h5><a href="products.php?d_id='.$r['d_id'].'">'.$r['title'].'</a></h5>
                        <div class="product-name">'.$r['slogan'].'</div>
                        <div class="price-btn-block">
                            <span class="price">$'.$r['price'].'</span>
                            <a href="products.php?d_id='.$r['d_id'].'" class="btn theme-btn-dash pull-right">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>';
    }	
?>

            </div>
        </div>
    </section>
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

</html>