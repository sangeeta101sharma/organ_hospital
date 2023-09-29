<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $specialist = $_POST['specialist'];
    $preferetime = $_POST['preferetime'];
    $preferedate = $_POST['preferedate'];
    $query = $_POST['query'];
   
    
  
     /*    name validation */

if(isset($name) && !empty($name)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$name)) {
        $nameErr = "This is Name Field:Only letters and white space are allowed";     
        $arr = array("status"=>2,"msg"=> $nameErr);
        $str = implode(',', $arr);
        echo $str;
        return;   
        }
}else{
    $arr = array("status"=>2,"msg"=>"Name  field is required.");
    $str = implode(',', $arr);
    echo $str;
    return;
}

/* Phone validation */
if(isset($phone) && !empty($phone)){
    if(!preg_match("/^([0-9]{10})$/",$phone)){
        $phoneErr = "Enter valid contact number. ";
        $arr1 = array("status"=>2,"msg"=>$phoneErr);
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


 

       $sql = "INSERT INTO `appointment_form_tbl` (`name`, `email`, `phone`, `specialist`, `preferetime`, `preferedate`, `query`) VALUES ('$name', '$email', '$phone', '$specialist', '$preferetime', '$preferedate', '$query')";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Appointment Successfull.";
        header('location:../../index.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../../index.php?status='.$status.'&msg='.$message);
        exit();
    } 
}

?> 