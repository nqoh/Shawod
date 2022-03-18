<?php
require '../connect.php';

if(isset($_POST['price']) && isset($_POST['reference']) && isset($_POST['stage'])){
    $pric=$_POST['price'];$reference=$_POST['reference'];$stage=$_POST['stage'];$exp_date=$_POST['exp_date'];$details=$_POST['details'];
    $descrip=$_POST['descrip'];$id=$_POST['id'];
    mysqli_query($conn,"INSERT INTO web_payment VALUES(null,'$reference','$exp_date','$details','$stage','$descrip','$pric',0,'$id',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP )");
    echo "Your payment process is ok";
}

if(isset($_POST['service']) && isset($_POST['id'])){
    $id=$_POST['id'];
    if($_POST['service'] == "website"){
        $website=$_POST['value'];
        mysqli_query($conn,"UPDATE services SET website='$website' WHERE f_key='$id'");
        echo $_POST['value'];
        exit();
    }

    if($_POST['service'] == "hosting"){
        $website=$_POST['value'];
        mysqli_query($conn,"UPDATE services SET hosting='$website' WHERE f_key='$id'");
        echo $_POST['value'];
        exit();
    }

    if($_POST['service'] == "domain"){
        $website=$_POST['value'];
        mysqli_query($conn,"UPDATE services SET domain='$website' WHERE f_key='$id'");
        echo $_POST['value'];
        exit();
    }

    if($_POST['service'] == "ssl_certificate"){
        $website=$_POST['value'];
        mysqli_query($conn,"UPDATE services SET ssl_certificate='$website' WHERE f_key='$id'");
        echo $_POST['value'];
        exit();
    }
}

if(isset($_POST['email_id'])){
    session_start();
    $id=$_SESSION['id'];$email_id=$_POST['email_id'];
    mysqli_query($conn,"DELETE FROM user_emails WHERE f_key='$id' AND id='$email_id'");
    exit();
}

if(isset($_POST['items']) && isset($_POST['price']) && isset($_POST['id'])){
    $items=$_POST['items'];$price=$_POST['price'];$id=$_POST['id']; require '../connect.php';$txt=$_POST['text'];
    mysqli_query($conn,"INSERT INTO new_services VALUES (null,'$items','$txt','$price','$id',CURRENT_TIMESTAMP )");
    echo "Thank your for purchasing our new services we will get back to your soon";
}


if(isset($_POST['password']) && isset($_POST['email'])){
    session_start();
    $id=$_SESSION['id'];$pass=mysqli_real_escape_string($conn,$_POST['password']);
    $em=mysqli_real_escape_string($conn,$_POST['email']);
    mysqli_query($conn,"INSERT INTO user_emails VALUES(null,'',0,'$em',0,1,'$pass','$id')");
    echo "successfully add email";
    exit();
}


if(isset($_POST['id']) && isset($_POST['email'])){
    $num=$_POST['email']; $id=$_POST['id'];
    mysqli_query($conn,"UPDATE user_emails SET no_emails='$num' WHERE `domain` !='' AND f_key='$id'");
    echo "Added";exit();
}

if(isset($_POST['domains']) && isset($_POST['account_nams'])){
    $dmn=$_POST['domains'];$acc=$_POST['account_nams'];echo $id=$_POST['id'];
    mysqli_query($conn,"INSERT INTO user_emails VALUES(null,'$dmn','$acc','',0,0,'','$id')");
    echo $dmn." email was successfully open";exit();
}

if(isset($_POST['domain']) && isset($_POST['name']) && isset($_POST['id'])){
    $dmn=$_POST['domain'];$name=$_POST['name'];echo $id=$_POST['id'];
    mysqli_query($conn,"UPDATE user_emails SET admin_status=0 , user_status=1 WHERE email='$name' AND id='$id'");
    echo $name."@".$dmn.".com  was successfully activated";exit();
}




?>