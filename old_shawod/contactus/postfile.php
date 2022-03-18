<?php
include '../connect.php';
if(isset($_POST['email'])){
    $email=$_POST['email'];
    if(filter_var($email , FILTER_VALIDATE_EMAIL) ){
     
    }else{
        echo "Invalid email address";
    }
}
if(isset($_POST['name'])  && isset($_POST['contact'])  && isset($_POST['text'])){
    $nam = $_POST['name'];
    $email=$_POST['emails'];
    $cont =$_POST['contact'];
    $txt =$_POST['text'];
    $save = mysqli_query($conn, "INSERT INTO `emails` VALUES(null, '$nam', '$email', '$cont', '$txt' ,1, CURRENT_TIMESTAMP)");
   echo  "<b style='color: rgb(51,204,255)'>Your message has successfully sent,we will get back to you soon $nam</b>" ;

}
