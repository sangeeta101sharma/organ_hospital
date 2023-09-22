<?php
include("connection.php");
 
$id=$_GET['id'];

      $sql ="DELETE FROM contact_us_tbl where id=$id";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Contact Deleted Successfully...";
        header('location:../contact_us.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../contact_us.php?status='.$status.'&msg='.$message);
        exit();
    }

 
?>