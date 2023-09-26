<?php
include("connection.php");
 
$id=$_GET['id'];
  echo $sql= "SELECT * FROM admin_details_tbl where id=$id";  
  $result= mysqli_query($connection, $sql) or die("Query Failed.");
   $row = mysqli_fetch_array($result);

      $sql ="DELETE FROM admin_details_tbl where id=$id";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = " Deleted Successfully...";
        header('location:../admin_details.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../admin_details.php?status='.$status.'&msg='.$message);
        exit();
    }

 
?>