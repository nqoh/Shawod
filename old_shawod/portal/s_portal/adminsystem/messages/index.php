<?php
include '../connect.php';
require 'comment.php';
session_start();
if(isset($_SESSION['uname']) && $_SESSION['password'] && isset($_GET['id'])) {
        $_SESSION['id']=$_GET['id'];
        $id=$_GET['id'];
        $q=mysqli_query($conn,"SELECT * FROM `not_approved` WHERE id=$id");
        $row=mysqli_fetch_assoc($q);
        $name=$row['name'];
}else{
    header('location:../login');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Masseges</title>
</head>

<script type="text/javascript" src="../js/message_sent.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/switch_mssg.js"></script>
<script type="text/javascript" src="../js/update_services.js"></script>
<script type="text/javascript" src="../js/project.js"></script>
<link rel="stylesheet" href="../css/massege.css" type="text/css">
<?php require 'developer.php'; ?>
<?php require 'hosting.php'; ?>
<?php require 'other.php'; ?>
<?php require 'getdata.php'; ?>
<?php require 'email.php';  ?>

<body>
<script>

    function Send_msg(selc,txt,id) {
        var depat =  document.getElementById(selc).value;
        var text =  document.getElementById(txt).value;
        var subje="";
        if (depat == "select") {
            document.getElementById("erro_d").innerHTML = "Please select department";
            document.getElementById(selc).style.border = "1px solid red";
        }else if (text == "") {
            document.getElementById("erro_t").innerHTML = "Please write some text message";
            document.getElementById(txt).style.border = "1px solid red";
        } else {
            var ajax = new XMLHttpRequest();
            ajax.open('POST', 'send_notification.php', true);
            ajax.setRequestHeader('Content-type', 'Application/x-www-form-urlencoded');
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    document.getElementById(selc).value="select";
                    document.getElementById(txt).value="";
                    document.getElementById("success").innerHTML = ajax.responseText
                }
            }
            ajax.send("depart=" + depat + "&subject=" + subje + "&text=" + text + "&id=" + id);
        }
    }
</script>
<div id="overlay" >
     <div class="box_over">
       <div class="f_over1">
           Confirmation Message Box
       </div>
         <div class="f_over2" id="texts">

         </div>
         <div class="f_over3">
             <button id="btn" onclick="canceling()" style="float: right; margin-right: 8px; margin-top: 12px; border: 1px solid rgb(51,204,255) ">Cancel</button>
             <button id="btn" onclick="deleted()" style="float: right; margin-right: 8px; margin-top: 12px;border: 1px solid rgb(51,204,255)">OK</button>
         </div>
     </div>
</div>

 <div class="wrap">
 <div class="header" >
 <img src="../thumbnails/logoSb.png" style="margin-left: 160px">
    <h1>Admin Panel</h1  ><div class="messages">
     </div><p class="count" id="countm"><?php //echo $ii ?></p> <div class="chats"></div><p class="count" id="count"><?php //echo $i ?></p>
    <div class="uname">
        <p align="center" style="margin-bottom:1px; text-transform: uppercase "><b><?php echo strtoupper($_SESSION['uname']) ?></b></p>
        <form action="information.php" method="post">
            <input type="hidden" name="closed">
            <input type="submit" value="Logout" id="btn">
        </form>

    </div>
    
    <br>
    <div class="hr"></div>
</div>

<div id="sid_nav" style="margin-top: -7px;height: 650px">
<ul>
  <li id="bi" style="background-color: rgb(51,204,255)" onclick="bill('bill','dev','host','other')" ><span style="font-size: 30px" onclick="bill('bill','dev','host','other')">Billing <?php echo $bi ?></span></li>
    <li id="hs" onclick="hosting('bill','dev','host','other')"><span style="font-size: 30px" onclick="hosting('bill','dev','host','other')">Hosting <?php echo $hs ?></span></li>
    <li id="ot" onclick="other('bill','dev','host','other')"><span style="font-size: 30px" onclick="other('bill','dev','host','other')">Other <?php echo $ot ?></span></li>
    <li id="dv" onclick="develop('bill','dev','host','other')"><span style="font-size: 30px" onclick="develop('bill','dev','host','other')">Developer <?php echo $dv ?></span></li>
    <li id="nt" onclick="notify('bill','dev','host','other')"><span style="font-size: 30px" onclick="notify('bill','dev','host','other')">Notification</span></li>
    <li id="sv" onclick="servicess('bill','dev','host','other')"><span style="font-size: 30px" onclick="servicess('bill','dev','host','other')">Services</span></li>
    <li id="pj" onclick="project('bill','dev','host','other')"><span style="font-size: 30px" onclick="project('bill','dev','host','other')">Project</span></li>
</ul>
</div>

<div style="width:1300px;padding-left:35px; height:auto; padding-top:110px;">
<div class="content">

    <p style="font-size: 20px" align="center"></p>

   <div class="label" align="center">Welcome to <?php echo  $name ?> account</div>
    <br>
    <div id="bill" style="width:100%; height:auto;display:block">
        <?php echo $msg ?>
    </div>
    <div id="dev" style="width:100%; height:auto;display:none">
        <?php echo $msg2 ?>
    </div>
    <div id="host" style="width:100%; height:auto;display:none">
        <?php echo $msg3 ?>
    </div>
    <div id="other" style="width:100%; height:auto;display:none">
        <?php echo $msg4 ?>
    </div>

    <?php
    include "../connect.php";
    $user_id=$_GET['id'];
    $query=mysqli_query($conn,"SELECT * FROM services WHERE f_key='$user_id'");
    $row=mysqli_fetch_row($query);
    $web=$row[1];$host=$row[2];$dmn=$row[3];$ssl=$row[4];
    ?>
     <div id="service" style="width:100%; height:auto;display:none">
         <div class="label" style="margin-left: 0px">Website</div>
         <input type="text" placeholder="<?php echo $web ?>" id="website" class="text_input"><button id="btn" onclick="sub_data('website',<?php echo $_GET['id'] ?>,'error1')">Update</button>
         &nbsp;&nbsp;<span style="color: green" id="error1"></span>
         <div class="label" style="margin-left: 0px">Hosting</div>
         <input type="text" placeholder="<?php echo $host ?>" id="hosting" class="text_input"><button id="btn" onclick="sub_data('hosting',<?php echo $_GET['id'] ?>,'error2')">Update</button>
         &nbsp;&nbsp;<span style="color: green" id="error2"></span>
         <div class="label" style="margin-left: 0px">Domain</div>
         <input type="text"  placeholder="<?php echo $dmn ?>" id="domain" class="text_input"><button id="btn" onclick="sub_data('domain',<?php echo $_GET['id'] ?>,'error3')">Update</button>
         &nbsp;&nbsp;<span style="color: green" id="error3"></span>
         <div class="label" style="margin-left: 0px">SSL Certificate</div>
         <input type="text" placeholder="<?php echo $ssl ?>"  id="ssl_certificate" class="text_input"><button id="btn" onclick="sub_data('ssl_certificate',<?php echo $_GET['id'] ?>,'error4')">Update</button>
         &nbsp;&nbsp;<span style="color: green" id="error4"></span>
         <?php echo $txt ?>

     </div>


    <div id="project" style="width:100%; height:auto;display:none; ">
        <div id="preview3" style="margin-left: -80px">
            <div class="label" style="margin-left: 80px"><span id="ws" style="color: silver; cursor: pointer" onclick="web()" >Website</span>&nbsp;&nbsp;<span>|</span>&nbsp;
                &nbsp;<span id="ld" style="cursor: pointer" onclick="logo()" >Logo Design</span> |&nbsp;&nbsp;<span onclick="cms()" style="cursor: pointer" id="cm" >C M S</span></div><br>
            <div id="frame1">
                <iframe src="http://localhost/shawod/client_project/<?php  $ids=$_GET['id'];
                $quey=mysqli_query($conn,"SELECT * FROM  not_approved WHERE  id='$ids'");
                if(mysqli_num_rows($quey)==1){
                    $rows=mysqli_fetch_assoc($quey);
                    $Name=$rows['name'];
                   echo $folder=$rows['project_id'];
                } ?>" width="900px" style="margin-left: 85px" height="400px" ></iframe>
                <div style="margin-left: 50px"><?php echo $webst  ?></div></div>

            <div id="frame2" style="margin-left: 85px; display: none" >
                <iframe src="#" width="900px" height="400px"  ></iframe>
                <div style="margin-left: -40px"><?php echo $log  ?></div></div>

            <div id="frame3" style="margin-left: 85px ; display:none;">
                <iframe src="#" width="900px" height="400px"  ></iframe>
                <div style="margin-left: -40px"><?php echo $cms  ?></div></div>
        </div>
    </div>

    <div id="not" style="width:100%; height:auto;display:none">
          <p align="center">Send notification </p>
        <label>Department <span style="color:red">*</label></span>&nbsp;&nbsp;<span style="color: red" id="erro_d"></span><br>
        <select id="selector" onchange="clear_error()">
            <option value="select">Please select department....</option>
            <option value="billing">Billing</option>
            <option value="developer">Developer</option>
            <option value="hosting">Hosting</option>
            <option value="other">Other</option>
        </select><br>
        <label>Message<span style="color:red">*</span></span>&nbsp;&nbsp;<span style="color: red" id="erro_t"></span></label><br>
        <textarea id="txt" onmouseout="clear_text()" onblur="clear_text()"></textarea><br>
        <button id="btn" onclick="Send_msg('selector','txt',<?php echo  $_SESSION['id'] ?>)">Send</button><span style="margin-left: 20px; color: rgb(51,204,255)" id="success"></span>
    </div>

</div>
</div>
 </div>
</body>
</html>