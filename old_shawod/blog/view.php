<?php
require '../connect.php';
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $q = mysqli_query($conn, "SELECT * FROM blog WHERE id=$id");
    $blog = '';
    $text = '';
    $images = Array('dns.jpg', 'webpromo.jpg', 'smpassword.jpg', 'smallbiz.jpg');
    $i = $id-1;
    if($row = mysqli_fetch_assoc($q)) {
        $title = $row['title'];
        $s_title = $row['sub_title'];
        $txt = explode("\n", $row['text']);
        $id = $row['id'];


        foreach ($txt as $txt2) {
            $text .= $txt2 . '<br>';
        }
        $blog .= "<div  style=\"width: 1300px; height: auto\">
    <p align=\"left\" style=\"margin-left: 120px; clear: left; margin-bottom: -0px; color:rgb(102, 204, 255); font-size: 36px \">$title</p>
    <span style=\"margin-left: 170px; color: silver; font-size: 12px \">$s_title</span><br>
    <img src=\" ../thumbnails/$images[$i]\" style=\"margin-left: 170px;width: 1000px; height:310px \">

    <div style=\"margin-left: 100px\">
        <p style=\" margin-left: 80px; width: 1000px;color: white;\">
              $text 
            </p>
        
    </div>
</div>";
    }else{
        header('location:../blog');
    }
}else{
    header('location:../blog');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title id="title">Blog | Shawod</title>
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


<link rel="icon" type="image/ico" href="../thumbnails/fav.png">

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
<div class="container2" align="center">
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
</div><br>

<div  align="center" class="h_intro">
    <div align="center" class="intro_div">
        <span style="color: rgb(102,204,255)">Blog</span>
    </div>
</div>


<?php echo $blog  ?>




<?php require '../footer/footer.php' ?>
</div>

</body>
</html>