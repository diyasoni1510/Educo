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
if(isset($_REQUEST['lessonSubmitBtn'])){
    if(($_REQUEST['lesson_name'] == "") ||($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
        $msg = '<div>Fill all fields!</div>';
    }
    else{
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_desc'];
        $course_id = $_REQUEST['course_id'];
        $course_name = $_REQUEST['course_name'];
        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
        $link_folder = '../lessonvid/'.$lesson_link;
        move_uploaded_file($lesson_link_temp , $link_folder );
        $sql = "INSERT INTO lesson (lesson_name , lesson_desc , lesson_link , course_id, course_name) VALUES ('$lesson_name' , '$lesson_desc' , '$link_folder' , '$course_id' , '$course_name')";

        if($conn->query($sql) == TRUE){
            $msg = '<div>Lesson added successfully!</div>';
        }else{
            $msg = '<div>Unable to add the lesson!</div>';
        }
    }
}

?>

<h2>Add new lesson</h2>
<form action="" method="POST" enctype="multipart/form-data" id="add-lesson-form">
    <div class="form-group">
        <label for="course_id">Course ID</label>
        <br>
        <input type="text" name="course_id" id="course_id" value="<?php if(isset($_SESSION['course_id'])) {echo $_SESSION['course_id'];} ?>" readonly>
    </div>
    
    <div class="form-group">
        <label for="course_name">Course name</label>
        <br>
        <input type="text" name="course_name" id="course_name" value="<?php if(isset($_SESSION['course_name'])) {echo $_SESSION['course_name'];} ?>" readonly>
    </div>
    <div class="form-group">
        <label for="lesson_name">Lesson name</label>
        <br>
        <input type="text" name="lesson_name" id="lesson_name">
    </div>
    <div class="form-group">
        <label for="lesson_desc">Lesson description</label>
        <br>
        <!-- <input type="text" name="lesson_desc" id="lesson_desc"> -->
        <textarea name="lesson_desc" id="lesson_desc" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="lesson_link">Lesson Video Link</label>
        <br>
        <input type="file" name="lesson_link" id="lesson_link">
    </div>
    <div class="submit-close-btn">
        <button type="submit" name="lessonSubmitBtn">Submit</button>
        <a href="./lesson.php">Close</a>
    </div>
</form>
      <div id="phpmsg"><?php if(isset($msg)) {echo $msg;} ?></div>
    </div>
    </div>
    
<?php include('./admininclude/footer.php') ?>



