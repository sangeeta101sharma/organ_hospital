<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    //upload logo
    $gallery=$_FILES['gallery']['name'];
    $galleryfile_tmpname=($_FILES['gallery']['tmp_name']);
    pathinfo($gallery,PATHINFO_EXTENSION);
    $GALLERY = "images/".$gallery;
    move_uploaded_file($galleryfile_tmpname, $GALLERY);
    
    $remark = $_POST['remark'];

 

      $sql = "INSERT INTO `gallery_tbl` (`gallery`, `remark`) VALUES ( '$GALLERY', ' $remark')";
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Picture Inserted Successfully...";
        header('location:../manage_gallery.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../manage_gallery.php?status='.$status.'&msg='.$message);
        exit();
    }
}

?>