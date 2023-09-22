<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
   
    $id = $_POST['id'];
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
   
   
if($_POST['action']=="INSERT"){
    $sql = "INSERT INTO `latest_news_tbl` (`title`, `description`, `date`) 
    VALUES ('$title', '$description', '$date')";
}else
if($_POST['action']=="UPDATE"){
    $sql = "UPDATE `latest_news_tbl`SET `title`='$title', 
    `description`='$description',
     `date`='$date'  where id= $id";
}
   
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Inserted successfully...";
        header('location:../latest_news.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../latest_news.php?status='.$status.'&msg='.$message);
        exit();
    } 
}

?>