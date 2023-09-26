<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $medicine = $_POST['medicine'];
    $query = $_POST['query'];
    $date = date('Y-m-d H:i:s');
  

 

       $sql = "INSERT INTO `enquiry_tbl`( `name`,`address`, `email`, `phone`, `medicine`, `query`, `updated_at`) VALUES ('$name','$address',' $email','$phone',' $medicine','$query','  $date ')";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Thanks for Contact Us.";
        header('location:../../enquiry.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../../enquiry.php?status='.$status.'&msg='.$message);
        exit();
    } 
}

?>