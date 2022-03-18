<?php
require '../connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    mysqli_query($conn,"Delete from notifications where id=$id");
    header('location:http://portal.shawod.co.za/messages/');
}


?>