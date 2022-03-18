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

    header('Location: https://mobi.shawod.co.za/privacy');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/privacy');
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
    <title id="title">Privacy | Shawod</title>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5270724446806599",
    enable_page_level_ads: true
  });
</script>
</head>
<!-- x_small -->

<!--x_large -->
<link rel="stylesheet" href="../css/x_large.css" type="text/css">


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
        <li><a href="../website" style="margin-left:-20%" >Website</a></li>

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
        <span style="color: rgb(102,204,255)">Privacy policy</span>
    </div>
</div>

<div style="padding-left: 80px; width: 1200px">
    <h3 style="color: white" align="center"><b><u>Your privacy is important to us.</u></b></h3>
    <p style="color: white;opacity: 0.8" align="center">
        This privacy statement providesinformation about the personal information that
        Shawod collects, and the ways in which Shawod uses that personal information.
    </p>
    <h3 style="color: white" align="center"><b><u>Personal information collection</u></b></h3>
    <p style="color: white;opacity: 0.8">
    Shawod may collect and use the following kinds of personal information:<br>

    information about your use of this website (including pages you visit, your geographical location, ip address and device) ;<br>
    information that you provide using for the purpose of registering with the website (including phone number and your e-mail address) ;<br>
    information about transactions carried out over this website (including purchases of services) ;<br>
    information that you provide for the purpose of subscribing to the website services (including newsletters) ; and any other information that you send to Shawod.
    </p>
    <h3 style="color: white" align="center"><b><u>Using personal information</u></b></h3>
    <p style="color: white;opacity: 0.8">Shawod may use your personal information to:

    administer this website;
    enable your access to and use of the website services;
    send to you products that you purchase;<br>
    supply to you services that you purchase;
    send to you statements and invoices;
    collect payments from you; and
    send you marketing communications.<br>

    Where Shawod discloses your personal information to its agents or sub-contractors for these purposes, the agent or sub-contractor in question will be obligated to use that personal information in accordance with the terms of this privacy statement.

    In addition to the disclosures reasonably necessary for the purposes identified elsewhere above, Shawod may disclose your personal information to the extent that it is required to do so by law, in connection with any legal proceedings or prospective legal proceedings, and in order to establish, exercise or defend its legal rights.
    </p>
    <h3 style="color: white" align="center"><b><u>Securing your data</u></b></h3>
    <p style="color: white;opacity: 0.8" >
    Shawod will take reasonable technical and organisational precautions to prevent the loss, misuse or alteration of your personal information.
    Shawod will store all the personal information you provide on its secure servers.
    Information relating to electronic transactions entered into via this website will be protected by encryption technology.
    </p>
    <h3 style="color: white" align="center"><b><u>Cross-border data transfers</u></b></h3>
    <p style="color: white;opacity: 0.8" >
    Information that Shawod collects may be stored and processed in and transferred between any of the countries
        in which Shawod operates to enable the use of<br> the information in accordance with this privacy policy.
    You agree to such cross-border transfers of personal information.
    </p>

    <h3 style="color: white" align="center"><b><u> Updating this statement </u></b></h3>
    <p style="color: white;opacity: 0.8" align="center" >
    Shawod may update this privacy policy by posting a new version on this website.
        You should check this page occasionally to ensure you are familiar with any changes.</p>
    <h3 style="color: white" align="center"><b><u> Other websites </u></b></h3>
    <p style="color: white;opacity: 0.8" align="center" >
    This website contains links to other websites.
    Shawod is not responsible for the privacy policies or practices of any third party.
    </p>
    <h3 style="color: white" align="center"><b><u> Contact Shawod</u></b></h3>
    <p style="color: white;opacity: 0.8" align="center" >
    If you have any questions about this privacy policy or Shawod's treatment of your personal information, please write:
        by email to info@shawod.co.za;</p>

</div>
<?php require '../footer/footer.php' ?>
</div>
</body>
</html>