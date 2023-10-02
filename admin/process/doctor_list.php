<?php
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
    echo  'Invalid file type. Only JPG, JPEG and PNG types are accepted.';
    exit();
    }

    $doctor = $_POST['doctor'];
    $specialist = $_POST['specialist'];
    $weekly = $_POST['weekly'];
    $morning = $_POST['morning'];
    $evening = $_POST['evening'];

 

      $sql = "INSERT INTO `doctor_list_tbl` (`image`, `doctor`, `specialist`, `weekly`, `morning`, `evening`) 
      VALUES ('$IMAGE', '$doctor', '$specialist', '$weekly', '$morning', '$evening')";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Doctor Record Submitted...";
        header('location:../doctor_list.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../doctor_list.php?status='.$status.'&msg='.$message);
        exit();
    }
}

?>