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

    header('Location: https://mobi.shawod.co.za/seo');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/seo');
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
    <title id="title">S E O | Shawod</title>
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="We can help your site achieve top rankings on major search engines by implementing our thorough, common sense methodology.">
<meta name="keywords" content="Durban website design, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
<meta name="robots" content="index/follow">
<meta property="og:type" content="website">
<meta property="og:url" content="http://shawod.co.za/seo">
<meta property="og:title" content="Search Engine Optimization | Shawod">
<meta property="og:description" content="We can help your site achieve top rankings on major search engines by implementing our thorough, common sense methodology.">
<meta property="og:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
<meta property="twitter:url" content="http://shawod.co.za/seo">
<meta property="twitter:title" content="Search Engine Optimization | Shawod">
<meta property="twitter:description" content="We can help your site achieve top rankings on major search engines by implementing our thorough, common sense methodology.">
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


<link rel="icon" type="image/ico" href="../thumbnails/favc.png">

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
        <li id="sv"  onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')"><a style="cursor: pointer;color: rgb(140,140,140)"> Services </a></li>
    </ul><div id="service_div" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">
        <a style="text-decoration:none;color:none" href="../seo"><div  id="seo" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">S.E.O</div></a>
        <a href="../domain" style="text-decoration:none;"><div id="server" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Domain</div></a>
        <a href="../hosting" style="text-decoration:none;"><div  id="qoute" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Hosting</div></a>
    </div>
</div>
<br><br><br>

<div  align="center" class="h_intro">
    <div align="center" class="intro_div">
        <span style="color: rgb(102,204,255)">Search Engine Optimization Explained !</span>
    </div>
</div>

<div align="center" style="width: 1300px">
    <h2 style="color: white"><u>S E O</u></h2>
    <p align="left" style="color: white;opacity: .6; margin-left: 100px">
        SEO stands for Search Engine Optimization and it is the process of optimizing your website and online
        presence in order for Google to rank your website organically. What does organic <br> or natural rankings mean?
        It means that Google will look at your website and online profile and decide for which keywords they will
        rank you on the first page of the search engine results</p>
    </p>
    <p align="left" style="color: white;opacity: .6;margin-left: 100px">
        The consultants at Shawod are search engine optimization experts.
        We can help your site achieve top rankings on major search engines by implementing our thorough, common sense methodology.
    </p>
    <h2 align="left" style="color: white; margin-left: 100px"><u>Basic S E O</u></h2>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> Off-page SEO</p>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> Robots</p>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> Sitemap</p>

    <h2 align="left" style="color: white; margin-left: 100px"><u>Premium S E O</u></h2>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> keywords</p>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> Metatags</p>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> On-page SEO</p>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> With all the basic SEO benefits</p>

    <h2 align="left" style="color: white; margin-left: 100px"><u>Ultimate S E O</u></h2>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> Search Engine Submissions</p>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> Reports</p>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> Directory Submission</p>
    <p align="left" style="color: white; margin-left: 100px;opacity: .6"><b>.</b> Local listings </p>
    <p align="left" style="color: white; margin-left: 100px; opacity: .6"><b>.</b> With all the Premium SEO benefits</p>

    <p align="left" style="color: white; opacity: 1; margin-left: 100px">Most top-ranking websites, the ones that appear "naturally" at the top of the search engine page just below the paid ads,
    do not appear there accidentally, they've been carefully designed and optimized to beat the competition to the top of the
        page by professionals like us.<br><br>
        Recommended Time-Frame for Best Results: 3 - 6 Months and if you buy the SEO at Shawod you get the SEO for the whole year.</p>
</div>

<?php require '../footer/footer.php' ?>
</div>
</body>
</html>