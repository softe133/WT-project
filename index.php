<!--Template Name:Eatry
File Name:home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html>
    <head>
        <title>Online food Ordering system</title>

        <!--Meta Tag-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="images/favicon.png" rel="icon"/>
        <!--End Meta Tag-->

        <!--Fonts-->
        <link href="fonts/elegant_font/css/style.css" rel="stylesheet">
        <link href="fonts/et-line-font/style.css" rel="stylesheet">
        <!--End Fonts-->

        <!--CSS Link-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/owl.theme.default.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--End CSS Link-->

        <!--JS Link-->
        <script src= "js/jquery.min.js" type= "text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <script src="js/magnific-popup.js" type="text/javascript"></script>
        <script src="js/shuffle.min.js" type="text/javascript"></script>
        <script src="js/shuffle.custom.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <!--End JS Link-->

    </head>

    <body id="home">
        <?php include 'conn.php';?>
        <!--Header Of Site-->
        <header>
            <!--Top Header Section-->
            <div class="tv-header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="tv-headertopwidget">
                                <div class="tv-headertop-details">
                                    <p><i class="fa fa-envelope-o"></i>Email: <a href="#">foodon123@gmail.com</a></p>
                                    <p><i class="fa fa-phone"></i>Telephone: <a href="#">+92 334 234 5678</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="tv-headertopwidget">
                                <div class="tv-booktable-button">
                                    <a href="order.php">Order Online</a>
                                </div>
                                <div class="tv-header-social">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-feed"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Top Header Section-->

            <!--Navigation-->
            <nav class="navbar navbar-default tv-navbar-custom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="navbar-header">
                                <!--                                <a href="home.html" class="navbar-brand tv-bakeat-logo"><span>Bakeat</span>Hunt</a>-->
                                <a href="index.php"><img src="images/logo.png"></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tv-navbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="collapse navbar-collapse" id="tv-navbar">
                                <ul class="nav navbar-nav text-center">
                                   <li class=""><a href="index.php" class="tv-menu">Home</a></li>
                                    <li class=""><a href="shoppingcart.php" class="tv-menu">Our Menu</a></li>
                                    <li class="tv-drop-menu">
                                        <a data-toggle="dropdown" aria-expanded="false" class="tv-menu">Reservation<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu tv-sub-menu">
                                            <li class="dropdown-submenu Navigation-listItem is-dropdown ">
                                                <a href="order.php">Order Online</a>
                                                <a href="booktable.html">Book A Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                   <li class=""><a href="aboutusfood.html" class="tv-menu">AboutUs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!--End Navigation-->

            <!--Banner Section-->
            <div class="tv-banner-image" style="background: rgba(0, 0, 0, 0) url('images/img1b.jpeg') no-repeat scroll center top / cover;">
                <div class="tv-opacity-medium tv-bg-black"></div>
                <div class="tv-banner-info">
                    <h1>Food On</h1>
                    <h2>Best Food & Quality</h2>
                    <!-- <p>Established in 1991</p> -->
                </div>
            </div>
            <!--End Banner Section-->
        </header>
        <!--End Header Of Site-->

        <!--Tastes Good Section-->
        <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tv-tastes-imgtitle">
                            <h3>Food On</h3>
                            <p>Online food Service</p>
                        </div>
                        <div class="tv-tastes-img" style="background: rgba(0, 0, 0, 0) url('images/img1d.jpeg') no-repeat scroll center top / cover;">
                            <div class="tv-tastes-info">
                                <p>If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="tv-tastes-block">
                            <div class="tv-section-title">
                                <h3>Great Food. Tastes Good.</h3>
                                <p>If You Can Dream It. You Can Do It.</p>

                            </div>
                            <p>A food catering establishment known as a Restaurant offer food and drinks to the customer in return for money. Restaurants also offer take-out and delivery options. There are large variety of restaurants and restaurant chains in the world that specialize on the main chef’s cuisines or specific service models. Modern age restaurants were established during the 18th century in Europe where the business is mainly serving of food as per the order given by the customer.There was demand from customers for individual tables, individual orders and flexible lunching times and payment based on the item ordered. The kind of menus also segmented the restaurant business. The main advantage of restaurant pattern is that the restaurants can serve the customers what they want.</p>
                            <p>In order to avoid time wastage or for customer's ease,Online food ordering service has been introduced, Online food ordering is the process of food delivery or takeout from a local restaurant or food cooperative through a web page or app. Much like ordering consumer goods online, many of these services allow customers to keep accounts with them in order to make frequent ordering convenient. A customer will search for a favorite restaurant, usually filtered via type of cuisine and choose from available items, and choose delivery or pick-up. Payment can be amongst others either by credit card, Paypal or cash, with the restaurant returning a percentage to the online food company.</p>
                            <div class="tv-eatry-button text-center">
                                <a href="shoppingcart.php">See The Menu <span class="arrow_right"></span></a>
                                <a href="booktable.html">Reservation <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Tastes Good Section-->

        <!--Place Section-->
        <!-- <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title">
                        <h3>A Place For Tasty Food.</h3>
                        <p>Eat to live, not live to eat</p>
                    </div>
                    <div class="tv-service-block">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-service-content">
                                <h4>Ingredient Supply</h4>
                                <p>Food is the ingredient that binds us together.</p>
                                <div class="tv-eatry-button">
                                    <a href="">Read More <span class="arrow_right"></span></a>
                                </div>
                            </div>
                            <div class="tv-service-content">
                                <h4>Event Booking</h4>
                                <p>Booking for event such as birthday party,aniversary etc.</p>
                                <div class="tv-eatry-button">
                                    <a href="">Read More <span class="arrow_right"></span></a>
                                </div>
                            </div>
                            <div class="tv-service-content">
                                <h4>Fast Delivered</h4>
                                <p>Hot and tasty food comes earlier.</p>
                                <div class="tv-eatry-button">
                                    <a href="">Read More <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6  col-sm-4 col-xs-12">
                            <div class="tv-service-img">
                                <img src="images/img1a.jpeg" class="width-100 img-responsive" alt="serviceimg" />
                                <img src="images/img1e.jpeg" class="width-100 img-responsive" alt="serviceimg" />
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-service-content text-right">
                                <h4>Best Quality</h4>
                                <p>The Quality that you can,t forget.</p>
                                <div class="tv-eatry-button">
                                    <a href="">Read More <span class="arrow_right"></span></a>
                                </div>
                            </div>
                            <div class="tv-service-content text-right">
                                <h4>Online Booking</h4>
                                <p>Book online food and get its earlier.</p>
                                <div class="tv-eatry-button">
                                    <a href="">Read More <span class="arrow_right"></span></a>
                                </div>
                            </div>
                            <div class="tv-service-content text-right">
                                <h4>Freshly Made</h4>
                                <p>Freshly food that is full of sauces and taste.</p>
                                <div class="tv-eatry-button">
                                    <a href="">Read More <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--End Place Section-->

        <!--Find Our Menu Section-->
        <section class="tv-section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="tv-section-title">
                        <h3>Find Our Best Tasty Menu.</h3>
                        <p>Eat Healthy Become Healthy</p>
                    </div>
                    <div class="col-md-4 padding-0 col-sm-6 col-xs-12">
                        <div class="tv-find-block">
                            <div class="tv-find-media">
                                <?php
                                $q2="select * from meun_image where id =1";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     $prize=$row[4];
                                     
                                 ?>
                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="findimg" />
                                     <div class="tv-find-details">
                                        <h4>Good morning</h4>
                                        <h3>Breakfast Deal</h3>
                                        <!-- <p>From <small><?php $row["prize"]?></small>/day</p> -->
                                        <div class="tv-eatry-button">
                                    <a href="shoppingcart.php">BreakFast <span class="arrow_right"></span></a>
                                </div>
                            </div>
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="findimg" />
                                        <?php 
                                        }
                                    }
                                        ?>
                                <!-- <img src="images/breakfast.png" class="img-responsive width-100" alt="findimg" /> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 padding-0 col-sm-6 col-xs-12">
                        <div class="tv-find-block">
                            <div class="tv-find-media">
                                <?php
                                $q2="select * from meun_image where id =2";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     $prize=$row[4];
                                     
                                 ?>
                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="findimg" />
                                     <div class="tv-find-details">
                                        <h4>for Lunch</h4>
                                        <h3>Special Lunch</h3>
                                        <!-- <p>From <small><?php $row["prize"]?></small>/day</p> -->
                                        <div class="tv-eatry-button">
                                    <a href="shoppingcart.php">Lunch <span class="arrow_right"></span></a>
                                </div>
                            </div>
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="findimg" />
                                        <?php 
                                        }
                                    }
                                        ?>
                               <!--  <img src="images/lunch3.jpeg" class="img-responsive width-100" alt="findimg" />
                            </div>
                            <div class="tv-find-details">
                                <h4>for Lunch</h4>
                                <h3>Special Lunch</h3>
                                <p>From <small>$15</small>/day</p>
                                <div class="tv-eatry-button">
                                    <a href="">Read More <span class="arrow_right"></span></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 padding-0 col-sm-6 col-xs-12">
                        <div class="tv-find-block">
                            <div class="tv-find-media">
                                 <?php
                                $q2="select * from meun_image where id =3";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     $prize=$row[4];
                                     
                                 ?>
                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="findimg" />
                                     <div class="tv-find-details">
                                        <h4>for Dinner</h4>
                                        <h3>Special Dinner</h3>
                                        <!-- <p>From <small><?php $row["prize"]?></small>/day</p> -->
                                        <div class="tv-eatry-button">
                                    <a href="shoppingcart.php">Dinner <span class="arrow_right"></span></a>
                                </div>
                            </div>
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="findimg" />
                                        <?php 
                                        }
                                    }
                                        ?>
                                <!-- <img src="images/dinner.jpeg" class="img-responsive width-100" alt="findimg" />
                            </div>
                            <div class="tv-find-details">
                                <h4>for Dinner</h4>
                                <h3>Special Dinner</h3>
                                <p>From <small>$25</small>/day</p>
                                <div class="tv-eatry-button">
                                    <a href="">Read More <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--End Find Our Menu Section-->

        <!--Event Comming Section-->
        <section class="tv-section-padding">
            <div class="tv-fixed-img tv-section-padding-70" style="background-image: url('images/Image1.png')">
                <div class="tv-whiteopacity-medium tv-bg-white"></div>
                <div class="container">
                    <div class="row">
                        <div class="tv-section-title" style="position: relative;">
                            <!-- <h3>Our Event.</h3>
                            <p>Next Comming Event</p>
                        </div> -->
                        <!-- <div class="tv-eventcomming-block">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="tv-eventcomming-date">
                                    <span>21</span>
                                    <p>Jan 2018</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-eventcomming-details">
                                    <h4><a>Eatry David to host Event Awards 2018</a></h4>
                                    <p class="tv-eventcomming-address">11:00 am -1:00 pm - 196 Manhattan, MY, USA</p>
                                    <p class="tv-eventcomming-content">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="tv-eventcomming-img">
                                    <img src="images/Image12.jpeg" class="img-responsive width-100" alt="eventcomming-img" />
                                </div>
                            </div>
                        </div>
                        <div class="tv-eventcomming-block">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="tv-eventcomming-date">
                                    <span>28</span>
                                    <p>Jan 2018</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-eventcomming-details">
                                    <h4><a>Eatry David to host Event Awards 2018</a></h4>
                                    <p class="tv-eventcomming-address">11:00 am -1:00 pm - 196 Manhattan, MY, USA</p>
                                    <p class="tv-eventcomming-content">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="tv-eventcomming-img">
                                    <img src="images/Image13.jpeg" class="img-responsive width-100" alt="eventcomming-img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--End Event Comming Section-->

        <!--Our Chef Section-->

        <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title">
                        <h3>Our Chef.</h3>
                        <p>Awesome Chef</p>
                    </div>
                    <div id="owl-example" class="owl-carousel owl-theme">
                        <div class="tv-chef-details text-center">
                            <div class="tv-chef-img">
                                <?php
                                $q2="select * from chef_image where id =1";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     
                                 ?>

                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="" alt="tvchefimg" />
                                    <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="" alt="tvchefimg" />
                                        <?php 
                                        }
                                    }
                                        ?>
                                <!-- <img src="images/chef1.jpg" class="" alt="tvchefimg">
                                <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>-->
                            </div> 
                        </div>
                        <div class="tv-chef-details text-center">
                            <div class="tv-chef-img">
                                <?php
                                $q2="select * from chef_image where id =2";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     
                                 ?>

                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="" alt="tvchefimg" />
                                    <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="" alt="tvchefimg" />
                                        <?php 
                                        }
                                    }
                                        ?>
                                <!-- <img src="images/chef2.jpg" class="" alt="tvchefimg">
                                <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="tv-chef-details text-center">
                            <div class="tv-chef-img">
                                 <?php
                                $q2="select * from chef_image where id =3";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     
                                 ?>

                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="" alt="tvchefimg" />
                                    <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="" alt="tvchefimg" />
                                        <?php 
                                        }
                                    }
                                        ?>
                                
                                <!-- <img src="images/chef3.jpg" class="" alt="tvchefimg">
                                <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="tv-chef-details text-center">
                            <div class="tv-chef-img">
                                 <?php
                                $q2="select * from chef_image where id =4";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     
                                 ?>

                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="" alt="tvchefimg" />
                                    <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="" alt="tvchefimg" />
                                        <?php 
                                        }
                                    }
                                        ?>
                                <!-- <img src="images/chef5.jpg" class="" alt="tvchefimg">
                                <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="tv-chef-details text-center">
                            <div class="tv-chef-img">
                                 <?php
                                $q2="select * from chef_image where id =5";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     
                                 ?>

                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="" alt="tvchefimg" />
                                    <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="" alt="tvchefimg" />
                                        <?php 
                                        }
                                    }
                                        ?>
                                <!-- <img src="images/chef4.jpg" class="" alt="tvchefimg">
                                <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="tv-chef-details text-center">
                            <div class="tv-chef-img">
                                 <?php
                                $q2="select * from chef_image where id =6";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     
                                 ?>

                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="" alt="tvchefimg" />
                                    <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="" alt="tvchefimg" />
                                        <?php 
                                        }
                                    }
                                        ?>
                                <!-- <img src="images/chef1.jpg" class="" alt="tvchefimg">
                                <div class="tv-chef-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Chef Owl Script-->
        <script>
            $(document).ready(function () {
                $('#owl-example').owlCarousel({
                    margin: 10,
                    nav: true,
                    items: 4,
                    dots: false,
                    navText: ["<img src='images/Image19.png'>", "<img src='images/Image18.png'>"],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        700: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
            });
        </script>
        <!--End Chef Owl Script-->

        <!--End Our Chef Section-->

        <!--Menu Section-->
        <!-- <div id="menu" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title">
                        <h3>TODAY'S MENU.</h3>
                        <p>Delicius</p>
                    </div>
                    <div class="tv-filter-wrapper col-xs-12 text-center tv-mb-30">
                        <div class="portfolio-filter filter-options">
                            <button class="active" data-group="all">all</button>
                            <button data-group="breakfast">Breakfast</button>
                            <button data-group="coffee">Coffee</button>
                            <button data-group="dinner">Dinner</button>
                            <button data-group="lunch">Lunch</button>
                        </div>
                    </div>
                    <div id="grid" class="portfolio-grid  my-shuffle-container my-shuffle">
                        <div class="item picture-item  col-lg-6 col-md-6 col-sm-6 col-xs-12 tv-mb-30" data-groups='["breakfast" , "coffee"]'>
                            <div class="tv-menu-details">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="images/food1.jpg" data-image-popup="">
                                            <img src="images/food1.jpg" class="media-object" alt="menuimg" style="width: 100px;" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Chicken Tikka large<span class="menu-price">700Rs</span></h4>
                                        <p class="menu-speacification"><small>&ndash; Juice Fruit</small> <small>&ndash; Checken</small> <small>&ndash; Cherry</small></p>
                                        <p class="menu-speacification"><small>&ndash; Vegetable</small> <small>&ndash; Milk</small> <small>&ndash; Potato</small></p>
                                        <p class="menu-speacification"><small>&ndash; Tomato</small> <small>&ndash; Chilli</small> <small>&ndash; Sesame</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item picture-item  col-lg-6 col-md-6 col-sm-6 col-xs-12 tv-mb-30" data-groups='["coffee" , "breakfast"]'>
                            <div class="tv-menu-details">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="images/food2.jpg" data-image-popup="">
                                            <img src="images/food2.jpg" class="media-object" alt="menuimg" style="width: 100px;" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Chicken burger with naugets <span class="menu-price">250Rs</span></h4>
                                        <p class="menu-speacification"><small>&ndash; Juice Fruit</small> <small>&ndash; Checken</small> <small>&ndash; Cherry</small></p>
                                        <p class="menu-speacification"><small>&ndash; Vegetable</small> <small>&ndash; Milk</small> <small>&ndash; Potato</small></p>
                                        <p class="menu-speacification"><small>&ndash; Tomato</small> <small>&ndash; Chilli</small> <small>&ndash; Sesame</small></p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="item picture-item col-lg-6 col-md-6 col-sm-6 col-xs-12 tv-mb-30" data-groups='["dinner"]'>
                            <div class="tv-menu-details">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="images/food3.jpg" data-image-popup="">
                                            <img src="images/food3.jpg" class="media-object" alt="menuimg" style="width: 100px;" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Chicken pasta <span class="menu-price">200Rs</span></h4>
                                        <p class="menu-speacification"><small>&ndash; Juice Fruit</small> <small>&ndash; Checken</small> <small>&ndash; Cherry</small></p>
                                        <p class="menu-speacification"><small>&ndash; Vegetable</small> <small>&ndash; Milk</small> <small>&ndash; Potato</small></p>
                                        <p class="menu-speacification"><small>&ndash; Tomato</small> <small>&ndash; Chilli</small> <small>&ndash; Sesame</small></p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="item picture-item col-lg-6 col-md-6 col-sm-6 col-xs-12 tv-mb-30" data-groups='["coffee" , "dinner"  , "lunch"]'>
                            <div class="tv-menu-details">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="images/food9.jpg" data-image-popup="">
                                            <img src="images/food9.jpg" class="media-object" alt="menuimg" style="width: 100px;" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Chocolate Chips <span class="menu-price">150Rs</span></h4>
                                        <p class="menu-speacification"><small>&ndash; Juice Fruit</small> <small>&ndash; Checken</small> <small>&ndash; Cherry</small></p>
                                        <p class="menu-speacification"><small>&ndash; Vegetable</small> <small>&ndash; Milk</small> <small>&ndash; Potato</small></p>
                                        <p class="menu-speacification"><small>&ndash; Tomato</small> <small>&ndash; Chilli</small> <small>&ndash; Sesame</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item picture-item col-lg-6 col-md-6 col-sm-6 col-xs-12 tv-mb-30" data-groups='["breakfast" , "dinner"  , "lunch"]'>
                            <div class="tv-menu-details">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="images/food4.jpg" data-image-popup="">
                                            <img src="images/food4.jpg" class="media-object" alt="menuimg" style="width: 100px;" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Chicken Tikka <span class="menu-price">250Rs</span></h4>
                                        <p class="menu-speacification"><small>&ndash; Juice Fruit</small> <small>&ndash; Checken</small> <small>&ndash; Cherry</small></p>
                                        <p class="menu-speacification"><small>&ndash; Vegetable</small> <small>&ndash; Milk</small> <small>&ndash; Potato</small></p>
                                        <p class="menu-speacification"><small>&ndash; Tomato</small> <small>&ndash; Chilli</small> <small>&ndash; Sesame</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item picture-item col-lg-6 col-md-6 col-sm-6 col-xs-12 tv-mb-30" data-groups='["dinner" , "lunch"]'>
                            <div class="tv-menu-details">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="images/food5.jpg" data-image-popup="">
                                            <img src="images/food5.jpg" class="media-object" alt="menuimg" style="width: 100px;" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Fired Fish<span class="menu-price">500Rs</span></h4>
                                        <p class="menu-speacification"><small>&ndash; Juice Fruit</small> <small>&ndash; Checken</small> <small>&ndash; Cherry</small></p>
                                        <p class="menu-speacification"><small>&ndash; Vegetable</small> <small>&ndash; Milk</small> <small>&ndash; Potato</small></p>
                                        <p class="menu-speacification"><small>&ndash; Tomato</small> <small>&ndash; Chilli</small> <small>&ndash; Sesame</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item picture-item col-lg-6 col-md-6 col-sm-6 col-xs-12 tv-mb-30" data-groups='["lunch"]'>
                            <div class="tv-menu-details">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="images/food6.jpg" data-image-popup="">
                                            <img src="images/food6.jpg" class="media-object" alt="menuimg" style="width: 100px;" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Burger with Donats <span class="menu-price">250Rs</span></h4>
                                        <p class="menu-speacification"><small>&ndash; Juice Fruit</small> <small>&ndash; Checken</small> <small>&ndash; Cherry</small></p>
                                        <p class="menu-speacification"><small>&ndash; Vegetable</small> <small>&ndash; Milk</small> <small>&ndash; Potato</small></p>
                                        <p class="menu-speacification"><small>&ndash; Tomato</small> <small>&ndash; Chilli</small> <small>&ndash; Sesame</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item picture-item col-lg-6 col-md-6 col-sm-6 col-xs-12 tv-mb-30" data-groups='["lunch"]'>
                            <div class="tv-menu-details">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="images/food7.jpg" data-image-popup="">
                                            <img src="images/food7.jpg" class="media-object" alt="menuimg" style="width: 100px;" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Chicken Boarst <span class="menu-price">200Rs</span></h4>
                                        <p class="menu-speacification"><small>&ndash; Juice Fruit</small> <small>&ndash; Checken</small> <small>&ndash; Cherry</small></p>
                                        <p class="menu-speacification"><small>&ndash; Vegetable</small> <small>&ndash; Milk</small> <small>&ndash; Potato</small></p>
                                        <p class="menu-speacification"><small>&ndash; Tomato</small> <small>&ndash; Chilli</small> <small>&ndash; Sesame</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--End Gallery Section-->

        <!--Gallery Section-->
       <?php 
       $enddate = "2019-02-28"; ?>
        <section class="tv-section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 padding-0">
                        <div class="tv-gallery-block">
                            <div class="tv-gallery-details">
                                <div class="tv-section-title">
                                    <h3>GALLERY.</h3>
                                    <p>Best Gallery</p>
                                </div>
                                <div class="tv-gallery-info">
                                    <p>The food delivery market is changing at an accelerated pace. And as a restaurant owner, being online is the way to go when it comes down to expanding your current customer base & boosting your stream of revenue.</p>
                                </div>
                                <div class="tv-eatry-button">
                                    <a href="">Read More <span class="arrow_right"></span></a>
                                </div>
                            </div>
                            <div class="tv-gallery-media">
                                <div id="galleryowl" class="owl-carousel owl-theme tv-gallery-bgcolor">
                                    <div class="tv-gallery-img">
                                        <?php
                                 $q2="select * from image_display where id =1";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     

                                     
                                 ?>

                                  <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <a href="<?php echo $row["image"]; ?>" class="tv-gallery-link" data-gallery-image-popup="">
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="galleryimg" />
                                     <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                            </a>
                                   
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                        <?php 
                                        }
                                        }
                                        ?>
                                         </div>
                                        <!-- <a href="images/lunch1.jpeg" class="tv-gallery-link" data-gallery-image-popup="">
                                            <img src="images/lunch1.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                            <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                        </a>
                                    </div> -->
                                    <div class="tv-gallery-img">
                                        <?php
                                 $q2="select * from image_display where id =2";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     

                                     
                                 ?>

                                  <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <a href="<?php echo $row["image"]; ?>" class="tv-gallery-link" data-gallery-image-popup="">
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="galleryimg" />
                                     <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                            </a>
                                   
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                        <?php 
                                        }
                                        }
                                        ?>
                                         </div>

                                       <!--  <a href="images/lunch1d.jpeg" class="tv-gallery-link" data-gallery-image-popup="">
                                            <img src="images/lunch1d.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                            <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                        </a>
                                    </div> -->
                                    <div class="tv-gallery-img">

                                         <?php
                                 $q2="select * from image_display where id =3";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     

                                     
                                 ?>
                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <a href="<?php echo $row["image"]; ?>" class="tv-gallery-link" data-gallery-image-popup="">
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="galleryimg" />
                                     <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                            </a>
                                   
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                        <?php 
                                        }
                                        }
                                        ?>
                                         </div>
                                        <!-- <a href="images/lunch1c.jpeg" class="tv-gallery-link" data-gallery-image-popup="">
                                            <img src="images/lunch1c.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                            <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                        </a>
                                    </div> -->
                                    <div class="tv-gallery-img">
                                         <?php
                                 $q2="select * from image_display where id =4";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     

                                     
                                 ?>
                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <a href="<?php echo $row["image"]; ?>" class="tv-gallery-link" data-gallery-image-popup="">
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="galleryimg" />
                                     <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                            </a>
                                   
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                        <?php 
                                        }
                                        }
                                        ?>
                                         </div>
                                        <!-- <a href="images/lunch1c.jpeg" class="tv-gallery-link" data-gallery-image-popup="">
                                            <img src="images/lunch1c.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                            <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                        </a>
                                    </div> -->
                                    <div class="tv-gallery-img">
                                         <?php
                                 $q2="select * from image_display where id =5";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     

                                     
                                 ?>
                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <a href="<?php echo $row["image"]; ?>" class="tv-gallery-link" data-gallery-image-popup="">
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="galleryimg" />
                                     <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                            </a>
                                   
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                        <?php 
                                        }
                                        }
                                        ?>
                                         </div>
                                       <!--  <a href="images/lunch1d.jpeg" class="tv-gallery-link" data-gallery-image-popup="">
                                            <img src="images/lunch1d.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                            <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                        </a>
                                    </div> -->
                                    <div class="tv-gallery-img">
                                         <?php
                                 $q2="select * from image_display where id =6";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     

                                     
                                 ?>
                                 <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <a href="<?php echo $row["image"]; ?>" class="tv-gallery-link" data-gallery-image-popup="">
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="galleryimg" />
                                     <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                            </a>
                                   
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                        <?php 
                                        }
                                        }
                                        ?>
                                         </div>
                                        <!-- <a href="images/lunch1.jpeg" class="tv-gallery-link" data-gallery-image-popup="">
                                            <img src="images/lunch1.jpeg" class="width-100 img-responsive" alt="galleryimg" />
                                            <div class="tv-gallery-subtitle">
                                                <h4></h4>
                                            </div>
                                        </a>
                                    </div> -->
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Gallery Owl Script-->
        <script>
            $(document).ready(function () {
                $('#galleryowl').owlCarousel({
                    autoWidth: false,
                    nav: false,
                    items: 3,
                    dots: true,
                    mouseDrag: false,
//      navText : ['<i class="fa fa-arrow-left" aria-hidden="true"></i>','<i class="fa fa-arrow-right" aria-hidden="true"></i>']
//                    navText: ["<img src='images/Image19.png'>", "<img src='images/Image18.png'>"],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        700: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        },
                        1100:
                                {
                                    items: 3
                                }
                    }
                });
            });
        </script>
        <!--End Gallery Owl Script-->

        <!--End Gallery Section-->

        <!--Testinominal Section-->
        <!-- <section class="tv-section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 padding-0">
                        <div class="tv-testinominal-block">
                            <div class="tv-testinominal-img">
                                <img src="images/food10.jpg" class="img-responsive width-100" alt="testinominalimg" />
                            </div>
                            <div class="tv-testinominal-details">
                                <div id="testinominalowl" class="owl-carousel owl-theme">
                                    <div class="tv-testinominal-info">
                                        <div class="tv-section-title">
                                            <h3>Our Testinominal.</h3>
                                            <p>They Say</p>
                                        </div>
                                        <p>I tried their lunch buffet a couple of times and had dinner once. The food is exceptionally good. The lunch buffet has a good mix of South and North Indian cuisine. I tried their Dosas, Idlies, Vadas along with Naans, Chole and Saag Paneer. Everything is rich in taste and really cooked well.The dinner wasn't expensive as I expected. The biryanis and the curries were cooked to perfection and the quantity is a lot more than in other restaurants. Try it...you won't regret it.</p>
                                        <h4>
                                            <span class="tv-testinominal-name">Mr jawad</span>
                                            <span class="tv-testinominal-job">Project manager</span>
                                        </h4>
                                        <div class="tv-testinominal-subimg">
                                            <img src="images/manager.jpg" class="img-circle img-responsive" width="66" height="66">
                                        </div>
                                    </div>
                                    <div class="tv-testinominal-info">
                                        <div class="tv-section-title">
                                            <h3>Our Testinominal.</h3>
                                            <p>They Say</p>
                                        </div>
                                        <p>Nullam id tincidunt odio. Etiam at risus ut elit luctus euismod. Aenean laoreet at purus vitae dignissim. Donec luctus lorem lacus, a sagittis mauris ultricies in. Vivamus molestie dapibus neque porta porta. Aenean blandit elit dui. Vestibulum ac suscipit purus, consequat lacinia nisl. Sed nisi felis, viverra quis ante id, maximus efficitur leo. Sed luctus placerat viverra. Fusce urna augue, rutrum non sem in, porta imperdiet turpis. Sed ornare vulputate accumsan.</p>
                                        <h4>
                                            <span class="tv-testinominal-name">James Newbie</span>
                                            <span class="tv-testinominal-job">Project manager</span>
                                        </h4>
                                        <div class="tv-testinominal-subimg">
                                            <img src="images/Image33.jpg" class="img-circle img-responsive" width="66" height="66">
                                        </div>
                                    </div>
                                    <div class="tv-testinominal-info">
                                        <div class="tv-section-title">
                                            <h3>Our Testinominal.</h3>
                                            <p>They Say</p>
                                        </div>
                                        <p>Nullam id tincidunt odio. Etiam at risus ut elit luctus euismod. Aenean laoreet at purus vitae dignissim. Donec luctus lorem lacus, a sagittis mauris ultricies in. Vivamus molestie dapibus neque porta porta. Aenean blandit elit dui. Vestibulum ac suscipit purus, consequat lacinia nisl. Sed nisi felis, viverra quis ante id, maximus efficitur leo. Sed luctus placerat viverra. Fusce urna augue, rutrum non sem in, porta imperdiet turpis. Sed ornare vulputate accumsan.</p>
                                        <h4>
                                            <span class="tv-testinominal-name">James Newbie</span>
                                            <span class="tv-testinominal-job">Project manager</span>
                                        </h4>
                                        <div class="tv-testinominal-subimg">
                                            <img src="images/Image34.jpg" class="img-circle img-responsive" width="66" height="66">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 -->
        <!--Testinominal Owl Script-->
        <script>
            $(document).ready(function () {
                $('#testinominalowl').owlCarousel({
                    autoWidth: false,
                    nav: false,
                    items: 1,
                    dots: true,
                    mouseDrag: false,
//      navText : ['<i class="fa fa-arrow-left" aria-hidden="true"></i>','<i class="fa fa-arrow-right" aria-hidden="true"></i>']
//                    navText: ["<img src='images/Image19.png'>", "<img src='images/Image18.png'>"],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        700: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });
            });
        </script>
        <!--End Testinominal Owl Script-->

        <!--End Testinominal Section-->

        <!--Blog Section-->
        
        <section class="tv-section-padding">
            <div class="tv-block-bg tv-section-padding-70">
                <div class="container">

                    <div class="row">
                        <div class="tv-section-title">
                            <h3>From The Blog.</h3>
                            <p>News</p>
                        </div>
                        <div class="tv-block-clear">
                            <?php
                                 $q2="select * from show_image where id =1";
                                 $run=mysqli_query($conn, $q2);
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     
                                 ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-blog-block">
                                    <div class="tv-blog-img">
                                        <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                    <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="newsimg" />
                                    <?php } else { ?>
                                          <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="newsimg" />
                                        <?php 
                                        }
                                        ?>
                                    </div>
                                
                                    <div class="tv-blog-details">
                                        <div class="tv-eatry-button tv-offspace-bottom-40">
                                            <a href="booktable.html">Event Reservation <span class="arrow_right"></span></a>
                                        </div>
                                        <h3><a href="">Marriage Function</a></h3>
                                        <p class="tv-blog-postmeta"><span><?php echo $row["start_date"]; ?></span> - <span><span>3 Comments </span></span></p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php
                                 $q2="select * from show_image where id =2";
                                 $run=mysqli_query($conn, $q2);
                                 $today = date("Y-m-d");
                                 while($row=mysqli_fetch_array($run))
                                 {
                                     $id=$row[0];
                                     $image=$row[1];
                                     $date=$row[2];
                                     $enddate=$row[3];
                                     
                                 ?>
                                <div class="tv-blog-block">
                                    <div class="tv-blog-img">
                                        <?php
                                    if ($date === $today || $enddate === "2019-02-28") {?>
                                        <img src="<?php echo $row["image"]; ?>" class="width-100 img-responsive" alt="newsimg" />
                                        <?php } else {?>
                                             <img src="images/Image38.jpeg" class="width-100 img-responsive" alt="newsimg" />;
                                             <?php
                                        }
                                        ?>
                                    
                                     
                                    </div>
                                    <div class="tv-blog-details">
                                        <div class="tv-eatry-button tv-offspace-bottom-40">
                                            <a href="booktable.html">Event Reservation <span class="arrow_right"></span></a>
                                        </div>
                                        <h3><a href="">Birthday Celebration</a></h3>
                                        <p class="tv-blog-postmeta"><span><?php echo $row["start_date"]; ?></span> - <span><span>3 Comments </span></span></p>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Blog Section-->

        <!--Instagram Section-->
   <!--       <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title">
                        <h3>@EatryInsta.</h3>
                        <p>You Can Search Your Insta</p>
                    </div>
                    <div id="instaowl" class="owl-carousel owl-theme">
                        <div class="tv-insta-img">
                            <a href="">
                                <img src="images/rest1.jpg" class="img-responsive" alt="instaimg" />
                                <div class="gallery-overlay">
                                    <div class="gallery-overlay-inner">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tv-insta-img">
                            <a href="">
                                <img src="images/rest2.jpg" class="img-responsive" alt="instaimg" />
                                <div class="gallery-overlay">
                                    <div class="gallery-overlay-inner">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tv-insta-img">
                            <a href="">
                                <img src="images/rest3.jpg" class="img-responsive" alt="instaimg" />
                                <div class="gallery-overlay">
                                    <div class="gallery-overlay-inner">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tv-insta-img">
                            <a href="">
                                <img src="images/rest4.jpg" class="img-responsive" alt="instaimg" />
                                <div class="gallery-overlay">
                                    <div class="gallery-overlay-inner">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tv-insta-img">
                            <a href="">
                                <img src="images/rest5.jpg" class="img-responsive" alt="instaimg" />
                                <div class="gallery-overlay">
                                    <div class="gallery-overlay-inner">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tv-insta-img">
                            <a href="">
                                <img src="images/rest1.jpg" class="img-responsive" alt="instaimg" />
                                <div class="gallery-overlay">
                                    <div class="gallery-overlay-inner">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 -->
        <!--Insta Owl Script
        <script>
            $(document).ready(function () {
                $('#instaowl').owlCarousel({
                    margin: 10,
                    autoWidth: false,
                    nav: false,
                    items: 5,
                    dots: true,
                    navText: ["<img src='images/Image19.png'>", "<img src='images/Image18.png'>"],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        700: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                });
            });
        </script> -->
        <!--End Insta Owl Script-->

        <!--End Instagram Section-->

        <!--Footer Section-->
         <section class="tv-section-footer-padding " style="background-color: white;">
            <div class="container backlink-top">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 padding-0">
                        <div class="tv-footer-menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="aboutusfood.html">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 padding-0" style="background-color: white;">
                        <div class="tv-copyright">
                            <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                            <p>&copy; All right reserved. Designed by <a href="https://www.themevault.net">ThemeVault</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Footer Section-->

        <!--Magnefic Popup Script-->
        <script>
            $(document).ready(function () {
                var $imagePopup = $('[data-image-popup]');
                /*Image*/
                $imagePopup.magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                var $imagePopup = $('[data-gallery-image-popup]');
                /*Image*/
                $imagePopup.magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });
        </script>
        <!--Magnefic Popup Script Ends Here..-->


        <a id="back-to-top" class="animated bounce" style="display: none;"><i class="fa fa-caret-up fa-lg"></i></a> 
    </body>   
</html>
