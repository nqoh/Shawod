<?php
include '../connect.php';
$error='';
if(isset($_POST['emaile']) && isset($_POST['namee']) && isset($_POST['sub']) && isset($_POST['txt'])){
  $email=$_POST['emaile']; $nam=$_POST['namee'];$sub=$_POST['sub'];$txt=$_POST['txt'];

   
}
//if(isset($_POST['name'])  && isset($_POST['contact'])  && isset($_POST['text'])){
//    $nam = $_POST['name'];
//    $email=$_POST['emails'];
//    $cont =$_POST['contact'];
//    $txt =$_POST['text'];
//    $save = mysqli_query($conn, "INSERT INTO `emails` VALUES(null, '$nam', '$email', '$sub', '$txt' ,1, CURRENT_TIMESTAMP)");
//   echo  "<b style='color: rgb(51,204,255)'>Your message has successful sent,we will get back to you soon $nam</b>" ;
//
//}


?>