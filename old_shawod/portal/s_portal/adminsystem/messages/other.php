<?php
$msg4='';
$priv='';
$file2='';
$fifile='';
$fifile3='';
$i = 0;
require '../connect.php';
if(isset( $_SESSION['id'])) {
        $myid = $_SESSION['id'];
        $query = mysqli_query($conn,"SELECT * FROM other WHERE f_key='$myid' AND subject!='' ORDER BY id ASC");
        $row=mysqli_fetch_assoc($query);
        $sub=$row['subject'];
        $text=$row['text'];if($text==""){$text="<p style='color: silver; float: left; margin-top: 1px'>Respond by attach picture</p>";}
        $date = substr($row['time'], 0, 9);
        $time = substr($row['time'], 9, 14);
        $img=$row['image'];
        $file=$row['file_name'];
        $src='';
        if($file=="undefined"){$src="";}else{$src="<br><img style='margin-left: 10px; display:block;' id='images14' width='350px' src='../img/$file'>";}
        if($img == 1){
            $image="<img  src='../thumbnails/chat.png' style='float: left; width: 15px'>";
        }else{
            $image="";
        }
        $query2 = mysqli_query($conn,"SELECT * FROM other WHERE f_key='$myid'  ORDER BY id ASC");
        $total=mysqli_num_rows($query2);
        $x=0;
        while($row2=mysqli_fetch_assoc($query2)){
            if($x > 0 && $x < $total-1) {
                $i+=$row2['o_key'];
                $file2=$row2['file_name'];
                $src2='';
                if($file2=="undefined"){$src2="";}else{$src2="<br><img style='margin-left: 10px; display:block;' id='images24' width='350px' src='../img/$file2'>";}
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

        $query3 = mysqli_query($conn,"SELECT * FROM other WHERE f_key='$myid'  ORDER BY id DESC ");
        $row3=mysqli_fetch_assoc($query3);
        $text3=$row3['text'];if($text3==""){$text3="<p style='color: silver; float: left; margin-top: 1px'>Respond by attach picture</p>";}
        $i+=$row3['o_key'];
        $date3 = substr($row3['time'], 0, 9);
        $time3 = substr($row3['time'], 9, 14);
        $img3=$row3['image'];
        $file3=$row3['file_name'];
        $src3='';
        if($file3=="undefined"){$src3="";}else{$src3="<br><img style='margin-left: 10px; display:none;' id='images5' width='350px' src='../img/$file3'>";}

        if($img3 == 1){$image3="<img  src='../thumbnails/chat.png' style='float: left; width: 15px'>";}else{
            $image3="";
        }
        if(mysqli_num_rows($query3) == 1){
            $msg4 =" <div><p class=\"bill\"><u>Other Department</u></p><p class=\"sub\" style='font-size: 20px'>$sub</p><br><p style=\"margin-left:25px; font-size:18px;\">
                <div id='pre_ms4' style='display: none'>$priv</div><p class='td'>  $date3 | $time3 </p><br><br>$image3 $text3 
                <span id=\"view4\" class='view' onmouseup=\"img_dsp('images5')\" onClick=\"opens('view4', 'prev4', 'reply4','pre_ms4',$myid,'other')\">View</span>$src3</p>
                <div id=\"reply4\" style=\"width:100%; height:100px; margin-left:30px; display:none\"><span id=\"status\" style=\"color:red;\"></span><br>
                <input type=\"text\" id=\"text_input4\" class='text_input'><br><input type=\"file\" class='file' id=\"file4\" onchange=\"add_file('file4','filename2')\"><div class=\"photo\">Attach a snapshot</div>
                <span class=\"resolved\" onmouseup=\"img_cls('images5')\" onClick=\"close_ticker('view4', 'prev4', 'reply4', 'pre_ms4', $myid,'other','images5')\">Resolved</span>
                <span id=\"close4\" class='close'   onClick=\"closed('view4', 'prev4', 'reply4','pre_ms4')\" onmouseup=\"img_cls('images4')\">Collapse</span>
                <button id=\"rp\" onmouseup=\"upload_file('file4')\"   onclick=\"replys('view4', 'prev4', 'reply4','pre_ms4',$myid,'other','text_input4','file4','other')\">Reply</button><br><span id=\"filename2\"></span></div></p></div>";
        }else if(mysqli_num_rows($query3) < 1){
            $msg4 = "";
        }else {
            $msg4 = " <div><p class=\"bill\"><u>Hosting Department</u></p><p class=\"sub\" style='font-weight: bold; '>$sub</p><br><p style=\"margin-left:25px; font-size:18px;\">
                <div  style=\"display:none\" id=\"prev4\"><div > <p class='td'> $date | $time </p><br><p style=\"margin-left:30px\">$image $text $src</p>
                </div></div><div id='pre_ms4' style='display: none'>$priv</div><p class='td'>  $date3 | $time3 </p><br><br>$image3 $text3 
                <span id=\"view4\" class='view'  onmouseup=\"img_dsp('images5')\"  onClick=\"opens('view4', 'prev4', 'reply4','pre_ms4',$myid,'other')\">View</span>$src3<br><br></p>
                <div id=\"reply4\" style=\"width:100%; height:100px; margin-left:30px; margin-top: -20px; display:none\"><span id=\"status\" style=\"color:red;\"></span><br>
                <input type=\"text\" id=\"text_input4\" class='text_input'><br><input type=\"file\" class='file' id=\"file4\" onchange=\"add_file('file4','filename2')\"><div class=\"photo\">Attach a snapshot</div>
                <span class=\"resolved\" onmouseup=\"img_cls('images5')\" onClick=\"close_ticker('view4', 'prev4', 'reply4','pre_ms4',$myid,'other','images5')\">Resolved</span>
                <span id=\"close4\" class='close'  onClick=\"closed('view4', 'prev4', 'reply4','pre_ms4')\" onmouseup=\"img_cls('images5')\" >Collapse</span>
                <button id=\"rp\" onmouseup=\"upload_file('file4')\"  onclick=\"replys('view4', 'prev4', 'reply3','pre_ms3',$myid,'other','text_input4','file4','other')\">Reply</button><br><span id=\"filename2\"></span></div></p></div>";
        }


}

if(isset($_FILES["file"]["name"])){
    $fileName = $_FILES["file"]["name"]; // The file name
    $fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["file"]["type"]; // The type of file it is
    $fileSize = $_FILES["file"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
    move_uploaded_file($fileTmpLoc, "../img/$fileName");
}