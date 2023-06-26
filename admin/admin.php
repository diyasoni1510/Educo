<?php 

if(!isset($_SESSION)){
    session_start();
}
include('../dbconnection.php');
if(!isset($_SESSION['is_admin_login']))
{
if(isset($_POST['checklogemail']) && isset($_POST['adminlogemail']) && isset($_POST['adminlogpass']))
{
    $adminlogemail = $_POST['adminlogemail'];
    $adminlogpass = $_POST['adminlogpass'];

    $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email = '".$adminlogemail."' AND admin_pass = '".$adminlogpass."' ";

    $result = $conn->query($sql);
    $row = $result->num_rows;

    if($row === 1){
        echo json_encode($row);
        $_SESSION['is_admin_login'] = TRUE;
        $_SESSION['adminlogemail'] = $adminlogemail;
    }
    else if($row === 0){
        echo json_encode($row);
    }

}
}

?>