<?php
require '../connect.php';
$websit='';$host='';$domain='';$sll='';
if(isset($_SESSION['id']) && isset($_SESSION['uname'])){
    $id=$_SESSION['id'];
    $query=mysqli_query($conn,"SELECT * FROM services WHERE f_key='$id'");

    $row=mysqli_fetch_array($query);
    $website=$row['website'];$hst=$row['hosting'];$dmn=$row['domain'];$sll_c=$row['ssl_certificate'];


    if($hst !=""){
        $host="   <div class=\"label\" style=\"margin-left: 80px\">Hosting</div>
     <p style=\"margin-left:100px; margin-top:7px; font-size:18px\"> $hst </p>";
    }
    if($dmn != ""){
        $domain="<div class=\"label\" style=\"margin-left: 80px\">Domain</div>
     <p style=\"margin-left:100px; margin-top:7px; font-size:18px\">$dmn</p>";
    }
    if($sll_c != ""){
        $sll="<div class=\"label\" style=\"margin-left: 80px\">SSL Certificate</div>
        <p style=\"margin-left:100px; margin-top:7px; font-size:18px\">$sll_c</p>";
    }

}