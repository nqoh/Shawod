<?php
session_start();
require 'vendor/autoload.php'; $pay_id=$_SESSION['id'];include '../connect.php';

$row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM web_payment WHERE  f_key='$pay_id' AND status=0 "));
$price=$row['price'] * 100;$stage=$row['stage'];
Stripe::setApiKey('sk_test_qDQBZY74WoVBTKIkxkBMFB6u');
if(isset($_POST['stripeToken'])){
    $token=$_POST['stripeToken'];
    try{
        Stripe_Charge::create([
           "amount"=>$price,
           "currency" =>"ZAR",
           "card"=> $token,
           "description" => $stage
    ] );
        // perform database update
        mysqli_query($conn,"UPDATE web_payment SET status=1 , transaction_date=CURRENT_TIMESTAMP  WHERE f_key='$pay_id' AND status=0 ");
        $_SESSION['ok']="Your payment was successfully";
        header('location:http://portal.shawod.co.za/payments/');
    }catch (Stripe_CardError $e){
       $_SESSION['error']=$e;
      header('location:http://portal.shawod.co.za/payments/');
    }
}else{
    header('location:http://portal.shawod.co.za/payments/');
}

?>