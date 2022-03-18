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
        $blog .= "<div  style=\"width: 90%; height: auto; margin-left: 5%\">
    <p align=\"left\" style=\" clear: left; margin-bottom: -0px; color:rgb(102, 204, 255); font-size: 20px \">$title</p>
    <span style=\" color: silver; font-size: 12px \">$s_title</span><br>
    <img src=\" ../thumbnails/$images[$i]\" style=\"width: 90%;  height:80% \">

    <div >
        <p style=\"width: 90%;color: white;\">
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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