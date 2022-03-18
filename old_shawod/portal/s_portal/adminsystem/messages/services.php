

<?php


require '../messages/getdata.php'  ;

require '../connect.php';
if(isset($_SESSION['id']) && isset($_SESSION['uname'])){
    $nm=$_SESSION['uname'];$ids=$_SESSION['id'];
    $quey=mysqli_query($conn,"SELECT * FROM  not_approved WHERE  id_client='$nm'");
    if(mysqli_num_rows($quey)==1){
        $Name=mysqli_fetch_assoc($quey)['name'];
    }else{
        header('location:../login');
    }

}else{
    header('location:../login');
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Services</title>
</head>
<link rel="icon" type="image/ico" href="../thumbnails/favw.png">
<link rel="stylesheet" href="../css/services.css" type="text/css">
<script src="../js/message_sent.js" type="text/javascript"></script>
<script src="../js/services.js" type="text/javascript"></script>
<?php
require  '../connect.php'  ;
require 'email.php';
require 'services.php';
$ii = 0;
$ii1 = 0;
$ii2 = 0;
$ii3 = 0;
$ii4 = 0;
$i = 0;
$quey = mysqli_query($conn, "SELECT `view` FROM notifications WHERE f_key='$ids'");
while ($row = mysqli_fetch_assoc($quey)) {
    $i += $row['view'];
}
$ii1 = 0;
$ii2 = 0;
$ii3 = 0;
$ii4 = 0;
$myquery = mysqli_query($conn, "SELECT `o_key` FROM billing WHERE f_key='$ids'");
while ($row1 = mysqli_fetch_assoc($myquery)) {
    $ii1 += $row1['o_key'];
}
$myquery1 = mysqli_query($conn, "SELECT `o_key` FROM other WHERE f_key='$ids'");
while ($row2 = mysqli_fetch_assoc($myquery1)) {
    $ii2 += $row2['o_key'];
}
$myquery2 = mysqli_query($conn, "SELECT `o_key` FROM hosting WHERE f_key='$ids'");
while ($row3 = mysqli_fetch_assoc($myquery2)) {
    $ii3 += $row3['o_key'];
}
$myquer3 = mysqli_query($conn, "SELECT `o_key` FROM developer WHERE f_key='$ids'");
while ($row4 = mysqli_fetch_assoc($myquer3)) {
    $ii4 += $row4['o_key'];
}
$ii = $ii1 + $ii2 + $ii3 + $ii4;

?>
<style>
    .other{
        float: right;
        margin-top: -30px;
        margin-right: 40px;
        font-size: 22px;
        color: blue;
        cursor: pointer;
    }
    .other:hover{
        text-decoration: underline;
    }
</style>
<script type="text/javascript">
    function _(x) {return document.getElementById(x)}
    function cancel_delete() {
        _("overlay").style.display="none";_("confirms").style.display="none";
        localStorage.removeItem("em_id");
        localStorage.removeItem("name");
        localStorage.removeItem("domain");
    }


</script>
<body>








            <div id="old_services" style="height: auto; display: block">
                <div class="label" style="margin-left: 80px">Website</div>
                <p style="margin-left:100px; margin-top:7px; font-size:18px">


            </div>
    </div>
</div>

</body>
</html>