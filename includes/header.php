<?php $active_page = basename($_SERVER['PHP_SELF'], ".php"); ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Bondlink Experts Company Limited</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <style>
            .highlighted {
                background-color: #696969;
                /*border-bottom: 10px solid #696969;*/
            }

           /* .highlighted:hover {
                border: 2px solid #;
            }*/
        </style>

        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->

        <!-- Header -->
        <header>
            <!-- Top Navbar >
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li>
                            <a href="#"><span class="fa fa-phone"></span>+254 716225693/+254 715877238</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-envelope"></span>finance@bondlinkeperts.co.ke</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-clock-o"></span> Mon - Fri 8:00 A.M - 5:30 P.M</a>
                        </li>
                         <li>
                            <a href="#"><span class="fa fa-clock-o"></span> Sat 8:00 A.M - 12.00 P.M</a>
                        </li>
                    </ul>
                    <ul class="list-inline social_icon">
                        <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-twitter"></span></a></li>
                    </ul>			
                </div>
            </div><Top Navbar end -->

            <!-- Navbar -->
            <nav class="navbar bootsnav">
                <div class="container">
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li class="navbar-item <?php echo ($active_page == 'index') ? 'highlighted' : ''; ?>"><a class="nav-link" href="index.php">Home</a></li>                    
                            <li class="navbar-item <?php echo ($active_page == 'about') ? 'highlighted' : ''; ?>"><a class="nav-link" href="about.php">About Us</a></li>
                            <li class="navbar-item <?php echo ($active_page == 'services') ? 'highlighted' : ''; ?>"><a class="nav-link" href="services.php">Services</a></li>
                            <li class="navbar-item <?php echo ($active_page == 'pricing') ? 'highlighted' : ''; ?>"><a class="nav-link" href="pricing.php">Pricing</a></li>
                            <li class="navbar-item <?php echo ($active_page == 'team') ? 'highlighted' : ''; ?>"><a class="nav-link" href="team.php">Team</a></li>
                            <li class="navbar-item <?php echo ($active_page == 'contact') ? 'highlighted' : ''; ?>"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->