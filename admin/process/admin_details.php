<?php
include("connection.php");
$adimn_name = $_POST['admin_name'];
//echo $adimn_name;
$contact = $_POST['contact'];
$email = $_POST['email'];
$qualification = $_POST['qualification'];
$address = $_POST['address'];

$sql = "INSERT INTO `admin_details_tbl` (`admin_name`, `contact`, `email`, `address`, `qualification`) VALUES ('$adimn_name ', '$contact', '$email', '$address', '$qualification ')";

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