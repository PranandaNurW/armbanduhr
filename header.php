<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/logo.png">
    <title>Armbanduhr</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- /bootstrap -->

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!-- /owl carousel -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- /font awesome -->

    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- /css -->

    <?php 
    //functions untuk connect database
        require('functions.php'); 
    ?>
</head>

<body>

<!-- header -->
    <header id="header"> 
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg static-top navbar-dark color-second-bg">
            <a class="navbar-brand" href="./index.php"> <h4>ARMBANDUHR</h4> </a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-poppins">
                    <li class="nav-item">
                     <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./page-men.php">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./page-women.php">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about-us.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pricing
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">IDR</a>
                            </div>
                    </li>
                </ul>

                <ul class="navbar-nav font-poppins">
                    <!-- cart -->
                    <?php if( isset($_SESSION["username"])) : ?>
                        <li class="nav-item mr-2">
                            <a href="./cart.php" class="nav-link">
                                <span><i class="fas fa-shopping-cart text-white"></i></span><sup class="ml-1 color-primary-bg text-white rounded-circle px-1"><?= !isset($_SESSION["shopping_cart"])? 0 : count($_SESSION["shopping_cart"]); ?></sup>
                            </a>
                        </li>
                    <?php endif; ?>

                    <!-- account dropdown -->
                    <?php if( isset($_SESSION["username"])) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><i class="fas fa-user-alt text-white"></i></span>
                            
                            </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item disabled" href="#"><?php echo ($_SESSION["username"]); ?></a>
                                    <a class="dropdown-item" href="logout.php" onclick="return confirm('Are You Sure Want to Log Out?');">Log Out</a>
                                </div>
                        </li>
                    <?php endif; ?>

                    <!-- login -->
                    <?php if( !isset($_SESSION["username"])) : ?>    
                        <li class="nav-item">
                            <a href="./login.php" class="nav-link">
                                <span><i class="fas fa-user-alt text-white"></i></span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>

                
            </div>                
        </nav>
        <!-- /navbar -->
        
    </header>
<!-- /header -->

<!-- main -->
    <main id="main-site">