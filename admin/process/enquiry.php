<?php

include("connection.php");

    $name = $_POST['name'];
    $physician = $_POST['physician'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = $_POST['query'];
    $date = date('Y-m-d H:i:s');
  
/*name validation */

if(isset($name) && !empty($name)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space are allowed";     
        $array = array("status"=>2,"msg"=> $nameErr);
        echo json_encode($array);
        return;   
        }
}else{
    $array = array("status"=>2,"msg"=>"Name  field is required.");
    echo json_encode($array);
    return;
}
        /*physician validation */

if(isset($physician) && !empty($physician)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$physician)) {
        $physicianErr = "Only letters and white space are allowed";     
        $aray = array("status"=>2,"msg"=> $physicianErr);
        echo json_encode($aray);
        return;   
        }
}else{
    $aray = array("status"=>2,"msg"=>"Physician  field is required.");
    echo json_encode($aray);
    return;
}
/* Address validation */

if(isset($address) && !empty($address)){
    if(!preg_match("/^([a-zA-Z0-9 \b % # . , ?])*$/",$address)) {
        $addressErr = "In address field only letters,numbers, white space and some special symbols are allowed";     
        $arr3 = array("status"=>2,"msg"=> $addressErr);
        echo json_encode($arr3);
        return;   
        }
}
else{
    $arr3 = array("status"=>2, "msg"=>"Address field is required.");
    echo json_encode($arr3);
    return;
}
/* Email validation */

if(isset($email) && !empty($email)){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr = "Enter valid  email.";
        $arr2 = array("status"=>2, "msg"=>$emailErr);
        echo json_encode($arr2);
        return;
    }
}
else{
    $arr2 = array("status"=>2, "msg"=>"Email field is required.");
    echo json_encode($arr2);
    return;
}
/* Phone validation */
if(isset($phone) && !empty($phone)){
    if(!preg_match("/^([0-9]{10})$/",$phone)){
        $phoneErr = "Enter valid contact number. ";
        $arr1 = array("status"=>2,"msg"=>$phoneErr);
        echo json_encode($arr1);
        return;
    }
}
else{
    $arr1 = array("status"=>2,"msg"=>"Contact Number is Required.");
    echo json_encode($arr1);
    return;
}


/* query validation */

if(isset($query) && !empty($query)){
    if(!preg_match("/^([a-zA-Z0-9 \b % # . , ? & * \n ])*$/",$query)) {
        $queryErr = "Only letters,numbers and symbols (% , # . ? & * \n) are allowed";     
        $arr3 = array("status"=>2,"msg"=> $queryErr);
        echo json_encode($arr3);
        return;   
        }
}
else{
    $arr3 = array("status"=>2, "msg"=>"Query field is required.");
    echo json_encode($arr3);
    return;
}

       $sql = "INSERT INTO `enquiry_tbl`( `name`,`physician`,`address`, `email`, `phone`, `query`, `updated_at`) 
       VALUES ('$name','$physician','$address',' $email','$phone','$query','  $date ')";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
     if ($result)
     {
         $arr = array("status"=>1,"msg"=>"Thanks for Contact Us.. ");
         echo json_encode($arr);
     }
     else{
     $arr = array("status"=>2,"msg"=>"Enquiry Failed.");
     echo json_encode($arr);
     }
?>