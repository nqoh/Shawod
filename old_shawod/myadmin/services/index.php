<?php
session_start();
ob_clean();
require '../connect.php';
if(isset($_SESSION['id']) && isset($_SESSION['uname'])){
    $nm=$_SESSION['uname'];
    $ids=$_SESSION['id'];
    $quey=mysqli_query($conn,"SELECT * FROM  not_approved WHERE  id_client='$nm'");
    if(mysqli_num_rows($quey)==1){
        $Name=mysqli_fetch_assoc($quey)['name'];
    }else{
        header('location:../login');
    }

}else{
    header('location:../login');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Services</title>
</head>
<link rel="stylesheet" href="../css/services.css" type="text/css">
<script src="../js/message_sent.js" type="text/javascript"></script>
<script src="../js/services.js" type="text/javascript"></script>
<?php
require  '../connect.php'  ;
require '../messages/getdata.php'  ;
require 'email.php';
    $ii = 0;
    $ii1 = 0;
    $ii2 = 0;
    $ii3 = 0;
    $ii4 = 0;
    $i = 0;
    $quey = mysqli_query($conn, "SELECT `view` FROM notifications WHERE f_key='$ids'");
    while ($row = mysqli_fetch_assoc($quey)) {
        $i += $row['view'];
    }
    $ii1 = 0;
    $ii2 = 0;
    $ii3 = 0;
    $ii4 = 0;
    $myquery = mysqli_query($conn, "SELECT `o_key` FROM billing WHERE f_key='$ids'");
    while ($row1 = mysqli_fetch_assoc($myquery)) {
        $ii1 += $row1['o_key'];
    }
    $myquery1 = mysqli_query($conn, "SELECT `o_key` FROM other WHERE f_key='$ids'");
    while ($row2 = mysqli_fetch_assoc($myquery1)) {
        $ii2 += $row2['o_key'];
    }
    $myquery2 = mysqli_query($conn, "SELECT `o_key` FROM hosting WHERE f_key='$ids'");
    while ($row3 = mysqli_fetch_assoc($myquery2)) {
        $ii3 += $row3['o_key'];
    }
    $myquer3 = mysqli_query($conn, "SELECT `o_key` FROM developer WHERE f_key='$ids'");
    while ($row4 = mysqli_fetch_assoc($myquer3)) {
        $ii4 += $row4['o_key'];
    }
    $ii = $ii1 + $ii2 + $ii3 + $ii4;

?>
<style>
    .other{
        float: right;
        margin-top: -30px;
        margin-right: 40px;
        font-size: 22px;
        color: blue;
        cursor: pointer;
    }
    .other:hover{
        text-decoration: underline;
    }
</style>
<body>

<div class="wrap">
    <div class="header">
        <img src="../thumbnails/logoSb.png">
        <h1>Web Portal</h1  ><div class="message">
        </div><p class="count" id="countm"><?php echo $ii ?></p> <div class="chat"></div><p class="count" id="count"><?php echo $i ?></p>
        <div class="uname">
            <p align="center" style="margin-bottom:1px; text-transform: uppercase "><b><?php echo strtoupper($Name) ?></b></p>
            <form action="information.php" method="post">
                <input type="hidden" name="closed">
                <input type="submit" value="Logout" id="btn">
            </form>
            <p align="center" style="margin-top:-1px">ID : <?php echo  $_SESSION['uname']; ?></p>
        </div>
    
    <br>
    <div class="hr"></div>
   

</div>

<div class="sid_nav">
<ul>
  <li ><a href="../dashboard" >Dashboard</a></li>
  <li><a href="../messages">Messages</a></li>
  <li><a href="../projects">Projects</a></li>
  <li class="bg"><a href="../services">Services</a></li>
  <li><a href="../payments">Payments</a></li>
  <li><a href="../settings">Settings</a></li>
</ul>
</div>

<div style="width:1300px;padding-left:35px;padding-top:110px;">
<div class="content">
   <h1 align="center" >Services</h1>
    <p id="add_services" class="other" onclick="servicess('old_services','new_services','add_services')">Other new services</p>
    <div id="old_services" style="height: auto; display: block">
   <div class="label">Website</div>
     <p style="margin-left:30px; margin-top:7px; font-size:18px"> <?php echo $websit ?></p>
   <div class="label" >Hosting</div>
     <p style="margin-left:30px; margin-top:7px; font-size:18px"> <?php echo $host ?> </p>
     <div class="label">Domain</div>
     <p style="margin-left:30px; margin-top:7px; font-size:18px"> <?php echo $domain ?></p>
     <div class="label">Emails Account</div>
     <p style="margin-left:30px; margin-top:7px; font-size:18px"> Your have 5/10 emails accounts.</p>
     <?php echo $mail  ?>
     <button id="btn" class="add_btn" style="margin-left:30px; display:block" onClick="add()">Add</button>
     <div style="width:auto; height:300px; padding:5px; display:none" id="add_mail">
     <input type="text" id="txt">
     <i  class="icon" id="mail" >|@Olovamp3.com</i><br>
     <input type="password" id="pass1" class="txt_field" placeholder="Password" ><br>
     <input type="password" id="pass2" class="txt_field" placeholder="Retype-password"><br>
   <button id="btn" style="margin-left:30px;" onClick="saves()">Save</button>
     </div>
     </div>


    <div id="new_services" style="height:auto;   display: none" >
        <div class="label">Add any of the services bellow</div>
<div id="hold_left" style="float: left; margin-left: 20px; margin-right: 130px">
        <p id="list">
            <span id="span1" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left" onclick="sub_page()"><b>-</b></span>
            <span style="color:rgb(51,204,255); cursor: pointer" onclick="add_page()">+</span>
            <span id="state"> Page (R125.00 for each additional page)</span>
        </p>

        <p id="list">
            <span id="span2"  onclick="sub_cms()" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left"><b>-</b></span>
            <span style="color:rgb(51,204,255);cursor: pointer"  onclick="add_cms()">+</span>
            <span id="state2"> Content Management System (R199.50 for each additional page)</span>
        </p>

        <p id="list">
            <span id="span3" onclick="sub_gallary()" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left"><b>-</b></span>
            <span style="color:rgb(51,204,255); cursor: pointer"  onclick="add_gallary()">+</span>
            <span id="state3"> Photo gallery (R125.00 for each additional page)</span>
        </p>

        <p id="list">
            <span id="span4" onclick="sub_log()" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left"><b>-</b></span>
            <span style="color:rgb(51,204,255); cursor: pointer"  onclick="add_log()">+</span>
            <span id="state4">Logo Design (R650.00)</span>
        </p>

        <p id="list">
            <span id="span5" onclick="sub_seo()" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left"><b>-</b></span>
            <span style="color:rgb(51,204,255); cursor: pointer"  onclick="add_seo()">+</span>
            <span id="state5">Search Enging Optimization (R999.99 pa)</span>
        </p>
</div>

        <div id="hold_left" >
            <p id="list">
                <span id="span6" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left" onclick="sub_smi()"><b>-</b></span>
                <span style="color:rgb(51,204,255); cursor: pointer" onclick="add_smi()">+</span>
                <span id="state6">  Advance Social Medial Integration (R260.00) </span>
            </p>

            <p id="list">
                <span id="span7"  onclick="sub_ssl()" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left"><b>-</b></span>
                <span style="color:rgb(51,204,255);cursor: pointer"  onclick="add_ssl()">+</span>
                <span id="state7"> SSL Certificate (R1300.00) </span>
            </p>

            <p id="list">
                <span id="span8" onclick="sub_domain()" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left"><b>-</b></span>
                <span style="color:rgb(51,204,255); cursor: pointer"  onclick="add_domain()">+</span>
                <span id="state8"> Domain Infor.Locker (R200.00) </span>
            </p>

            <p id="list">
                <span id="span9" onclick="sub_basic()" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left"><b>-</b></span>
                <span style="color:rgb(51,204,255); cursor: pointer"  onclick="add_basic()">+</span>
                <span id="state9"> Basic Chat Zone (R800.00) </span>
            </p>

            <p id="list">
                <span id="span10" onclick="sub_email()" style="color: red; margin-top:-8px; margin-right:3px;font-size: 26px; cursor: pointer; display: none; float: left"><b>-</b></span>
                <span style="color:rgb(51,204,255); cursor: pointer"  onclick="add_email()">+</span>
                <span id="state10"> Webmail Account (R50.00) </span>
            </p>
        </div>

<div>
   <p id="cost" align="center" style="text-decoration: underline">Total Cost = R0.00</p>
   <p style="color: silver; margin-top: -9px" align="center">You will not billed yet</p>
    <div align="center"><textarea id="textarea"></textarea><br>
        <button id="send">Submit</button></button></div>
</div>

    </div>
</div>
</div>
 </div>

</body>
</html>