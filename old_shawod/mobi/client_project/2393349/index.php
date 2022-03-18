<?php
$folder_name=basename(getcwd());
include "../connect.php";
$query=mysqli_query($conn,"SELECT * FROM `not_approved` WHERE `project_id`='$folder_name'");
$row=mysqli_fetch_assoc($query);
$name=$row['name'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="../assets/tether/tether.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="../assets/theme/css/style.css">
    <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
<section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-parallax-background" id="header6-6" style="background-image: url(../assets/images/web-dev-2000x1420.png);">

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(204, 204, 204);">
    </div>

    <div class="mbr-table mbr-table-full">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="mbr-section row">
                    <h3 class="mbr-section-title display-2">PROJECT COMING SOON</h3>
                    <div class="mbr-table-md-up">

                        <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 42%;">
                            <div class="mbr-figure"><img src="../assets/images/howtocreate-1400x650.png"></div>
                        </div>


                            <div class="mbr-section-text">
                                <p>Please visit again soon your project is under construction.<br>Duration <strong>1-4</strong> <strong>weeks</strong></p>
                            </div>

                            <div class="mbr-section-btn"><a class="btn btn-lg btn-primary-outline btn-primary" href="#top"><?php echo $name ?></a></div>

                        </div>

                    </div>
                <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                </div>
            </div>

        </div>
    </div>



</section>


<section class="engine"><a rel="external" href="https://mobirise.com">mobirise.com</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smooth-scroll/smooth-scroll.js"></script>
<script src="assets/jarallax/jarallax.js"></script>
<script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
<script src="assets/theme/js/script.js"></script>


<input name="animation" type="hidden">
</body>
</html>