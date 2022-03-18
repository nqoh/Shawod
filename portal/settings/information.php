<?php
  $msg='';
  require '../connect.php';
  if(isset($_SESSION['uname']) && $_SESSION['id']){
      $id=$_SESSION['uname'];
      $myid=$_SESSION['id'];
      $query=mysqli_query($conn,"SELECT * FROM not_approved WHERE id_client='$id'");
      if($row=mysqli_fetch_assoc($query)){
          $Name=$row['name'];
          $query=mysqli_query($conn,"SELECT * FROM notifications WHERE f_key='$myid' AND view=1");
          $i=0;
          while($myrow=mysqli_fetch_assoc($query)){
              $title=$myrow['title'];
              $text=$myrow['text'];
              $date=substr($myrow['time'],0,9);
              $time=substr($myrow['time'],9,14);
              $i++;
              $msg.="<p class='bill'><u>$title</u></p><p style=\"margin-left:85px;margin-bottom:-28px;font-size:13px; color:rgb(109,109,109)\">
                   $date | $time
              </p><br>  <p style=\"margin-left:75px; font-size:18px;\">$text</p>";
          }
          if($i==0){
              $i="";
              $msg="<p class='bill'><u>No new notification</u></p>";
          }
      }
  }else{
      header('location:../login');
  }
if(isset($_POST['closed'])){
      session_destroy();
      header('location:../login');
}