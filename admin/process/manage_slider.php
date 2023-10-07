<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
    $slider=$_FILES['slider']['name'];
    $slider_tmpname=($_FILES['slider']['tmp_name']);
    $SLIDER = "images/".$slider;
    move_uploaded_file($slider_tmpname, $SLIDER);
    
    $allowed = array('jpeg', 'png', 'jpg');
    $ext = pathinfo($slider, PATHINFO_EXTENSION);
   if(isset($SLIDER) && !empty($SLIDER)){
    if (!in_array($ext, $allowed)) {
        $_SESSION['status'] = 2;
        $_SESSION['msg'] = "Invalid file type. Only JPG, JPEG and PNG types are accepted.";
        header('location:../manage_slider.php');
    exit();
    }
   }
    else{
        $_SESSION['status']=2; 
        $_SESSION['msg'] ="Slider  field is required.";
        header('location:../manage_slider.php');
        exit();
    }

    $remark = $_POST['remark'];

 /*    if(isset($remark) && !empty($remark)){  
        if(!preg_match("/^['a-zA-Z-'* ]*$/",$remark)) {
            $_SESSION['status'] =2;
            $_SESSION['msg'] = "Only letters and white space are allowed in title field.";     
            header('location:../manage_slider.php');
            }
            exit();
    }else{
        $_SESSION['status']=2; 
        $_SESSION['msg'] ="Remark  field is required.";
        header('location:../manage_slider.php');
        exit();
    }
        */

    $sql = "INSERT INTO `slider_tbl` (`slider`, `remark`) VALUES ('$SLIDER', '$remark')";
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg'] = "Data Inserted...";
        header('location:../manage_slider.php');
        exit();
    }else{
        $_SESSION['status'] = 2;
        $_SESSION['msg'] = "Something went wrong!!!";
        header('location:../manage_slider.php');
        exit();
    
    }
}

?>