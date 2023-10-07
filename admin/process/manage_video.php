<?php
include("connection.php");

    $VIDEO = $_POST['video']; 
   
    $remark = $_POST['remark'];
   
/* Video link validation */
/* 
    if(isset($VIDEO) && !empty($VIDEO)){
        if (preg_match("/((http\:\/\/){0,}(www\.){0,}(youtube\.com){1} || (youtu\.be){1}(\/watch\?v\=[^\s]){1})/", $youtube_url) == 1)
{
    $arr = array("status"=>2,"msg"=>" Upload valid video link.");
    echo json_encode($arr);
    return;
}
}
else{
        $arr = array("status"=>2,"msg"=>"Video link,  field is required.");
        echo json_encode($arr);
        return;
    } */

        /* remark validation */

if(isset($remark) && !empty($remark)){  
    if(!preg_match("/^['a-zA-Z-' ]*$/",$remark)) {
        $remarkErr = "Only letters and white space are allowed in remark field.";     
        $arr1 = array("status"=>2,"msg"=> $remarkErr);
       echo json_encode($arr1);
        return;   
        }
}else{
    $arr1 = array("status"=>2,"msg"=>"Remark  field is required.");
    echo json_encode($arr1);
    return;
}

    $sql = "INSERT INTO `video_tbl` (`video`, `remark`) VALUES ('$VIDEO', '$remark')";
    $result=mysqli_query($connection,$sql) or die("Query Failed.");
    if ($result){
        $arry = array("status"=>1,"msg"=>"Your Video file has been Uploaded. ");
        echo json_encode($arry);
    }else{
        $arry = array("status"=>2,"msg"=>"Try again.");
        echo json_encode($arry);
    
    }

    
?>