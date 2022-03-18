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

    header('Location: https://mobi.shawod.co.za/terms');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/terms');
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
    <title id="title">Terms | Shawod</title>

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
        <li><a href="../home" style=" opacity:1"> Home </a></li>

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
        <span style="color: rgb(102,204,255)">Terms and Conditions</span>
    </div>
</div>
  <div style="padding-left: 80px ; padding-right: 40px; width: 1200px ">
      <h3 style="color: white" align="center"><b><u>Overview</u></b></h3>
      <p style="color: white;opacity: 0.8"> All references in this Terms and Conditions of use Policy to "we," "us," or "our" Shall refer to Shawod and its subsidiaries,
     The term "site" or "website" refers to Shawod.co.za,<br>
          The term "service"  refers to the services and/or products provided by Shawod.co.za, The term "content" refers to information provided on the Site in any form.
      <br>All references in this Terms and Conditions of use Policy to "user," "you," or "your" shall refer to the users of Shawod and portals.
      </p>
      <h3 style="color: white" align="center"><b><u>Introduction</u></b></h3><p style="color: white;opacity: 0.8">
      These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full.<br>
      If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.<br>
      This website uses cookies.  By using this website and agreeing to these terms and conditions, you consent to our Shawod's
          <br>use of cookies in accordance with the terms of Shawod's privacy policy.</p>

      <h3 style="color: white" align="center"><b><u>License to use website</u></b></h3>
      <p style="color: white;opacity: 0.8">Unless otherwise stated, Shawod and/or its licensors own the intellectual property rights in the website and material on the website.
     <br> Subject to the license below, all these intellectual property rights are reserved.
      You may view, download for caching purposes only, and print pages<br> from the website for your own personal use,
          subject to the restrictions set out below and elsewhere in these terms and conditions.</p>

      <h3 style="color: white" align="center"><b><u>You must not:</u></b></h3>
      <p style="color: white;opacity: 0.8">republish material from this website (including republication on another website);
      sell, rent or sub-license material from the website;
      reproduce, duplicate, copy or otherwise exploit <br>material on this website for a commercial purpose;
      edit or otherwise modify any material on the website; or
      redistribute material from this website except for content <br>specifically and expressly made available for redistribution
      Where content is specifically made available for redistribution, it may only be redistributed within your organisation.
      </p>
      <h3 style="color: white" align="center"><b><u>Acceptable use</u></b></h3>
      <p style="color: white;opacity: 0.8"> You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or
          accessibility of the website ; <br> or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.
      <br>You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus,<br> Trojan horse,
          worm, keystroke logger, rootkit or other malicious computer software. You must not conduct any systematic or automated data collection activities <br>(including without limitation scraping,
          data mining, data extraction and data harvesting) on or in relation to this website without Shawod's express written consent.
      <br>You must not use this website to transmit or send unsolicited commercial communications.
      </p>
      <h3 style="color: white" align="center"><b><u> Restricted access</u></b></h3>
      <p style="color: white;opacity: 0.8">
      Access to certain areas of this website is restricted. Shawod reserves the right to restrict access to other areas of this website, such as the Admin and client's panel, at Shawod's discretion.
      If Shawod provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID
          and password are kept confidential.Shawod may disable your user ID and password in Shawod's sole discretion without notice or explanation.
      </p>
      <h3 style="color: white" align="center"><b><u>User content</u></b></h3><p style="color: white;opacity: 0.8">
      In these terms and conditions, “your user content” means material (including without limitation text, images, audio material, video material and audio-visual material) that you submit to this
      website, for whatever purpose.You grant to Shawod a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute your user content in
      any existing or future media.  You also grant to Shawod the right to sub-license these rights, and the right to bring an action for infringement of these rights.
      Your user content must not be illegal or unlawful, must not infringe any third party's legal rights, and must not be capable of giving rise to legal action
      whether against you or Shawod or a third party (in each case under any applicable law).You must not submit any user content to the website that is or has ever been the subject of any threatened
      or actual legal proceedings or other similar complaint.Shawod reserves the right to edit or remove any material submitted to this website, or stored on our servers, or hosted or published upon
      this website.Notwithstanding Shawod's rights under these terms and conditions in relation to user content, shawod does not undertake to monitor the submission of such content to, or the publication
      of such content on, this website.
      </p>
      <h3 style="color: white" align="center"><b><u>No warranties</u></b></h3>
      <p style="color: white;opacity: 0.8">
      This website and its portals are provided on an "as is" and "as available" basis, without any representations or warranties, express or implied. Shawod makes no representations or warranties in relation to this website or the information and materials provided on this website.

      Services and Prices are subject to change without notice

      Without prejudice to the generality of the foregoing paragraph, Shawod does not warrant that:

      this website will be constantly available, or available at all; or the information on this website is complete, true,
          accurate or non-misleading.
      </p>

      <h3 style="color: white" align="center"><b><u>Limitations of liability</u></b></h3>
      <p style="color: white;opacity: 0.8">
      Shawod will not be liable to you (whether under the law of contact, the law of torts or otherwise) in relation to the contents
          of, or use of, or otherwise in connection with, this website:

      to the extent that the website is provided free-of-charge, for any direct loss;
      for any indirect, special or consequential loss; or
      for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships,
          loss of reputation or goodwill, or loss or corruption of information or data.

      These limitations of liability apply even if Shawod has been expressly advised of the potential loss.
      </p>
      <h3 style="color: white" align="center"><b><u>Exceptions</u></b></h3>
      <p style="color: white;opacity: 0.8">
      Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit; and nothing in
          this website disclaimer will exclude or limit Shawod's liability in respect of any:
      death or personal injury caused by Shawod negligence;
      fraud or fraudulent misrepresentation on the part of Shawod; or
      matter which it would be illegal or unlawful for Shawod to exclude or limit, or to attempt or purport to exclude or limit, its liability.
      </p>
      <h3 style="color: white" align="center"><b><u> Reasonableness</u></b></h3>
      <p style="color: white;opacity: 0.8" align="center">
      By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.
      If you do not think they are reasonable, you must not use this website or it's services.
      </p>
      <h3 style="color: white" align="center"><b><u>Other parties</u></b></h3>
      <p style="color: white;opacity: 0.8" align="center">
      You accept that, as a limited liability entity, Shawod has an interest in limiting the personal liability of its officers and employees.
          You agree that you will not bring any claim personally against Shawod officers or employees in respect of any losses you suffer in connection with the website.
      </p>
      <h3 style="color: white" align="center"><b><u> Unenforceable provisions</u></b></h3>
      <p style="color: white;opacity: 0.8" align="center">
      If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.
      </p>
      <h3 style="color: white" align="center"><b><u> Indemnity </u></b></h3>
      <p style="color: white;opacity: 0.8">
      You hereby indemnify us and undertake to keep Shawod indemnified against any losses, damages, costs, liabilities and expenses (including without limitation legal expenses and any amounts paid by Shawod to a third party in settlement of a claim or dispute on the advice of our legal advisers) incurred or suffered by Shawod arising out of any breach by you of any provision of these terms and conditions.
      </p>
      <h3 style="color: white" align="center"><b><u>  Breaches of these terms and conditions </u></b></h3><p style="color: white;opacity: 0.8">
      Without prejudice to Shawod's other rights under these terms and conditions, if you breach these terms and conditions in any way, we may take such action as Shawod deems appropriate to deal with the breach, including suspending your access to the website, prohibiting you from accessing the website, blocking computers using your IP address from accessing the website, contacting your internet service provider to request that they block your access to the website and/or bringing court proceedings against you.
      </p>
      <h3 style="color: white" align="center"><b><u>Variation</u></b></h3>
      <p style="color: white;opacity: 0.8">
      Shawod may revise these terms and conditions from time-to-time.  Revised terms and conditions will apply to the use of this website from the date of the publication of the revised terms and conditions on this website.  Please check this page regularly to ensure you are familiar with the current version.
      Terms and conditions are subject to change without notice.
      </p>
      <h3 style="color: white" align="center"><b><u> Assignment</u></b></h3>
      <p style="color: white;opacity: 0.8" align="center">
      We may transfer, sub-contract or otherwise deal with Shawod rights and/or obligations under these terms and conditions without notifying you or obtaining your consent.
      You may not transfer, sub-contract or otherwise deal with your rights and/or obligations under these terms and conditions.
      </p>
      <h3 style="color: white" align="center"><b><u> Server ability </u></b></h3>
      <p style="color: white;opacity: 0.8" align="center">
      If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect.  If any unlawful and/or unenforceable provision would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect.
      </p>
      <h3 style="color: white" align="center"><b><u>Entire agreement</u></b></h3>
      <p style="color: white;opacity: 0.8">
      These terms and conditions , together with privacy policy and disclaimer, constitute the entire agreement between you and Shawod in relation to your use of this website, and supersede all previous agreements in respect of your use of this website.
      </p>
      <p style="color: white;opacity: 0.8" align="center">
      You can contact Shawod by email to info@shawod.co.za
      </p>

  </div>
<?php require '../footer/footer.php' ?>
</div>
</body>
</html>