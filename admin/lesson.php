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


<div class="mt-5 mx-3">
    <form action="" class="mt-3 form-inline">
        <div class="form-group mr-3">
            <label for="checkid">Enter course ID :</label>
            <input type="text" class="form-control ml-3" id="checkid" name="checkid">
        </div>
        <button type="submit" class="btn btn-danger">Search</button>
    </form>

    <?php
    $sql = "SELECT course_id FROM course";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_id']){
            $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['checkid']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if(($row['course_id']) == $_REQUEST['checkid']){
                $_SESSION['course_id'] = $row['course_id'];
                $_SESSION['course_name'] = $row['course_name'];
                ?>
                <h3 style="color:blue;margin-top:2rem;">Course ID: <?php if(isset($row['course_id'])) {echo $row['course_id'];} ?> <br>Course name: <?php if(isset($row['course_name'])) {echo $row['course_name'];} ?></h3>
                <?php
                $sql = "SELECT * FROM lesson WHERE course_id={$_REQUEST['checkid']}";
                $result = $conn->query($sql);
                echo '<table class="table">
                <thead>
                <tr>
                <th>Lesson ID</th>
                <th>Lesson Name</th>
                <th>Lesson Link</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>';
                while($row = $result->fetch_assoc()){
                    echo '<tr>';
                    echo '<th>'.$row["lesson_id"].'</th>';
                    echo '<td>'.$row["lesson_name"].'</td>';
                    echo '<td>'.$row["lesson_link"].'</td>';
                    echo '<td>
                    <form action ="" method="POST">
                    <input type="hidden" name="id" value='.$row["lesson_id"].'>
                    <button type="submit" name="delete" value="delete">
                    <i class="fas fa-trash"></i></button>
                    </form>
                    </td>
                    <tr>';
                } 
                echo '</tbody>
                </table>';
            }
            else{
                echo '<div class="alert alert-dark mt-4" role="alert">Course not Found!</div>';
            }
            if(isset($_REQUEST['delete'])){
                $sql = "DELETE FROM lesson WHERE lesson_id={$_REQUEST['id']}";
                if($conn->query($sql) === TRUE){
                    echo '<meta http-equiv="refresh content="0;URL=?deleted" />';
                }else{
                    echo "unable to delete data";
                }
            }
        }
    }
    ?>
</div>
<?php 
if(isset($_SESSION['course_id'])){
echo '<div id="add-course-btn">
<a href="./addLesson.php">
  <i class="fas fa-plus"></i>
</a>
</div>';
}
?>

<?php include('./admininclude/footer.php') ?>