<?php
include("connection.php");

    $id = $_POST['id'];
    $office_location = $_POST['office_location'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    /* Office_location validation */
if(isset($office_location) && !empty($office_location)){  
    if(!preg_match("/^['a-zA-Z0-9' ]*$/",$office_location)) {
       $arr=array("status"=>2,"msg"=>"Only letters,numbers and white space are allowed."); 
       echo json_encode($arr);
       return;  
        }
}else{ 
    $arr=array("status"=>2,"msg"=>"Office location  field is required."); 
    echo json_encode($arr);
    return;  
}

/* Contact validation */
if(isset($contact) && !empty($contact)){
    if(!preg_match("/^([0-9]{10})$/",$contact)){
        $arr1 = array("status"=>2,"msg"=>"Enter valid contact number.");
        echo json_encode($arr1);
        return;
    }
}
else{
    $arr1 = array("status"=>2,"msg"=>"Contact Number is Required.");
   echo json_encode($arr1);
    return;
}
/* Email validation */

if(isset($email) && !empty($email)){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $arr2 = array("status"=>2, "msg"=>"Enter valid  email.");
        echo json_encode($arr2);
        return;
    }
}
else{
    $arr2 = array("status"=>2, "msg"=>"Email field is required.");
   echo json_encode($arr2);
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
    if($result){
        $arry = array("status"=>1,"msg"=>"Your data has been Inserted.");
        echo json_encode($arry);
    }
    else{
    $arry = array("status"=>2,"msg"=>"Try again.");
    echo json_encode($arry);
    } 



?>