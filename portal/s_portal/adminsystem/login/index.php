<?php
require '../connect.php';
$error='';
if(isset($_POST['uname'])&& isset($_POST['pass']) ){
    $username=$_POST['uname'];
    $pass=md5($_POST['pass']);
    $query=mysqli_query($conn,"SELECT * FROM admin_login WHERE username='$username' AND password='$pass' ");
    if(mysqli_num_rows($query) > 0){
        $row=mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['uname']=$username;
        $_SESSION['password']=$pass;
     header('location:../dashboard');
    }else{
     $error="Invalid username or password";
    }
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="../css/login.css" type="text/css">
<body>
<div class="box">
    <img src="../thumbnails/logoSb.png"><br>
    <h1 style="margin-bottom: -5px;">Web Portal</h1>
    <span style="color: red; margin-bottom: -5px"><?php echo $error ?></span>
    <hr>
    <form action="index.php" method="post">
      <i  class="users icon" ></i>
      <input type="text" class="text_field" placeholder="Username" name="uname"><br>
     <i class="unlock icon" ></i>
      <input type="password" class="text_field" placeholder="Password" name="pass"><br>
         <input type="submit" class="button" value="Login"></input>
         <a href="#">Forgot password</a>
    </form>
</div>
</body>
</html>