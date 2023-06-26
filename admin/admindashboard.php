<?php include('./admininclude/header.php');
include('./admindbcon.php');
// $sql = "SELECT COUNT('course_id') FROM course";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
// echo json_encode;



?>

        <div id="cards">
          <div class="card">
            Courses
            <div id="course-no">
              <?php
              $sql = "SELECT * from course";
              if ($result = mysqli_query($conn, $sql)) {
                  $rowcount = mysqli_num_rows( $result );
               };
               echo '<h1>'.$rowcount.'</h1>';
              ?>
            </div>
          </div>

          <div class="card">
            Students
            <div id="course-no">
            <?php
              $sql = "SELECT * from student";
              if ($result = mysqli_query($conn, $sql)) {
                  $rowcount = mysqli_num_rows( $result );
               };
               echo '<h1>'.$rowcount.'</h1>';
              ?>
            </div>
          </div>

          <!-- <div class="card">
            Enrolled courses
            <div id="course-no">
              <h1>10</h1>
            </div>
          </div> -->
        </div>


        <div id="student-table">
          <h2>Course Ordered</h2>
          <table>
            <tr>
              <!-- <th>Order ID</th> -->
              <th>Student ID</th>
              <th>Student Name</th>
              <th>Student Email</th>
              <!-- <th>Amount</th> -->
              <th>Student Occupation</th>
            </tr>
            <?php
              $sql = "SELECT * from student";
              $result = $conn->query($sql);
              // $row = $result->fetch_assoc();
              while($row = $result->fetch_assoc()){
                echo '<tr>
                <td>'.$row['stu_id'].'</td>
                <td>'.$row['stu_name'].'</td>
                <td>'.$row['stu_email'].'</td>
                <!-- <td>1299</td> -->
                <td>'.$row['stu_occ'].'</td>
              </tr>';
              }
               
              ?>
            
          </table>
        </div>

      </div>

    </div>
<?php include('./admininclude/footer.php') ?>



