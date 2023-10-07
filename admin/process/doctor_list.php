<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
    $image=$_FILES['image']['name'];
    $image_tmpname=($_FILES['image']['tmp_name']);
    $IMAGE = "images/".$image;
    move_uploaded_file($image_tmpname, $IMAGE);
    
    $allowed = array('jpeg', 'png', 'jpg');
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $_SESSION['status']=2; 
        $_SESSION['msg'] = 'Invalid file type. Only JPG, JPEG and PNG types are accepted.';
        header('location:../doctor_list.php');
        exit();
    }

    $id = $_POST['id'];
    $doctor = $_POST['doctor'];
    $specialist = $_POST['specialist'];
    $contact = $_POST['contact'];
    $weekly = $_POST['weekly'];
    $morning = $_POST['morning'];
    $evening = $_POST['evening'];

        /* doctor validation */

        if(isset($doctor) && !empty($doctor)){  
            if(!preg_match("/^['a-zA-Z-' .]*$/",$doctor)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Dr. Name field.";     
                header('location:../doctor_list.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Dr.Name, field is required.";
            header('location:../doctor_list.php');
            exit();
        }
        /* Specialist validation */

        if(isset($specialist) && !empty($specialist)){  
            if(!preg_match("/^['a-zA-Z-' - , : () ]*$/",$specialist)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Specialist field.";     
                header('location:../doctor_list.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Specialist, field is required.";
            header('location:../doctor_list.php');
            exit();
        }
        /* weekly validation */

        if(isset($weekly) && !empty($weekly)){  
            if(!preg_match("/^['a-zA-Z' - , . &]*$/",$weekly)) {
                $_SESSION['status'] =2;
                $_SESSION['msg'] = "Only letters and white space are allowed in Weekly field.";     
                header('location:../doctor_list.php');
                exit();
                }
        }else{
            $_SESSION['status']=2; 
            $_SESSION['msg'] ="Weekly, field is required.";
            header('location:../doctor_list.php');
            exit();
        }

 
    if($_POST['action']=="INSERT"){
        $sql = "INSERT INTO `doctor_list_tbl` (`image`, `doctor`, `specialist`,`contact`, `weekly`, `morning`, `evening`) 
        VALUES ('$IMAGE', '$doctor', '$specialist','$contact', '$weekly', '$morning', '$evening')";
    }else
    if($_POST['action']=="UPDATE"){
        $sql = "UPDATE `doctor_list_tbl`SET `image`='$IMAGE', 
        `doctor`='$doctor',
         `specialist`='$specialist',
         `contact`='$contact',
         `weekly`='$weekly',
         `morning`='$morning',
         `evening`='$evening'
          where id= $id";
    }

     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status'] = 1;
        $_SESSION['msg']  = "Doctor Record Submitted...";
        header('location:../doctor_list.php');
        exit();
    }else{
        $_SESSION['status']  = 2;
        $_SESSION['msg']  = "Something went wrong!!!";
        header('location:../doctor_list.php');
        exit();
    }
}

?>