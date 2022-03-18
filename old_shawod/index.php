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

    header('Location: https://mobi.shawod.co.za');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za');
    exit();
    //  header('location :http://m.olovamp3.com');
}
else {

    // do something for everything else

}

?>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>Home | Shawod</title>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="stylesheet" href="css/x_large.css" type="text/css" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="description" content="Web Surfers Take 5 Seconds! To form an impression and find value on your website and here at
    Shawod we create catchy websites to ensure valuable prospects">
<meta name="keywords" content="Durban website design, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
<meta name="robots" content="index/follow">
<meta property="og:type" content="website">
<meta property="og:url" content="http://shawod.co.za/">
<meta property="og:title" content="Web development | Shawod">
<meta property="og:description" content="Get a website now at Shawod and save, view our packages and hosting plans">
<meta property="og:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
<meta property="twitter:url" content="http://shawod.co.za/">
<meta property="twitter:title" content="Web development | Shawod">
<meta property="twitter:description" content="Get a website now at Shawod and save, view our packages and hosting plans">
<meta property="twitter:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">

   <link rel="icon" type="image/ico" href="../thumbnails/favd.png">
<script src="../js/normal.js"></script>




</head>


<script>

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

<div class="container2">
<div  id="scroll_up" style="background-color:#333333;" onclick="scroll_ups()">
    <img src="../thumbnails/go%20up2.png" width="79px" style="margin-top: 6px" >
</div>

 <div class="log">
     <a href="../home"><img src="../thumbnails/logog.png"></a>
 </div>

<div class="navs">
   <ul>
       <li><a href="../home" style=" opacity:1;color: rgb(140,140,140)"> Home </a></li>

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

       <div id="pg_dv" class="dv"></div>
       <li id="sv" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')"><a style="cursor: pointer"> Services</a></li>

   </ul> <div id="service_div" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">
        <a style="text-decoration:none;color:none" href="../seo"><div  id="seo" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">S.E.O</div></a>
         <a href="../domain" style="text-decoration:none;"><div id="server" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Domain</div></a>
         <a href="../hosting" style="text-decoration:none;"><div  id="qoute" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Hosting</div></a>


    </div>
</div><br><br><br>



 <div  align="center"   style="width:  1345px;" >
     <div id="left_arrow" onclick="last_img('img')" style="cursor: pointer">  </div>
     <img src="thumbnails/slide1.png" id="img" style="width: 50%">
     <div id="right_arrow" onclick="next_img('img')" style="cursor: pointer">  </div>
<br><br>
     <div class="bubbles" align="center">
         <div align="center" onClick="bluble(0);   clearTimeout(intarval)" id="0" style="background-color:#e8f1ff" ></div>
         <div align="center" onClick="bluble(1);   clearTimeout(intarval)" id="1"></div>
         <div align="center" onClick="bluble(2);   clearTimeout(intarval)" id="2"></div>
     </div>

 </div>


 <br>
 <div  align="center" class="h_intro">
     <div align="center" class="intro_div" style="font-family: Stencil">
         Let's make your <span style="color: rgb(102,204,255); ">Online Brand Ambassador !</span>
     </div>
 </div>
 <p class="intro" style="margin-left: 100px">
     <b style="font-family: 'Century Schoolbook'">Web Surfers Take 5 Seconds!</b>  To form an impression and find value on your website and here at
     Shawod we understand that very well, that is why our experts ensure that they add life
     to each website so that it thrives in today's competitive Market
     At Shawod our custom websites and hosting plans offers flexibility in accordance to your needs,
     with little or no web development skills we will build your website and get you online in no time.
 </p>

<p class="shawod" align="center"><u style="font-family: 'Century Schoolbook'">Here are some of many features we offer here at Shawod</u></p>

 <div  align="center" class="web_intro">
     <div align="center">
          <span>Websites</span>
     </div>
 </div><br><br><br>

<div class="web_pp" align="center">



    <div id="maintenances" >
        <img src="../thumbnails/modern.png" style="width: 150px">
        <p style="color:white"><b>Moderm</b></p>
        <p class="up_text" align="center">
            To thrive in today's competetive tech world you need to keep up with
            the times, our Websites are made with the latest features and designed
            to be relevant even in the next Decade.
        </p>
    </div>

    <div id="upt" >
        <img src="../thumbnails/userfr.png" style="width: 150px" >
        <p style="color:white"><b>User friendly</b></p>
        <p  class="user_text" align="center">
            We design all our websites with the user's interest at heart,
            our websites are easy to navigate and don't take hours to load.
            you don't want your potential Clients running off to your competitor
            due to the complications of your website.
        </p>
    </div>
    <div id="cost_e">
        <img src="../thumbnails/seo.png" style="width: 150px">
        <p style="color:white"><b>S.E.O</b></p>
        <p  class="money_text">
            Our websites are not filled with stuffy back-end code which is
             Search Engine Friendly, and with our SEO feature  offered on services
             Search Engines will be crawling on your website in no time
        </p>
    </div>
</div>
<a href="../website" style="color: rgb(102,240,255); text-decoration: none; font-weight: bold; margin-left: 5%">More on website > </a><br><br>



 <div  align="center" class="web_intro">
     <div align="center">
         <span>Packages</span>
     </div>
 </div><br><br><br>

 <div class="web_pp" align="center">

    <div id="maintenances">
        <img src="../thumbnails/maintainancefree.png" style="width: 150px">
        <p style="color:white"><b>Free Maintenance</b></p>
        <p class="up_text" align="center">
            One of the advantages of hosting with us is that you never have
            to worry about maintaining your server or updating
            your server-side application, all this is done at no cost to you.
        </p>
    </div>

    <div id="upt">
        <img src="../thumbnails/uptime.png" style="width: 150px" >
        <p style="color:white"><b>Up-time Reliability</b></p>
        <p  class="user_text" align="center">
            Rest easy knowing your website is up and running, your clients are not missing out on anything, our Servers are Monitored 24/7.
        </p>
    </div>
    <div id="cost_e" >
        <img src="../thumbnails/dedcost.png" style="width: 150px">
        <p style="color:white"><b>Cost-effectiveness</b></p>
        <p  class="money_text">
            We do not shoehorn all projects some need more resources than others
            and it's only fair to pay for what you need and ONLY what you need,
            customize our packages to get your shoe size or enquire within.
        </p>
    </div>


</div>
<a href="../packages" style="color: rgb(102,240,255); text-decoration: none; font-weight: bold; margin-left: 5%">More on packages > </a>

<br>
<br>



 <div  align="center" class="web_intro">
     <div align="center">
         <span>Services</span>
     </div>
 </div><br><br><br>

<div class="web_pp" align="center">

    <div id="maintenances">
        <img src="../thumbnails/cms.png" style="width: 150px">
        <p style="color:white"><b>Content Management System</b></p>
        <p class="up_text" align="center">
            Imagine never having to call your web designer or developer again.
            If you can operate a web browser and you're familiar with Microsoft Word,
            you can easily maintain your own web site and content at Shawod.
        </p>
    </div>

    <div id="upt">
        <img src="../thumbnails/smigration.png" style="width: 150px" >
        <p style="color:white"><b>Server Migration</b></p>
        <p  class="user_text" align="center">
            If you have your website hosted elsewhere, here at Shawod we can move your files to our secure and reliable servers.
        </p>
    </div>
    <div id="cost_e" >
        <img src="../thumbnails/worldwide.png" style="width: 150px">
        <p style="color:white"><b>S.E.O</b></p>
        <p  class="money_text">
            SEO stands for Search Engine Optimization and it is the process of optimizing your website and online presence in order
            for Google to rank your website organically and at Shawod we can help your site achieve top rankings on major search engines.
        </p>
    </div>


</div>
<br>
<br>


<div class="line"></div>

<h3 style="color:rgb(255,255,255); margin-left: 70px; width: 1200px"><u>Welcome to Shawod where your imagination becomes a reality</u></h3>

 <p style="color:rgb(255,255,255); margin-left: 70px; width: 1200px; margin-top: -8px; font-size: 17px">Imagine your business or organization operating more efficiently than ever.
     Imagine serving your customers in ways that you never thought were possible.<br>
     Shawod can make all of this a reality beyond your imagination.<br><br>

     Do you want to appear on the first page on Google? We hope you do, because the consultants at Shawod are <a class="alink" href="../seo">search engine optimization</a> experts.<br>
     We can help your site achieve top rankings on major search engines by implementing our thorough, common sense methodology.
 </p>

 <h1 align="center" style="color:rgb(102, 204, 255); margin-left: 80px; width: 1200px;" class="why">Why choose us ?</h1>

<div style="margin: 0px auto; width: 1200px" align="center" class="images"><img src="thumbnails/why-us-blue4.gif" ></div>


 <p style="color:rgb(255,255,255); width: 1300px; margin-left: 35px; font-size:17px;"  align="center">Shawod serves as a resource to people with little or no web development
     skills to quickly own a website, what's more?<br> Our websites are aesthetically simple, minimally
     adorned and Clutter-free, blending with your business look or personal style.<br>
     To ice the cake, we are Cost-effective because here at Shawod we believe that a website should
     be your best business investment, not an expense.<br> Our crew’s primary goal is to ensure that
     investment has a huge return.

 </p>

<img src="thumbnails/Shawotbannerico.png" class="footer_div">

 <!--<div class="footer_div">  </div> -->

<?php require 'footer/footer.php' ?>

</div>
</body>
</html>