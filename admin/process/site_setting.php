<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
    $id=$_POST['id'];
    $logo=$_FILES['logo']['name'];
    $logofile_tmpname=($_FILES['logo']['tmp_name']);
    
    $LOGO = "images/".$logo;
    move_uploaded_file($logofile_tmpname, $LOGO);
    echo "<br>";
    //upload favicon
    $favicon=$_FILES['favicon']['name'];
    $faviconfile_tmpname=($_FILES['favicon']['tmp_name']);
    
    $FAVICON = "images/".$favicon;
    move_uploaded_file($faviconfile_tmpname, $FAVICON);
    
    $website = $_POST['website'];
    $contact = $_POST['contact'];
    $alt_contact = $_POST['alt_contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $emergency = $_POST['emergency'];
     $marquee = $_POST['marquee'];
   
if($_POST['action']=="UPDATE"){
   echo $sql = "UPDATE `site_setting_tbl` SET 
    `logo`='$LOGO',
    `favicon`='$FAVICON',
     `web_name`='$website',
     `contact`=$contact,
     `alt_contact`=$alt_contact,
     `email`='$email',
     `address`='$address',
     `emergency`='$emergency',
     `marquee`='$marquee'
     WHERE id=$id";
}
if($_POST['action']=="INSERT"){
    $sql = "INSERT INTO `site_setting_tbl` SET 
    `logo`='$LOGO',
    `favicon`='$FAVICON',
     `web_name`='$website',
     `contact`=$contact,
     `alt_contact`=$alt_contact,
     `email`='$email',
     `address`='$address',
     `emergency`='$emergency',
     `marquee`='$marquee'";
}
  
 
$result=mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Updated successfully...";
        header('location:../site_setting.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../site_setting.php?status='.$status.'&msg='.$message);
        exit();
    }
    location.reload();
}

?>