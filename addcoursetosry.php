<?php 
include('./admin/admindbcon.php');
if(isset($_SESSION['is_login'])){
    $_SESSION['stulogemail'] = $stulogemail;
    echo $stulogemail;
}
?>