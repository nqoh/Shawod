<?php

include 'connect.php';


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $nam = $_POST['name'];
    $email=$_POST['email'];
    $message =$_POST['message'];
    mysqli_query($conn, "INSERT INTO `emails` VALUES(null, '$nam', '$email','','$message',1, CURRENT_TIMESTAMP)");
}


header('location:https://shawod.co.za/contactus');