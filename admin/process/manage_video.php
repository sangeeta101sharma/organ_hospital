<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){
    /* //upload logo
    $video=$_FILES['video']['name'];
    pathinfo($video,PATHINFO_EXTENSION);
    $videofile_tmpname=($_FILES['video']['tmp_name']);
    $VIDEO = "video/".$video;
    move_uploaded_file($videofile_tmpname, $VIDEO); */
    $file = $_FILES['video']; 
    $res = explode('/',parse_url($file)['path']);   
    $filename = $res[count($res)-1];    
    file_put_contents($filename,file_get_contents($file));
    $VIDEO =emplode($res);
    $remark = $_POST['remark'];

 

    $sql = "INSERT INTO `video_tbl` (`video`, `remark`) VALUES ('$VIDEO ', '$remark')";
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "Data Inserted...";
        header('location:../manage_video.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../manage_video.php?status='.$status.'&msg='.$message);
        exit();
    
    }
}

?>