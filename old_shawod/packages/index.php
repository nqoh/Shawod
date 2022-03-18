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

    header('Location: https://mobi.shawod.co.za/packages');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/packages');
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
    <title>Packages | Shawod</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Web Surfers Take 5 Seconds! To form an impression and find value on your website and here at
    Shawod we create catchy websites to ensure valuable prospects">
<meta name="keywords" content="Durban website design, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
<meta name="robots" content="index/follow">
<meta property="og:type" content="website">
<meta property="og:url" content="http://shawod.co.za/packages">
<meta property="og:title" content="Web development | Shawod">
<meta property="og:description" content="Get a website now at Shawod and save, view our packages and hosting plans">
<meta property="og:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
<meta property="twitter:url" content="http://shawod.co.za/packages">
<meta property="twitter:title" content="Web development | Shawod">
<meta property="twitter:description" content="Get a website now at Shawod and save, view our packages and hosting plans">
<meta property="twitter:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5270724446806599",
    enable_page_level_ads: true
  });
</script>
</head>
<!-- x_small -->
<link rel="stylesheet" href="../css/x_large.css" type="text/css" >
<link rel="icon" type="image/ico" href="../thumbnails/favd.png">
<script src="../js/normal.js"></script>
<script>
    function getpack(pckname,bnfit1,bnfit2,bnfit3,price,img,bnfit4,bnfit5,bnfit6,bnfit7,bnfit8,status,bnfit9,pg) {
        localStorage.clear();
        localStorage.setItem("package",pckname);
        localStorage.setItem("benefit1",bnfit1);
        localStorage.setItem("benefit2",bnfit2);
        localStorage.setItem("benefit3",bnfit3);
		localStorage.setItem("benefit4",bnfit4);
		localStorage.setItem("benefit5",bnfit5);
		localStorage.setItem("benefit6",bnfit6);
		localStorage.setItem("benefit7",bnfit7);
		localStorage.setItem("benefit8",bnfit8);
        localStorage.setItem("benefit9",bnfit9);
        localStorage.setItem("prc",price);
        localStorage.setItem("image",img);
        localStorage.setItem("status",status);
        localStorage.setItem("type",pg)
        window.location="started"
    }
</script>

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
        <li id="pg"><a href="../packages" style="color: rgb(140,140,140);margin-left:-30%"> Packages</a>
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
        <span style="color: rgb(102,204,255)">Packages</span>
    </div>
</div>

<p class="intro">
    We believe in Quality and Commitment, to support our belief our packages are tailor made to suit your needs and we also
    believe that Certain projects simply can not be shoehorned into a pre-made package with a set of budget, that is why all
    our Packages are fully customizable.
</p>

<h2 align="center" class="popula_hd"><u>We have made comprehensive packages to suit you</u></h2>

<div class="packs_div">

    <div class="bronz_box">
        <img src="../thumbnails/S-bronze.png" class="bronz_img" >
        <div class="bronz_txt">
            Bronze Pack
        </div>

        <div  class="bronz_text">
            <span class="benefit"><b>*</b>3 Pages </span><br>
            <span class="benefit"><b>*</b>General Design </span><br>
            <span class="benefit"><b>*</b>Express Website  <span style="color:rgb(51,204,255)">etc</span> </span><br><br>

            <span class="bronz_price" style="font-family: 'Lucida Calligraphy';margin-left: 40px"">For only R1,899.99 ! </span><br>
            <span style="text-decoration: line-through; color: red;margin-left: 65px; font-size: 14px"> Was R2 119.00 ! </span><br>

            <div class="bronz_btn" onclick="getpack('Bronz Pack','3 Pages','General Design','Express website','1899.99',
            '../thumbnails/S-bronze.png','1 month free economy hosting','Free Domain','','','',
            'With the Bronze package you can be a proud owner of a website quickly','','package')">
                <span style="color: rgb(255,255,255);"> Get Started</span>
            </div>

        </div>

    </div>


    <div  class="silver_box">
        <img src="../thumbnails/S-silver.png" class="silver_img" style="float:left;">
        <div class="silver_txt">
            Silver Pack
        </div><img src="thumbnails/popular.png" style="width: 60px; float: right; margin-top: -33px; margin-right: -5px">

        <div class="silver_text">
            <span class="silver_benefit"><b>*</b>5 Pages </span><br><br>
            <span class="silver_benefit"><b>*</b>1 Contact Form</span><br><br>
            <span class="silver_benefit"><b>*</b>Social Media Intergration <span style="color:rgb(51,204,255)">etc</span> </span><br><br>

            <span class="silver_p" style="font-family: 'Lucida Calligraphy';margin-left: 70px"">For only R2,775.00 !</span><br>
            <span style="text-decoration: line-through; color: red;margin-left: 95px; font-size: 14px"> Was R3 200.00 ! </span><br>
            <div class="silver_btn"  onclick="getpack('Silver Pack','5 Pages','1 Contact Form','Social Media Integration','2775.00',
            '../thumbnails/S-silver.png', '1 Month Free Economy Host','Free Domain','Premium Design','','',
            'The Silver package is fully loaded with common features, and is preferred by most of our clients.','','package')">
                <span style="color: rgb(255,255,255);"> Get Started</span>
            </div>
           <!--   <span style="color: rgb(102,240,255); margin-left: 100px; font-size: 17px"><b>Popular</b></span>-->
        </div>


    </div >

    <div class="gold_box">

        <img src="../thumbnails/S-gold.png" class="gold_img">
        <div class="gold_txt">
            Gold Pack
        </div>

        <div class="gold_text">
            <span class="gold_price"><b>*</b>8 Pages </span><br>
            <span class="gold_price"><b>*</b>2 Month Free Hosting </span><br>
            <span class="gold_price"><b>*</b>5 Webmail Account <span style="color:rgb(51,204,255)">etc</span></span><br><br>

            <span class="gold_prc" style="font-family: 'Lucida Calligraphy';margin-left: 30px"">For only R4,999.99 !</span><br>
            <span style="text-decoration: line-through; color: red;margin-left: 60px; font-size: 14px"> Was R5 499.99 ! </span><br>
            <div class="gold_btn" onclick="getpack('Gold Pack','8 Pages','2 Month Free Economy Hosting ','5 Webmail Account','4999.99',
            '../thumbnails/S-gold.png','Social Media Integration','Custom Design','1 Free Domain','1 Contact Form','2*5 Photo Gallery',
            'The Gold shines brighter in its Class with capabilities that will make competitors envy you.','','package')">
                <span style="color: rgb(255,255,255);"> Get Started</span>
            </div>

        </div>


    </div>


</div><br><br>



<div class="discribe_div">

    <p style="color:rgb(255,255,255); font-size: 20px"><img src="thumbnails/S-bronze.png" style="float: left; width: 20px"><p style="color: white; font-size: 20px"><b style="font-size: 23px;color: rgb(51,204,255);">Bronze pack - </b>
        With the Bronze package you can be a proud owner of a website quickly  <br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on a low budget,for individuals expecting low traffic.<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;<span class="gold_price"><b>*</b>3 pages</span><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;<span class="gold_price"><b>*</b>General Design</span><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;<span class="gold_price"><b>*</b>Express Website</span><br>
</p>
    </p>

        <p style="color:rgb(255,255,255); font-size: 20px"><img src="thumbnails/S-silver.png" style="float: left; width: 20px"><p style="color: white; font-size: 20px"><b style="font-size: 23px;color: rgb(51,204,255);">Silver pack - </b>
        The Silver package is fully loaded with common features, and is preferred by most of our clients.<br>

            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;<span class="gold_price"><b>*</b>5 pages</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;<span class="gold_price"><b>*</b>1 Contact Form</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;<span class="gold_price"><b>*</b>Social Media Intergration</span><br>
        </p>
        </p>

    <p style="color:rgb(255,255,255); font-size: 20px;"><img  src="thumbnails/S-gold.png" style="float: left; width: 20px"><p style="color: white; font-size: 20px"><b style="font-size: 23px;color: rgb(51,204,255)">Gold pack - </b>
        The Gold shines brighter in its Class with capabilities that will make competitors envy you.<br>

        &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;<span class="gold_price"><b>*</b>8 Pages </span><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;<span class="gold_price"><b>*</b>2 Month Free Hosting </span><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;<span class="gold_price"><b>*</b>Basic S.E.O</span><br>
    </p>
    </p>

</div>

<div class="line" ></div>

<h2 align="center" class="popula_hd"><u>If that wasn't enough Have a Look at our High-end packages preferred by enterprises and trafficked website alike </u></h2>

<div class="pack_div">

     <div  class="silver_box">
         <img src="../thumbnails/prem.png" style="margin-top: -2px;margin-left: 55px" class="silver_img">
        <div class="silver_txt">
            Platinum
        </div>

        <div class="silver_text">
            <span class="silver_benefit"><b>*</b>10 Pages</span><br><br>
            <span class="silver_benefit"><b>*</b>Dulux Hosting </span><br><br>
            <span class="silver_benefit"><b>*</b>5 Free Emails Account</span><br><br>

            <span class="silver_p" style="font-family: 'Lucida Calligraphy';margin-left: 50px"">For only R7,850.00 !</span><br><br>

            <div class="silver_btn">
                <span style="color: rgb(255,255,255);"   onclick="getpack('Platinum Pack','10 Pages','Dulux Hosting ','Premium Design','7850.00',
            '../thumbnails/prem.png','Social Media Integration','2*5 Photo Gallery','1 Free Domain','1 Contact Form','1*5 Email Account',
            'These Packages are designed for high-end websites, owning a Premium packages means you never have to ' +
             'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','','package')" > Get Started</span>
            </div>

        </div>



    </div>


    <div  class="silver_box">
        <img src="../thumbnails/prof.png" style="margin-top: -2px; margin-left: 55px" class="silver_img">
        <div class="silver_txt">
            Diamond
        </div>

        <div class="silver_text">
            <span class="silver_benefit"><b>*</b>15 Pages</span><br><br>
            <span class="silver_benefit"><b>*</b>15 Photo Gallery</span><br><br>
            <span class="silver_benefit"><b>*</b>10 Free Emails Account</span><br><br>

            <span class="silver_p" style="font-family: 'Lucida Calligraphy';margin-left: 50px"">For only R10,199.99 !</span><br><br>

            <div class="silver_btn">
                <span style="color: rgb(255,255,255);" onclick="getpack('Diamond Pack','15 Pages','10 Free Emails Account','Dulux Hosting 1Month','10119.00',
            '../thumbnails/prof.png','3*5 Photo Gallery','Premium Design','1 Free Domain','1 Contact Form','Premium S.E.O',
            'These Packages are designed for high-end websites, owning a professional packages means you never have to ' +
             'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','Social Media Integration','package')"> Get Started</span>
            </div>

        </div>



    </div>

      <div  class="silver_box">
          <img src="../thumbnails/ulti.png" style="margin-top: -2px; margin-left: 55px" class="silver_img">
        <div class="silver_txt">
            Titanium
        </div>

        <div class="silver_text">
            <span class="silver_benefit"><b>*</b>20 Pages</span><br><br>
            <span class="silver_benefit"><b>*</b>Premium Hosting</span><br><br>
            <span class="silver_benefit"><b>*</b>Professional S.E.O</span><br><br>

            <span class="silver_p" style="font-family: 'Lucida Calligraphy';margin-left: 50px">For only R14,699.99 !</span><br><br>

            <div class="silver_btn">
                <span style="color: rgb(255,255,255);" onclick="getpack('Titanium Pack','20 Pages','15 Emails Account ','Professional S.E.O','14999.00',
            '../thumbnails/ulti.png','Privacy Protection','Custom Design','1 Free Domain','1 Contact Form','4*5 Photo Gallery',
            'These Packages are designed for high-end websites, owning a Ultimate packages means you never have to ' +
             'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','Premium Hosting','package')"> Get Started</span>
            </div>

        </div>



    </div>


</div><br><br>



<div class="discribe_div">

    <p style="color:rgb(255,255,255); font-size: 20px"><p style="color: white; font-size: 20px">
        These Packages are designed for high-end websites, owning one of these packages means you never have to worry about traffic crashing your website,
        Security and Reliability are Covered with 99% Up-time Guarantee
    </p>
    </p><br>
<img src="thumbnails/S-trolley2.png" align="center" style="margin-left: 300px; ">
</div>

<?php require '../footer/footer.php' ?>
</div>




</body>
</html>