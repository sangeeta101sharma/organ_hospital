<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
   
    $id = $_POST['id'];
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

/* title validation */

if(isset($title) && !empty($title)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$title)) {
        $titleErr = "Only letters and white space are allowed in title field.";     
        $arr = array("status"=>2,"msg"=> $titleErr);
        $str = implode(',', $arr);
        echo "<script>alert($str)</script>";
        return;   
        }
}else{
    $arr = array("status"=>2,"msg"=>"title  field is required.");
    $str = implode(',', $arr);
    echo $str;
    return;
}
   /* description validation */

   if(isset($description) && !empty($description)){  
    if(!preg_match("/^['a-zA-Z0-9  \b % # . , ?' ]*$/",$description)) {
        $descriptionErr = "Only letters , white space and some special symbols  are allowed";     
        $arr = array("status"=>2,"msg"=> $descriptionErr);
        $str = implode(',', $arr);
        echo $str;
        return;   
        }
}else{
    $arr = array("status"=>2,"msg"=>"Description  field is required.");
    $str = implode(',', $arr);
    echo $str;
    return;
}
   
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