<?php
 $connection=mysqli_connect('localhost','root','','Organ_Hospital_db')or die("Connection Failed.");
/* if($connection){
    echo "Connected successfully.";
}else{
    echo "Connection Failed.";
}  */
$sql= "SELECT * FROM site_setting_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
$line = mysqli_fetch_array($result); 

$title="Organ Hospital";
$company_url="https://www.organhealth.co.in";
$contact="+91-9415235157,9450807093";
?>