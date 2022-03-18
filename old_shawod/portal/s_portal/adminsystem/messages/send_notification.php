<?php
include "../connect.php";
if(isset($_POST['depart']) && isset($_POST['text'])){
   $title=$_POST['depart'];$text=$_POST['text'];$id=$_POST['id'];$dt=date('d-M-y   h:i');
   mysqli_query($conn,"INSERT INTO `notifications` VALUES (null,'$title','$text','$id',1,'$dt')");
   echo "Successfully sent";
}