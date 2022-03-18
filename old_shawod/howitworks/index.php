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

    header('Location: https://mobi.shawod.co.za/howitworks');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/howitworks');
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
    <title id="title">How it works | Shawod</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Learn how easy it is to get a website at Shawod, easy installments and superb customer support.">
<meta name="keywords" content="Durban website design, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
<meta name="robots" content="index/follow">
<meta property="og:type" content="website">
<meta property="og:url" content="http://shawod.co.za/howitworks">
<meta property="og:title" content="How it works | Shawod">
<meta property="og:description" content="Learn how easy it is to get a website at Shawod, easy installments and superb customer support.">
<meta property="og:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
<meta property="twitter:url" content="http://shawod.co.za/howitworks">
<meta property="twitter:title" content="How it works | Shawod">
<meta property="twitter:description" content="Learn how easy it is to get a website at Shawod, easy installments and superb customer support.">
<meta property="twitter:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5270724446806599",
    enable_page_level_ads: true
  });
</script>
</head>

<!--x_large -->
<link rel="stylesheet" href="../css/x_large.css" type="text/css" >


<link rel="icon" type="image/ico" href="../thumbnails/favd.png">

<script src="../js/normal.js"></script>
<script src="../js/form_validation.js"></script>


<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139717438-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139717438-1');
</script>
<div class="container2">
<div  id="scroll_up" style="background-color:#333333;" onclick="scroll_ups()">
    <img src="../thumbnails/go%20up2.png" width="79px" style="margin-top: 6px" >
</div>
<div class="log">
    <a href="../home"><img src="../thumbnails/logog.png"></a>
</div>
<div class="navs">
    <ul>
        <li>
            <a href="../home" style=" opacity:1"> Home </a>

        </li>
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
    </ul><div id="service_div" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">
        <a style="text-decoration:none;color:none" href="../seo"><div  id="seo" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">S.E.O</div></a>
        <a href="../domain" style="text-decoration:none;"><div id="server" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Domain</div></a>
        <a href="../hosting" style="text-decoration:none;"><div  id="qoute" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Hosting</div></a>
    </div>
</div><br><br><br>

<div  align="center" class="h_intro">
    <div align="center" class="intro_div">
        <span style="color: rgb(102,204,255)">How it works !</span>
    </div>
</div>

<div align="center" style="width: 1300px">
    <h2 align="left" style="margin-left: 100px; color: white"><u>Initially you </u></h2>
    <p align="left" style="color: white;margin-left: 100px; font-size: 18px">Step 1 : You select website/package or service, specify requirements</p>
    <p align="left" style="color: white;margin-left: 100px; font-size: 18px">Step 2 : After approval, We send you our <a href="../portalbenefits" class="alink">Clients Portal</a> link and Login credentials</p>
    <p align="left" style="color: white;margin-left: 100px; font-size: 18px">Step 3 : 50% of the estimated fee must be provided prior to beginning work.</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">From there we can either communicate on the Portal or via email, preferably via our Clients Portal so you can also see you Project in-progress</p>
    <h3 align="left" style="color: white;margin-left: 100px; font-size: 18px"><u>Now let’s move to the Clients Portal and</u></h3>
    <p align="left" style="color: white;margin-left: 100px; font-size: 18px">Step 1. Select Colours</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">
        Select the colour palette of your choice or that matches your logo or brand and we will update our design accordingly.</p>
    <p align="left" style="color: white;margin-left: 100px; font-size: 18px">Step 2 : Provide Content</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">Provide an approved packet of your text and photos and Shawod will input all of it into the site.</p>
    <p align="left" style="color: white;margin-left: 100px; font-size: 18px">Step 3 : Site Programmed</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">We then enable and program the various features of your site like a blog, photo gallery or slideshow.
        We also ensure the site loads smoothly across all devices like laptops, tablets and smartphones.</p>
    <p align="left" style="color: white;margin-left: 100px; font-size: 18px">Step 4 : Site Review + Revisions</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">
        Your website is then reviewed for errors and any necessary revisions are made.
        We also train you at this time to make changes to your site for any last minute updates as well as future ones.</p>
    <p align="left" style="color: white;margin-left: 100px; font-size: 18px">Step 5 : Site Launched!</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px"> Your website is launched live to the world and submitted to the search engines (if purchaced).
        Congratulations on a successful launch with Shawod.</p><br>
    <p align="left" style="color: white;margin-left: 100px; font-size: 18px">Also refer to the <a class="alink" href="../faqs">Frequently Asked Questions</a> for more clarity.</p>

</div>
<?php require '../footer/footer.php' ?>
</div>

</body>
</html>