<?php
include("connection.php");
 
$id=$_GET['id'];

      $sql ="DELETE FROM appointment_form_tbl where id=$id";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = " Deleted Successfully...";
        header('location:../appointment.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../appointment.php?status='.$status.'&msg='.$message);
        exit();
    }

 
?>