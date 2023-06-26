<?php 
if(!isset($_SESSION)){
    session_start();
}
include('../student/stuinclude/header.php');
include('../admin/admindbcon.php');


if(isset($_SESSION['is_login'])){
    $stuemail = $_SESSION['stulogemail'];
}
else{
    echo "<script> location.href = '../index.php'; </script>";
}
$sql = "SELECT * FROM student WHERE stu_email = '$stuemail'";
$result = $conn->query($sql);
if($result->num_rows >= 1){
    $row = $result->fetch_assoc();
    $stuid = $row["stu_id"];
    $stuname = $row["stu_name"];
    $stuocc = $row["stu_occ"];
    $stuimg = $row["stu_img"];
}
// echo $result->num_rows;
// echo $stuid;

if(isset($_REQUEST['updatenamebtn'])){
    if(($_REQUEST['stuname']) == ""){
        $passmsg = '<div id="passmsg">Fill all fields!</div>';
    }else{
        $stuname = $_REQUEST['stuname'];
        $stuocc = $_REQUEST['stuocc'];
        $stu_img = $_FILES['stuimg']['name'];
        $stu_img_temp = $_FILES['stuimg']['tmp_name'];
        $img_folder = "../images/student/".$stu_img;
        move_uploaded_file($stu_img_temp,$img_folder);
        $sql = "UPDATE student SET stu_name = '$stuname' , stu_occ = '$stuocc', stu_img = '$img_folder' WHERE stu_email = '$stuemail'";
        if($conn->query($sql) == TRUE){
            $passmsg = '<div id="passmsg">Updated Successfuly!</div>';
        }
        else{
            $passmsg = '<div id="passmsg">Unable to update!</div>';
        }
    }
    header('Refresh:0');
}
?>
<form action="" method="POST" enctype="multipart/form-data" id="studentProfile-form">
    <h2>Student Profile</h2>
    <div class="form-group">
        <label for="stuid">Student ID</label>
        <br>
        <input type="text" name="stuid" id="stuid" value="<?php if(isset($stuid)) {echo $row['stu_id'];} ?>" readonly>
    </div>
    <div class="form-group">
        <label for="stuemail">Student Email</label>
        <br>
        <input type="text" name="stuemail" id="stuemail" value="<?php if(isset($stuemail)) {echo $stuemail;} ?>" readonly>
    </div>
    <div class="form-group">
        <label for="stuname">Student Name</label>
        <br>
        <input type="text" name="stuname" id="stuname" value="<?php if(isset($stuname)) {echo $stuname;} ?>">
    </div>
    <div class="form-group">
        <label for="stuocc">Student Occupation</label>
        <br>
        <input type="text" name="stuocc" id="stuocc" value="<?php if(isset($stuocc)) {echo $stuocc;} ?>">
    </div>
    <div class="form-group">
        <label for="stuimg">Upload Image</label>
        <br>
        <input type="file" name="stuimg" id="stuimg">
    </div>
    <div class="submit-btn">
        <button type="submit" name="updatenamebtn">
            Update
        </button>
        <?php if(isset($passmsg)) {echo $passmsg;} ?>
    </div>
</form>
</div>
</div>

<?php include('../student/stuinclude/footer.php'); ?>