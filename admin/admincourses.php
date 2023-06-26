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



        <div id="courses-list">
          <h2>List of Courses</h2>
          <?php 
          $sql = "SELECT * FROM course";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
          ?>
          <table>
            <thead>
            <tr>
              <th>Course ID</th>
              <th>Name</th>
              <th>Author</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
             <?php while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<th>'.$row['course_id'].'</th>';
            echo '<td>'.$row['course_name'].'</td>';
            echo  '<td>'.$row['course_author'].'</td>';
            echo  '<td>
            <form methos="POST">
            <input type="hidden" name="id" value='.$row["course_id"].'>
            <button type="submit"
            name="delete"
            value="delete"><i class="fas fa-trash"></i></button>
            </form>
            </td>';
            echo '</tr>';
              }  ?>
            </tbody>
          </table>
         <?php } else{
          echo "0 results";
          }
          
          if(isset($_REQUEST['delete'])){
            $sql = "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";
            if($conn->query($sql) == TRUE){
              echo '<meta http-equiv="refresh content="0;URL=?deleted" />';
            }else{
              echo "unable to delete";
            }
          }
          ?>
        </div>

        <div id="add-course-btn">
          <a href="./addcourse.php">
          <i class="fas fa-plus"></i>
          </a>
        </div>
      </div>

    </div>
    
<?php include('./admininclude/footer.php');
include('../maininclude/footer.php');
?>



