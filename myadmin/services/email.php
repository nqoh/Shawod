<?php
require '../connect.php';
    $mail='';
    if(isset($_SESSION['id']) && isset($_SESSION['uname']))
    $id=$_SESSION['id'];
    $qrry = mysqli_query($conn, "Select * FROM services WHERE f_key='$id'");
    $row=mysqli_fetch_assoc($qrry);
        $websit=$row['website'];
        $host=$row['hosting'];
        $domain=$row['domain'];
       $em=explode("\n",$row['emails']);
      $i=1;
      foreach ($em as $email){
          $mail.="<p style=\"margin-left:30px; margin-top:7px; font-size:18px\">$i. $email <button id=\"btn\">Remove</button> </p>";
          $i++;
      }



