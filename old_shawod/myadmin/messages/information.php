<?php
session_start();
$msg='';
$priv='';
$px='';
require '../connect.php';
if(isset($_SESSION['uname']) && $_SESSION['id']){
    $id=$_SESSION['uname'];
    $myid=$_SESSION['id'];
    $query=mysqli_query($conn,"SELECT * FROM not_approved WHERE id_client='$id'");
    if($row=mysqli_fetch_assoc($query)) {
        $Name = $row['name'];
        $bquery = mysqli_query($conn,"SELECT * FROM billing WHERE f_key='$myid' AND subject!='' ORDER BY id ASC");
        $p=0;
        while ($g_title = mysqli_fetch_assoc($bquery)) {
            $title = $g_title['subject'];
            $g_id = $g_title['id'];
            $message = $g_title['text'];
            $date3 = substr($g_title['time'], 0, 9);
            $time3 = substr($g_title['time'], 9, 14);

        }

            $query = mysqli_query($conn, "SELECT * FROM billing WHERE f_key='$myid' AND subject='' ORDER BY id ASC");
            $query2 = mysqli_query($conn, "SELECT * FROM billing WHERE f_key='$myid' AND o_key=1 ORDER BY id DESC ");
            $myrow2 = mysqli_fetch_assoc($query2);
            $text2 = $myrow2['text'];
            $date2 = substr($myrow2['time'], 0, 9);
            $time2 = substr($myrow2['time'], 9, 14);
            $i = 0;
            $x = 0;
            while ($myrow = mysqli_fetch_assoc($query)) {
                    $text = $myrow['text'];
                    $date = substr($myrow['time'], 0, 9);
                    $time = substr($myrow['time'], 9, 14);

                    $priv.= "
         <div>
         <p style=\"margin-left:40px;margin-bottom:-35px;font-size:13px; color:rgb(109,109,109)\"> $date | $time </p><br>
         <p style=\"margin-left:30px\">$text</p>
         </div>";

            }

            /*$msg = "<div><p class='bill'><u>$title</u></p><br><p style='margin-left:25px; font-size:18px'><div  style=\"display:none\" id=\"prev$p\">$priv</div><p style=\"margin-left:40px;margin-bottom:-35px;font-size:13px; color:rgb(109,109,109)\"> $date3 | $time3 </p><br><br>
               $message <span id=\"view$p\" class='view' onClick=\"opens('view$p','prev$p','reply$p')\">View</span> </p>
               <div id=\"reply$p\" style=\"width:100%; height:100px; margin-left:30px; display:none\">
        <span id=\"status\" style=\"color:red;\"></span><input type=\"text\" id=\"text_input\"><br> <input type=\"file\" id=\"file\">
        <div class=\"photo\"> Attact a photo</div><span class=\"resolved\">Resolved</span>
        <span id=\"close$p\" class='close'  onClick=\"closed('view$p','prev$p','reply$p')\">Collapse</span><button id=\"rp\">Reply</button><br> <span id=\"filename\"> </span>
     </div>

     </div>";*/

            $msg .= "<div><p class='bill'><u>$title</u></p><br><p style='margin-left:25px; font-size:18px'><div  style=\"display:none\" id=\"prev$p\"><p style=\"margin - left:40px;margin - bottom:-85px;font - size:10px; color:rgb(109, 109, 109)\"> $date3 | $time3 </p>
         <p style=\"margin - left:30px; margin - top: -16px\">$message</p> $priv</div><p style=\"margin-left:40px;margin-bottom:-35px;font-size:13px; color:rgb(109,109,109)\"> $date2 | $time2 </p><br><br>
               $text2 <span id=\"view$p\" class='view' onClick=\"opens('view$p','prev$p','reply$p')\">View</span> </p>
               <div id=\"reply$p\" style=\"width:100%; height:100px; margin-left:30px; display:none\">
        <span id=\"status\" style=\"color:red;\"></span><input type=\"text\" id=\"text_input\"><br> <input type=\"file\" id=\"file\">
        <div class=\"photo\"> Attact a photo</div><span class=\"resolved\">Resolved</span>
        <span id=\"close$p\" class='close'  onClick=\"closed('view$p','prev$p','reply$p')\">Collapse</span><button id=\"rp\">Reply</button><br> <span id=\"filename\"> </span>
     </div>
        
     </div>";

        }
}else{
    header('location:../login');
}
if(isset($_POST['closed'])){
    session_destroy();
    header('location:../login');
}