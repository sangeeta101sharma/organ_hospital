<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]="POST"){

    $id = $_POST['id'];
    $title = $_POST['title'];
    //upload filefile
    $file=$_FILES['file']['name'];
    $file_tmpname=($_FILES['file']['tmp_name']);
    $FILE = "files/".$file;
    move_uploaded_file($file_tmpname, $FILE);
    
    $allowed = array('.DOC', '.ODT', '.PDF','.TXT','.HTML','.XLSX');
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
    echo  'Invalid file type. Only .DOC, .TXT,.ODT and .PDF types are accepted.';
    exit();
    }

    /* title validation */

if(isset($title) && !empty($title)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$title)) {
        $titleErr = "Only letters and white space are allowed in title field.";     
        $arr = array("status"=>2,"msg"=> $titleErr);
        $str = implode(',', $arr);
        echo $str;
        return;   
        }
}else{
    $arr = array("status"=>2,"msg"=>"title  field is required.");
    $str = implode(',', $arr);
    echo $str;
    return;
}
    
   if(isset($_POST['action'])=="INSERT"){
    $sql = "INSERT INTO `download_tbl`(`title`, `file`) VALUES ('$title','$FILE')";
   }else
   if(isset($_POST['action'])=="UPDATE"){
    $sql = "UPDATE  `download_tbl`set 
    `title`=='$title',  
    `file`=='$FILE'";
   }

 

     
     $result=mysqli_query($connection,$sql)or die("Query Failed.");
    if ($result){
        $status = 1;
        $message = "File Inserted Successfully...";
        header('location:../download.php?status='.$status.'&msg='.$message);
        exit();
    }else{
        $status = 2;
        $message = "Something went wrong!!!";
        header('location:../download.php?status='.$status.'&msg='.$message);
        exit();
    }
}

?>