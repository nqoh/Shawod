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

    header('Location: https://mobi.shawod.co.za/faqs');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/faqs');
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
    <title id="title">FAQs | Shawod</title>
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5270724446806599",
    enable_page_level_ads: true
  });
</script>
</head>

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
        <span style="color: rgb(102,204,255)">Frequently asked questions</span>
    </div>
    <p style="color:white">
        Below we have combined the frequently asked question, we hope the answers you need are listed if not,<br>
        Please feel free <a href="http://localhost/shawod/contactus" class="alink">Contact us</a>  we will be more than happy to answer your Question.<br>
        Also refer to <a href="http://localhost/shawod/howitworks" class="alink">how it works</a> for more clarity.
    </p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>What is a domain name?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">A domain name is the actual name of a website (e.g. www.shawod.co.za), and every single website has a domain name.
        To obtain one, you need to purchase it through a domain registrar. Domains can cost anywhere from a few dollars a year to hundreds
        of thousands of dollars a year, based on the contract and popularity of the domain. Every domain name is actually pointing to an IP
        (Internet Protocol) address, which is a series of numbers. Because most people can’t remember 10 digits in perfect order,
        domain names serve as easily-remembered alias for visitors, if you need one please include it on your Cart. </p>

    <h3 align="left" style="margin-left: 80px; color: white;"><u>How much does a website cost?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">The cost of a website can vary depending on various
        factors, just like the cost of a house may vary. Though our website
        projects generally start in the R1,900.00 range for basic sites and range upward depending on your unique needs.</p>

    <h3 align="left" style="margin-left: 80px; color: white;"><u>I am totally new to this "website thing". How does the whole process work?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">Never fear, that's why we are here. Shawod is for people with little or no web development skills, other companies will design your website, not
    put it online, and say run with it. Shawod will not leave you hanging, we will offer you best hosting packages and put you online.
    you don't need to be 'geeky' to own a website, we will guide all step of the way from getting a name, designing, storing your files to
        search engine visibility until you type www.</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>How long will it take to design my website?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">Currently our production schedule is 4 working days for a basic website, this time will vary from project to project.
        Projects may take from 1 to 6 weeks and this may also vary.</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>How does the payment process work?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">The project starts with a 50% deposit. After design sign off and before we move into programming, we collect 25%. Once we have completed
        and fulfilled our scope, the final 25% is collected and your website is then scheduled for launch.</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>What kind of businesses do you work with?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">We work with a broad range of company types [small start-ups, large corporations, nonprofits, B2B, B2C and more] across many business industries [technology, food, apparel, health + beauty, camps, travel, finance, arts, fair trade, and more.]
        Our team takes the time to get to know your industry, organization, and competitors to ensure your site supports all of your goals.</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>How many changes can I make to my site without additional cost?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">We give as much latitude as we possibly can. After you've identified the general format and color schemes of your preferred design, we'll complete up to 2 rounds of major revisions at no charge. All minor revisions are provided at no charge.
    </p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>To begin creating our new website, what do you need?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">
        To develop a new website for you, we need to know exactly what you want it to be able to do. That information forms the project specification (often referred to as the "project specs" or "design brief"). Please send us the following in an email message</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>Can I edit the Content on my website after you done?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">
        Yes, you sure can. When selecting features for your website make sure you select Content Management System (CMS), such platform removes the need for businesses to constantly contact web developers when changes are required.
        This means no additional web development charges as well as no waiting times for
        changes to be implemented. Changes to the website can be completed instantly and easily by internal staff when required let us know on our <a class="alink" href="../portalbenefits">Client Portal</a> .</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>After our website is launched, who maintains it?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">
        Some organizations usually do not have programmers on staff, and so they ask us to maintain the website. We can perform regular backups of files and databases, make requested improvements to the website, add new features, and update the CMS system and its modules. All of this work is billed
        at our regular rate. The website content is the responsibility of the client, but we can always help with any technical issues.</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>What other Services do you offer?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">We offer Web designing, Company Logo Designs, Web Hosting, Google Local Optimization,<a class="alink" href="../seo"> SEO</a> and more.</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>What is Web Hosting?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">
        Web hosting is the service of storing data that keeps websites up and running for users. Every single website that is online has a host server, and almost all use a web host to manage that storage. Not all web hosts provide the same level of quality, though. Uptime,
        and data speed and quantity of transfer are the best measures of a host’s success. You can often pay more to get data transferred in higher quantities,
        faster. Most web hosts offer unlimited bandwidth and disk space at a speed that is perfectly fine for small-to-moderate sized businesses or individuals.</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>Can I buy web hosting without a domain name?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">
        While they both work together, the domain name and the web hosting service are two different things and can each function in different ways.
        However, without a domain name there would be no way to access or lead to the information stored in your hosting account. Therefore, the hosting couldn't function.
        Domain names, however, can be purchased without web hosting. These domains are considered 'Parked' until such time as their name servers are delegated (or pointed) to a webhost.
    </p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>What is disk space and how much do I need?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">
        Disk space refers to the total space available for a user to store files on at any time. Files may be any type - HTML, images, videos – and at any single given time, the total file size may not exceed the disk space. How much disk
        space you need is dependent on what type of media and interactions you’ll be hosting through your site. Your email account’s storage is also counted in disk space, so if you have large files that will sit in the account, that will boost your disk
        space needs. Remember that although you might not need much space now, you want wiggle room to expand and grow in the future, without switching hosts.</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>How do I obtain a dedicated email account? (me@mywebsite.com)</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">
        When you purchase an account with a web host, one of the services you receive is a certain number of dedicated email accounts for any domain hosted on that account. Some web hosts give you one email account, or 10 email accounts, or unlimited email accounts.
        Those email accounts are managed from the control panel of the web host, please view our Hosting Packages.</p>
    <h3 align="left" style="margin-left: 80px; color: white;"><u>How will I know how many people visited my site?</u></h3>
    <p align="left"  style="margin-left: 80px;opacity: .8;color: white">
        You can find out how many people visited your site through a number of different third party resources, here at Shawod we can offer you a unique tool to monitor your traffic or incorporate a third party tool into your website to start tracking, It’s important that businesses install some sort of traffic counting tool on every page of a site and regularly decipher the data to make improvements to marketing and sales plans.
        For personal websites, traffic counters are merely tools of curiosity, but the numbers certainly are fun to keep an eye on!</p>
</div>


<br><br><br>
<?php require '../footer/footer.php' ?>
</div>

</body>
</html>