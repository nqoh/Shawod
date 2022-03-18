<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title id="title"></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/small.css" type="text/css">
    <link rel="icon" type="image/ico" href="../thumbnails/favd.png">
</head>
<script>
    function _(x) {return document.getElementById(x)}
    window.addEventListener("load" , function () {
        if(localStorage.type=='package'){
            localStorage.clear();
        }
        if(localStorage.package == null && localStorage.benefit1 == null && localStorage.benefit2 == null && localStorage.benefit3 == null && localStorage.prc==null){
            window.location="../"
        }else{
		     
            _("p_name").innerHTML=localStorage.package
            _("pack").innerHTML=localStorage.package
            _("title").innerHTML=localStorage.package+" | Shawod"
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
            _("prc").innerHTML="R"+parseFloat(localStorage.prc).toFixed(2)+" !"
            _("image").src=localStorage.imagex
            _("order").innerHTML=localStorage.package+" = "+"R"+localStorage.prc+" !";
            _("discount").innerHTML="R "+parseFloat(localStorage.prc).toFixed(2)/100*50+" (50%) non-refundable deposit after content approval";
			localStorage.setItem("discounts",parseFloat(localStorage.prc).toFixed(2)/100*50);
			localStorage.setItem("total_p",parseFloat(localStorage.prc).toFixed(2));
			localStorage.setItem("feature",localStorage.package);
			_("status").innerHTML=localStorage.sts;
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
<div class="log">
    <a href="../../home"><img src="../thumbnails/logog.png"></a>
</div>

<div class="navs">
    <ul>
        <li><a href="../../home"> Home </a></li>

        <div class="dv"></div>
        <li><a href="../../website" style=" opacity:1;color: rgb(140,140,140)" >Website</a></li>

        <div class="dv"></div>
        <li ><a href="../../packages"> Packages</a>
        </li>

        <div class="dv"></div>
        <li><a href="../../portfolio"  >Portfolio</a></li>

        <div class="dv2"></div>
        <li><a href="../../seo"  >SEO</a></li>
        <div class="dv2"></div>
        <li><a href="../../domain"  >Domain</a></li>
        <div class="dv2"></div>
        <li><a href="../../hosting"  >Hosting</a></li>
</div><br>

<div  align="center" class="h_intro">
    <div align="center" class="intro_div">
        <span style="color: rgb(102,204,255)">Getting Started !</span>
    </div>
</div>
<div style="width: 90%;">
    <div>
<p class="pack_name"><b><u id="p_name"></u></b></p>

<p id="status">

</p>

<div style="width:auto; margin-left:50px; height:auto; margin-top:0px;">
           <span class="silver_benefit" ><span id="d1" ></span></span><br><br>
           <span class="silver_benefit" ><span id="d2"></span></span><br><br>
           <span class="silver_benefit" ><span id="d3"></span></span><br><br>
           <span class="silver_benefit" ><span id="d4"></span></span><br><br>
           
           <span class="silver_benefit" ><span id="d5"></span></span><br><br>
           <span class="silver_benefit" ><span id="d6"></span></span><br><br>
            <span class="silver_benefit" ><span id="d7"></span></span><br><br>
           <span class="silver_benefit" ><span id="d8"></span></span><br><br>

           
 </div>
<div class="box_pack">

    <div  class="silver_box" style=" margin-top: -20%; width: 100%">
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

</div ><br>

</div>


    <p class="add_status" align="center"><b><u>The following items are available upon request</u></b></p>
    <div align="center" style="margin-left: 5%">
        <p id="list" >
            <span id="state"> Shopping Cart </span>
        </p>

        <p id="list" ">
            <span id="form"> Multimedia Library </span>
        </p>

        <p id="list" >
            <span id="photo"> Registration Form </span>
        </p>

        <p id="list" >
            <span id="photo"> Payment Getway </span>
        </p>
    </div>

<p class="request" align="center">
    <b><u>Additional features upon request after consulting</u></b>
</p>
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

<div class="form" style="margin-left: 5%">
    <span class="fill_in">Please fill out simple form and one of expect will get back at you</span><br>

    <br><label class="lebel">Name<span style="color:red">*</span></label><span id="name_error"></span><br><br>

    <input type="text" class="text-field3" id="name"onblur="name_out('name','name_error')" onfocus="mouse_in('name')"><br>

    <br><label class="lebel">E-mail<span style="color:red">*</span></label><span id="email_error"></span><br><br>

    <input type="text" class="text-field3" id="email" onblur="email('email','email_error')" onfocus="mouse_in('email')" ><br>

    <br><label class="lebel">Contact Number</label><span id="phone_error"></span><br><br>

    <input type="text" class="text-field3" id="contact" onblur="contacts('contact','phone_error')"  onfocus="mouse_in('contact') "><br>

    <br><label class="lebel">About your website<span style="color:red">*</span></label><span id="describe_error"></span><br><br>

    <div type="text" contenteditable="true" id="textarea" onblur="website('textarea','describe_error')" onfocus="mouse_in('textarea')" ></div><br>

    <span style="color: red;margin-left: 20px;display:none " id="errorx">Please accept our <a href="../../terms" class="alink">terms and conditions</a> before you proceed</span>

    <input type="checkbox" id="accept" value="terms" style="margin-left: 20px;" checked="true"><span style="color: #e8f1ff" id="ct">Accept our</span> <a href="../../terms" class="alink" id="a">terms and conditions</a>
    <br>
    <div class="silver_btn" style="margin-top: 5px"   onclick="send_data('name','email','contact','textarea')" >
        <span style="color: rgb(255,255,255);" > <b>Proceed</b></span>
    </div><br>
    <span id="reference" style="margin-top: 5px"></span>


</div>
</div>
<?php require '../footer/footer.php' ?>


</body>
</html>