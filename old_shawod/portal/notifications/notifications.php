<?php
require '../connect.php';
$myid='';
if(isset($_POST['id'])) {
    $id= $_POST['id'];
   $query=mysqli_query($conn,"UPDATE notifications set `view`=0 WHERE f_key='$id' ORDER BY id DESC ");
  //  echo $myid;
}
$notify='';
$id=$_SESSION['id'];
$q=mysqli_query($conn,"SELECT * FROM notifications WHERE f_key='$id'");
while ($xrow=mysqli_fetch_assoc($q)){
      $title=$xrow['title'];
      $text=$xrow['text'];
      $time=$xrow['time'];
      $id=$xrow['id'];
      $notify .=" 
    <div   style=\"width:100%; height:auto;  \">
        <p class=\"bill\"><u>$title</u> <a href='http://portal.shawod.co.za/messages/delete.php?id=$id' style='margin-left: 20px;font-size: 18px; text-decoration: none'>Delete</a> </p>
        <p style=\"margin-left:40px;margin-bottom:-28px;font-size:13px; color:rgb(109,109,109)\"> $time </p><br>
        <p style=\"margin-left:30px; font-size:18px\"> $text </p>
    </div> ";


}
?>
