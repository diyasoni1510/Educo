<?php include('../config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <!-- font awesome  -->
    <!-- <link rel="stylesheet" href="style/all.min.css"> -->
    <!-- custom css file  -->
    <!-- <link rel="stylesheet" href="style/custom.css"> -->
    <!-- custom css file  -->
    <link rel="stylesheet" href="../style/admin.css?=<?=$version?>">
    <title>Admin Dashboard</title>
</head>
<body>

    <nav>
      <div class="logo">
        <h1>Educo.</h1>
      </div>
    </nav>

    <div id="dashboard">

      <div id="sidebar">
        <ul>
          <li><a href="./admindashboard.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
          <li><a href="./admincourses.php"><i class="fas fa-graduation-cap"></i>Courses</a></li>
          <li><a href="./lesson.php"><i class="fas fa-book"></i>Lessons</a></li>
          <li><a href="./forstudent.php"><i class="fas fa-user"></i>Students</a></li>
          <li><a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>LogOut</a></li>
        </ul>
      </div>

      <div id="dashboard-desc">