<?php
require '../connect.php';





if(isset($_POST['email_id'])){
    session_start();
    $id=$_SESSION['id'];$email_id=$_POST['email_id'];
    mysqli_query($conn,"DELETE FROM user_emails WHERE f_key='$id' AND id='$email_id'");
    exit();
}

if(isset($_POST['items']) && isset($_POST['price']) && isset($_POST['id'])){
    $items=$_POST['items'];$price=$_POST['price'];$id=$_POST['id']; require '../connect.php';$txt=$_POST['text'];
    $ref="SV".rand(10,99).date("s");
    mysqli_query($conn,"INSERT INTO new_services VALUES (null,'$items','$txt','$price',0,'$ref','$id',CURRENT_TIMESTAMP )");
    echo "Thank your for purchasing our new services your reference is $ref we will get back to your soon";
}


if(isset($_POST['password']) && isset($_POST['email'])){
    session_start();
    $id=$_SESSION['id'];$pass=mysqli_real_escape_string($conn,$_POST['password']);
    $em=mysqli_real_escape_string($conn,$_POST['email']);
    mysqli_query($conn,"INSERT INTO user_emails VALUES(null,'',0,'$em',0,1,'$pass','$id')");
    echo "successfully add email";
    exit();
}


