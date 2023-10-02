<?php
include("connection.php");
   
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

/* title validation */

if(isset($title) && !empty($title)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$title)) {
        $titleErr = "Only letters and white space are allowed in title field.";     
        $arr = array("status"=>2,"msg"=> $titleErr);
        echo json_encode($arr);
        return;   
        }
}else{
    $arr = array("status"=>2,"msg"=>"title  field is required.");
   echo json_encode($arr);
    return;
}
   /* description validation */

   if(isset($description) && !empty($description)){  
    if(!preg_match("/^['a-zA-Z0-9  \b % # . , ?' ]*$/",$description)) {
        $descriptionErr = "Only letters , white space and some special symbols  are allowed";     
        $arr1 = array("status"=>2,"msg"=> $descriptionErr);
        echo json_encode($arr1);
        return;   
        }
}else{
    $arr1 = array("status"=>2,"msg"=>"Description  field is required.");
    echo json_encode($arr1);
    return;
}
  /* date validation */ 
  if(isset($date) && !empty($date)){  
    if(!preg_match("^(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$^",$date)) {
        $dateErr = "Only letters , white space and some special symbols  are allowed";     
        $arr2 = array("status"=>2,"msg"=> $dateErr);
        echo json_encode($arr2);
        return;   
        }
}else{
    $arr2 = array("status"=>2,"msg"=>"Date  field is required.");
    echo json_encode($arr2);
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
        $arry = array("status"=>1,"msg"=>"Your data has been Inserted. ");
    echo json_encode($arry);
    }else{
        $arry = array("status"=>2,"msg"=>"Try again");
        echo json_encode($arry);
    } 


?>