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

    header('Location: https://mobi.shawod.co.za/createwebsite');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/createwebsite');
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
    <title id="title">Create website | Shawod</title>
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Consider this a Shawod tutorial on how to get the best website without getting stuck on the 'Geeky' words that may appear along the way.">
<meta name="keywords" content="Durban website design, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
<meta name="robots" content="index/follow">
<meta property="og:type" content="website">
<meta property="og:url" content="http://shawod.co.za/createwebsite">
<meta property="og:title" content="Create website | Shawod">
<meta property="og:description" content="Consider this a Shawod tutorial on how to get the best website without getting stuck on the 'Geeky' words that may appear along the way.">
<meta property="og:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
<meta property="twitter:url" content="http://shawod.co.za/createwebsite">
<meta property="twitter:title" content="Create website | Shawod">
<meta property="twitter:description" content="Consider this a Shawod tutorial on how to get the best website without getting stuck on the 'Geeky' words that may appear along the way.">
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
        <span style="color: rgb(102,204,255)"> How to create website ?</span>
    </div>
</div>

<div align="center"  style="width: 1300px; ">
    <h2 align="center"  style="color: white; margin-left: 100px"><u>You are already on the Shawod website, Congratulations.</u></h2>
    <p align="left" style="color: white;opacity: .6; margin-left: 100px;margin-top: -10px">Consider this a Shawod tutorial on how to get the best website without getting stuck on the
        'Geeky' words that may appear along the way,<br> although we always try by all means to
        avoid them but sometimes you just have to be precise.</p>
    <h3 align="left"  style="color: white; margin-left: 100px">Terms</h3>
    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"><b style="opacity: 1">Content Management System (CMS) - </b>
        <span style="opacity: .6">Administration panel where you get to modify the content of the website.</span></p>

    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"><b style="opacity: 1">Traffic - </b>
        <span style="opacity: .6">The amount of hits your website gets.</span></p>

    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"><b style="opacity: 1">Content -  </b>
        <span style="opacity: .6">Information you want to add on your website e.g. text and images.</span></p>
    <h2 align="center"  style="color: white; margin-left: 100px"><u> Let's Get started</u></h2>
    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">Assuming you have an idea (and content ofcourse)
        and want to put it online, then follow these easy steps.</p>

    <h2 align="center"  style="color: white; margin-left: 100px"><u>Step 1 - Gather your Content</u></h2>
    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">
        Firstly you will need to gather all the content you want to be on your website like the images,
        texts, disclaimer, your company's description etc...
    </p>

    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">
        To get practical we will need to use an example, let's say for example you own a Lodge and want a website for it.
    </p>

    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">
        Your Lodge wants to keep the current clients, reach more people and also attract tourists alike and in this Day in age -where
        people are always glued <br>to their smartphones and turn to search engines for advices-
        Billboards and Flyers are just not as effective as before.
    </p>
    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">
        Now you are not sure about how many people (<b>Traffic</b>) are going to visit your website
        but since you also want to be on the first page on <b>Google</b> you can expect a lot
    </p>

    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">
        You want your clients to see the pictures of your rooms maybe have a <b>Gallery of 10 pictures</b> with a
        little of description below your pictures, and have a homepage with<br> a slide of <b>3 photos</b>,
        also have a page where your clients can fill a 'contact us' form, remember you will also need a
        <b>Content Management System (CMS)</b> to see these messages.
    </p>

    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">
        To edit some of your content from time to time you will need a CMS for each additional page,
        now let's say you want to edit the Homepage, Photo Gallery and the <br>Disclaimer, that's 3 <b>additional CMS.</b>
    </p>

    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">
        Now that you have prioritized the core pages of your business, let's add other typical pages of a
        website like the About us, Disclaimer and Terms of Use/Policy Page,<br> making it <b>3 Additional Pages.</b>
    </p>
    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px"> To ice the cake we will add webmail
        addresses to complement our website, e.g. info@yourlodge.com</p>
    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">Now in Total we have -:</p>

    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"> <b>Traffic -</b><span style="opacity: .6;">Dulux Host</span> </p>
    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"> <b>Google  -</b><span style="opacity: .6;">Ultimate S.E.O</span> </p>
    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"> <b>10 Pictures  -</b><span style="opacity: .6;">2*5 Photo Gallery</span></p>
    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"> <b>Form  -</b><span style="opacity: .6;">1 Form</span> </p>
    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"> <b>CMS -</b><span style="opacity: .6;">4 Content Management System</span> </p>
    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"> <b>Number of pages  -</b><span style="opacity: .6;">6 pages</span> </p>
    <p align="left" style="color: white; margin-left: 100px;margin-top: -10px"> <b>Email -</b><span style="opacity: .6;">1*5 webmail</span> </p>

    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">
        If you think this CMS process might puzzle you can skip it and on our clients portal you can let us know of any changes you need at a low rate.</p>

    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">Now that you know exactly what you need you can proceed to the next step.</p>
    <h2 align="center"  style="color: white; margin-left: 100px"><u>Step 2 - Go to Packages.</u></h2>
    <p align="left" style="color: white; opacity: .6; margin-left: 100px;margin-top: -10px">
        Our Packages include a free domain and 1 month hosting. If you (your Lodge) have either of
        the following -: Domain, Hosting or S.E.O go to<a class="alink" href="../website"> website</a> instead of <a class="alink" href="../packages">package</a></p>

    <p align="left" style="color:red; opacity: 1; font-size: 20px; margin-left: 100px;margin-top: -10px"> According to my specifications and budget this Lodge requires the silver pack.</p>
    <p align="left" style="color:red; opacity: 1; margin-left: 100px;margin-top: -10px"> <img src="../thumbnails/slctpkg.jpg" width="500px">

    </p>
    <span  style="color: white; float: right ; margin-right: 300px; margin-top: -200px">Select the package of your Choice, and click ' Get Started '</span>

    <p align="left" style="color:red; font-size: 20px;  margin-left: 100px;margin-top: -10px">Additional features are also needed.</p>
    <p align="left" style="color:red; opacity: 1; margin-left: 100px;margin-top: -10px"> <img src="../thumbnails/get%20started.jpg" width="500px">

    </p>
    <span  style="color: white; float: right ;   margin-right: 350px; margin-top: -200px">View included items, and add more if necessary.</span>


    <p align="left" style="color:red; opacity: 1; font-size: 20px;  margin-left: 100px;margin-top: -10px">View all your items on the table & Make changes if necessary.</p>
    <p align="left" style="color:red; opacity: 1; margin-left: 100px;margin-top: -10px"> <img src="../thumbnails/tabble.jpg" width="500px">

    </p>
    <span  style="color: white; float: right ; margin-right: 350px; margin-top: -200px">The table shows all the items you have selected</span>


    <p align="left" style="color:red; opacity: 1; font-size: 20px;  margin-left: 100px;margin-top: -10px">Submit your request, fill in your details and brief us about your project.</p>
    <p align="left" style="color:red; opacity: 1; margin-left: 100px;margin-top: -10px"> <img src="../thumbnails/formm.jpg" width="500px">

    </p>
    <span  style="color: white; float: right ; margin-right: 250px; margin-top: -200px">Brief us about your project, submit and wait for a referrence.</span>

    <p align="center" style="color:white; opacity: 1;">
    Now that you have this information you can also refer to <a class="alink" href="../howitworks">How
            it works</a> and the <a class="alink" href="../faqs">frequently asked questions</a> for more clarity or
        <a class="alink" href="../contactus">Start Chating</a> to us now about your project.</p>
    <p align="center" style="color:white; opacity: 1;"><b style="color: red">*</b>prices are for illustration purposes only and may vary.</p>
</div>

<?php require '../footer/footer.php' ?>
</div>
</body>
</html>