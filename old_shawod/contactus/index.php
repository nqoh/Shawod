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

    header('Location: https://mobi.shawod.co.za/contactus');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/contactus');
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
    <title id="title">Contact us | Shawod</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Contact Shawod for all your online needs get websites, hosting and domains. view our deals today">
<meta name="keywords" content="Durban website design, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
<meta name="robots" content="index/follow">
<meta property="og:type" content="website">
<meta property="og:url" content="http://shawod.co.za/contactus">
<meta property="og:title" content="Web development | Shawod">
<meta property="og:description" content="Contact Shawod for all your online needs get websites, hosting and domains. view our deals today">
<meta property="og:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
<meta property="twitter:url" content="http://shawod.co.za/contactus">
<meta property="twitter:title" content="Web development | Shawod">
<meta property="twitter:description" content="Contact Shawod for all your online needs get websites, hosting and domains. view our deals today">
<meta property="twitter:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">

</head>
<!-- x_small -->
<!--<link rel="stylesheet" href="css/x_small.css" type="text/css" media="screen and (min-width: 0px)">
<!--x_large -->
<link rel="stylesheet" href="../css/x_large.css" type="text/css" >


<link rel="icon" type="image/ico" href="../thumbnails/favd.png">

<script src="../js/contactus.js"></script>


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
        <span style="color: rgb(102,204,255)">Contact us</span>
    </div>
</div>

<div  style="width: 1320px">
    <h3 style="color: white" align="center"><u>If you have any queries or want to chat about your Project please go right ahead.</u></h3>
    <h4 style="color: white" align="center"> Our team is always standing by to assist you.</h4>

    <div class="form" style="margin-top: -10px; box-shadow: 0px 0px 0px 0px; border: 1px solid white; opacity: 1; border-radius:    10%; width: 560px">
        <span class="fill_in">Complete this form, one of our expects will get back to you.</span><br>

        <br><label class="lebel">Name<span style="color:red"> * </span></label><span style="color: red" id="namee_error"></span><br><br>
        <input type="text" class="text-field3" id="namee" onblur="name_out('namee','namee_error')" onfocus="mouse_in('namee')"><br>

        <br><label class="lebel">E-mail<span style="color:red"> * </span></label><span id="emaile_error" style="color: red"></span><br><br>

        <input type="text" class="text-field3" id="emaile" onblur="check_email('emaile','emaile_error')" onfocus="mouse_in('emaile')" ><br>

        <br><label class="lebel">Subject</label>&nbsp;&nbsp;<span id="sub_error" style="color: red"></span><br><br>
        <input type="text" class="text-field3" id="subjs" onblur="subj('subjs','sub_error')"  onfocus="mouse_in('subjs') "><br>

        <br><label class="lebel">Query<span style="color:red"> * </span></label><span style="color: red" id="describes_error"></span><br><br>

        <div type="text" style=" border: 1px solid #ccc;" contenteditable="true" id="textareas" onblur="texts('textareas','describes_error')" onfocus="mouse_in('textareas')" ></div>


        <div class="silver_btn" id="cont_btn"  style="box-shadow: 0px 0px 0px 0px; width: 150px"   onclick="send_data('namee','emaile','subjs','textareas')" >
            <span style="color: rgb(255,255,255); " > <b>Submit</b> </span>
        </div>
        <span id="reference"></span>

    </div><br>
</div>

<?php require '../footer/footer.php' ?>
</div>
</body>
</html>