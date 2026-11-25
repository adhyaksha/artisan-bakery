<?php
if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    header('location:../dashboard/dashboard.php');
    exit;
}
?>