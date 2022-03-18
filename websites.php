<?php
include 'connect.php';
$row = mysqli_fetch_assoc(mysqli_query($conn,'select * from coupon '));
$copon = $row['coupon'];
$discount = 100 - $row['percent']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Website development | Shawod</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
  <link href="css/abow.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
  <style type="text/css"> .pricing-palden .pricing-action:hover {box-shadow: inset 0 -2.25em 0 0 var(--hover);transition: 0.55s;}.single-service, .single-service-2, .single-service-3 {margin: 15px 0; margin-right: 50px;}.pricing-action { --hover: #fff;} </style>
<meta name="title" content="Website development | Shawod">
<meta name="description" content="Website development, customize yours now. Let's develop your Online Brand Ambassador.">
<meta name="keywords" content="Durban website design, website packages, africa website, ghana website, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
<meta name="robots" content="index/follow">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://shawod.co.za/website.php">
    <meta property="og:title" content="Website development | Shawod">
    <meta property="og:description" content="Website development, customize yours now. Let's develop your Online Brand Ambassador.">
    <meta property="og:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://shawod.co.za/website.php">
<meta property="twitter:title" content="Website development | Shawod">
<meta property="twitter:description" content="Website development, customize yours now. Let's develop your Online Brand Ambassador.">
<meta property="twitter:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">        
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
    /* box-shadow: 2px 2px 11px rgba(0,0,0,0.7); 
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
                                                   





--><body><script>
    function getpack(pckname,bnfit1,bnfit2,bnfit3,price,img,bnfit4,bnfit5,bnfit6,bnfit7,bnfit8,sts,pg) {
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
        localStorage.setItem("prc",price);
        localStorage.setItem("imagex",img);
        localStorage.setItem("sts",sts);
        localStorage.setItem("type",pg)
        window.location="/getstartedweb"
    }
</script>
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
</svg>

                    </span>

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
                            <h1 class="title">Websites</h1>
                            <p>Select a website. &nbsp; <i class="fa fa-cubes" ></i></p>
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
                        <h1> We are ready to create your <span class="typewrite" style="color:rgb(51,204,255)" data-period="100000" data-type='[ "Awesome website.", "Online Brand Ambassador." ]'></span>
    <span class="wrap"></span>
  </a>
</h1>
                    </div>
                </div>
            </div>
        
     </section>

     <section>
  <div class='pricing pricing-palden'>
    <div class='pricing-item'>
      <div class='pricing-deco'><div class="angazi"><img src="images/home/S-bronze.png" alt=""></div>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;   c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;   c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>R</span>3 750.00
         <!-- <span class='pricing-period'>/ mo</span> -->
        </div>
        <h3 class='pricing-title'>Bronze web</h3>
      </div> 
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>3 Pages</li>
        <li class='pricing-feature'>General Design </li>
        <li class='pricing-feature'>Express Website</li>
      </ul>
      </ul>
        <span class="btn pricing-action" onclick="getpack('Bronze Web','3 Pages','General Design','Express website','3750.00',
            'images/home/S-bronze.png','Basic social media','','','','','With the Bronze package you can be a proud owner of a website quickly on a low budget','website')">
            <CENTER>Configure</CENTER></span>
    </div>
    <div class='pricing-item pricing__item--featured'>
      <div class='pricing-deco'> <div class="angazi"><img src="images/home/S-silver.png" alt=""></div>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;   c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;   c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>R</span>5 800.00
          
        </div>
        <h3 class='pricing-title'>Silver web</h3>
      </div> <div class="angazisp"><img src="images/home/popular12.png" alt="POPULAR"></div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>5 Pages </li>
        <li class='pricing-feature'>1 Contact Form</li>
        <li class='pricing-feature'>Social Media Intergration </li>
      </ul>
      </ul>
        <span class="btn pricing-action" onclick="getpack('Silver Web','5 Pages','1 Contact Form','Social Media Integration',
            '5800.00','images/home/S-silver.png', 'Premium Design','','','','','The Silver package is fully loaded with common features, and is preferred by most of our clients.','website')">
            <CENTER>Configure</CENTER></span>
    </div>
    <div class='pricing-item'>
      <div class='pricing-deco'><div class="angazi"><img src="images/home/S-gold.png" alt=""></div>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;   c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;   c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>R</span>8 950.00
         <!-- <span class='pricing-period'>/ mo</span> -->
        </div>
        <h3 class='pricing-title'>Gold web</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>8 Pages</li>
        <li class='pricing-feature'>2*5 Photo Gallery</li>
        <li class='pricing-feature'>1 C M S</li>
      </ul>
        <span class="btn pricing-action" onclick="getpack('Gold Web','8 Pages','1 Content Management System ','Social Media Integration',
            '8950.00','images/home/S-gold.png','Custom Design','1 Contact Form','2*5 Photo Gallery','','','The Gold shines brighter in its Class with capabilities that will make competitors envy you.','website')">
            <CENTER>Configure</CENTER></span>
    </div>
  </div>
</section>

              <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                   <ul> <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/S-bronze.png" alt="">
                        </div>
                        <h2>Bronze Web</h2>
                        <span>With the Bronze Web you can be a proud owner of a website quickly on a low budget, for individuals with low content.</span>
                        
                       </div>
                       </ul>
                </div>
                
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                   <ul> <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/S-silver.png" alt="">
                        </div>
                        <h2>Silver Web</h2>
                        <p>The Silver Web is fully loaded with common features, and is preferred by most of our clients.</p>
                        
                    </div>
                        </ul>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                  <ul>  <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/S-gold.png" alt="">
                        </div>
                        <h2>Gold Web</h2>
                        <span>The Gold shines brighter in its Class with capabilities that will make competitors envy you.</span>
                        
                    </div>
                    </ul>
                </div>
            </div>
       </div>

<div class="container">
           <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">                        
  <p>At Shawod we are commited to making quality user-friendly websites, with minimalistic design. get your stunning website now.</p>
                    </div>
                </div>
            </div>
 </div>


 <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">View our portfolio</h1>
                            <p>See the work we've done &amp; mockups.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <div class="wraps"> <a class="btn-6" href="portfolio.php">VIEW OUR WORK<span></span></a></div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

<br>
<div class="container">
     <section id="clients">
        
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1> Join the Big League </h1>
                        <p>Animations are standard on these premium websites, our website (<a href="index.php">www.shawod.co.za</a>) is a demonstration.</p>
                    </div>
                </div>
            </div>
        
     </section>
 </div>


    <section>
  <div class='pricing pricing-palden'>
    <div class='pricing-item' style='margin: 1em 0.6em;'>
      <div class='pricing-deco'>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;   c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;   c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>R</span>14 250.00
         <!-- <span class='pricing-period'>/ mo</span> -->
        </div>
        <h3 class='pricing-title'>Platinum</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>10 Pages</li>
        <li class='pricing-feature'>2*5 Photo Gallery</li>
        <li class='pricing-feature'>Premium Design</li>
      </ul>
        <span class="btn pricing-action" onclick="getpack('Platinum Web','10 Pages','1 Contact Form','Premium Design','14250.00',
            'images/home/prem.png','Social Media Integration','2*5 Photo Gallery','','','',
            'These Packages are designed for high-end websites, owning a Premium packages means you never have to ' +
             'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','','website')">
            <CENTER>Configure</CENTER></span>
    </div>
    <div class='pricing-item pricing-palden'>
      <div class='pricing-deco'>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;   c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;   c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>R</span>19 499.99
          
        </div>
        <h3 class='pricing-title'>Diamond</h3>
      </div> 
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>15 Pages </li>
        <li class='pricing-feature'>Premium S.E.O</li>
        <li class='pricing-feature'>Social Media Integration </li>
      </ul>
        <span class="btn pricing-action" onclick="getpack('Diamond Web','15 Pages','Premium Design','3*5 Photo Gallery','19499.99',
            'images/home/prof.png','1 Contact Form','Social Media Integration','Premium S.E.O','','',
            'These Packages are designed for high-end websites, owning a professional packages means you never have to ' +
             'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','','website')">
            <CENTER>Configure</CENTER></span>
       </div>
    <div class='pricing-item' style='margin: 1em 0.6em;'>
      <div class='pricing-deco'>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;   c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;   c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>R</span>22 500.00
         <!-- <span class='pricing-period'>/ mo</span> -->
        </div>
        <h3 class='pricing-title'>Titanium</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>20 Pages</li>
        <li class='pricing-feature'>4*5 Photo Gallery</li>
        <li class='pricing-feature'>1 Contact Form</li>
      </ul>
        <span class="btn pricing-action" onclick="getpack(' Titanium Web','20 Pages','Custom Design','4*5 Photo Gallery','22500.00',
            'images/home/prof.png','1 Contact Form','Social Media Integration','Premium S.E.O','','',
            'These Packages are designed for high-end websites, owning a professional packages means you never have to ' +
             'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','','website')">
            <CENTER>Configure</CENTER></span>
    </div>
  </div>
</section>
<div class="container">
     <section id="clients">        
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        
  <p>These high-end websites are highly appreciated by large corporations and website owners with lots of content, get one and be part of the Shawod elite members.</p>
                    </div>
                </div>
            </div>
        
     </section>
 </div>
 <div class="container">
    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        
  <p>At Shawod we do not beat around the bush, as soon as your content is received and approved we get on your project. Our easy-to-use <a href="portal.php"> Clients portal </a> allows you to view your project real-time. With preset optimizations exclusive to Shawod we do these following 3 steps to finish off your project. <br> <b> Steps are as follow; </b></p>
                    </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <img src="images/home/design_128.png?raw=true">
                    <h3>Design</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content1">
                    <p>We design according to your specifications, Add appealing features, Blend the website with your business look. Also adding morden touches.</p>
                </div>
            </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <img src="images/home/code_128.png?raw=true">
                    <h3>Code</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content1">
                    <p>This is where the magic happens, where our secret recipe is inserted. We make your website user friendly, optimize speed and add (obviously) your content.</p>
                </div>
            </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <img src="images/home/launch_128.png?raw=true">
                    <h3>Launch</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content1">
                    <p>Now that we have done coding your website, we upload it online, test for possible errors and get it ready for Launch. Voila you're up and running.</p>
                       </div>
            </div>
    </div>
    </div>

  <br><br><br>
    <!--/#team-->
<div id="coupon_alert" style="width:0%; padding: 2%;background:white;border:2px solid #33ccff;border-left: none; border-right: none;position:fixed;z-index:200;top:83%;">
    <p align="center" id="label" style="display:none;color:#33ccff;font-size: 150%; border-radius:10%;border: 2px solid  white">Use this coupon <span style="padding: 0.1% 0% 0% 0.5%;color: white; background: #33ccff">
           <?php echo $copon ?>
    </span>&nbsp; to get <?php echo $discount ?>% discount on any website <span onclick="closeCoupon()" class="btn pricing-action" style="float:right;background: #33ccff;color:white">OK</span></p>
</div>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.gif" class="img-responsive inline" alt="">
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
<a target="_blank" href="https://api.whatsapp.com/send?phone=0630142446&text=Hello%21%20Shawod,%20 Let's talk business"><svg viewBox="0 0 32 32" class="whatsapp-ico"><path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path></svg></a>

    </footer>

    <!--/#footer-->
<script>
    var count=0;
    var time = setInterval(function () {
        if(count >= 100 ){
            document.getElementById("label").style.display="block";
            clearInterval(time)
        }else{
            count++;
            document.getElementById("coupon_alert").style.width=count+"%";
        }
    },10)
    function closeCoupon() {
        var count=100;
        var time = setInterval(function () {
            if(count <= 0 ){
                document.getElementById("coupon_alert").style.display="none";
                clearInterval(time)
            }else{
                count--;
                document.getElementById("label").style.display="none";
                document.getElementById("coupon_alert").style.width=count+"%";
            }
        },-10)
    }
</script>
    <script src="js/contactus.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/1script.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
<script src='js/jquery.min.js'></script>
<script src='js/easing.js'></script>
<script  src="js/script.js"></script>
<script>
    $(function() {
        $('.btn-6')
            .on('mouseenter', function(e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('span').css({top:relY, left:relX})
            })
            .on('mouseout', function(e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('span').css({top:relY, left:relX})
            });
        $('[href=#]').click(function(){return false});
    });
</script>
</body>
</html>
