<?php
mkdir("http://shawod.co.za/client_project/nqobile");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title id="title">About us | Shawod</title>


</head>
<!--x_large -->
<link rel="stylesheet" href="../css/x_large.css" type="text/css" >
<link rel="icon" type="image/ico" href="../thumbnails/favd.png">
<script src="../js/normal.js"></script>
<body>
<div  id="scroll_up" style="background-color:#333333;" onclick="scroll_ups()">
    <img src="../thumbnails/go%20up2.png" width="79px" style="margin-top: 6px" >
</div>
<div class="log">
    <a href="../home"><img src="../thumbnails/logog.png"></a>
</div>
<div class="navs">
    <ul>
        <li>
            <a href="../home" style=" opacity:1"> Home </a></li>
        <div class="dv"></div>
        <li><a href="../website" style=" margin-left:-20%" >Website</a></li>

        <div class="dv" ></div>
        <li id="pg"><a href="../packages" style="margin-left:-30%"> Packages</a>
        </li>
        <div class="dv" ></div>
        <li><a href="../portfolio" style="margin-left: -15px"  >Portfolio</a></li>

        <div id="bt_hold" onclick="opn()">
            <div id="bt1"></div>
            <div ></div>
            <div></div>
        </div>
            
        </li>

        <div id="pg_dv" class="dv"></div>
        <li id="sv"  onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')"><a style="cursor: pointer"> Services </a></li>
    </ul>
    <div id="service_div" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">
        <a style="text-decoration:none;color:none" href="../seo"><div  id="seo" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">S.E.O</div></a>
        <a href="../domain" style="text-decoration:none;"><div id="server" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Domain</div></a>
        <a href="../hosting" style="text-decoration:none;"><div  id="qoute" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Hosting</div></a>
    </div>
</div><br><br><br>

<div  align="center" class="h_intro">
    <div align="center" class="intro_div">
        <span style="color: rgb(102,204,255)">About us</span>
    </div>
</div>

<br><br><br>
<div style="margin-left: 120px">
    <img src="" style="visibility:hidden;margin-left: 80px; margin-top: -70px; margin-bottom: -25px" >
 <img src="../thumbnails/logW.png" style="margin-left: 450px; margin-top: -70px; margin-bottom: -25px" >
    <img src="" style="visibility:hidden; margin-right: 120px; float: right ;margin-top: -60px; margin-bottom: -25px" ><br><br><br>

        <div align="center"  style="font-family: Stencil; font-size: 32px; color: white; width: 1200px">
            Let's make your <span style="color: rgb(102,204,255); ">Online Brand Ambassador !</span>
        </div>
    <br><br>
    <div style="width: 1200px">
    <p style="color: white; width: 1000px; margin-left: 100px ">Shawod is a small but capable Internet consulting company, we help our clients
        meet their goals using the most functional, state-of-the-art, and exciting Internet tools available..</p>

    <p style="color: white; width: 1000px; margin-left: 100px"> Shawod serves as a resource to people with little or no web development skills to quickly
        own a website. We also provide numerous Internet-related services, such as web design/development,
    application development, hosting ,domains and search engine optimization, to name a few. <br>Companies trust us with their technology
        requirements which enable them to focus on their core business.<br><br>
        We have been offering diverse and flexible solutions to clients of all sizes since 2014, trading as Freelancers..</p>





    </div>
</div>

<?php require '../footer/footer.php' ?>
</body>
</html>