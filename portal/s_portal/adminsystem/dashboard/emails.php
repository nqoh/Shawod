<?php
include  '../connect.php';

$sqry=mysqli_query($conn,"SELECT * FROM emails WHERE 1 ORDER BY id DESC ");
$emeils='';
while ($rows=mysqli_fetch_assoc($sqry)){
       $id=$rows['id'];
       $name=$rows['name'];
       $em=$rows['email'];
       $sb=$rows['subject'];
       $txt=$rows['text'];
       $dt=$rows['date'];

$emeils.="<p>Name : $name</p>
        <p>Email : $em</p>
        <p>Subject: $sb</p>
        <p>Date :  $dt</p>
        <p>Message: </p>
        <p>$txt</p>
        <p style='color: blue;text-decoration: underline;cursor: pointer' onclick='em_delete(\"$id\")'>Delete</p> <hr>";
 }
if($emeils==""){
    $emeils="<p align='center'><b style='font-size: 28px'>No new Emails</b></p>";
}

if(isset($_POST['id'])){
  $id = $_POST['id'];
  mysqli_query($conn,"DELETE FROM emails WHERE id='$id'");

}
if(isset($_POST['update'])){
    mysqli_query($conn,"UPDATE `emails` SET `news`=0");
    echo  "updated";
}