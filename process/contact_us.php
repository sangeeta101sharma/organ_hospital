<?php


 

        $name = $_POST['name'];
 
        $email = $_POST['email'];
        
        $phone = $_POST['phone'];
        
        $medicine = $_POST['medicine'];
        
        $query = $_POST['query'];
       
        $date = date('Y-m-d H:i:s');
       
        $connection = mysqli_connect('localhost','root','','new_admin_organ_hospital_db') or die("connection Failed.");
   
  
    
/*Name validation*/

    if(isset($name) && !empty($name)){  
        if(!preg_match("/^['a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";     
            $arr = array("status"=>2,"msg"=> $nameErr);
            echo json_encode($arr);
            return;   
            }
    }else{
        $arr = array("status"=>2,"msg"=>"Name  field is required.");
        echo json_encode($arr);
        return;
    }

 /*Email validation */

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
        $contatErr = "Enter valid contact number. ";
        $arr1 = array("status"=>2,"msg"=>$contatErr);
        echo json_encode($arr1);
        return;
    }
}
else{
    $arr1 = array("status"=>2,"msg"=>"Contact Number is Required.");
    echo json_encode($arr1);
    return;
}

 /*medicine validation */

if(isset($medicine) && !empty($medicine)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$medicine)) {
        $nameErr = "Only letters and white space allowed";     
        $arr = array("status"=>2,"msg"=> $nameErr);
        echo json_encode($arr);
        return;   
        }
}else{
    $arr = array("status"=>2,"msg"=>"Name  field is required.");
    echo json_encode($arr);
    return;
}
/*  query validation */ 

if(isset($query) && !empty($query)){
    if(!preg_match("/^([a-zA-Z0-9 \b % # . , ?])*$/",$query)) {
        $msgErr = "Only letters,numbers and white space allowed";     
        $arr3 = array("status"=>2,"msg"=> $msgErr);
        echo json_encode($arr3);
        return;   
        }
}
else{
    $arr3 = array("status"=>2, "msg"=>"Message field is required.");
    echo json_encode($arr3);
    return;
}
/*  SQL Query start here  */
    
       $sql ="INSERT INTO `contactus_tbl`  (`name`,`email`,`phone`,`medicine`,`query`,`date`) 
        VALUES
        ('$name','$email','$phone','$medicine','$query','$date')";
   $result= mysqli_query($connection,$sql) or die("failed sql");
   if($result){
        $arr = array("status"=>1,"msg"=>"Thanks for contact us. ");
        echo json_encode($arr);
       
    }
else{
    $array = array("status"=>2,"msg"=>"Try again");
    echo json_encode($array);
} 





?>