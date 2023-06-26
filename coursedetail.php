<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course detail</title>
</head>
<body> -->
    <?php 
    include('./admin/admindbcon.php');
    include('./maininclude/header.php');
    ?>
    <div id="coursedetail-container">
        <?php
        if(isset($_GET['course_id'])){
            $course_id = $_GET['course_id'];
            $sql= "SELECT * FROM course WHERE course_id = '$course_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
        ?>
        <div id="coursedetail-img">
            <img src="<?php echo str_replace('..' ,'.' ,$row['course_image']) ;?>" alt="">
        </div>
        <div id="coursedetails">
            <h3>Course Name : <span id="course-name"><?php echo $row['course_name']; ?></span></h3>
            <p><strong>Desciption : </strong> <span id="course-desc"><?php echo $row['course_desc']; ?></span></p>
            <p><strong>Duration : </strong> <span id="course-duration"><?php echo $row['course_duration']; ?></span></p>
            <p><strong>Price : </strong><span>FREE</span></p>
            <?php
            if(isset($_SESSION['is_login'])){
             echo '<button onclick=enrolled() id="enroll-btn">Enroll Now</button>';
            }
            ?>
        </div>
    </div>
    <div id="coursedetail-table">
        <table>
            <thead>
                <tr>
                    <th>Lesson N0.</th>
                    <th>Lesson Name</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM lesson";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    $num = 0;
                    while($row = $result->fetch_assoc()){
                    if($course_id == $row['course_id']){
                        $num++;
                        echo '<tr>
                        <td>'.$num.'</td>
                        <td>'.$row['lesson_name'].'</td>
                    </tr>';
                    }
                }
                } 
                ?>
            </tbody>
        </table>
    </div>

    <?php include('./maininclude/footer.php'); ?>
<!-- </body>
</html> -->