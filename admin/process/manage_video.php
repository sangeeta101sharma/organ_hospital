<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    
   $VIDEO = $_POST['video'];
  
    $remark = $_POST['remark'];

 

    $sql = "INSERT INTO `video_tbl` (`video`, `remark`) VALUES ('$VIDEO', '$remark')";
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Data Inserted...";
        header('location:../manage_video.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../manage_video.php?status='.$status.'&msg='.$message);
        exit();
    
    }
}

?>