<?php
include("connection.php");
 
$id=$_GET['id'];
   //delete image from folder
  echo $sql= "SELECT * FROM site_setting_tbl where id=$id";  
  $result= mysqli_query($connection, $sql) or die("Query Failed.");
   $row = mysqli_fetch_array($result);
   $gallery=$row['gallery'];

    unset($gallery);

      $sql ="DELETE FROM site_setting_tbl where id=$id";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = " Deleted Successfully...";
        header('location:../site_setting.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../site_setting.php?status='.$status.'&msg='.$message);
        exit();
    }

 
?>