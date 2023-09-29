<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $id = $_POST['id'];
    $office_location = $_POST['office_location'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    /* Office_location validation */
if(isset($office_location) && !empty($office_location)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$office_location)) {
        $error = "Only letters and white space are allowed";
        header("location:../contact_us.php?status = 2msg=".$error);
        exit();    
        }
}else{
    $error = "Name  field is required.";
    header("location:../contact_us.php?status = 2msg=".$error);
    exit();  
}

/* Contact validation */
if(isset($contact) && !empty($contact)){
    if(!preg_match("/^([0-9]{10})$/",$contact)){
        $contatErr = "Enter valid contact number. ";
        $arr1 = array("status"=>2,"msg"=>$contatErr);
        $str1 = implode(',', $arr1);
    echo $str1;
        return;
    }
}
else{
    $arr1 = array("status"=>2,"msg"=>"Contact Number is Required.");
    $str1 = implode(',', $arr1);
    echo $str1;
    return;
}
/* Email validation */

if(isset($email) && !empty($email)){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr = "Enter valid  email.";
        $arr2 = array("status"=>2, "msg"=>$emailErr);
        $str2 = implode(',', $arr2);
    echo $str2;
        return;
    }
}
else{
    $arr2 = array("status"=>2, "msg"=>"Email field is required.");
    $str2 = implode(',', $arr2);
    echo $str2;
    return;
}
/* Message validation 

if(isset($address) && !empty($address)){
    if(!preg_match("/^([a-zA-Z0-9 \b % # . , ?])*$/",$address)) {
        $addressErr = "Only letters,numbers, white space and some special symbols are allowed";     
        $arr3 = array("status"=>2,"msg"=> $addressErr);
        $str3 = implode(',', $arr3);
    echo $str3;
        return;   
        }
}
else{
    $arr3 = array("status"=>2, "msg"=>"Address field is required.");
    $str3 = implode(',', $arr3);
    echo $str3;
    return;
}*/

   
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
    location.reload();
}

?>