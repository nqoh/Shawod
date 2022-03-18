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

    header('Location: https://mobi.shawod.co.za/packages/started');
    exit();
}
else if ($mobile_browser > 0) {
    // do something for mobile devices

    header('Location: https://m.shawod.co.za/packages/started');
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
    <title id="title">Started | Shawod</title>
</head>
<!-- x_small -->
<!--<link rel="stylesheet" href="css/x_small.css" type="text/css" media="screen and (min-width: 0px)">
<!-- small -->

<!--x_large -->
<link rel="stylesheet" href="../css/x_large.css" type="text/css" >
<link rel="icon" type="image/ico" href="../../thumbnails/favd.png">
<script>
    function _(x) {return document.getElementById(x)}
    window.addEventListener("load" , function () {
        if(localStorage.type=='website'){
            localStorage.clear();
        }
        if(localStorage.package == null && localStorage.benefit1 == null && localStorage.benefit2 == null && localStorage.benefit3 == null && localStorage.prc==null){
            window.location="../"
        }else{
            _("p_name").innerHTML=localStorage.package
            _("pack").innerHTML=localStorage.package
            _("title").innerHTML=localStorage.package+ " | Shawod"
            _("b1").innerHTML=localStorage.benefit1
            _("b2").innerHTML=localStorage.benefit2
            _("b3").innerHTML=localStorage.benefit3
			_("d1").innerHTML='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit1
            _("d2").innerHTML='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit2
            _("d3").innerHTML='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit3
			_("d4").innerHTML='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit4
            if(localStorage.benefit5 !=''){ var b5='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit5}else{var b5="";}
			 _("d5").innerHTML=b5;
			 if(localStorage.benefit6 !=''){ var b6='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit6}else{var b6="";}
			_("d6").innerHTML=b6;
			 if(localStorage.benefit7 !=''){ var b7='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit7}else{var b7="";}
			_("d7").innerHTML=b7;
			 if(localStorage.benefit8 !=''){ var b8='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit8}else{var b8="";}
			_("d8").innerHTML=b8;
            if(localStorage.benefit9 !=''){ var b9='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit9}else{var b9="";}
            _("d9").innerHTML=b9;
            _("prc").innerHTML="R"+parseFloat(localStorage.prc).toFixed(2)+" !"
            _("image").src="../"+localStorage.image
            _("order").innerHTML=localStorage.package+" = "+"R"+localStorage.prc+" !";
            _("discount").innerHTML="R "+parseFloat(localStorage.prc).toFixed(2)/100*50+" (50%) non-refundable deposit after content approval";
			localStorage.setItem("discounts",parseFloat(localStorage.prc).toFixed(2)/100*50);
			localStorage.setItem("total_p",parseFloat(localStorage.prc).toFixed(2));
			localStorage.setItem("feature",localStorage.package);
			_("status").innerHTML=localStorage.status;
        }
    },false)

</script>
<script src="../js/normal.js"></script>
<script src="../js/add_more.js"></script>
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


<div id="overlay" >
    <div class="box_over">
        <div class="f_over1">
            Alert Message Box
        </div>
        <div class="f_over2" id="texts">

        </div>
        <div class="f_over3">
          <!--  <button id="btn" onclick="canceling()" style="float: right; margin-right: 8px; margin-top: 12px; border: 1px solid rgb(51,204,255) ">Cancel</button>
            --><button id="btn" class='del_btn' onclick="ok()" style="float: right; color: white; margin-right: 8px; padding-bottom: 2px; font-weight: bold; margin-top: 12px;border: 1px solid rgb(51,204,255)">OK</button>
        </div>
    </div>
</div>



<div class="log">
    <a href="../../home"><img src="../thumbnails/logog.png"></a>
</div>

<div class="navs">
    <ul>
        <li>
            <a href="../../home" style=" opacity:1"> Home </a>

        </li>

        <div class="dv"></div>
        <li><a href="../../website" style=" margin-left:-20%" >Website</a></li>

        <div class="dv" ></div>
        <li id="pg"><a href="../../packages" style="color: rgb(140,140,140);margin-left:-30%"> Packages</a>
        </li>
        <div class="dv" ></div>
        <li><a href="../../portfolio" style="margin-left: -15px"  >Portfolio</a></li>

        <div id="bt_hold" onclick="opn()">
            <div id="bt1"></div>
            <div ></div>
            <div></div>
        </div>

        </li>
        <div id="pg_dv" class="dv"></div>
        <li id="sv" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')"><a style="cursor: pointer"> Services</a></li>

    </ul> <div id="service_div" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">
        <a style="text-decoration:none;color:none" href="../seo"><div  id="seo" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">S.E.O</div></a>
        <a href="../../domain" style="text-decoration:none;"><div id="server" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Domain</div></a>
        <a href="../../hosting" style="text-decoration:none;"><div  id="qoute" onmouseover="sub_link('service_div')" onmouseout="sub_out('service_div')">Hosting</div></a>
    </div>
</div><br><br><br>

<div  align="center" class="h_intro">
    <div align="center" class="intro_div">
        <span style="color: rgb(102,204,255)">Getting Started !</span>
    </div>
</div>

<p class="pack_name"><b><u id="p_name"></u></b></p>

<p id="status">

</p>

<div style="width:auto; margin-left:50px; height:auto; float:left;margin-top:0px; position:absolute">
           <span class="silver_benefit" ><span id="d1" ></span></span><br><br>
           <span class="silver_benefit" ><span id="d2"></span></span><br><br>
           <span class="silver_benefit" ><span id="d3"></span></span><br><br>
           <span class="silver_benefit" ><span id="d4"></span></span><br><br>
           
           <span class="silver_benefit" ><span id="d5"></span></span><br><br>
           <span class="silver_benefit" ><span id="d6"></span></span><br><br>
            <span class="silver_benefit" ><span id="d7"></span></span><br><br>
           <span class="silver_benefit" ><span id="d8"></span></span><br><br>
           <span class="silver_benefit" ><span id="d9"></span></span><br><br>

           
 </div><br><br>
<!-- <div style="width:250px; height:200px; float:left; margin-left:300px; border:1px solid blue; position:absolute">          
           <span class="silver_benefit" ><span id="d5">g</span></span><br><br>
           <span class="silver_benefit" ><span id="d6">d</span></span><br><br>
            <span class="silver_benefit" ><span id="d7">f</span></span><br><br>
           <span class="silver_benefit" ><span id="d8">tr</span></span><br><br>
          
</div> -->
<div class="box_pack">

    <div  class="silver_box">
        <img src="" id="image" class="silver_img">
        <div class="silver_txt" id="pack">
        </div>

        <div class="silver_text">
            <span class="silver_benefit" ><b>*</b><span id="b1"></span></span><br><br>
            <span class="silver_benefit" ><b>*</b><span id="b2"></span></span><br><br>
            <span class="silver_benefit" ><b>*</b><span id="b3"></span></span><br><br>

            <span class="silver_p" id="prc"></span><br><br>

            <div class="choose_btn">
                <span style="color: rgb(255,255,255);"> <b>Choose</b></span>
            </div>

        </div>

    </div>

</div ><br><br><br><br><br>

<p class="add_status" align="center"><b><u>You can add the following items or skip to proceed</u></b></p>

<p style="color: white; margin-left: 100px; font-size: 18px"><u>To learn more about these items please go to <a href="../../items" class="alink">items explained</a>, make you get all you need to avoid complications.</u></p>
<p id="list">
    <span id="span1" onclick="sub_page()" class="span"><b>-</b></span>
    <span style="color:rgb(51,204,255); cursor: pointer" onclick="add_page()">+</span>
    <span id="state"> Page (R125.00 for each additional page)</span>
</p>

<p id="list">
    <span id="span2" onclick="sub_form()" class="span"><b>-</b></span>
    <span style="color:rgb(51,204,255); cursor: pointer" onclick="add_form()">+</span>
    <span id="form"> Form (R99.99 for each additional page) </span>
</p>

<p id="list">
    <span id="span3" class="span" onclick="sub_gallery()" ><b>-</b></span>
    <span style="color:rgb(51,204,255);cursor: pointer"  onclick="add_gallery()">+</span>
    <span id="photo"> Photo Gallery (R125.00 for each additional page)</span>
</p>

<p id="list">
    <span id="span4" class="span" onclick="sub_cms()" style="display: none"><b>-</b></span>
    <span style="color:rgb(51,204,255); cursor: pointer"  onclick="add_cms()">+</span>
    <span id="cms"> Content Management System (R199.50 for each additional page)</span>
</p>

<p id="list">
    <span id="span5" class="span" onclick="sub_logo()"><b>-</b></span>
    <span onclick="add_logo()" style="color:rgb(51,204,255); cursor: pointer; float: left; margin-right: 5px" id="lg">+</span>
    <span id="logo">Logo Design (R650.00)</span>
</p>

<!--
<p id="list">
    <span id="span6" class="span" onclick="sub_seo()"><b>-</b></span>
    <span onclick="add_seo()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="search">+</span>
    <span id="seos" >Search Engine Optimization (R999.99 p/a)</span>
</p>

-->
<p id="list">
    <span id="span7" class="span" onclick="sub_ssl()"><b>-</b></span>
    <span onclick="add_ssl()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="myssl" >+</span>
    <span id="ssls" >S S L Certificate (R1300.00 p/a) </span>
</p>

<p id="list">
    <span id="span8" class="span" onclick="sub_protected()"><b>-</b></span>
    <span onclick="add_protected()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="pr" >+</span>
    <span id="protect" > Protected Protection (R349.99 first year , R699.99 renewal p/a) </span>
</p>


<p id="list">
    <span id="span9" class="span" onclick="sub_domain()"><b>-</b></span>
    <span onclick="add_domain()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="dmn">+</span>
    <span id="domains" > Domain Infor.Locker (R200.00 p/a) </span>
</p>

<p id="list">
    <span id="span10" class="span" onclick="sub_chat()"><b>-</b></span>
    <span onclick="add_chat()" style="color:rgb(51,204,255); cursor: pointer" >+</span>
    <span id="basic" > Basic Chat Zone (R800.00) </span>
</p>

<p id="list">
    <span id="span11" class="span" onclick="sub_email()"><b>-</b></span>
    <span onclick="add_email()" style="color:rgb(51,204,255); cursor: pointer" >+</span>
    <span id="mail" >  Webmail Account (R50.00) </span>
</p>



<br><br><br><br>

<div style="float: right; margin-top: -530px; margin-right: 40px;">
    <p id="list" style="margin-right: 35px">
        <span id="span12" onclick="sub_hoste()" class="span"><b>-</b></span>
        <span onclick="add_hoste()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="spane" >+</span>
        <span id="e_host" >  Economy Hosting (Free first month , R49.99 renewal p/m) </span>
    </p>

    <p id="list" style="margin-right: 35px">
        <span id="span13"  onclick="sub_hostp()" class="span"><b>-</b></span>
        <span onclick="add_hostp()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="spanp" >+</span>
        <span id="p_host" >  Duluxe Hosting (30% off first month , R79.99 renewal p/m) </span>
    </p>
    <p id="list" style="margin-right: 35px">
        <span id="span14"  onclick="sub_hostg()"class="span" ><b>-</b></span>
        <span onclick="add_hostg()" style="color:rgb(51,204,255); cursor: pointer; float: left; margin-right: 5px" id="spang" >+</span>
        <span id="g_host" >  Premium Hosting (35% off first month , R119.99 renewal p/m) </span>
    </p>



<br>

    <p id="list" style="margin-right: 35px">
        <span id="span15" onclick="sub_designg()" class="span"><b>-</b></span>
        <span onclick="add_designg()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="spangg" >+</span>
        <span id="g_design" >  General Design (R49.89) </span>
    </p>

    <p id="list" style="margin-right: 35px">
        <span id="span16"  onclick="sub_designpr()" class="span"><b>-</b></span>
        <span onclick="add_designpr()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="spanpr" >+</span>
        <span id="p_design" >  Premium Design (R69.95) </span>
    </p>
    <p id="list" style="margin-right: 35px">
        <span id="span17"  onclick="sub_designc()"class="span" ><b>-</b></span>
        <span onclick="add_designc()" style="color:rgb(51,204,255); cursor: pointer; float: left; margin-right: 5px" id="spanc" >+</span>
        <span id="c_design" >  Custom Design (R99.99 ) </span>
    </p>

    <br>

    <p id="list" style="margin-right: 35px">
        <span id="span18" onclick="sub_seog()" class="span"><b>-</b></span>
        <span onclick="add_seog()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="seog" >+</span>
        <span id="g_seo" >  Premium S.E.O (R599.99 p/a) </span>
    </p>

    <p id="list" style="margin-right: 35px">
        <span id="span19"  onclick="sub_seop()" class="span"><b>-</b></span>
        <span onclick="add_seop()" style="color:rgb(51,204,255); cursor: pointer;float: left; margin-right: 5px" id="seop" >+</span>
        <span id="p_seo" >  Professional S.E.O (R999.99 p/a) </span>
    </p>
    <p id="list" style="margin-right: 35px">
        <span id="span20"  onclick="sub_seoc()"class="span" ><b>-</b></span>
        <span onclick="add_seoc()" style="color:rgb(51,204,255); cursor: pointer; float: left; margin-right: 5px" id="seoc" >+</span>
        <span id="c_seo" >  Ultimate S.E.O (R1499.99 p/a) </span>
    </p>

</div>


<p class="add_status" align="center"><b><u>The following items are available upon request</u></b></p>
<div align="center" style="margin-left: 300px;">
<p id="list" style="float: left">
    <span id="state"> Shopping Cart </span>
</p>

<p id="list" style="float: left">
    <span id="form"> Multimedia Library </span>
</p>

<p id="list" style="float: left">
    <span id="photo"> Registration Form </span>
</p>

<p id="list" style="float: left">
    <span id="photo"> Payment Getway </span>
</p>
</div><br><br><br><br>
<p class="add_status" align="center"><b><u>Additional features upon request after consulting</u></b></p>


<p class="assume_date" align="center">
    <span id="order">
    </span>
<div id="t_div">
    <table id="table" border="" align="center" style="margin-top: -15px"></table>

</div>
<p class="assume_date" align="center" style="margin-top: 2px">

    <span id="discount"></span><br>
    <!--<span id="duration">Complete duration 1 to 5 weeks</span> -->
</p>

<div class="form">
<!--    <span class="fill_in">Please fill out simple form and one of expect will get back at you</span><br>-->

    <br><label class="lebel">Name<span style="color:red">*</span></label><span id="name_error"></span><br><br>
    <i class="maleuser" style="margin-left: 20px"></i>
    <input type="text" class="text-field-icon3" id="name"onblur="name_out('name','name_error')" onfocus="mouse_in('name')"><br>

    <br><label class="lebel">E-mail<span style="color:red">*</span></label><span id="email_error"></span><br><br>
    <i class="at" style="margin-left: 20px"></i>
    <input type="text" class="text-field-icon3" id="email" onblur="email('email','email_error')" onfocus="mouse_in('email')" ><br>

    <br><label class="lebel">Contact Number</label><span id="phone_error"></span><br><br>
    <i class="call" style="margin-left: 20px"></i>
    <input type="text" class="text-field-icon3" id="contact" onblur="contacts('contact','phone_error')"  onfocus="mouse_in('contact') "><br>

    <br><label class="lebel">About your website<span style="color:red">*</span></label><span id="describe_error"></span><br><br>

    <div type="text" contenteditable="true" id="textarea" onblur="website('textarea','describe_error')" onfocus="mouse_in('textarea')" ></div>
     <span style="color: red;margin-left: 20px;display:none " id="errorx">Please accept our <a href="../../terms" class="alink">terms and conditions</a> before you proceed</span>

    <input type="checkbox" id="accept" value="terms" style="margin-left: 20px;" checked="true"><span style="color: #e8f1ff" id="ct">Accept our</span> <a href="../../terms" class="alink" id="a">terms and conditions</a>
<br>
    <div class="silver_btn" style="margin-top: 5px"   onclick="send_data('name','email','contact','textarea')" >
        <span style="color: rgb(255,255,255);" > <b>Proceed</b></span>
    </div><br>
    <span id="reference" style="margin-top: 5px"></span>



</div>


<div style="width: 100% ;" >
    <h1 align="center">Resources</h1>

    <a href="../../howitworks" class="resou">How it works</a>
    <span style="float: left; margin-left: 23px; margin-top: 5px;color: rgb(102,204,255)">&#8226;</span>
    <a href="../../createwebsite" class="resou2">How to create website</a>
    <span style="float: left; margin-left: 23px; margin-top: 5px;color: rgb(102,204,255)">&#8226;</span>
    <a href="../../seo" class="resou2">Searching Engine Optimization</a>
    <span style="float: left; margin-left: 23px; margin-top: 5px;color: rgb(102,204,255)">&#8226;</span>
    <a href="../../portalbenefits" class="resou2">Portal Benefits </a>
</div><br><br>


<div class="footer_links" style="width: 100%;height: 80px; background-color: rgb(51,51,51)">

    <div class="link_footer1">
        <a href="../../contactus">Contact us</a><br>
        <a href="../../aboutus">About us</a><br>
        <a href="../../faqs">FAQ's</a>
    </div>


    <img src="../thumbnails/find%20shawot.png" class="likeus" width="80" height="20" border="0" usemap="#four" />

    <map name="four">
        <span style="color: rgb(255,255,255);margin-left:-95px; font-size: 20px">Follow us on</span>
        <area shape="rect"  coords="5,0,26,14" alt="Like Shawod" href="https://www.facebook.com/shawodza">
        <area shape="rect" coords="40,0,72,14" alt="follow Shawod" href="https://twitter.com/ShawodWeb">
    </map>

    <div style="width:50px; height:20px;float:left; padding-left:30px; margin-top:55px; margin-left:-90px;">
        <a href="../../blog" style="color:white; text-align:center; text-decoration:none">Blog</a>

    </div>
    <div  class="link_footer2" style="float: right; text-align: center">
        <a href="../../terms">Terms and Condition</a><br>
        <a href="../../privacy">Privacy policy</a><br>
        <a href="../../disclaimer">Disclaimer</a>
    </div>

</div>

<div class="footer_copy" style="width: 1348px; height: auto; background-color: rgb(102,102,102)">
    <p align="center" style="color:rgb(255,255,255)"> Shawod <b>&copy;</b> <?php echo date('Y'); ?> trademark are registered or unregistered trademark<br>
        of shawod  all right reserved other trademarks belong to their respective owners<br>
    </p>
    <p align="right" style="margin-right: 2% ; margin-top: -1%">Made with Love at Shawod</p>
</div>

</div>
</body>
</html>