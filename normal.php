<?php
include 'connect.php';
if(isset($_POST['rate'])){
    $rate = $_POST['rate'];
    $ip =  $_SERVER['REMOTE_ADDR'];
    mysqli_query($conn,"INSERT INTO `rate` VALUES(null,'$rate','$ip',CURRENT_TIMESTAMP)");
    echo "Ok";
}


if(isset($_POST['coupon'])){
    $coupon = $_POST['coupon'];
    $sql = mysqli_query($conn,"SELECT * FROM `coupon` WHERE `coupon`='$coupon'");
    if(mysqli_num_rows($sql) >= 1){
        $row = mysqli_fetch_assoc($sql);
        echo $row['percent'];exit();
    }

}