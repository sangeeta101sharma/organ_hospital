<?php
session_start();
session_unset();

session_destroy();
header("location:login.php?status=1msg=Logout Successfull..");
exit();
?>