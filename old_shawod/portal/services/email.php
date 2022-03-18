<?php
require '../connect.php';
    $email='';$txt='';$pass='';
    if(isset($_SESSION['id']) && isset($_SESSION['uname']))
    $id=$_SESSION['id'];
    $qrry = mysqli_query($conn, "Select * FROM user_emails WHERE f_key='$id' AND password !='' ");
    $qrry2 = mysqli_query($conn, "Select * FROM user_emails WHERE f_key='$id' ");
    $row2=mysqli_fetch_assoc($qrry2);$domain=$row2['domain'];$no_email=$row2['no_emails'];
    $i=0;$user_status=''; $at="@";$emails='';
    while ($row=mysqli_fetch_assoc($qrry)){
        $emails=$row['email'];
        $domain2=$row['domain'];
        $pass=$row['password'];
        $id=$row['id'];
        $i++;
        if($row['user_status'] == 1){
            $user_status="Active";
        }else{
            $user_status="Not yet active";
        }
        if($pass != "") {
            $email .= "<p style=\"margin-left: 120px;margin-top:7px; font-size:18px\">$i. $emails$at$domain <button onclick='delete_em(\"$id\",\"$emails\",\"$domain\")' id=\"btn\">Remove</button>$user_status</p>";
        }
        };

    if($i != $no_email) {
        $add_btn = '<button id="btn"  class="add_btn" style="margin-left: 140px; display:block" onclick="addss()">Add</button>';
    }else{
        $add_btn='';
    }

if($domain !=""){
    $txt="<div class=\"label\" style=\"margin-left: 80px\">Emails Account</div>
    <p style=\"margin-left: 120px; margin-top:7px; font-size:18px \" > Your have $i/$no_email emails accounts.</p>
       $email
       $add_btn
     <div style=\"width:auto; height:300px; padding:5px; display:none\" id=\"add_mails\" class='em'>
     <input type=\"text\" id=\"txt\"   style=\"margin-left: 140px;\">
     <i  class=\"icon\" id=\"mail\" style='margin-top: 8px;' >|@$domain</i><br>
     <input type=\"password\" id=\"pass1\" style=\"margin-left: 140px;\" class=\"txt_field\" placeholder=\"Password\" ><br>
     <input type=\"password\" id=\"pass2\" style=\"margin-left: 140px;\" class=\"txt_field\" placeholder=\"Retype-password\"><br>
     <span style=\"color:red; margin-left: 150px\" id=\"error\"></span><br>
     <button id=\"btn\" style=\"margin-left:140px;\" onClick=\"saves()\">Save</button>
     <button id=\"btn\" style=\"margin-left:140px;\" onClick=\"collapes()\">Close</button>
     </div>"  ;
}else{
    $txt="<div class=\"label\" style=\"margin-left: 80px\">Emails Account</div>
          <p style=\"margin-left: 120px; margin-top:7px; font-size:18px \" > Your have 0/0 emails accounts.</p>";
}
?>

<script>
function addss() {
    document.getElementById("add_mails").style.display="block";
}

function delete_em(user_id,name,domain) {
    document.getElementById('overlay').style.display = "block";
    document.getElementById('confirms').style.display = "block";
    document.getElementById("add_mails").style.display = "none";
    document.getElementById('delete_add_div').innerHTML="<p style=\"margin-left: 7px ; font-size: 20px; font-weight: bold\">"+
        "Are you sure you want to delete "+name+"@"+domain+"</p>"
       +"<div style=\"float: right; margin-right: 5px\">\n"+
    "<button id=\"btn\" onclick=\"dlt("+user_id+")\">Ok</button>\n"+
    "<button id=\"btn\" onclick=\"cancel_delete()\">Cancel</button>\n</div>";



}


function dlt(user_id) {
    var ajx = new XMLHttpRequest();
    ajx.open("POST", 'post_data.php', true)
    ajx.setRequestHeader("Content-type", "Application/x-www-form-urlencoded");
    ajx.onreadystatechange = function () {
        if (ajx.readyState === 4 && ajx.status === 200) {
             document.getElementById("add_mails").style.display = "none";
             window.location.reload();
        }
    }
    ajx.send("email_id="+user_id);
}

function collapes(){

    document.getElementById("add_mails").style.display="none";
}



function saves(){
    var pass1=document.getElementById("pass1").value;
    var pass2=document.getElementById("pass2").value;
    var mail=document.getElementById("txt").value.trim();
    document.getElementById("error").innerHTML="";

    if(pass1 === "" || pass2 === "" || mail === "" ){
        document.getElementById("error").innerHTML="All fields required";
       return false
    }


    if(pass1 !== pass2){
        document.getElementById("error").innerHTML="Password do not match";
        return false;
    }

    var ajx= new XMLHttpRequest();
    ajx.open("POST",'post_data.php',true)
    ajx.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
    ajx.onreadystatechange=function () {
        if(ajx.readyState === 4 && ajx.status === 200){
            document.getElementById("error").innerHTML="<span style=\"color:green\">"+ajx.responseText+"</span>";
            setTimeout(refresh_page(),100,true);
        }
    }
    ajx.send("password="+pass1+"&email="+mail);

}
function refresh_page(){
    window.location.reload();
}
</script>


