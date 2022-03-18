<?php
include '../connect.php';
$error='';
if(isset($_POST['emaile']) && isset($_POST['namee']) && isset($_POST['sub']) && isset($_POST['txt'])){
    $email=$_POST['emaile']; $nam=$_POST['namee'];$sub=$_POST['sub'];$txt=$_POST['txt'];
    if($nam !=""  &&  $email != "" && $txt != "") {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $save = mysqli_query($conn, "INSERT INTO `emails` VALUES(null, '$nam', '$email', '$sub', '$txt' ,1, CURRENT_TIMESTAMP)");
            $error = "<b style='color: rgb(51,204,255)'>Your message was successfully sent, we will get back to you soon $nam</b>";
        } else {
            $error = "<b style='color: red'>Invalid email address</b>";
        }
    }else{
        $error = "<b style='color: red'>All fields required</b>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title id="title">Contact us | Shawod</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    <link rel="stylesheet" href="../css/small.css" type="text/css">
    <link rel="icon" type="image/ico" href="../thumbnails/favd.png">
</head>
<script src="../js/normal.js"></script>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139717438-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139717438-1');
</script>
<div  id="scroll_up" style="background-color:#333333;" onclick="scroll_ups()">
    <img src="../thumbnails/go%20up2.png" width="79px" style="margin-top: 6px" >
</div>
<div class="log">
    <a href="../home"><img src="../thumbnails/logog.png"></a>
</div>
<div class="navs">
    <ul>
        <li><a href="../home"> Home </a></li>

        <div class="dv"></div>
        <li><a href="../website"  >Website</a></li>

        <div class="dv"></div>
        <li ><a href="../packages"> Packages</a>
        </li>


        <div class="dv"></div>
        <li><a href="../portfolio"  >Portfolio</a></li>

        <div class="dv"></div>
        <li><a href="../seo"  >SEO</a></li>
        <div class="dv"></div>
        <li><a href="../domain"  >Domain</a></li>
        <div class="dv"></div>
        <li><a href="../hosting"  >Hosting</a></li>
</div><br>

<div  align="center" class="h_intro">
    <div align="center" class="intro_div">
        <span style="color: rgb(102,204,255)">Contact us</span>
    </div>
</div>

<div  style="width: 96%; margin-left: 2%;">
    <h2 style="color: white;" align="center"><u>If you have any queries or want to chat about your Project please go right ahead.</u></h2>
    <h2 style="color: white;" align="center"> Our team is always standing by to assist you.</h2>

    <form class="form" method="post" action="../contactus/index.php">
        <span class="fill_in" style="font-size: 22px">Complete this form, one of our expects will get back to you.</span><br>
        <?php echo $error;  ?>
        <br><label class="lebel">Name<span style="color:red"> * </span></label><span style="color: red" id="namee_error"></span><br>
        <input type="text" class="text-field3" name="namee" ><br>

        <br><label class="lebel">E-mail<span style="color:red"> * </span></label><span id="emaile_error" style="color: red"></span><br>

        <input type="text" class="text-field3" name="emaile"   ><br>

        <br><label class="lebel">Subject</label>&nbsp;&nbsp;<span id="sub_error" style="color: red"></span><br>
        <input type="text"  name="sub" class="text-field3" id="subjs "><br>

        <br><label class="lebel">Query<span style="color:red"> * </span></label><span style="color: red" id="describes_error"></span><br>

    <textarea style=" border: 1px solid #ccc;" name="txt"  id="textarea"  ></textarea>

        <input type="submit" class="submit_btn">
    </form>

    </div><br>
</div>

<?php require '../footer/footer.php' ?>

</body>
</html>