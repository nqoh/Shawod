<?php
  require '../connect.php';
if(isset($_POST['depart']) && isset($_POST['subject']) && isset($_POST['text'])){
    $dep=$_POST['depart'];$sub=$_POST['subject'];$text=$_POST['text'];$id=$_POST['id'];
    $dt=date('d-M-y h:i');
    if($dep =="billing") {
        $get=mysqli_query($conn,"SELECT * FROM `billing` WHERE f_key='$id'");
        if(mysqli_num_rows($get) < 1) {
            mysqli_query($conn, "INSERT INTO `billing` VALUES (null,'$sub','$text',0,'undefined','$id',1,0,'$dt')");
            echo "Your chat is successful opened with " . $dep . " department";
        }else{
            echo "<span style='color: red'>Please resolved the billing department chat before open a new billing department chat</span>";
        }
    }else if($dep =="developer"){
        $get=mysqli_query($conn,"SELECT * FROM `developer` WHERE f_key='$id'");
        if(mysqli_num_rows($get) < 1) {
            mysqli_query($conn, "INSERT INTO `developer` VALUES (null,'$sub','$text',0,'undefined','$id',1,0,'$dt')");
            echo "Your chat is successful opened with " . $dep . " department";
        }else{
            echo "<span style='color: red'>Please resolved the developers department chat before open a new developers department chat</span>";
        }
    }else if($dep == "hosting"){
        $get=mysqli_query($conn,"SELECT * FROM `hosting` WHERE f_key='$id'");
        if(mysqli_num_rows($get) < 1) {
            mysqli_query($conn, "INSERT INTO `hosting` VALUES (null,'$sub','$text',0,'undefined','$id',1,0,'$dt')");
            echo "Your chat is successful opened with " . $dep . " department";
        }else{
            echo "<span style='color: red'>Please resolved the hosting department chat before open a new hosting department chat</span>";
        }
    }else if($dep == "other"){
        $get=mysqli_query($conn,"SELECT * FROM `other` WHERE f_key='$id'");
        if(mysqli_num_rows($get) < 1) {
            mysqli_query($conn, "INSERT INTO `other` VALUES (null,'$sub','$text',0,'undefined','$id',1,0,'$dt')");
            echo "Your chat is successful opened with " . $dep . " department";
        }else{
            echo "<span style='color: red'>Please resolved the other department chat before open a new other department chat</span>";
        }
    }
}
?>