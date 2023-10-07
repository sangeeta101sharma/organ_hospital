<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
   $id=$_POST['id'];
   $logo=$_FILES['logo']['name'];
   $logo_tmpname=($_FILES['logo']['tmp_name']);
   $LOGO = "images/".$logo;
   move_uploaded_file($logo_tmpname, $LOGO);
   
   $allowed = array('jpeg', 'png', 'jpg');
   $ext = pathinfo($logo, PATHINFO_EXTENSION);
   if (!in_array($ext, $allowed)) {
    $_SESSION['status'] = 2;
    $_SESSION['message'] = "Invalid file type. Only JPG, JPEG and PNG types are accepted.";
    header('location:../site_setting.php');
    exit();

   }  
   
    //upload favicon
    $favicon=$_FILES['favicon']['name'];
    $favicon_tmpname=($_FILES['favicon']['tmp_name']);
    $FAVICON = "images/".$favicon;
    move_uploaded_file($favicon_tmpname, $FAVICON);
    
    $allowed = array('jpeg', 'png', 'jpg');
    $ext = pathinfo($favicon, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {   
    $_SESSION['status'] = 2;
    $_SESSION['message'] = "Invalid file type. Only JPG, JPEG and PNG types are accepted.";
    header('location:../site_setting.php');
    exit();

    }
    $website = $_POST['website'];
    $contact = $_POST['contact'];
    $alt_contact = $_POST['alt_contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $emergency = $_POST['emergency'];
     $marquee = $_POST['marquee'];

     
        /* website validation */
/* 
        if(isset($website) && !empty($website)){  
            if(!preg_match("/^['a-zA-Z']*$/",$website)) {
                $_SESSION['status'] =2;
                $_SESSION['message'] = "Only letters and white space are allowed in Website Name field.";     
                header('location:../site_setting.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['message'] ="Website Name, field is required.";
            header('location:../site_setting.php');
            exit();
        } */
        /* Contact validation */
if(isset($contact) && !empty($contact)){
    if(!preg_match("/^([0-9]{10})$/",$contact)){
        $_SESSION['status']=2;
        $_SESSION['message'] = "Enter valid contact number.";
        header('location:../site_setting.php');
        exit();
    }
}
else{
    $_SESSION['status']=2;
    $_SESSION['message'] = "Contact Number is Required.";
    header('location:../site_setting.php');
    exit();
}
        /* alt_contact validation */
if(isset($alt_contact) && !empty($alt_contact)){
    if(!preg_match("/^([0-9]{10})$/",$alt_contact)){
        $_SESSION['status']=2;
        $_SESSION['message'] = "Enter valid  alternate contact number.";
        header('location:../site_setting.php');
        exit();
    }
}
else{
    $_SESSION['status']=2;
    $_SESSION['message'] = " Alternate Contact Number is Required.";
    header('location:../site_setting.php');
    exit();
}
        /* emergency validation */
if(isset($emergency) && !empty($emergency)){
    if(!preg_match("/^([0-9]{10})$/",$emergency)){
        $_SESSION['status']=2;
        $_SESSION['message'] = "Enter valid  Emergency contact number.";
        header('location:../site_setting.php');
        exit();
    }
}
else{
    $_SESSION['status']=2;
    $_SESSION['message'] = " Emergency Contact Number is Required.";
    header('location:../site_setting.php');
    exit();
}
   /* Email validation */

if(isset($email) && !empty($email)){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION['status']=2;
        $_SESSION['message']="Enter valid  email.";
        header('location:../site_setting.php');
        exit();
    }
}
else{
    $_SESSION['status']=2;
    $_SESSION['message']="Email field is Required.";
    header('location:../site_setting.php');
    exit();
}
if($_POST['action']=="UPDATE"){
   echo $sql = "UPDATE `site_setting_tbl` SET 
    `logo`='$LOGO',
    `favicon`='$FAVICON',
     `web_name`='$website',
     `contact`=$contact,
     `alt_contact`=$alt_contact,
     `email`='$email',
     `address`='$address',
     `emergency`='$emergency',
     `marquee`='$marquee'
     WHERE id=$id";
}
if($_POST['action']=="INSERT"){
    $sql = "INSERT INTO `site_setting_tbl` SET 
    `logo`='$LOGO',
    `favicon`='$FAVICON',
     `web_name`='$website',
     `contact`=$contact,
     `alt_contact`=$alt_contact,
     `email`='$email',
     `address`='$address',
     `emergency`='$emergency',
     `marquee`='$marquee'";
}
  
 
$result=mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        
        $_SESSION['status'] = 1;
        $_SESSION['message'] = "Updated successfully...";
        header('location:../site_setting.php');
        exit();
    }else{
        $_SESSION['status'] = 2;
        $_SESSION['message'] = "Something went wrong!!!";
        header('location:../site_setting.php');
        exit();
    }
 
}

?>