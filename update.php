<?php

require 'dbcon.php';
//Mobile Wallpaper Status
if(isset($_GET['user_active'])){
    $id = $_GET['user_active'];
    
    mysqli_query($con, "UPDATE `marksheets` SET `status`='1' WHERE `id` = '$id'");
    $_SESSION['success'] = "Active Successfully";
    header('location: index.php');
    exit(0);
}
//Mobile Wallpaper Status
if(isset($_GET['user_deactive'])){
    $id = $_GET['user_deactive'];
    
    mysqli_query($con, "UPDATE `marksheets` SET `status`='0' WHERE `id` = '$id'");
    $_SESSION['success'] = "Dective Successfully";
    header('location: index.php');
    exit(0);
}
?>