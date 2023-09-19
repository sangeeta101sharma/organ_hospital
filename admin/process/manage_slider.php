<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
    $slider=$_FILES['slider']['name'];
    $sliderfile_tmpname=($_FILES['slider']['tmp_name']);
    pathinfo($slider,PATHINFO_EXTENSION);
    $SLIDER = "slider/".$slider;
    move_uploaded_file($sliderfile_tmpname, $SLIDER);
    
    $remark = $_POST['remark'];

 

    $sql = "INSERT INTO `manage_slider_tbl` (`slider`, `remark`) VALUES ('$SLIDER', '$remark')";
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