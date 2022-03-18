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
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="../css/project.css" type="text/css">
<?php
$ii=0;
$ii1=0;$ii2=0;$ii3=0;$ii4=0;
$i=0;
$quey=mysqli_query($conn,"SELECT `view` FROM notifications WHERE f_key='$ids'");
while ($row=mysqli_fetch_assoc($quey)){
    $i+=$row['view'];
}
$ii1=0;$ii2=0;$ii3=0;$ii4=0;
$myquery=mysqli_query($conn,"SELECT `o_key` FROM billing WHERE f_key='$ids'");
while ($row1=mysqli_fetch_assoc($myquery)){
    $ii1+=$row1['o_key'];
}
$myquery1=mysqli_query($conn,"SELECT `o_key` FROM other WHERE f_key='$ids'");
while ($row2=mysqli_fetch_assoc($myquery1)){
    $ii2+=$row2['o_key'];
}
$myquery2=mysqli_query($conn,"SELECT `o_key` FROM hosting WHERE f_key='$ids'");
while ($row3=mysqli_fetch_assoc($myquery2)){
    $ii3+=$row3['o_key'];
}
$myquer3=mysqli_query($conn,"SELECT `o_key` FROM developer WHERE f_key='$ids'");
while ($row4=mysqli_fetch_assoc($myquer3)){
    $ii4+=$row4['o_key'];
}
$ii=$ii1+$ii2+$ii3+$ii4;
?>
<body>
 
 <div class="wrap">
 <div class="header">
 <img src="../thumbnails/logoSb.png">
    <h1>Web Portal</h1  ><div class="message">
    </div><p class="count">3</p> <div class="chat"></div><p class="count">10</p>
    <div class="uname">
    <p align="center" style="margin-bottom:1px"><b>Nqobile</b></p>
    <button id="btn">Logout</button>
    <p align="center" style="margin-top:1px">ID : 244589</p>
    </div>
    
    <br>
    <div class="hr"></div>
   
 
</div>

<div class="sid_nav">
<ul>
  <li ><a href="../dashboard" >Dashboard</a></li>
  <li><a href="../messages">Messages</a></li>
  <li class="bg"><a href="../projects">Projects</a></li>
  <li><a href="../services">Services</a></li>
  <li><a href="../payments">Payments</a></li>
  <li><a href="../settings">Settings</a></li>
</ul>
</div>

<div style="width:1300px;padding-left:35px;padding-top:110px;">
<div class="content">
   <h1 align="center" >Projects</h1>
   <div class="label"><span id="m" >Website</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span id="cm" >Design</span></div><br>
<iframe src="../login/index.php" width="900px" style="margin-left:5px" height="400"></iframe>
     
</div>
</div>
 </div>
</body>
</html>