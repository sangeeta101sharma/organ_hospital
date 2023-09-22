<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $id = $_POST['id'];
    $office_location = $_POST['office_location'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
   
if($_POST['action']=="INSERT"){
    $sql = "INSERT INTO `contact_us_tbl` (`office_location`, `contact`, `email`, `address`) 
    VALUES ('$office_location', $contact, '$email', ' $address')";
}
else
if($_POST['action']=="UPDATE"){
    $sql = "UPDATE `contact_us_tbl` SET `office_location`='$office_location',
    `contact`= $contact, 
  `email`= '$email',
    `address`= '$address' where id= $id"; 
}
    $result= mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Data Inserted...";
        header('location:../contact_us.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../contact_us.php?status='.$status.'&msg='.$message);
        exit();
    } 
}

?>