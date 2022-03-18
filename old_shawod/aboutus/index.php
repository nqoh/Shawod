<?php
$tablet_browser = 0;
$mobile_browser = 0;
$device='';
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}

if(strstr($_SERVER['HTTP_USER_AGENT'],'Opera Mini') || strstr($_SERVER['HTTP_USER_AGENT'],'Mobile')){
    $mobile_browser++;
}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');

if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
        $tablet_browser++;
    }
}

if ($tablet_browser > 0) {
    // do something for tablet devices

    header('Location: http://mobi.shawod.co.za/aboutus');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: http://m.shawod.co.za/aboutus');
    exit();
    //  header('location :http://m.olovamp3.com');
}
else {

    // do something for everything else

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title id="title">About us | Shawod</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Shawod is a vibrant tech company which provides its clientele world-class services, view our deals today">
<meta name="keywords" content="Durban website design, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
<meta name="robots" content="index/follow">
<meta property="og:type" content="website">
<meta property="og:url" content="http://shawod.co.za/aboutus">
<meta property="og:title" content="Web development | Shawod">
<meta property="og:description" content="Shawod is a vibrant tech company which provides its clientele world-class services, view our deals today">
<meta property="og:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
<meta property="twitter:url" content="http://shawod.co.za/aboutus">
<meta property="twitter:title" content="Web development | Shawod">
<meta property="twitter:description" content="Shawod is a vibrant tech company which provides its clientele world-class services, view our deals today">
<meta property="twitter:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">

</head>
<!--x_large -->
<link rel="stylesheet" href="../css/x_large.css" type="text/css" >
<link rel="icon" type="image/ico" href="../thumbnails/favd.png">
<script src="../js/normal.js"></script>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139717438-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139717438-1');
</script>
<div class="container2" >
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
</div>
</body>
</html>