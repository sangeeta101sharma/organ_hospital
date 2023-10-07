<?php
session_start();
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
    $gallery=$_FILES['gallery']['name'];
    $galleryfile_tmpname=($_FILES['gallery']['tmp_name']);
    $GALLERY = "images/".$gallery;
    move_uploaded_file($galleryfile_tmpname, $GALLERY);
    
    
    $allowed = array('jpeg', 'png', 'jpg');
    $ext = pathinfo($gallery, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        $_SESSION['status'] = 2;
        $_SESSION['msg'] = "Invalid file type. Only JPG, JPEG and PNG types are accepted.";
        header('location:../manage_gallery.php');
    exit();
    }

    $remark = $_POST['remark'];

    /* title validation */

    if(isset($remark) && !empty($remark)){  
        if(!preg_match("/^['a-zA-Z-' ]*$/",$remark)) {
            $_SESSION['status'] =2;
            $_SESSION['msg'] = "Only letters and white space are allowed in title field.";     
            header('location:../manage_gallery.php');
            exit();
            }
    }else{
        $_SESSION['status']=2; 
        $_SESSION['msg'] ="Remark field is required.";
        header('location:../manage_gallery.php');
        exit();
    }
       
 

      $sql = "INSERT INTO `gallery_tbl` (`gallery`, `remark`) VALUES ( '$GALLERY', ' $remark')";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $_SESSION['status']= 1;
        $_SESSION['msg'] = "Picture Inserted Successfully...";
        header('location:../manage_gallery.php');
        exit();
    }else{
        $_SESSION['status'] = 2;
        $_SESSION['msg'] = "Something went wrong!!!";
        header('location:../manage_gallery.php');
        exit();
    }
}

?>