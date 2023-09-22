<?php
include("connection.php");
 
$id=$_GET['id'];
   //delete image from folder
  echo $sql= "SELECT * FROM video_tbl where id=$id";  
  $result= mysqli_query($connection, $sql) or die("Query Failed.");
   $row = mysqli_fetch_array($result);
   $video=$row['video'];

    unset($video);

      $sql ="DELETE FROM video_tbl where id=$id";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = " Deleted Successfully...";
        header('location:../manage_video.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../manage_video.php?status='.$status.'&msg='.$message);
        exit();
    }

 
?>