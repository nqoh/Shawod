<?php
session_start();
require '../connect.php';
if(isset($_POST['typer']) && isset($_POST['value'])){
    $ids=$_SESSION['id'];
    if($_POST['typer']=="fname"){
        $fname=$_POST['value'];
         mysqli_query($conn,"UPDATE `client_infor` SET `firstname`='$fname' WHERE f_key='$ids'");
        exit();
    } if($_POST['typer']=="lname"){
        $lname=$_POST['value'];
        mysqli_query($conn,"UPDATE `client_infor` SET `lastname`='$lname' WHERE f_key='$ids'");
        exit();
    } if($_POST['typer']=="address"){
        $address=$_POST['value'];
        mysqli_query($conn,"UPDATE `client_infor` SET `address`='$address' WHERE f_key='$ids'");
        exit();
    } if($_POST['typer']=="city"){
        $city=$_POST['value'];
        mysqli_query($conn,"UPDATE `client_infor` SET `city`='$city' WHERE f_key='$ids'");
        exit();
    }if($_POST['typer']=="tell"){
        $tell=$_POST['value'];
        mysqli_query($conn,"UPDATE `client_infor` SET `mobile_phone`='$tell' WHERE f_key='$ids'");
        exit();
    } if($_POST['typer']=="textareas"){
        $note=$_POST['value'];
        mysqli_query($conn,"UPDATE `client_infor` SET `note`='$note' WHERE f_key='$ids'");
        exit();
    }
}
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $ids=$_SESSION['id'];
    if(filter_var($email , FILTER_VALIDATE_EMAIL) ){
        mysqli_query($conn,"UPDATE `client_infor` SET `email`='$email' WHERE f_key='$ids'");
        exit();
    }else{
        echo $email;
    }
}

if(isset($_POST['password'])){
    $pass=md5($_POST['password']);$ids=$_SESSION['id'];
    mysqli_query($conn,"UPDATE `login` SET `password`='$pass' WHERE f_key='$ids'");
    echo "Update password was successfully";
}

if(isset($_POST["special"]) && isset($_POST['digit']) && isset($_POST['reseon'])){
   $dmn=$_POST['dmain'];$digit=$_POST['digit'];$reseon=$_POST['reseon'];$special=$_POST['special'];$ids=$_SESSION['id'];
   mysqli_query($conn,"INSERT INTO cancellation VALUES(null,'$dmn','$digit','$reseon','$special','$ids',CURRENT_TIMESTAMP)");
   echo "Your request was successfully submit";
}