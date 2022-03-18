<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Configure package | Shawod</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/style1.css" rel="stylesheet">
    <style type="text/css">.pricing-palden .pricing-item {color: #fff;background: #33ccff;}.pricing-palden .pricing-price {font-size: 4em;color: #33ccff;
    } .pricing-palden .pricing-action {color: #fff;border-radius: 30px;border: 2px solid #fff;background: #33ccff;}.pricing-palden .pricing-deco {background: #fff;}
    .pricing-palden .pricing-title {color: #33ccff;} .pricing-palden .pricing-action:hover {box-shadow: inset 0 -2.25em 0 0 var(--hover);transition: 0.55s;}
.pricing-action {--hover: #fff;}</style>

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
        <script src="js/scroll.js"></script>


    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139717438-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139717438-1');
</script>
<style>
.whatsapp-ico{
    fill: white;
    width: 50px;
    height: 50px;
    padding: 3px;
    background-color: #4dc247;
    border-radius: 50%;
    box-shadow: 2px 2px 6px rgba(0,0,0,0.4);
    /* box-shadow: 2px 2px 11px rgba(0,0,0,0.7); */
    position: fixed;
    bottom: 20px;
    left : 20px;
    z-index: 10;
}

.whatsapp-ico:hover{
    box-shadow: 2px 2px 11px rgba(0,0,0,0.7);
}
</style>
</head><!--/head--><!--



 
    


███████╗██╗  ██╗ █████╗ ██╗    ██╗ ██████╗ ██████╗ 
██╔════╝██║  ██║██╔══██╗██║    ██║██╔═══██╗██╔══██╗
███████╗███████║███████║██║ █╗ ██║██║   ██║██║  ██║
╚════██║██╔══██║██╔══██║██║███╗██║██║   ██║██║  ██║
███████║██║  ██║██║  ██║╚███╔███╔╝╚██████╔╝██████╔╝
╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚══╝╚══╝  ╚═════╝ ╚═════╝ 
                                                   





--><script>
    function _(x) {return document.getElementById(x)}
    window.addEventListener("load" , function () {
        if(localStorage.type=='website'){
            localStorage.clear();
        }
        if(localStorage.package == null && localStorage.benefit1 == null && localStorage.benefit2 == null && localStorage.benefit3 == null && localStorage.prc==null){
            window.location="/"
        }else{
            _("p_name").innerHTML=localStorage.package
            _("pack").innerHTML=localStorage.package
           // _("title").innerHTML=localStorage.package+ " | Shawod"
            _("b1").innerHTML="&nbsp;"+localStorage.benefit1+"&nbsp;&nbsp;&nbsp;"
            _("b2").innerHTML="&nbsp;"+localStorage.benefit2+"&nbsp;&nbsp;&nbsp;"
            _("b3").innerHTML="&nbsp;"+localStorage.benefit3+"&nbsp;&nbsp;&nbsp;"
            _("d1").innerHTML=localStorage.benefit1
            _("d2").innerHTML=localStorage.benefit2
            _("d3").innerHTML=localStorage.benefit3
            _("benefit1").innerHTML=localStorage.benefit1
            _("benefit2").innerHTML=localStorage.benefit2
            _("benefit3").innerHTML=localStorage.benefit3
           _("benefit4").innerHTML=localStorage.benefit4
            if(localStorage.benefit5 !=''){ var b5='<li class="wow fadeInUp animated" data-wow-duration="500ms" ' +
                'data-wow-delay="500ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms;' +
                ' animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit5+'</li>'}else{var b5="";}
            _("d5").innerHTML=b5;
            if(localStorage.benefit6 !=''){ var b6=' <li class="wow fadeInUp animated" data-wow-duration="400ms" ' +
                'data-wow-delay="500ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 400ms;' +
                ' animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit6+'</li>'}else{var b6="";}
            _("d6").innerHTML=b6;
            if(localStorage.benefit7 !=''){ var b7='<li class="wow fadeInUp animated" data-wow-duration="300ms" ' +
                'data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms;' +
                ' animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit7+'</li>'}else{var b7="";}
            _("d7").innerHTML=b7;
            if(localStorage.benefit8 !=''){ var b8='<li class="wow fadeInUp animated" data-wow-duration="300ms" ' +
                'data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms; ' +
                'animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit8+'</li>'}else{var b8="";}
           _("d8").innerHTML=b8;
            if(localStorage.benefit9 !=''){ var b9='   <li class="wow fadeInUp animated" data-wow-duration="300ms" ' +
                'data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms; ' +
                'animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit9+'</li>'}else{var b9="";}
            _("d9").innerHTML=b9;
            _("prc").innerHTML=parseFloat(localStorage.prc).toFixed(2)+" !"
            _("Pimage").src = localStorage.image
            _("order").innerHTML="R"+parseFloat(localStorage.prc).toFixed(2)+" !";
           _("discount").innerHTML="R "+parseFloat(parseFloat(localStorage.prc).toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
            localStorage.setItem("discounts",parseFloat(localStorage.prc).toFixed(2)/100*50);
            localStorage.setItem("total_p",parseFloat(localStorage.prc).toFixed(2));
            localStorage.setItem("feature",localStorage.package);
         //   _("status").innerHTML=localStorage.status;
        }
    },false)

</script><style>.fa-question-circle{
    cursor: pointer;
}</style><body>
<div id="modal-container">
    <div class="modal-background">
        <div class="modal">
            <h2 id="itemHeader"></h2>
            <p id="itemDescription"></p>
        </div>
    </div>
</div>

<div id='easy-top'></div>
	<header id="header">      
         <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <span class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        
<svg class="ham ham3" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
  <path class="line top" d="m 70,33 h -40 c -11.092231,0 11.883874,13.496726 -3.420361,12.956839 -0.962502,-2.089471 -2.222071,-3.282996 -4.545687,-3.282996 -2.323616,0 -5.113897,2.622752 -5.113897,7.071068 0,4.448316 2.080609,7.007933 5.555839,7.007933 2.401943,0 2.96769,-1.283974 4.166879,-3.282995 2.209342,0.273823 4.031294,1.642466 5.857227,-0.252538 v -13.005715 16.288404 h 7.653568"></path>
  <path class="line middle" d="m 70,50 h -40 c -5.6862,0 -8.534259,5.373483 -8.534259,11.551069 0,7.187738 3.499166,10.922274 13.131984,10.922274 11.021777,0 7.022787,-15.773343 15.531095,-15.773343 3.268142,0 5.177031,-2.159429 5.177031,-6.7 0,-4.540571 -1.766442,-7.33533 -5.087851,-7.326157 -3.321409,0.0092 -5.771288,2.789632 -5.771288,7.326157 0,4.536525 2.478983,6.805271 5.771288,6.7"></path>
  <path class="line bottom" d="m 70,67 h -40 c 0,0 -3.680675,0.737051 -3.660714,-3.517857 0.02541,-5.415597 3.391687,-10.357143 10.982142,-10.357143 4.048418,0 17.88928,0.178572 23.482143,0.178572 0,2.563604 2.451177,3.403635 4.642857,3.392857 2.19168,-0.01078 4.373905,-1.369814 4.375,-3.392857 0.0011,-2.023043 -1.924401,-2.589191 -4.553571,-4.107143 -2.62917,-1.517952 -4.196429,-1.799562 -4.196429,-3.660714 0,-1.861153 2.442181,-3.118811 4.196429,-3.035715 1.754248,0.0831 4.375,0.890841 4.375,3.125 2.628634,0 6.160714,0.267857 6.160714,0.267857 l -0.178571,-2.946428 10.178571,0 -10.178571,0 v 6.696428 l 8.928571,0 -8.928571,0 v 7.142858 l 10.178571,0 -10.178571,0"></path>
</svg>                    </span>

                    <a class="navbar-brand" href="index.php">
                        <h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="/" class="bttn bttn-2">Home</a></li>
                        <li><a href="websites" class="bttn bttn-2">Websites</a></li>
                        <li><a href="packages" class="bttn bttn-2">Packages</a></li>
                        <li><a href="portfolio" class="bttn bttn-2">Portfolio</a></li>
                        <li><a href="aboutus" class="bttn bttn-2">About us</a></li>
                        <li class="dropdown"><a href="#">Services <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="seo">S.E.O</a></li>
                                <li><a href="hosting">Hosting</a></li>
                                <li><a href="domain">Domains</a></li>
                              </ul>
                        </li> 
                        <li> <a href="games/index.html" class="bttn bttn-2">Games</a></li>                        
                                        
                    </ul>
                </div>

            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Packages</h1>
                            <p>Configure your package. &nbsp; <i class="fa fa-cart-plus" ></i></p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

<br><br><div class="container">
     <section id="clients">
        
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1>You're almost done</h1>
                        <p> Gather everything you need and see how much it costs, or proceed to checkout.</p>
                    </div>
                </div>
            </div>
        
     </section>
 </div>


    <div class="container">
                <div class="col-sm-6">
                    <div class="wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInRight;">
                    
<div class='pricing pricing-palden'>
<div class='pricing-item pricing__item--featured'>
      <div class='pricing-deco'> <div class="angazi"><img id="Pimage" src=""  alt=""></div>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;   c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#33ccff' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#33ccff' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#33ccff' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;   c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#33ccff'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>R</span>
            <span id="prc"></span>
        </div>
        <h3 class='pricing-title' id="p_name"></h3>
      </div> 
      <ul class='pricing-feature-list'>
        <li class='pricing-feature' id="d1"></li>
        <li class='pricing-feature' id="d2"></li>
        <li class='pricing-feature' id="d3"></li>
      </ul>
      <button class='pricing-action'>CHOSEN</button>
    </div>
</div>


</div> 
</div>
<div class="row">

                <div class="col-sm-6">
                      <div class="skills overflow">
                        <h2  style="margin-bottom: 25px;" id="pack"></h2>
                        <ul class="nav navbar-nav navbar-default" style="color: #33ccff;">
                            <li><i class="fa fa-check-square"></i><span id="b1"></span></li>&nbsp;&nbsp;
                            <li><i class="fa fa-check-square"></i><span id="b2"></span></li>&nbsp;
                            <li><i class="fa fa-check-square">&nbsp;</i><span id="b3"></span></li>
                        </ul>
                    </div><br>

               <div class="skills overflow">
                        <h3 style="margin-bottom: 25px;">Preloaded items</h3>
                        <ul class="elements">
                        <li class="wow fadeInUp animated" data-wow-duration="900ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;">
                            <i class="fa fa-angle-right"></i><span id="benefit1"></span></li>
                        <li class="wow fadeInUp animated" data-wow-duration="800ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 200ms; animation-name: fadeInUp;">
                            <i class="fa fa-angle-right"></i><span id="benefit2"></span></li>
                        <li class="wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <i class="fa fa-angle-right"></i><span id="benefit3"></span></li>
                        <li class="wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 400ms; animation-name: fadeInUp;">
                            <i class="fa fa-angle-right"></i><span id="benefit4"></span></li>
                        <span id="d5"></span>
                        <span id="d6"></span>
                        <span id="d7"></span>
                        <span id="d8"></span>
                        <span id="d9"></span>
                    </ul>
                    </div>
                    <div class="live-preview">
                        <a href="Packages.html" class="btn btn-common uppercase">Change</a>
                    </div>
                </div>
            </div>


<div class="clients text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <h1 class="title"> Configure your package </h1>
                        <p>Select any of these optional items. For clarity  press the question <i class="fa fa-question-circle button" id="five" onclick="popUp('question')"></i> icon, item will be explained.</p>
                    </div>

        <div style="float: left">
<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span1" onclick="sub_page()" style="color: #ff4444; visibility: hidden; font-size: 18px"></i><span id="count1"></span>
        <i onclick="add_page()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="state"><b>Web page</b> (R125.00 for each additional page)</span>
        <i class="fa fa-question-circle button" id="five" onclick="popUp('webpage')" ></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square" id="span2" onclick="sub_form()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count2"></span>
        <i onclick="add_form()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="form"><b>Form</b> (R99.99 for each additional page)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('form')"></i>
    </span>
</p>


<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square" id="span3" onclick="sub_gallery()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count3"></span>
        <i onclick="add_gallery()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="photo"><b>Photo Gallery</b> (R125.00 for each additional page)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('gallery')"></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square" id="span4" onclick="sub_cms()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count4"></span>
        <i onclick="add_cms()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="cms"><b>Content Management System</b> (R199.50 for each additional page)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('content')" ></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square" id="span5" onclick="sub_logo()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count5"></span>
        <i onclick="add_logo()" class="fa fa-plus-square" id="lg" style="font-size: 18px"></i>
        <span id="logo"><b>Logo Design</b> (R650.00)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('logo')" ></i>
    </span>
</p>


<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square" id="span7" onclick="sub_ssl()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count6"></span>
        <i onclick="add_ssl()" id="myssl" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="ssls"><b>SSL/TLS Certificate</b> (R1300.00 p/a)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('ssl')" ></i>
    </span>
</p>


<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square" id="span8" onclick="sub_protected()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count7"></span>
        <i onclick="add_protected()" id="pr" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="protect"><b>Privacy protection</b> (R349.99 first year , R699.99 renewal p/a)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('protection')" ></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square" id="span9" onclick="sub_domain()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count8"></span>
        <i onclick="add_domain()" id="dmn" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="domains"><b>Domain Infor. Locker</b> (R200.00 p/a)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('domain')" ></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square" id="span10" onclick="sub_chat()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count9"></span>
        <i onclick="add_chat()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="basic"><b>Basic Chat Zone</b> (R800.00)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('chat')" ></i>
    </span>
</p>


<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square" id="span11" onclick="sub_email()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count10"></span>
        <i onclick="add_email()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="mail"><b>Webmail Account</b> (R50.00)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('webmail')" ></i>
    </span>
</p>
        </div>

        <div style="float: right;  margin-right: 40px;">
<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span12" onclick="sub_hoste()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count11"></span>
        <i onclick="add_hoste()" class="fa fa-plus-square" id="spane" style="font-size: 18px"></i>
        <span id="e_host"><b>Economy Hosting</b> (Free first month , R49.99 renewal p/m)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('economy')" ></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span13" onclick="sub_hostp()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count12"></span>
        <i onclick="add_hostp()" class="fa fa-plus-square" id="spanp" style="font-size: 18px"></i>
        <span id="d_host"><b>Duluxe Hosting</b> (30% off first month , R79.99 renewal p/m)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('duluxe')" ></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span14" onclick="sub_hostg()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count13"></span>
        <i onclick="add_hostg()"  id="spang" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="p_host"><b>Premium Hosting</b> (35% off first month , R119.99 renewal p/m)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('premium')" ></i>
    </span>
</p>
            <br>
<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span15" onclick="sub_designg()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count14"></span>
        <i onclick="add_designg()" id="spangg" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="g_design"><b>General Design</b> (R49.89)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('gDesign')" ></i>
    </span>
</p>
<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span16" onclick="sub_designpr()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count15"></span>
        <i onclick="add_designpr()" id="spanpr" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="p_design"><b>Premium Design</b> (R69.95)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('PDesign')" ></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span17" onclick="sub_designc()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count16"></span>
        <i onclick="add_designc()" id="spanc" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="c_design"><b>Custom Design</b> (R99.99 )</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('cDesign')" ></i>
    </span>
</p>
<br>
<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span18" onclick="sub_seog()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count17"></span>
        <i onclick="add_seog()" id="seog" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="g_seo"><b>Premium S.E.O</b> (R599.99 p/a)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('pSEO')" ></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span19" onclick="sub_seop()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count18"></span>
        <i onclick="add_seop()" id="seop" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="p_seo"><b>Professional S.E.O</b> (R999.99 p/a)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('proSEO')" ></i>
    </span>
</p>

<p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square"  id="span20" onclick="sub_seoc()" style="visibility: hidden;color: #ff4444; font-size: 18px"></i><span id="count19"></span>
        <i onclick="add_seoc()" id="seoc" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="c_seo"><b>Ultimate S.E.O</b> (R1499.99 p/a)</span>
         <i class="fa fa-question-circle button" id="five" onclick="popUp('uSEO')" ></i>
    </span>
</p>

        </div>

    </div>
<!--<div class="modal fade" id="myModal" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>-->

<br><br>

 <div class="container">
  <div class="clients text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <h2>The following items are available upon request</h2>
                        <ul style="color: #33ccff; padding-right: 15px;">
                            <li>Shopping Cart &nbsp;&nbsp;&nbsp;
                            Multimedia Library&nbsp;&nbsp;&nbsp;
                            Registration Form &nbsp;&nbsp;&nbsp;
                          Payment Getway </li>
                        </ul>
                    </div>
  
   <div class="tbl-header" id="t_div">
    <table  cellpadding="0" id="table" cellspacing="0" border="0">
    </table>
  </div>
     <div class="tbl-content" id="classTable" style="display: none;">
         <table cellpadding="0" cellspacing="0" border="0">
             <tbody id="bodyTable"></tbody>
         </table>
     </div>

</div>

<div class="container">
<div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
   
   <h2><b>Total Cost</b> = <span id="order"></span></h2>
   <p id="discount" style="margin: 0px;"></p>

</div>
</div>

<p align="center" id="coupon_error" style="color: red; font-size: 17px; margin: 0px; "></p>
<div style=" width: 360px; margin: 0px auto" align="center">
  <input type="search" name="q" style="margin: 0px; left:6%;" onkeyup="btn_change()" id="couponId" class="search-text"  placeholder="Enter coupon" autocomplete="off">
  <button id="apply" style="float: right; outline: none; background: #33ccff; color: white; margin-right: 0%" onclick="return false" onmousedown="coupon('couponId')" class="btn btn-common uppercase">Apply</button>
</div>

<div class="container">
     <section id="clients">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1> Finally submit your order </h1>
                  <!--      <p>
Double check if you have everything you need. If not, don't stress you'll add more on clients portal.
</p>-->
                    </div>
                </div>
            </div>
     </section>
 </div>


<div class='container' style=" margin-top: -5%">
    <div class='panel panel-primary dialog-panel' style="border-color: #33ccff;">
        <div class='panel-heading' style="background-color:#33ccff;border-color: #33ccff">
            <h5 align="center">Double check to see if you have everything you need. If not, don't stress you'll add more on clients portal.</h5>
        </div>
        <div class='panel-body' >
            <form class='form-horizontal' role='form'>
                <div class='form-group'>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
                    <div class='col-md-8'>
                        <span style="color: red; margin-left: 22%" id="error_n"></span><br>
                        <div class='col-md-2'>
                            <div class='form-group internal'>
                                <select class='form-control' id='id_title'>
                                    <option>Mr</option>
                                    <option>Ms</option>
                                    <option>Mrs</option>
                                    <option>Miss</option>
                                    <option>Dr</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md-3 indent-small'>
                            <div class='form-group internal'>
                                <input class='form-control' id='id_first_name' onblur="name_out('id_first_name','error_n')" placeholder='First Name' type='text'>
                            </div>
                        </div>
                        <div class='col-md-3 indent-small'>
                            <div class='form-group internal'>
                                <input class='form-control' id='id_last_name' onblur="name_last('id_last_name','error_n')" placeholder='Last Name' type='text'>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='form-group'>
                    <span style="color: red; margin-left:35%" id="error_email"></span><br>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <div class='col-md-11'>
                                <input class='form-control' id='id_email' onblur="email('id_email','error_email')" placeholder='E-mail' type='text'>
                            </div>
                        </div>
                        <span style="color: red; margin-left:1%" id="error_phone"></span><br>
                        <div class='form-group internal'>
                            <div class='col-md-11'>
                                <input class='form-control' id='id_phone' onblur="contacts('id_phone','error_phone')" placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='form-group'>
                    <span style="color: red; margin-left:35%" id="error_coment"></span><br>
                    <label class='control-label col-md-2 col-md-offset-2'  for='id_comments'>About your project</label>
                    <div class='col-md-6'>
                        <textarea class='form-control' id='id_comments' onblur="website('id_comments','error_coment')" placeholder='Additional requirements' rows='5'></textarea>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-md-offset-4 col-md-3'>
                        <div class="loading-dock">
                            <svg id="load-b" x="0px" y="0px" viewBox="0 0 150 150">
                                <circle class="loading-inner" cx="75" cy="75" r="60"/>
                            </svg>
                            <svg id="load" x="0px" y="0px" viewBox="0 0 150 150">
                                <circle class="loading-inner" cx="75" cy="75" r="60"/>
                            </svg>
                            <button class="submit" id="submitbtn" style="float: left" onclick="return false" onmousedown="send_data('id_first_name','id_last_name','id_email','id_phone','id_comments')">Submit order</button>

                            <svg id="check" style="width:24px;height:24px" viewBox="0 0 24 24">
                            </svg>

                        </div>
                    </div>

                </div>
            </form>
            <p id="success" style="margin: 0px;color:#33ccff;font-size: 18px; display: none" align="center">Your order was successful submitted ! check you email address </p>
        </div>
    </div>

    <div class='form hidden'>
        <div class='face' style="width: 15%">
            <svg viewbox='-10 -10 620 620'>
                <g id='face' stroke-width='20' stroke='#4d4d4d'>
                    <circle cx='300' cy='300' r='300'></circle>
                </g>
                <path d='M100,350 Q300,450 500,350 Q300,550 100,350 z' fill='white' id='mouth' stroke-linejoin='round' stroke-width='20' stroke='#4d4d4d'></path>
                <g fill='#4d4d4d'>
                    <!-- /%circle{cx: "300", cy: "200", r: "30"} -->
                    <!-- /%circle{cx: "500", cy: "200", r: "30"} -->
                    <path class='eye--left' d='M285 200 a 30 30 0 1 0 -1 0 z' fill='#4d4d4d' stroke-linejoin='round' stroke-width='20' stroke='#4d4d4d'></path>
                    <path class='eye--right' d='M515 200 a 30 30 0 1 0 -1 0 z' fill='#4d4d4d' stroke-linejoin='round' stroke-width='20' stroke='#4d4d4d'></path>
                </g>
            </svg>
        </div>
        <h3 class='heading' align="center">How do you feel about our customer service?</h3>
        <div  class='sliding-list'>
            <ul id='list'>
                <li>Absolutely Terrible!</li>
                <li>Disappointing</li>
                <li>Quite Bad hey</li>
                <li>Not impressed</li>
                <li>Nothing to be proud of</li>
                <li>Could have been better</li>
                <li>Ok, I guess</li>
                <li>Satisfactory</li>
                <li>Was Great</li>
                <li>Super Impressed!</li>
            </ul>
        </div>
        <input class='slider' max='99' min='0' id="slider" style="margin: 0px auto" align="center" oninput='updateSlider(value)' type='range' value='80'>
    </div>

     <p align="center" id="rateSuccess">Thank you for rating us</p>
    <div class='form-group' id="ratebtn">
        <div class='col-md-offset-0'>
            <button class='btn-lg btn-primary' id="btn_submit" style="background: #33ccff" onclick="send_feedback()">Send feedback</button>
        </div>
    </div>



</div>


<!--Waves Container-->

     
<br>
<a target="_blank" href="https://api.whatsapp.com/send?phone=0630142446&text=Hello%21%20Shawod,%20 Let's talk business"><svg viewBox="0 0 32 32" class="whatsapp-ico"><path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path></svg></a>

    <!--/#team-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>

                <!-- style="text-align: center;" -->

                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom" >
                        <h2>Resources</h2>
                              <div class="media">
                                <h3 class="wow fadeInUp animated" data-wow-duration="900ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><a href="createawebsite"> How to create a website</a></h3>
                                <h3 class="wow fadeInUp animated" data-wow-duration="800ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><a href="contactus"> Contact us</a></h3>
                                <h3 class="wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><a href="faq"> FAQ</a></h3>
                                <h3 class="wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><a href="blog"> Blog</a></h3>
                                <h3 class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><a href="howitworks"> How it works</a></h3>
                                <h3 class="wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><a href="privacy"> Privacy policy</a></h3>
                                <h3 class="wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="700ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><a href="terms"> Term &amp; Conditions</a></h3>
                            </div>    
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Find us on</h2>
                        <div class="fsocial wow pulse" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <a href="https://www.facebook.com/shawodza" target="_blank"><img src="images/home/profile1.png" alt="Facebook"></a>
                        </div>
                        <div class="msocial wow tada" data-wow-duration="1000ms" data-wow-delay="600ms"> 
                        <a href="https://twitter.com/ShawodWeb" target="_blank"><img src="images/home/profile2.png" alt="Twitter"></a>
                        </div>
                        <h3><a href="./portal/index.php">Clients Portal</a></h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                        <div class="contact-form bottom">
                            <h2>Send us a message</h2>
                            <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your message here"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="#e4f5fc" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="#bfe8f9" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="#9fd8ef" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#33ccff" />
</g>
</svg>
</div>
<div class="vala flex">
<p> &copy; 2020 Shawod (pty) ltd. All Rights Reserved.<br>
Other trademarks belong to their respective owners</p>

</div>
    </footer>

    <!--/#footer-->
    <script src="js/contactus.js"></script>
    <script src="js/add_more.js"></script>
    <script type="text/javascript" src="js/1script.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src='js/jquery.min.js'></script>
    <script src="js/script2.js"></script>
    <script src='js/easing.js'></script>
    <script src="js/script.js"></script>
    <script src="js/popupItems.js"></script>
    <script src="js/script1.js"></script>
    <script src="js/datgui.js"></script>
    <script src="js/form_validation.js"></script>

    </body>
</html>
