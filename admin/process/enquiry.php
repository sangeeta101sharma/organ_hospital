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
  
        /*name validation */

if(isset($name) && !empty($name)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space are allowed";     
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
/* Address validation */

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
}
/* query validation */

if(isset($query) && !empty($query)){
    if(!preg_match("/^([a-zA-Z0-9 \b % # . , ?])*$/",$query)) {
        $queryErr = "Only letters,numbers and white space allowed";     
        $arr3 = array("status"=>2,"msg"=> $queryErr);
        echo json_encode($arr3);
        return;   
        }
}


 

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