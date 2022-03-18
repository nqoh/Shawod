<?php
require '../connect.php';
$email='';$txt='';$pass='';
if(isset($_SESSION['id']) && isset($_SESSION['uname'])) {
    $id = $_GET['id'];
    $qrry = mysqli_query($conn, "Select * FROM user_emails WHERE f_key='$id' AND email !=''");
    $qrry2 = mysqli_query($conn, "Select * FROM user_emails WHERE f_key='$id' AND email =''");
    $row2 = mysqli_fetch_assoc($qrry2);$domain = $row2['domain'];$no_email = $row2['no_emails'];
    $i = 0;$user_status = '';$at = "@";
    while ($row = mysqli_fetch_assoc($qrry)) {
        $emails = $row['email'];$pass = $row['password'];$id = $row['id'];$i++;
        if ($row['user_status'] == 1) {
            $email .= "<p style=\"margin-left: 10px;margin-top:7px; font-size:18px\">$i. $emails$at$domain </p>";
        } else {
            $email .= "<p style=\"margin-left: 10px;margin-top:7px; font-size:18px\">$i. $emails$at$domain <button onclick='delete_em(\"$id\",\"$emails\",\"$domain\")' id=\"btn\">Activate</button>&nbsp;Password: $pass</p>";
        }

    };

    if ($i != $no_email) {
        $add_btn = '<button id="btn"  class="add_btn" style="margin-left: 140px; display:block" onclick="addss()">Add</button>';
    } else {
        $add_btn = '';
    }

    if ($email != "") {
        $id = $_GET['id'];
        $txt = "<div class=\"label\" style=\"margin-left: 0px\">Emails Account</div>
          Add Emails:<input type='number' min='0' value='$no_email' id='em_num' step='1' style='width: 100px'>
          <button onclick=\"pudates($id,'em_num')\">Add</button>&nbsp;<span style='color: green' id='er'></span>
    <!--<p style=\"margin-left: 10px; margin-top:7px; font-size:18px \" ><u>Your have $i/$no_email emails accounts.</u></p>-->
       $email

     <div style=\"width:auto; height:300px; padding:5px; display:none\" id=\"add_mails\" class='em'>
     <input type=\"text\" id=\"txt\"   style=\"margin-left: 10px;\">
     <i  class=\"icon\" id=\"mail\" style='margin-top: 8px;' >|@$domain</i><br>
     <input type=\"password\" id=\"pass1\" style=\"margin-left: 140px;\" class=\"txt_field\" placeholder=\"Password\" ><br>
     <input type=\"password\" id=\"pass2\" style=\"margin-left: 140px;\" class=\"txt_field\" placeholder=\"Retype-password\"
     
     <span style=\"color:red; margin-left: 150px\" id=\"error\"></span><br>
     <button id=\"btn\" style=\"margin-left:140px;\" onClick=\"saves()\">Save</button>
     <button id=\"btn\" style=\"margin-left:140px;\" onClick=\"collapes()\">Close</button>
     </div>";
    } else {
        $txt = "<br>
    <label>Add Email Accounts</label><br>
    <input type=\"text\" id='domainx' class=\"txt_field\" placeholder=\"Enter domain\" >
    <input type='number' min='0' value='0' id='account_num' step='1' style='width: 100px'>
    <button id=\"btn\"  onClick=\"add_new_account('$id')\">Save</button>
    ";
    }
}
?>

<script>

    function add_new_account(id){

        var dmn=document.getElementById('domainx').value;
        var ajx = new XMLHttpRequest();
        ajx.open("POST", 'post_data.php', true);
        ajx.setRequestHeader("Content-type", "Application/x-www-form-urlencoded");
        ajx.onreadystatechange = function () {
            if (ajx.readyState === 4 && ajx.status === 200) {
                alert(ajx.responseText);
                window.location.reload();
            }
        }
        ajx.send("domains="+dmn+"&account_nams="+document.getElementById('account_num').value+"&id="+id);
    }


    function addss(){
        document.getElementById("add_mails").style.display="block";
    }

    function delete_em(user_id,name,domain) {
        var ajx = new XMLHttpRequest();
        ajx.open("POST", 'post_data.php', true);
        ajx.setRequestHeader("Content-type", "Application/x-www-form-urlencoded");
        ajx.onreadystatechange = function () {
            if (ajx.readyState === 4 && ajx.status === 200) {
                alert(ajx.responseText);
                window.location.reload();
            }
        }
        ajx.send("id="+user_id+"&name="+name+"&domain="+domain);
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


    function pudates(id,num) {
        var ajx = new XMLHttpRequest();
        ajx.open("POST", 'post_data.php', true);
        ajx.setRequestHeader("Content-type", "Application/x-www-form-urlencoded");
        ajx.onreadystatechange = function () {
            if (ajx.readyState === 4 && ajx.status === 200) {
                alert(ajx.responseText);
            }
        }
        ajx.send("id=" + id + "&email=" + document.getElementById(num).value);
    }

</script>


