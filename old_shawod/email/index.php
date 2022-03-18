<?php
if(isset($_POST['emails'])){
    $mail=$_POST['emails'];
    $header  ="FROM : Shawod <noreply@shawod.co.za>\n";
    $header .="MIME-Version: 1.0\n";
    $header .="Content-type: text/html; charaset=iso-8859l\n";
    $message ='<!DOCTYPE>
<html>
<title></title>
<head>

</head>
<style>
    body{
        background-color: rgb(234,237,238);
    }
</style>
<body>
<div style=" width: auto; margin: 0px auto">
    <div style="background: rgb(79,79,79); width: 630px; height: 80px">
        <img src="http://shawod.co.za/thumbnails/logog.png" style="margin-left: 0px;margin-top: -204px; float: left">
        <p align="center" style="font-size: 64px; margin-top: -205px; margin-left: 40px;color: rgb(73,197,239)">Shawod Sale</p>
    </div>
    <div style="margin-top: 2px; background-color: #fafafa;width: 610px;padding: 10px ">

        <p  style=" opacity: .5; margin-top: 5px; margin-bottom: 0px; margin-left: 120px; font-size:30px">
            BOOST YOUR BUSINESS
        </p>
        <p align="center" style="opacity: .5;  margin-top: 0px; margin-left: 10px; font-size:30px;margin-bottom: 5px;">
            With A New Website
        </p>
        <div style=" width: 700px; margin-left: 150px">

            <div  style=" width: 300px;margin-left: 5px;
   overflow: hidden;
    position: relative;
    z-index: 100;
    overflow: hidden;
    box-shadow: 1px 5px 16px 1px;
    height: 263px;
    background-color: rgb(79,79,79);
    border-radius: 10px;">
                <img src="http://shawod.co.za/thumbnails/S-silver.png" style=" float:left;
    margin-left: 40px;
    margin-right: -100px;
    margin-top: -4px;
    width: 25px;">
                <div style="font-weight: bold;
    width: 260px;
    font-size: 22px;
    margin: 0px auto;
    height: 25px;
    border-bottom: 1px solid rgb(51,204,255);
    padding-top: 6px;
    text-align: center;
    color:rgb(255,255,255);">
                    Silver Pack
                </div>

                <div class="silver_text">
                    <br>
                    <span style=" margin-left: 12px; color: rgb(255,255,255);
    font-size: 20px;" ><b style="color: rgb(53,197,245) ;
    margin: 5px;">*</b><span id="b1">5 Pages</span></span>

                    <br>
                    <span style=" margin-left: 12px; color: rgb(255,255,255);
    font-size: 20px;" ><b style="color: rgb(53,197,245) ;
    margin: 5px;">*</b><span id="b1">1 Contact Form</span></span>
                    <br>
                    <span style=" margin-left: 12px; color: rgb(255,255,255);
    font-size: 20px;" ><b style="color: rgb(53,197,245) ;
    margin: 5px;">*</b><span id="b1">Social Media Integration</span></span>

                    <br>
                    <span style=" margin-left: 12px; color: rgb(255,255,255);
    font-size: 20px;" ><b style="color: rgb(53,197,245) ;
    margin: 5px;">*</b><span id="b1">Free Domain</span></span>


                    <br>
                    <span style=" margin-left: 12px; color: rgb(255,255,255);
    font-size: 20px;" ><b style="color: rgb(53,197,245) ;
    margin: 5px;">*</b><span id="b1">1 Month Free Economy Host</span></span><br><br>
                    <span style="color: rgb(255,255,255);
    font-size: 15px;
    margin-left: 80px;font-family: \'Lucida Calligraphy\';" >For only R2,775.00 !</span></span><br>

                    <span style="color: red; text-decoration:line-through;
    font-size: 14px;
    margin-left: 110px;" >Was R3 200.00 !</span></span><br>

                    <a href="http://shawod.co.za/packages/" style="text-decoration: none"><div style=" background-color: rgb(102,102,102);
    text-align: center;
    padding-top: 8px;
    width: 230px;
    height: 26px;
    box-shadow: 0px 0px 0px 0px;
    margin-left: 30px;
    border-radius: 50px;">
                            <span style="color: rgb(255,255,255);"> <b>Get Started</b></span>
                        </div>
                    </a>
                </div>

            </div>

        </div >
        <p style=" opacity: .8; margin-bottom: 0px;font-size:28px; margin-left: 90px; margin-top: 4px;">Get your website now at shawod and</p>
        <p style="  margin-bottom: 0px;font-size:42px; margin-left: 140px; margin-top: 0px;">Get up to <span style="color:rgb(53,197,245) ">20%</span> off</p>
        <a href="http://shawod.co.za/packages/" style="text-decoration: none"><div style=" background-color: rgb(102,102,102);
    text-align: center;
    padding-top: 8px;
    width: 230px;
    height: 26px;
    box-shadow: 0px 0px 0px 0px;
    margin-left: 190px;margin-top: 5px;
    border-radius: 20px;">
                <span style="color: rgb(53,197,245);"> <b>CUSTOMIZE AND BUY</b></span>
            </div>
        </a>
        <a href="http://shawod.co.za" style="color: rgb(53,197,245); margin-left: 220px; text-decoration: none; font-size: 22px" >www.shawod.co.za</a><br>
        <b style="font-size: 16px; margin-left: 180px; margin-top: 10px">*do not reply to this automated e mail</b><br>
        <span style="margin-left: 160px; ">Email us at info@shawod.co.za for more details.</span>
    </div>
</div>
</body>
</html>';

    mail($mail,"\n Shawod special, Get up to 20%* your order.\n",$message, $header);
    echo "email sent";
    exit();
}

?>
<!DOCTYPE>
<html>
<title></title>
    <head>
    </head>
     <style>
         body{
             background-color: rgb(234,237,238);
         }
     </style>
<body>
  <form action="index.php" method="post">
      <input type="email" name="emails" placeholder="email address">
      <input  type="submit">
  </form>
</body>
</html>