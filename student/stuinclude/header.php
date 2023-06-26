<?php 
include('../admin/admindbcon.php');
include('../config.php');
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['is_login'])){
    $stulogemail = $_SESSION['stulogemail'];
}
if(isset($stulogemail)){
    $sql = "SELECT stu_img FROM student WHERE stu_email = '$stulogemail'";
    $result = $conn->query($sql); $row = $result->fetch_assoc(); $stu_img =
$row['stu_img']; } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- aos link  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- google fonts link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400;500;600&family=Lato:wght@400;700;900&family=Lobster+Two:wght@700&family=Montserrat:ital,wght@0,500;0,600;1,600&family=Mukta:wght@200;400;600;800&family=Poppins:wght@200;400;500;600;800&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap  -->
    <link rel="stylesheet" href="../style/bootstrap.min.css" />
    <!-- font awesome  -->
    <!-- <link rel="stylesheet" href="style/all.min.css"> -->
    <!-- custom css file  -->
    <!-- <link rel="stylesheet" href="style/custom.css" /> -->
    <link rel="stylesheet" href="../style/admin.css">
    <link rel="stylesheet" href="../style/student.css?=<?=$version?>"/>
    <title>Educo.</title>
  </head>

  <body>
    <nav>
      <div class="logo">
        <h1>Educo.</h1>
      </div>
    </nav>
    <div id="stu-dashboard">

    <div id="student-sidebar">
      <ul>
        <li>
          <img style="width:200px; height:200px;"
            src="<?php echo $stu_img; ?>"
            alt="studentProfile"
            class="img-thumbnail rounded-circle"
          />
        </li>
        <li>
          <a
            href="studentprofile.php"
            class="nav-link>"
          >
            <i class="fas fa-user"></i>
            Profile <span class="sr-only">(current)</span></a
          >
        </li>
        <!-- <li>
          <a href="stufeedback.php">
            <i class="fab fa-accessible-icon"></i>
            Feedback
          </a>
        </li>
        <li>
          <a href="studentchangepass.php">
            <i class="fas fa-key"></i>
            Change Password
          </a>
        </li> -->
        <li>
          <a href="../logout.php">
            <i class="fa-solid fa-right-from-bracket"></i>
            logout
          </a>
        </li>
      </ul>
    </div>
    <div id="studashboard-desc">
