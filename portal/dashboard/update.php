<?php
include '../connect.php';session_start();
if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['province']) && isset($_POST['postalcode']) ){
   $id=$_SESSION['id'];
   $name=$_POST['name'];$lastname=$_POST['lastname'];$province=$_POST['province'];$postal=$_POST['postalcode'];
   $organizastion=$_POST['organizastion'];$work_phone=$_POST['work_phone'];$mobile_phone=$_POST['mobile_phone'];
   $adress2=$_POST['adress2'];$city=$_POST['city'];$home_phone=$_POST['home_phone'];$fax=$_POST['fax'];
   $email=$_POST['email'];$region=$_POST['region'];$adress=$_POST['adress'];
   mysqli_query($conn,"INSERT INTO client_infor VALUES(NULL ,'$name','$lastname','$organizastion','$email','$mobile_phone','$home_phone','$work_phone','$fax','$region','$adress','$adress2','$city','$province','$postal','$id')");

}