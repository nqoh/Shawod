<?php
require '../connect.php';
$blog='';$text1='';
$q= mysqli_query($conn,"SELECT * FROM blog");
$images= Array('dns.jpg','webpromo.jpg','smpassword.jpg','smallbiz.jpg');
$i=0;
while ($row=mysqli_fetch_assoc($q)){
    $title=$row['title'];
    $s_title=$row['sub_title'];
    $txt=$row['text'];
    $id=$row['id'];

if(strlen($txt) > 1140){
    $text1 = substr($txt, 0, 1140 ).' ...';
}
    $blog.="<div  style=\"width: 90%; margin-left: 5%\">
    <p align=\"left\" style=\"clear: left; margin-bottom: -0px; color:rgb(102, 204, 255); font-size: 26px \">$title</p>
    <span style=\" color: silver; font-size: 12px \">$s_title</span>
    <div style=\"\">
     <p style=\"float: left; color: white;opacity: .6;\">
    
       
              $text1 <br>
            <a href=\"../blog/$id\" style=\"color:black;color:rgb(102, 204, 255); text-decoration: none\">More...</a>
        </p>
        <img src=\"../thumbnails/$images[$i]\" style=\"width: 90%; height:80% \">
    </div>
</div>";
$i++;


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title id="title">Blog | Shawod</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Get up to date with the tech news as Shawod brings them to you, explore our deals while you at it.">
<meta name="keywords" content="Durban website design, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
<meta name="robots" content="index/follow">
<meta property="og:type" content="website">
<meta property="og:url" content="http://shawod.co.za/blog">
<meta property="og:title" content="Blog | Shawod">
<meta property="og:description" content="Get up to date with the tech news as Shawod brings them to you, explore our deals while you at it.">
<meta property="og:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
<meta property="twitter:url" content="http://shawod.co.za/blog">
<meta property="twitter:title" content="Blog | Shawod">
<meta property="twitter:description" content="Get up to date with the tech news as Shawod brings them to you, explore our deals while you at it.">
<meta property="twitter:image" content="http://shawod.co.za/thumbnails/shawodTro.jpg">
    <link rel="stylesheet" href="../css/small.css" type="text/css">
    <link rel="icon" type="image/ico" href="../thumbnails/favd.png">
</head>
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

        <div class="dv2"></div>
        <li><a href="../seo"  >SEO</a></li>
        <div class="dv2"></div>
        <li><a href="../domain"  >Domain</a></li>
        <div class="dv2"></div>
        <li><a href="../hosting"  >Hosting</a></li>
</div><br>

<div  align="center" class="h_intro">
    <div align="center" class="intro_div">
        <span style="color: rgb(102,204,255)">Blog</span>
    </div>
</div>
<?php echo $blog  ?>

<?php require '../footer/footer.php' ?>

</body>
</html>