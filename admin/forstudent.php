<?php 
include('./admininclude/header.php');
include('./admindbcon.php');
?>

<div id="student-table">
          <h2>Student Infomation</h2>
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
              $num = 0;
              // $row = $result->fetch_assoc();
              while($row = $result->fetch_assoc()){
                $num++;
                echo '<tr>
                <td>'.$num.'</td>
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
