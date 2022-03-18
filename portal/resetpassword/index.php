<?php
require '../connect.php'; session_start();
if(isset($_POST['cpass']) && isset($_POST['cpass2'])) {
    if (strlen($_POST['cpass']) >= 6) {
        if ($_POST['cpass'] === $_POST['cpass2']) {
            $pass = md5($_POST['cpass']);$id=$_POST['key'];
            mysqli_query($conn, "UPDATE `login` SET password='$pass' WHERE f_key='$id'");
            $_SESSION['uname']=$_POST['uname'];$_SESSION['id']=$id;
            header('location:../dashboard');
        } else {
            $error = "Your password do not match";
        }
    } else {
        $error = "Password must have 6 or more characters";
    }
}
?>

<?php

mysqli_query($conn,'DELETE FROM `resetpassword` WHERE datediff(now(), date) > 1');
$id=$_GET['id'];
if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `resetpassword` WHERE email='$id' ")) == 1){
   $row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `resetpassword` WHERE email='$id' "));
    $_SESSION['mykey']=$row['f_key'];$_SESSION['uname']=$id;
}else{
    header('location:http://portal.shawod.co.za/login');
} ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reset Password</title>
</head>
<link rel="icon" type="image/ico" href="../thumbnails/favw.png">
<link rel="stylesheet" href="../css/login.css" type="text/css">

<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109547096-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109547096-1');
</script>
<div class="box">
    <img src="../thumbnails/logoSb.png"><br>
    <h1 style="margin-bottom: -5px;">Reset Password</h1><br>
    <hr><span id="error" style="color: red; margin-bottom: -5px; margin-left: 30%" ><?php echo $error ?></span>
    <form action="index.php" method="post" id="sv_form" >
        <i  class="unlock icon" ></i>
        <input type="hidden" value="<?php echo $_SESSION['mykey'];  ?>" name="key">
        <input type="hidden" value="<?php echo $_SESSION['uname'];  ?>" name="uname">
        <input type="password" class="text_field" placeholder="New password" name="cpass"><br>
        <i class="unlock icon" ></i>
        <input type="password" class="text_field" placeholder="confirm new password" name="cpass2"><br>
        <input type="submit" class="button" value="Reset password" >
    </form>
</div>
</body>
</html>
