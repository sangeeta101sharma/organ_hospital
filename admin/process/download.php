<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){

    $title = $_POST['title'];
    //upload filefile
    $file=$_FILES['file']['name'];
    $File_filetmpname=($_FILES['file']['tmp_name']);
    pathinfo($file,PATHINFO_EXTENSION);
    $FILE = "images/".$file;
    move_uploaded_file($File_filetmpname, $file);
    
   

 

      $sql = "INSERT INTO `download_tbl`(`title`, `file`) VALUES ('$title','$FILE')";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "File Inserted Successfully...";
        header('location:../download.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../download.php?status='.$status.'&msg='.$message);
        exit();
    }
}

?>