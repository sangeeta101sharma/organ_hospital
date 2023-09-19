<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
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
    $email = $_POST['email'];
    $address = $_POST['address'];
 

    $sql = "UPDATE `site_setting` SET `logo`=' $LOGO',`favicon`=' $FAVICON',`web_name`='$website',`contact`='$contact',`email`='$email',`address`='$address' WHERE id=1 " ;
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
}

?>