<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
    $slider=$_FILES['slider']['name'];
    $slider_tmpname=($_FILES['slider']['tmp_name']);
    $SLIDER = "images/".$slider;
    move_uploaded_file($slider_tmpname, $SLIDER);
    
    $allowed = array('jpeg', 'png', 'jpg');
    $ext = pathinfo($slider, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
    echo  'Invalid file type. Only JPG, JPEG and PNG types are accepted.';
    exit();
    }
    $remark = $_POST['remark'];

    $sql = "INSERT INTO `slider_tbl` (`slider`, `remark`) VALUES ('$SLIDER', '$remark')";
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Data Inserted...";
        header('location:../manage_slider.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../manage_slider.php?status='.$status.'&msg='.$message);
        exit();
    
    }
}

?>