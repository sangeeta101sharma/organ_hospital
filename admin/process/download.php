<?php
include("connection.php");

    $id = $_POST['id'];
    $title = $_POST['title'];
    //upload filefile
    $file=$_FILES['file']['name'];
    $file_tmpname=($_FILES['file']['tmp_name']);
    $FILE = "files/".$file;
    move_uploaded_file($file_tmpname, $FILE);
    
    $allowed = array('doc','pdf');
    $ext = pathinfo($file, PATHINFO_EXTENSION);

    if(isset($FILE) && !empty($FILE)){
        if (!in_array($ext, $allowed)) {
            $fileErr= 'Invalid file type. Only .DOC and .PDF types are accepted.';
            $arr=array("status"=>2, "msg"=>$fileErr);
            echo json_encode($arr);
            return;
    }
}
else{
        $arr = array("status"=>2,"msg"=>"File  field is required.");
        echo json_encode($arr);
        return;
    }
   
    

    /* title validation */

if(isset($title) && !empty($title)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$title)) {
        $titleErr = "Only letters and white space are allowed in title field.";     
        $arr1 = array("status"=>2,"msg"=> $titleErr);
       echo json_encode($arr1);
        return;   
        }
}else{
    $arr1 = array("status"=>2,"msg"=>"title  field is required.");
    echo json_encode($arr1);
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
        $arry = array("status"=>1,"msg"=>"Your file has been Uploaded. ");
        echo json_encode($arry);
    }else{
        $arry = array("status"=>2,"msg"=>"Try again");
        echo json_encode($arry);
    }
?>