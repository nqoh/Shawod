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

    header('Location: https://mobi.shawod.co.za/portalbenefits');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/portalbenefits');
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
    <title id="title">Portal Benefit | Shawod</title>

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
        <span style="color: rgb(102,204,255)">Portal Benefits !</span>
    </div>
</div>
<div align="center" style="width: 1300px">
    <p  style="color: white;margin-left: 100px;  font-size: 18px">At Shawod we have designed a portal for clients to communicate directly with us at any time of the Day,
        this is the first of its kind in the Industry</p>
    <p style="color: white;margin-left: 100px;font-size: 18px">For discussing the details of your project a collaborative project management tool, such as Our Clients Portal is much better, for many reasons</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">•	The information is saved online, and serves as a valuable record of our discussion.</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">•	Portal messages can be searched and referenced at any time in the future, so we do not have to rely upon our memories of phone conversations. </p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">•	Any messages can be resent if necessary.</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px"> •	Both parties can take all the time and space they want, to be exact in describing questions and answers.
        When you express what you want in your own words in a message, it reduces the potential for misunderstandings.</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">
        •	Project requests conveyed in a phone conversation can be (unintentionally) vague, which causes frustration and wastes valuable time.
        In contrast, Portal messages encourage us to be more specific.</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">
        •	Everyone has the information they need to do their tasks, which saves time and reduces the chances of miscommunication.</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">•	Files and website addresses can be easily sent via our Portal.</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">•	You can view your project's progress</p>
    <p align="left" style="color: white;margin-left: 100px; opacity: .6; font-size: 18px">
        •	Portal allows us to send and receive messages whenever we want, day or night. It is not intrusive nor does it interrupt what we are doing, as does a phone call.
        We can receive and send information at our convenience, not dictated by a ringing telephone.</p>
    <p style="color: white;margin-left: 100px; font-size: 18px">
        Any project instructions will need to be provided in writing anyway — either as a project specifications document or in an email message.</p>
</div>

<?php require '../footer/footer.php' ?>
</div>

</body>
</html>