<?php
require '../connect.php';
$error='';
if(isset($_POST['uname'])&& isset($_POST['pass']) ){
    $username=$_POST['uname'];
    $pass=md5($_POST['pass']);
    $query=mysqli_query($conn,"SELECT * FROM login WHERE username='$username' AND password='$pass' ");
    if(mysqli_num_rows($query) > 0){
        $row=mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['uname']=$username;
        $_SESSION['id']=$row['f_key'];
     header('location:../dashboard');
    }else{
     $error="Invalid username or password";
    }
}

?>
<script type="text/javascript">
    var test="open";

   function sv_pass() {
       if(test=="open") {
           document.getElementById("fgpasswor").innerHTML = "Back to login";
           document.getElementById("sv_form").style.display="none";
           document.getElementById("em_form").style.display="block"
           test="close";
       }else{
           document.getElementById("fgpasswor").innerHTML = "Forgot password";
           document.getElementById("sv_form").style.display="block";
           document.getElementById("em_form").style.display="none"
           document.getElementById("error").innerHTML="";
           document.getElementById("btn_sbmit").innerHTML="Submit";
           document.getElementById("btn_sbmit").removeAttribute('disabled');
           document.getElementById("em").value="";

           test="open";
       }
   }
   function sendem() {
       if(document.getElementById("em").value.trim() !== "") {
           document.getElementById("btn_sbmit").setAttribute("disabled", true);
           document.getElementById("btn_sbmit").innerHTML = "Wait..."
           var ajax = new XMLHttpRequest();
           ajax.open('POST', 'push.php', true);
           ajax.setRequestHeader('Content-type', 'Application/x-www-form-urlencoded');
           ajax.onreadystatechange = function () {
               if (ajax.readyState === 4 && ajax.status === 200) {
                   if(ajax.responseText === 1) {
                       document.getElementById("error").innerHTML ="Invalid email address";
                       document.getElementById("btn_sbmit").removeAttribute('disabled');
                       document.getElementById("btn_sbmit").innerHTML="Submit";
                   }else if(ajax.responseText === 2) {
                       document.getElementById("error").innerHTML ="Your email dose'nt exists to the database";
                       document.getElementById("btn_sbmit").removeAttribute('disabled');
                       document.getElementById("btn_sbmit").innerHTML="Submit";
                   }else{
                       document.getElementById("error").innerHTML ="<span style='margin-left:-40px;color: rgb(102,204,255)'>Successful check your email account</span>";
                       document.getElementById("btn_sbmit").innerHTML="&#10004;";


                   }
               }
           }
           ajax.send("emails="+document.getElementById("em").value.trim());
       }else{
           document.getElementById("error").innerHTML="Please enter email address";
       }
   }
</script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Portal -Shawod</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="../style.css">
<link rel="icon" type="image/ico" href="../thumbnails/favw.png">
<link rel="stylesheet" href="../css/login.css" type="text/css">
</head>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109547096-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109547096-1');
</script>

<div class="box" >
    <h1 style="margin-bottom: -5px;" align="center">Shawod Portal</h1><br>
    <img src="../thumbnails/logoSb.png">
    <div id="sv_form">
        <form style="margin: 0px; padding: 0px" action="index.php" method="post">
        <span id="error" style="color: red; margin-bottom: -5px; margin-left: 10%; font-size: 16px" ><?php echo $error ?></span><br>
    <div class="login__row" >
        <svg class="login__icon name svg-icon" viewBox="0 0 20 20" >
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8"  />
        </svg>
        <input type="text" class="login__input name" name="uname" placeholder="Username" style="color:black"/>
    </div>
    <div class="login__row">
        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
        </svg>
        <input type="password" class="login__input pass" name="pass" placeholder="Password" style="color:black"/>
    </div>
        <button type="submit" style="margin-left: 12%" class="login__submit">Sign in</button>
        </form>
    </div>
    <form id="em_form" style="display: none; margin: 25px 0px 0px 0px">
        <div class="login__row" >
            <svg class="login__icon name svg-icon" viewBox="0 0 20 20" >
                <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8"  />
            </svg>
            <input type="text" class="login__input name" id="em" placeholder="Email Address" style="color:black"/>
        </div>
        <button class="login__submit" style="margin-left: 12%" id="btn_sbmit" type="button"  onclick="sendem()">Submit</button>
    </form>
    <p class="login__signup">Not a client? &nbsp;<a href="../../packages.php" style="color: #33ccff;">Order a package</a>
        <span id="fgpasswor" onclick="sv_pass()">Forgot password</span>
    </p>

</div>
<!--<div class="box">
    <img src="../thumbnails/logoSb.png"><br>
    <h1 style="margin-bottom: -5px;">Web Portal</h1><br>
    <hr><span id="error" style="color: red; margin-bottom: -5px; margin-left: 30%" ><?php /*echo $error */?></span>
    <form action="index.php" method="post" id="sv_form" >
      <i  class="users icon" ></i>
      <input type="text" class="text_field" placeholder="Username" name="uname"><br>
     <i class="unlock icon" ></i>
      <input type="password" class="text_field" placeholder="Password" name="pass"><br>
        <input type="submit" class="button" value="Login" >
    </form>
    <form id="em_form" style="display: none">
        <i  class="at" ></i>
        <input type="text" id="em" class="text_field" placeholder="Write your email address" ><br>
        <button class="button"  id="btn_sbmit" type="button"  onclick="sendem()">Submit</button>
    </form>
    <span id="fgpasswor" onclick="sv_pass()">Forgot password</span>


</div>-->
<script  src="../script.js"></script>
</body>
</html>