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

    header('Location: https://mobi.shawod.co.za/disclaimer');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/disclaimer');
    exit();
    //  header('location :http://m.olovamp3.com');
}
else {

    // do something for everything else

}

?>

<!DOCTYPE html>
<div lang="en">
<head>
    <meta charset="UTF-8">
    <title id="title">Disclaimer | Shawod</title>
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
    </ul>
    <div id="service_div" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">
        <a style="text-decoration:none;color:none" href="../seo"><div  id="seo" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">S.E.O</div></a>
        <a href="../domain" style="text-decoration:none;"><div id="server" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Domain</div></a>
        <a href="../hosting" style="text-decoration:none;"><div  id="qoute" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Hosting</div></a>
    </div>
</div><br><br><br>

<div  align="center" class="h_intro">
    <div align="center" class="intro_div">
        <span style="color: rgb(102,204,255)">Disclaimer</span>
    </div>
</div>

    <div style="padding-left: 80px; width: 1200px">
        <h3 style="color: white" align="center"><b><u>No warranties</u></b></h3>

       <p style="color: white;opacity: 0.8">This website is provided “as is” without any representations or warranties, express or implied. <br>
           Shawod makes no representations or warranties in relation to this website or the information and materials provided on this website.
          <br>Services and Prices are subject to change without noticeWithout prejudice to the generality of the foregoing paragraph,
           Shawod does not warrant that:<br>this website will be constantly available, or available at all;
           or the information on this website is complete, true, accurate or non-misleading.
       </p>

        <h3 style="color: white" align="center"><b><u>Limitations of liability</u></b></h3>
        <p style="color: white; opacity: 0.8">While we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind,
            express or implied, about the completeness, <br>accuracy, reliability, suitability or availability with respect to the website or the information,
            products, services, or related graphics contained on the website for any purpose.<br> Any reliance you place on such information is therefore strictly
            at your own risk. In no event will we be liable for any loss or damage including without limitation, indirect <br> or consequential loss or damage,
            or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website or portal.
        <br>Through this website you are able to link to other websites which are not under the control of Shawod. We have no control over the nature, content and
            availability of those sites.<br> The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.
            Every effort is made to keep the website up and running smoothly. <br>However, Shawod takes no responsibility for, and will not be liable for, the website
            being temporarily unavailable due to technical issues beyond our control
        </p>

        <h3 style="color: white" align="center"><b><u>Exceptions</u></b></h3>
        <p style="color: white; opacity: 0.8">Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit;
            and nothing in this website disclaimer will exclude or limit Shawod's liability in respect of any:
        death or personal injury caused by Shawod negligence;
        fraud or fraudulent misrepresentation on the part of Shawod; or
        matter which it would be illegal or unlawful for Shawod to exclude or limit, or to attempt or purport to exclude or limit, its liability.
        </p>

        <h3 style="color: white" align="center"><b><u> Reasonableness</u></b></h3>
        <p style="color: white; opacity: 0.8" >By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.
        <br> If you do not think they are reasonable, you must not use this website or it's services.
        </p>
        <h3 style="color: white" align="center"><b><u> Consent</u></b></h3>
        <p style="color: white; opacity: 0.8" align="center">By using our website, you hereby consent to our disclaimer and agree to its terms</p>
        <h3 style="color: white" align="center"><b><u>Other parties</u></b></h3>
        <p style="color: white; opacity: 0.8">
        You accept that, as a limited liability entity, Shawod has an interest in limiting the personal liability of its officers and employees.<br>
        You agree that you will not bring any claim personally against Shawod officers or employees in respect of any losses you suffer in connection with the website.
        </p>
        <h3 style="color: white" align="center"><b><u>Unenforceable provisions</u></b></h3><p align="center" style="color: white; opacity: 0.8">
        If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the
            enforceabilityof the other provisionsof this website disclaimer.</div>






<br><br><br>
<?php require '../footer/footer.php' ?>
</div>
</body>
</html>