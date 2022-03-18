<?php
include_once('../connect.php');
if(isset($_POST['email'])){
    $email=$_POST['email'];
    if(filter_var($email , FILTER_VALIDATE_EMAIL) ){
     
    }else{
        echo "Invalid email address";
    }
}
if(isset($_POST['name'])  && isset($_POST['contact'])  && isset($_POST['text'])){
    $nam = $_POST['name'];
    $email=$_POST['emails'];
    $cont =$_POST['contact'];
    $txt =$_POST['text'];
    $pack=$_POST['pack'];
    $price=$_POST['price'];
    $discount=$_POST['discount'];
    $feature=$_POST['feature'];
    $ref="WP".rand(10,99).date("s");
    $user_id=date("z").substr($ref,2,6);
    $a=0;
    $pass1= substr(md5($email),4,6);
    $pass= md5($pass1);

    $date=date("Y/m/d") ;
    $chek=mysqli_query($conn,"SELECT * FROM `not_approved` WHERE email='$email'");
    if(mysqli_num_rows($chek)== 0) {
        $save = mysqli_query($conn, "INSERT INTO `not_approved` VALUES(null, '$nam', '$email', '$cont', '$txt', '$pack', '$feature', '$ref', '$user_id','$pass1','', $a, '$price','$discount' ,'', CURRENT_TIMESTAMP)");
        $fk=mysqli_insert_id($conn);
        $header  ="FROM : Shawod <noreply@shawod.co.za>\n";
        $header .="MIME-Version: 1.0\n";
        $header .="Content-type: text/html; charaset=iso-8859l\n";
        $message ='<!DOCTYPE><html><title></title><head></head>
<style>body{background-color: rgb(234,237,238);}</style>
<body><div style=" width: 900px; margin: 0px auto"><img src="http://shawod.co.za/thumbnails/MAILHD.gif"><div style="margin-top: 5px; background-color: white;width: 810px;padding: 10px ">
<b style="font-size: 20px">Dear : '.ucfirst($nam).'</b><p>
              We  are so pleased that you have decided to order '.$pack.' from shawod.<br>
              This message simply serves as a confirmation of that order.<br><br>
              This email contains important information regarding your recent Shawod.co.za order.<br>
              Please save it for reference, if you would like to cancel the status of your order or make any
              changes to it, please email support@shawod.co.za along with your reference.
</p><span><b style="font-size: 20px">Customer Name : </b> '.ucfirst($nam).' </span><br><span><b style="font-size: 20px">Reference : </b> '.$ref.' </span><br>
<span><b style="font-size: 20px">Product: </b> '.$pack.' </span><br><span><b style="font-size: 20px">Items(s) Total: </b> R'.$price.' </span><br><br>
<span>Placed on date: '.$date.'</span><br><p>
              We will send you an email once your order has been processed<br><br>
              Remember that Shawod will always be here to provide you with Websites, Domains, Hosting, SEO and excellent Customer
              service.<br>
              If there is anything more we can do to help, please don\'t hesitate to email us
</p><b style="font-size: 20px">Thank you </b><br><br><p> **Do not reply to this automated email</p><span style="margin-left:50%">Find us on</span><br><span>Sales Team</span><br>
<span>Shawod Inc.</span><a href="https://www.facebook.com/shawodza"><img src="http://shawod.co.za/thumbnails/fblg.png" style="margin-left: 315px; cursor: pointer"></a>
<a href="https://twitter.com/ShawodWeb"><img src="http://shawod.co.za/thumbnails/twlg.png" style="cursor: pointer"></a>
<img src="http://shawod.co.za/thumbnails/logoSb.png" style="float: right; margin-top: -50px"></div>
</div></body></html>';

        mail($email,"\nYour Order\n",$message, $header);


          echo "Please check your email for confirmation, Thank you " . $nam ;
    }else{
        echo "You are already a client, order new services on Portal";
    }
}
?>