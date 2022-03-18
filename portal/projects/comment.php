<?php
require '../connect.php';
if(isset($_POST['project']) && isset($_POST['message'])){
    $myid=$_POST['id'];$msg=$_POST['message'];$dt=date('d-M-y h:i');
   if($_POST['project']=='web'){
      //mysqli_query($conn,"INSERT INTO comment VALUES(null,$msg,'','',$myid,1,0,0,$dt)");
      mysqli_query($conn,"INSERT INTO `comment` VALUES(NULL ,'$msg','','','$myid',1,0,'$dt')");
      echo $_POST['message'];
      exit();
   }else if($_POST['project']=='logo'){
       mysqli_query($conn,"INSERT INTO `comment` VALUES(NULL ,'','$msg','','$myid',1,0,'$dt')");
       echo $_POST['message'];
       exit();
   }else if($_POST['project']=='cms'){
       mysqli_query($conn,"INSERT INTO `comment` VALUES(NULL ,'','','$msg','$myid',1,0,'$dt')");
       echo $_POST['message'];
       exit();
   }
}
// This div is for website and comment form
    $id = $_SESSION['id'];$web = '';$prev = ''; $i = 0;
    $query = mysqli_query($conn, "SELECT * FROM comment WHERE f_key='$id' AND web !='' ORDER BY id DESC ");
    while ($row = mysqli_fetch_assoc($query)) {
        if ($i >= 1) {
             $text = $row['web'];
            $time = substr($row['date'], 9, 14);
            $date = substr($row['date'], 0, 9);
            $prev .= "<p style=\"margin-left:70px;margin-bottom:-35px;font-size:13px; color:rgb(109,109,109)\"> $date | $time </p><br>
        <p style=\"margin-left:50px\">$text</p> ";
        } else {
            $prev = '';
        }
        $i++;
    }
    $query2 = mysqli_query($conn, "SELECT * FROM comment WHERE f_key='$id' AND web !='' ORDER BY id DESC ");
    $row2 = mysqli_fetch_assoc($query2);
    $text2=$row2['web'];
    $time2 = substr($row2['date'], 9, 14);
    $date2 = substr($row2['date'], 0, 9);$tm1='';$v1='';
    if($text2  !=""){
        $tm1="$date2 | $time2";
        $v1="View";
    }
    $web = "<div  style=\"display:none\" id=\"prev1\">$prev</div><p style=\"margin-left:40px;margin-bottom:-35px;font-size:13px; color:rgb(109,109,109)\"> $tm1 </p><br>
    <p style=\"margin-left: 30px;float: left;\" id='mytext1'>$text2 &nbsp;</p><p id=\"view1\" class='view' onClick=\"opens('prev1','view1')\">$v1</p>
    <div id=\"reply\" class='reply' style=\"width:100%; height:100px; margin-left:70px; clear: left; display:block\">
        <span id=\"status\" style=\"color:red;\"></span>
        <input type=\"text\" id='txt1' class=\"text_input\" placeholder='Comment about your website'>
        <button id=\"rp1\" class='rp' onclick=\"reply('txt1','web','prev1','view1','$id','mytext1')\">Reply</button><br>
        
        <span id=\error\">  </span>
    </div>";




// This div is for log and comment form
$id = $_SESSION['id'];$log = '';$prev_lg = ''; $ii = 0;
$query = mysqli_query($conn, "SELECT * FROM comment WHERE f_key='$id' AND logo !='' ORDER BY id DESC ");
while ($row = mysqli_fetch_assoc($query)) {
    if ($ii >= 1) {
        $text = $row['logo'];
        $time = substr($row['date'], 9, 14);
        $date = substr($row['date'], 0, 9);
        $prev_lg .= "<p style=\"margin-left:70px;margin-bottom:-35px;font-size:13px; color:rgb(109,109,109)\"> $date | $time </p><br>
        <p style=\"margin-left:50px\">$text</p> ";
    } else {
        $prev_lg = '';
    }
    $ii++;
}
$query2 = mysqli_query($conn, "SELECT * FROM comment WHERE f_key='$id' AND logo !='' ORDER BY  id DESC ");
$row2 = mysqli_fetch_assoc($query2);
$text3 = $row2['logo'];
$time2 = substr($row2['date'], 9, 14);
$date2 = substr($row2['date'], 0, 9);$v='';$tm='';
if($text3 !=""){
    $v="View";
    $tm="$date2 | $time2";
}
$log = "<div  style=\"display:none\" id=\"prev2\">$prev_lg</div><p style=\"margin-left:40px;margin-bottom:-35px;font-size:13px; color:rgb(109, 109, 109)\"> $tm </p><br>
    <p style=\"margin-left: 30px;float: left;\" id='mytext2'>$text3 &nbsp;</p><p id=\"view2\" class='view' onClick=\"opens('prev2','view2')\">$v</p> 
    <div id=\"reply\" class='reply' style=\"width:100%; height:100px; margin-left:70px; clear: left; display:block\">
        <span id=\"status\" style=\"color:red;\"></span>
        <input type=\"text\" id='txt2' class=\"text_input\" placeholder='Comment about your logo'>
        <button id=\"rp2\" class='rp' onclick=\"reply('txt2','logo','prev2','view2','$id','mytext2')\">Reply</button><br>
        <span id=\error\">  </span>
    </div>";


// This div is for cms and comment form
$id = $_SESSION['id'];$cms = '';$prev_cm = ''; $iii = 0;
$query = mysqli_query($conn, "SELECT * FROM comment WHERE f_key='$id' AND cms !='' ORDER BY id DESC ");
while ($row = mysqli_fetch_assoc($query)) {
    if ($iii >= 1) {
        $text = $row['cms'];
        $time = substr($row['date'], 9, 14);
        $date = substr($row['date'], 0, 9);
        $prev_cm .= "<p style=\"margin-left:70px;margin-bottom:-35px;font-size:13px; color:rgb(109,109,109)\"> $date | $time </p><br>
        <p style=\"margin-left:50px\">$text</p> ";
    } else {
        $prev_cm = '';
    }
    $iii++;
}
$query2 = mysqli_query($conn, "SELECT * FROM comment WHERE f_key='$id' AND cms !='' ORDER BY  id DESC ");
$row2 = mysqli_fetch_assoc($query2);
$text4 = $row2['cms'];
$time2 = substr($row2['date'], 9, 14);
$date2 = substr($row2['date'], 0, 9);$v2='';$tm2='';
if($text4 !=""){
    $v2="View";
    $tm2="$date2 | $time2";
}
$cms = "<div  style=\"display:none\" id=\"prev3\">$prev_cm</div><p style=\"margin-left:40px;margin-bottom:-35px;font-size:13px; color:rgb(109, 109, 109)\"> $tm2 </p><br>
    <p style=\"margin-left: 30px;float: left;\" id='mytext3'>$text4 &nbsp;</p><p id=\"view3\" class='view' onClick=\"opens('prev3','view3')\">$v2</p> 
    <div id=\"reply\" class='reply' style=\"width:100%; height:100px; margin-left:70px; clear: left; display:block\">
        <span id=\"status\" style=\"color:red;\"></span>
        <input type=\"text\" id='txt3' class=\"text_input\" placeholder='Comment about your content management system'>
        <button id=\"rp2\" class='rp' onclick=\"reply('txt3','cms','prev3','view3','$id','mytext3')\">Reply</button><br>
        <span id=\error\">  </span>
    </div>";

?>