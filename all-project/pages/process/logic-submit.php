<?php
if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    header('location:../auth/login.php');
    exit;
}

?>