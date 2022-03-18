<?php

session_start();
require '../connect.php';
if(isset($_SESSION['password']) && isset($_SESSION['uname'])){
    $nm=$_SESSION['uname'];
    $ids=$_SESSION['password'];
}else{
    header('location:../login');
}

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<link rel="stylesheet" href="../css/dashboard.css" type="text/css">
<script type="text/javascript" src="../js/email_delete.js"></script>
<?php require 'tables.php'  ?><?php require 'emails.php'  ?>
<?php
$i=0;
$ii=0;
$quey=mysqli_query($conn,"SELECT * FROM emails WHERE news=1");
while ($row=mysqli_fetch_assoc($quey)){
      $ii+=$row['news'];
}

$myquery=mysqli_query($conn,"SELECT `c_key` FROM billing WHERE 1");
while ($row1=mysqli_fetch_assoc($myquery)){
    $i+=$row1['c_key'];
}
$myquery1=mysqli_query($conn,"SELECT `c_key` FROM other WHERE 1");
while ($row2=mysqli_fetch_assoc($myquery1)){
    $i+=$row2['c_key'];
}
$myquery2=mysqli_query($conn,"SELECT `c_key` FROM hosting WHERE 1");
while ($row3=mysqli_fetch_assoc($myquery2)){
    $i+=$row3['c_key'];
}
$myquer3=mysqli_query($conn,"SELECT `c_key` FROM developer WHERE 1");
while ($row4=mysqli_fetch_assoc($myquer3)){
    $i+=$row4['c_key'];
}
$query=mysqli_query($conn,"SELECT * FROM  not_approved WHERE approval=0");

?>
<body style="margin: 0px">
<div style="position:absolute;z-index: 200; width: 100%; height: 100%; background: white; opacity: 0.8;display: none" id="singles">
    <div style="border: 1px solid silver; height: auto; border-radius: 20px; border-bottom: none; margin:10px auto;
    width: 1000px; padding: 10px;background-color: #333333" >
        <div style="float: left; color: white" id="pd">

        </div>
        <div style="float: right;color: white" id="pw">

        </div>
        <div style="clear: both;color: white" >
            <p align="center"><b><u>ADDITIONAL FEATURES</u></b></p>
            <div id="feature">

            </div>
        </div>

        <div style="clear: both;color: white" >
            <p align="center"><b><u>SERVICES</u></b></p>
            <div id="Services">

            </div>
        </div>

        <div style="clear: both;color: white">
            <p align="center"><b><u>ABOUT WEBSITE</u></b></p>
            <p id="text"></p>
        </div>


        <div style="clear: both;color: white">
            <p align="center"><b><u>MORE INFOR</u></b></p>
            <p id="moreinfor"> </p>

        </div>


          <!-- <h1 align="center" style="color:rgb(51,204,255); font-size: 24px;" >This user is accepted to shawod.com</h1>-->
           <button id="btn" style="float: right; margin-right: 20px" onclick="leaves()">OK</button><br><br>
    </div>


</div>

<div id="overlay" >
    <div class="box_over">
        <div class="f_over1">
            Confirmation Message Box
        </div>
        <div class="f_over2" id="texts">
          Are you sure <?php echo strtolower($nm)  ?> you want to remove this email
        </div>
        <div class="f_over3">
            <button id="btn" onclick="canceling()" style="float: right; margin-right: 8px; margin-top: 12px; border: 1px solid rgb(51,204,255) ">Cancel</button>
            <button id="btn" onclick="deleted()" style="float: right; margin-right: 8px; margin-top: 12px;border: 1px solid rgb(51,204,255)">OK</button>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="header" >
        <img src="../thumbnails/logoSb.png" >
        <h1>Admin Panel</h1  >
        <div class="message"></div><p class="count" id="countm"><?php echo $i; ?></p>

        <div class="at"></div><p class="count" ><?php echo $ii; ?></p>


        <div class="chat"></div><p class="count" id="count"><?php echo mysqli_num_rows($query); ?></p>


        <div class="uname">
            <p align="center" style="margin-bottom:1px; text-transform: uppercase "><b><?php echo strtoupper($nm) ?></b></p>
            <form action="information.php" method="post">
                <input type="hidden" name="closed">
                <input type="submit" value="Logout" id="btn">
            </form>

        </div>

        <br>
        <div class="hr"></div>

    </div>

    <div class="sid_nav">
        <ul>
            <li id="d" style="background-color:rgb(51,204,255)" onmousedown="dash()"><a href="#" onclick="return false" onmousedown="dash()" >Current Projects</a></li>
          <!--  <li><a href="#">Services</a></li> -->
            <li id="ord" onmousedown="orders()"><a href="#" onclick="return false" onmousedown="ordersx()">New orders</a></li>

              <li id="cancell" onmousedown="orders()"><a href="#" onclick="return false" onmousedown="cancels()">Cancellation</a></li>


            <li id="emb" onmousedown="emails()"><a href="#" onclick="return false" onmousedown="emails()">E-mails</a></li>
         <!--   <li><a href="#">Payments</a></li>  -->

        </ul>
    </div>

    <div style="width:1300px;padding-left:35px;padding-top:110px;">
        <div class="content">
               <p align="center" id="state" style="font-size: 22px; "><b>Dashboard</b></p>
            <table id="table">
                <tr><th>ID</th><th>NAME</th><th>VIEW PEOPLE</th><th>PROJECT ID</th><th>DEATH LINE</th><th>TOTAL PRICE</th>
                    <th>PACKAGE</th><th>TOTAL PAID</th><th>VIEW INFOR</th><th>REMOVE</th></tr>
       <?php echo $table ?>
            </table>
            
            <table id="cancelTable" style="visibility: hidden; margin-top: -50px">
                    <tr><th>ID</th><th>DOMAIN</th><th>REASON</th><th>SPECIAL INSTRUCTION</th><th>EMAIL</th><th>PROJECT ID</th><th>DELETE</th></tr>
                    <?php echo $Cancelationtable ?>
                </table>


            <div id="email" style="display:none; border: 1px solid silver; margin-top: -200px; padding-left: 10px; padding-top: 10px; padding-right: 10px; border-bottom: none">
                <?php echo $emeils  ?>
            </div>

            <table id="table2" style="visibility: hidden; margin-top: -50px">
                <tr><th>ID</th><th>NAME</th><th>REFERENCE</th><th>PACKAGE</th><th>TOTAL PRICE</th><th>VIEW</th><th id="p_date">ACCEPT</th><th>REJECT</th></tr>
                <?php echo $table2  ?>
            </table>

    </div>
</div>
</body>
</html>