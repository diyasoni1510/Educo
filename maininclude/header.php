<?php include('./config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- aos link  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- google fonts link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400;500;600&family=Lato:wght@400;700;900&family=Lobster+Two:wght@700&family=Montserrat:ital,wght@0,500;0,600;1,600&family=Mukta:wght@200;400;600;800&family=Poppins:wght@200;400;500;600;800&display=swap" rel="stylesheet">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <!-- font awesome  -->
    <!-- <link rel="stylesheet" href="style/all.min.css"> -->
    <!-- custom css file  -->
    <link rel="stylesheet" href="style/custom.css?=<?=$version?>">
    <title>Educo.</title>
</head>
<body>

    <!-- header starts here  -->
        <nav>
            <div id="logo"><h2>Educo.</h2></div>
            <div id="navlist">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php">Course</a></li>
                    <?php
                    session_start();
                    if(isset($_SESSION['is_login'])){
                        echo '<li><a href="logout.php">Logout</a></li>
                        <li><a href="./student/studentprofile.php">My Profile</a></li>';
                    }
                    else{
                        echo '<li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#RegistrationModal">Signup</a></li>';
                    }
                    ?>
                    
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div id="menu-icon">
                <div id="icon">
                <i class="fas fa-sharp fa-bars" id="menu-btn" onclick="showmneu()"></i>
                </div>
            </div>
        </nav>
        <div id="res-nav">
            <div id="x-mark">
                <i class="fas fa-xmark" id="cut-btn" onclick="hidemenu()"></i>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="courses.php">Course</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Logout</a></li>
                <li><a href="#">Signup</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div id="nav-overlay"></div>
        