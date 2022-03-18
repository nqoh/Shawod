<?php
require '../connect.php';
$msg='';
$priv='';
$file2='';
$fifile='';
$fifile3='';
$bi='';$ot='';$dv='';$hs='';
$i = 0;
$myid='';
require '../connect.php';
if(isset( $_SESSION['id'])) {
    $myid = $_SESSION['id'];
    $q=mysqli_query($conn,"SELECT * FROM developer WHERE f_key='$myid'");
    while ($xrow=mysqli_fetch_assoc($q)) {
        $dv=$xrow['c_key'];
    }
    $q=mysqli_query($conn,"SELECT * FROM billing WHERE f_key='$myid'");
    while ($xrow=mysqli_fetch_assoc($q)) {
        $bi=$xrow['c_key'];
    }
    $q=mysqli_query($conn,"SELECT * FROM other WHERE f_key='$myid'");
    while ($xrow=mysqli_fetch_assoc($q)) {
        $ot=$xrow['c_key'];
    }
    $q=mysqli_query($conn,"SELECT * FROM hosting WHERE f_key='$myid'");
    while ($xrow=mysqli_fetch_assoc($q)) {
        $hs=$xrow['c_key'];
    }


        $query = mysqli_query($conn,"SELECT * FROM billing WHERE f_key='$myid' AND subject!='' ORDER BY id ASC");
        $row=mysqli_fetch_assoc($query);
        $sub=$row['subject'];
        $text=$row['text'];if($text==""){$text="<p style='color: silver; float: left; margin-top: 1px'>Respond by attach picture</p>";}
        $date = substr($row['time'], 0, 9);
        $time = substr($row['time'], 9, 14);
        $img=$row['image'];
        $file=$row['file_name'];
        $src='';

        if($file=="undefined"){$src="";}else{$src="<br><img style='margin-left: 10px; display:block;' id='images1' width='350px' src='../../img/$file'>";}
        if($img == 1){
            $image="<img  src='../thumbnails/chat.png' style='float: left; width: 15px'>";
        }else{
            $image="";
        }
        $query2 = mysqli_query($conn,"SELECT * FROM billing WHERE f_key='$myid'  ORDER BY id ASC");
        $total=mysqli_num_rows($query2);
        $x=0;
        while($row2=mysqli_fetch_assoc($query2)){
            if($x > 0 && $x < $total-1) {
                $i+=$row2['o_key'];
                $file2=$row2['file_name'];
                $src2='';
                if($file2=="undefined"){$src2="";}else{$src2="<br><img style='margin-left: 10px; display:block;' id='images2' width='350px' src='../../img/$file2'>";}

                $text2 = $row2['text'];if($text2==""){$text2="<p style='color: silver; float: left; margin-top: 1px'>Respond by attach picture</p>";}
                $date2 = substr($row2['time'], 0, 9);
                $time2 = substr($row2['time'], 9, 14);
                $img2=$row2['image'];

                if($img2 == 1){
                    $image2="<img  src='../thumbnails/chat.png' style='float: left; width: 15px'>";
                }else{
                    $image2="";
                }
                $priv .= "<p class='td'   > $date2 | $time2 </p><br>
                          <p style=\"margin-left:30px;\">$image2 $text2 $src2</p>";
            }
            $x++;
        }

        $query3 = mysqli_query($conn,"SELECT * FROM billing WHERE f_key='$myid'  ORDER BY id DESC ");
        $row3=mysqli_fetch_assoc($query3);
        $text3=$row3['text'];if($text3==""){$text3="<p style='color: silver; float: left; margin-top: 1px'>Respond by attach picture</p>";}
        $i+=$row3['o_key'];
        $date3 = substr($row3['time'], 0, 9);
        $time3 = substr($row3['time'], 9, 14);
        $img3=$row3['image'];
        $file3=$row3['file_name'];
        $src3='';


        if($file3=="undefined"){$src3="";}else{$src3="<br><img style='margin-left: 10px; display:none;' id='images3' width='350px' src='../../img/$file3'>";}

        if($img3 == 1){$image3="<img  src='../thumbnails/chat.png' style='float: left; width: 15px'>";}else{
            $image3="";
        }
        if(mysqli_num_rows($query3) == 1){
            $msg =" <div><p class=\"bill\"><u>Billing Department</u></p><p class=\"sub\" style='font-size: 20px'>$sub</p><br><p style=\"margin-left:25px; font-size:18px;\">
                <div id='pre_ms1' style='display: none'>$priv</div><p class='td'>  $date3 | $time3 </p><br><br>$image3 $text3 
                <span id=\"view1\" class='view' onmouseup=\"img_dsp('images3')\" onClick=\"opens('view1', 'prev1', 'reply1','pre_ms1',$myid,'billing')\">View</span>$src3</p>
                <div id=\"reply1\" style=\"width:100%; height:100px; margin-left:30px; display:none\"><span id=\"status\" style=\"color:red;\"></span><br>
                <input type=\"text\" id=\"text_input1\" class='text_input'><br><input type=\"file\" id=\"filez\" class='file' onchange=\"add_file('file','filename1')\"><div class=\"photo\">Attach a snapshot</div>
                <span class=\"resolved\" onmouseup=\"img_cls('images3')\"  onClick=\"close_ticker('view1', 'prev1', 'reply1', 'pre_ms1', $myid,'billing','images3')\">Resolved</span>
                <span id=\"close1\" class='close'   onClick=\"closed('view1', 'prev1', 'reply1','pre_ms1')\" onmouseup=\"img_dsp('images3')\">Collapse</span>
                <button id=\"rp\" onmouseup=\"upload_file('file')\"     onclick=\"replys('view1', 'prev1', 'reply1','pre_ms1',$myid,'billing','text_input1','file','billing')\">Reply</button><br><span id=\"filename1\"></span></div></p></div>";
        }else if(mysqli_num_rows($query3) < 1){
            $msg = "";
        }else {
            $msg = " <div><p class=\"bill\"><u>Billing Department</u></p><p class=\"sub\" style='font-weight: bold; '>$sub</p><br><p style=\"margin-left:25px; font-size:18px;\">
                <div  style=\"display:none\" id=\"prev1\"><div > <p class='td'> $date | $time </p><br><p style=\"margin-left:30px\">$image $text $src</p>
                </div></div><div id='pre_ms1' style='display: none'>$priv</div><p class='td'>  $date3 | $time3 </p><br><br>$image3 $text3 
                <span id=\"view1\" class='view'  onmouseup=\"img_dsp('images3')\"  onClick=\"opens('view1', 'prev1', 'reply1','pre_ms1',$myid,'billing')\">View</span>$src3<br><br></p>
                <div id=\"reply1\" style=\"width:100%; height:100px; margin-left:30px; margin-top: -20px; display:none\"><span id=\"status\" style=\"color:red;\"></span><br>
                <input type=\"text\" id=\"text_input1\" class='text_input'><br><input type=\"file\" class='file' id=\"file\" onchange=\"add_file('file','filename1')\"><div class=\"photo\">Attach a snapshot</div>
                <span class=\"resolved\" onmouseup=\"img_cls('images3')\" onClick=\"close_ticker('view1', 'prev1', 'reply1','pre_ms1',$myid,'billing','images3')\">Resolved</span>
                <span id=\"close1\" class='close'  onClick=\"closed('view1', 'prev1', 'reply1','pre_ms1')\" onmouseup=\"img_dsp('images3')\" >Collapse</span>
                <button id=\"rp\" onmouseup=\"upload_file('file')\"   onclick=\"replys('view1', 'prev1', 'reply1','pre_ms1',$myid,'billing','text_input1','file','billing')\">Reply</button><br><span id=\"filename1\"></span></div></p></div>";
        }


}
if(isset($_FILES["file"]["name"])){
$fileName = $_FILES["file"]["name"]; // The file name
$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file"]["type"]; // The type of file it is
$fileSize = $_FILES["file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
move_uploaded_file($fileTmpLoc, "../../img/$fileName");
}
if(isset($_FILES["file2"]["name"])){
    $fileName = $_FILES["file2"]["name"]; // The file name
    $fileTmpLoc = $_FILES["file2"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["file2"]["type"]; // The type of file it is
    $fileSize = $_FILES["file2"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["file2"]["error"]; // 0 for false... and 1 for true
    move_uploaded_file($fileTmpLoc, "../../img/$fileName");
}
if(isset($_FILES["file4"]["name"])){
    $fileName = $_FILES["file4"]["name"]; // The file name
    $fileTmpLoc = $_FILES["file4"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["file4"]["type"]; // The type of file it is
    $fileSize = $_FILES["file4"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["file4"]["error"]; // 0 for false... and 1 for true
    move_uploaded_file($fileTmpLoc, "../../img/$fileName");
}
if(isset($_FILES["file3"]["name"])){
    $fileName = $_FILES["file3"]["name"]; // The file name
    $fileTmpLoc = $_FILES["file3"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["file3"]["type"]; // The type of file it is
    $fileSize = $_FILES["file3"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["file3"]["error"]; // 0 for false... and 1 for true
    move_uploaded_file($fileTmpLoc, "../../img/$fileName");
}
if(isset($_POST['billing'])){
   // $myid = $_SESSION['id'];
     $id=$_POST['billing'];
    mysqli_query($conn,"UPDATE billing set `c_key`=0 WHERE f_key='$id'");
    $ii1=0;$ii2=0;$ii3=0;$ii4=0;
    $myquery=mysqli_query($conn,"SELECT `c_key` FROM billing WHERE f_key=' $myid'");
    while ($row1=mysqli_fetch_assoc($myquery)){
        $ii1+=$row1['o_key'];
    }
    $myquery1=mysqli_query($conn,"SELECT `c_key` FROM other WHERE f_key=' $myid'");
    while ($row2=mysqli_fetch_assoc($myquery1)){
        $ii2+=$row2['o_key'];
    }
    $myquery2=mysqli_query($conn,"SELECT `c_key` FROM hosting WHERE f_key=' $myid'");
    while ($row3=mysqli_fetch_assoc($myquery2)){
        $ii3+=$row3['o_key'];
    }
    $myquer3=mysqli_query($conn,"SELECT `c_key` FROM developer WHERE f_key=' $myid'");
    while ($row4=mysqli_fetch_assoc($myquer3)){
        $ii4+=$row4['o_key'];
    }
   //echo $ii=$ii1+$ii2+$ii3+$ii4;
}
if(isset($_POST['developer'])){
    $id=$_POST['developer'];
    mysqli_query($conn,"UPDATE developer set c_key=0 WHERE f_key='$id'");
    $ii1=0;$ii2=0;$ii3=0;$ii4=0;
    $myquery=mysqli_query($conn,"SELECT `c_key` FROM billing WHERE f_key=' $myid'");
    while ($row1=mysqli_fetch_assoc($myquery)){
        $ii1+=$row1['o_key'];
    }
    $myquery1=mysqli_query($conn,"SELECT `c_key` FROM other WHERE f_key=' $myid'");
    while ($row2=mysqli_fetch_assoc($myquery1)){
        $ii2+=$row2['o_key'];
    }
    $myquery2=mysqli_query($conn,"SELECT `c_key` FROM hosting WHERE f_key='$myid'");
    while ($row3=mysqli_fetch_assoc($myquery2)){
        $ii3+=$row3['o_key'];
    }
    $myquer3=mysqli_query($conn,"SELECT `c_key` FROM developer WHERE f_key='$myid'");
    while ($row4=mysqli_fetch_assoc($myquer3)){
        $ii4+=$row4['o_key'];
    }
 //  echo $ii=$ii1+$ii2+$ii3+$ii4;
}
if(isset($_POST['hosting'])){
    $id=$_POST['hosting'];
    mysqli_query($conn,"UPDATE hosting set c_key=0 WHERE f_key='$id'");
    $ii1=0;$ii2=0;$ii3=0;$ii4=0;
    $myquery=mysqli_query($conn,"SELECT `c_key` FROM billing WHERE f_key='$myid'");
    while ($row1=mysqli_fetch_assoc($myquery)){
        $ii1+=$row1['o_key'];
    }
    $myquery1=mysqli_query($conn,"SELECT `c_key` FROM other WHERE f_key='$myid'");
    while ($row2=mysqli_fetch_assoc($myquery1)){
        $ii2+=$row2['o_key'];
    }
    $myquery2=mysqli_query($conn,"SELECT `c_key` FROM hosting WHERE f_key='$myid'");
    while ($row3=mysqli_fetch_assoc($myquery2)){
        $ii3+=$row3['o_key'];
    }
    $myquer3=mysqli_query($conn,"SELECT `c_key` FROM developer WHERE f_key='$myid'");
    while ($row4=mysqli_fetch_assoc($myquer3)){
        $ii4+=$row4['o_key'];
    }
  // echo $ii=$ii1+$ii2+$ii3+$ii4;
}
if(isset($_POST['other'])){
    $id=$_POST['other'];
    mysqli_query($conn,"UPDATE other set c_key=0 WHERE f_key='$id'");
    $ii1=0;$ii2=0;$ii3=0;$ii4=0;
    $myquery=mysqli_query($conn,"SELECT `c_key` FROM billing WHERE f_key='$myid'");
    while ($row1=mysqli_fetch_assoc($myquery)){
        $ii1+=$row1['o_key'];
    }
    $myquery1=mysqli_query($conn,"SELECT `c_key` FROM other WHERE f_key='$myid'");
    while ($row2=mysqli_fetch_assoc($myquery1)){
        $ii2+=$row2['o_key'];
    }
    $myquery2=mysqli_query($conn,"SELECT `c_key` FROM hosting WHERE f_key='$myid'");
    while ($row3=mysqli_fetch_assoc($myquery2)){
        $ii3+=$row3['o_key'];
    }
    $myquer3=mysqli_query($conn,"SELECT `c_key` FROM developer WHERE f_key='$myid'");
    while ($row4=mysqli_fetch_assoc($myquer3)){
        $ii4+=$row4['o_key'];
    }
   echo $ii=$ii1+$ii2+$ii3+$ii4;
}
if(isset($_POST['my_id']) && isset($_POST['department'])){
     $id=$_POST['my_id'];
     $deparment=$_POST['department'];
     if($deparment=="billing") {
         $q=mysqli_query($conn,"SELECT * FROM billing WHERE f_key='$myid'");
         while ($xrow=mysqli_fetch_assoc($q)) {
             unlink('../img/' . $xrow['file_name']);
         }
         mysqli_query($conn, "DELETE  FROM billing WHERE f_key='$myid'");
     }else if($deparment=="developer"){
         $q=mysqli_query($conn,"SELECT * FROM developer WHERE f_key='$myid'");
         while ($xrow=mysqli_fetch_assoc($q)) {
             unlink('../img/' . $xrow['file_name']);
         }
         mysqli_query($conn, "DELETE  FROM developer WHERE f_key='$myid'");
     }else if($deparment=="hosting"){
         $q=mysqli_query($conn,"SELECT * FROM hosting WHERE f_key='$myid'");
         while ($xrow=mysqli_fetch_assoc($q)) {
             unlink('../img/' . $xrow['file_name']);
         }
         mysqli_query($conn, "DELETE  FROM hosting WHERE f_key='$myid'");
     }else if($deparment=="other"){
         $q=mysqli_query($conn,"SELECT * FROM other WHERE f_key='$myid'");
         while ($xrow=mysqli_fetch_assoc($q)) {
             unlink('../img/' . $xrow['file_name']);
         }
         mysqli_query($conn, "DELETE  FROM other WHERE f_key='$myid'");
     }
}
if(isset($_POST['text'])){
    $dt=date('d-M-y h:i');
   $t=$_POST['text'];
   $dep=$_POST['depart'];
   $idp=$_POST['id'];
   $filex=$_POST['file_name'];
   if($dep=="billing") {
       mysqli_query($conn, "INSERT INTO `billing` VALUES (null,'','$t',1,'$filex',$idp,0,1,'$dt')");
   }else if($dep=="developer"){
       mysqli_query($conn, "INSERT INTO `developer` VALUES (null,'','$t',1,'$filex',$idp,0,1,'$dt')");
   }else if($dep=="hosting"){
       mysqli_query($conn, "INSERT INTO `hosting` VALUES (null,'','$t',1,'$filex',$idp,0,1,'$dt')");
   }else if($dep=="other"){
       mysqli_query($conn, "INSERT INTO `other` VALUES (null,'','$t',1,'$filex',$idp,0,1,'$dt')");
   }
}