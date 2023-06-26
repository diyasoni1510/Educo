
<?php 
if(!isset($_SESSION)){
  session_start();
}
 include('./admininclude/header.php');
//  include('../maininclude/header.php');
 include('../admin/admindbcon.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminemail = $_SESSION['adminlogemail'];
 }else{
  echo "<script> location.href='../index.php';  </script>";
 }
?>
<?php
if(isset($_REQUEST['courseSubmitBtn'])){
    if(($_REQUEST['course-name'] == "") || ($_REQUEST['course-desc'] == "") || ($_REQUEST['course-author'] == "") || ($_REQUEST['course-duration'] == "")){
        $msg = '<div>Fill all fields!</div>';
    }
    else{
        $course_name = $_REQUEST['course-name'];
        $course_desc = $_REQUEST['course-desc'];
        $course_author = $_REQUEST['course-author'];
        $course_duration = $_REQUEST['course-duration'];
        $course_image = $_FILES['course-image']['name'];
        $course_image_temp = $_FILES['course-image']['tmp_name'];
        $image_folder = '../images/courseimg/'.$course_image;
        move_uploaded_file($course_image_temp , $image_folder );

        $sql = "INSERT INTO course (course_name , course_desc , course_author , course_image, course_duration) VALUES ('$course_name' , '$course_desc' , '$course_author' , '$image_folder' , '$course_duration')";

        if($conn->query($sql) == TRUE){
            $msg = '<div>Course added successfully!</div>';
        }else{
            $msg = '<div>Unable to add the course!</div>';
        }
    }
}

?>



<h2>Add new courses</h2>
<form action="" method="POST" enctype="multipart/form-data" id="add-course-form">
    <div class="form-group">
        <label for="course-name">Course Name</label>
        <br>
        <input type="text" name="course-name" id="course-name">
    </div>
    
    <div class="form-group">
        <label for="course-desc">Course Description</label>
        <br>
        <!-- <input type="text" name="course-desc" id="course-desc"> -->
        <textarea name="course-desc" id="course-desc" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="course-author">Author</label>
        <br>
        <input type="text" name="course-author" id="course-author">
    </div>
    <div class="form-group">
        <label for="course-duration">Course Duration</label>
        <br>
        <input type="text" name="course-duration" id="course-duration">
    </div>
    <div class="form-group">
        <label for="course-name">Course Image</label>
        <br>
        <input type="file" name="course-image" id="course-name">
    </div>
    <div class="submit-close-btn">
        <button type="submit" name="courseSubmitBtn">Submit</button>
        <a href="./admincourses.php">Close</a>
    </div>
</form>
      <div id="phpmsg"><?php if(isset($_REQUEST['courseSubmitBtn'])) {echo $msg;} ?></div>
    </div>
    </div>
    
<?php include('./admininclude/footer.php') ?>



