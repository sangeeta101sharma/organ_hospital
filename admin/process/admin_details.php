<?php
include("connection.php");


$id=$_POST['id'];
$admin_name = $_POST['admin_name'];
//echo $adimn_name;
$contact = $_POST['contact'];
$email = $_POST['email'];
$qualification = $_POST['qualification'];
$address = $_POST['address'];


if($_POST['action'] == "INSERT"){
  $sql="INSERT INTO `admin_details_tbl` set
                                    `admin_name`'$admin_name ',
                                    `contact`='$contact',
                                    `email`='$email',
                                    `address`='$address',
                                    `qualification`='$qualification'";
}else
if($_POST['action'] == "UPDATE"){
    $sql="UPDATE `admin_details_tbl` SET `admin_name`='$admin_name ',`contact`='$contact',`email`='$email',`address`='$address',`qualification`='$qualification' WHERE id=$id";                 
}

$result= mysqli_query($connection,$sql) or die("Query Failed.");
if ($result)
{
    $arr = array("status"=>1,"msg"=>"Your data has been Updated. ");
    echo json_encode($arr);
}
else{
$arr = array("status"=>2,"msg"=>"Try again");
echo json_encode($arr);
}




?>