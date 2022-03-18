<?php
include "../connect.php";
if(isset($_POST['emails'])){

if(filter_var($_POST['emails'] , FILTER_VALIDATE_EMAIL) ){
    $email=$_POST['emails'];
    $query=mysqli_query($conn,"SELECT * FROM client_infor WHERE email='$email'");
    if(mysqli_num_rows($query)== 1){
        $row=mysqli_fetch_assoc($query);
        $mail=$row['email'];$name=$row['firstname'];$q=$row['f_key'];
        $row2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM not_approved WHERE id='$q'"));
        $usernname= $row2['id_client'];
        mysqli_query($conn,"INSERT INTO resetpassword VALUES(null,'$usernname','$q',CURRENT_TIMESTAMP)");

        $header  = "FROM: Shawod <noreply@Shawod.co.za>\n";
        $header .="MIME-Version: 1.0\n";
        $header .="Content-type: text/html; charaset=iso-8859l\n";
        $message ='<!DOCTYPE><html><title></title><head></head>
<style>body{background-color: rgb(234,237,238);}</style>
<body><div style=" width: 900px; margin: 0px auto"><div style="background: rgb(79,79,79); width: 830px; height: 100px"><br>
<span align="center" style="font-size: 64px; margin-left: 150px;color: rgb(73,197,239)">Reset Password</span><br></div><div style="margin-top: 2px; background-color: white;width: 810px;padding: 10px ">
<b style="font-size: 20px">Dear : '.$name.'</b><p>Hey '.$name.', we heard that you lost your Shawod password.<br>
            Sorry about that !  don\'t worry you can use the following link within the next two days to reset your password;
            <br> <br><a href="http://portal.shawod.co.za/resetpassword/'.$usernname.'" style=" text-decoration: none;
        padding: 8px;
        background: #2a88bd;
        color: white;
        border-radius: 5px; margin-left: 320px" >Reset Password</a><br><br>
            If you don\'t use this link within 48 hours, it will expire. To get a new password reset link <a href="http://portal.shawod.co.za/login/">click here</a> 
        </p>
        <p>
            Remember that Shawod will always here to provide you with Website,Domain,Hosting,SEO and excellent customer
            service.<br>
            If there is any thing more we can do to help, please don\'t hesitate to email us
        </p>
        <b style="font-size: 20px">Thank you </b><br>
        <span style="margin-left:50%">Find us on</span><br>
        <span>Sales Team</span><br>
        <span>Shawod Inc.</span>
        <a href=""><img src="http://shawod.co.za/thumbnails/fblg.png" style="margin-left: 315px; cursor: pointer"></a>
        <a href=""><img src="http://shawod.co.za/thumbnails/twlg.png" style="cursor: pointer"></a>
        <img src="http://shawod.co.za/thumbnails/logoSb.png" style="float: right; margin-top: -50px">
    </div>
</div>
</body>
</html>';

        mail($mail,"\nReset Password\n",$message, $header);
    }else{
        echo 2;
    }
}else{
    echo 1;
}
}

?>


