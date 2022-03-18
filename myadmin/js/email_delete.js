function $(v) { return document.getElementById(v)}
function em_delete(x) {
    $('overlay').style.display="block";
    localStorage.removeItem("department");
    document.documentElement.style.overflow="block";
    $("overlay").style.marginTop=window.pageYOffset-17+"px";
    localStorage.setItem("ids",x);
}

function canceling() {
    $('overlay').style.display="none";
    localStorage.removeItem("department");
    document.documentElement.style.overflow="";
    $("overlay").style.marginTop=window.pageYOffset-17+"px";
    localStorage.removeItem("ids");
}

function deleted() {
    var ajax=new XMLHttpRequest();
    ajax.open("POST","emails.php",true);
    ajax.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4 && ajax.status==200){
            canceling();
            location.reload();
            emails();
        }
    }
    ajax.send("id="+localStorage.ids);

    
}

function RemoveCancelation(id) {
    var ajax=new XMLHttpRequest();
    ajax.open("POST","details.php",true);
    ajax.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
    ajax.onreadystatechange=function () {
        if(ajax.readyState === 4 && ajax.status === 200){
            location.reload();
        }
    }
    ajax.send("cancellation_id="+id);
}

function emails() {
    $('state').innerHTML="Emails";
    $("table").style.visibility="hidden";
    $("cancelTable").style.visibility="hidden";
    $("table2").style.visibility="hidden";
    $('email').style.display="block";
    $('emb').style.backgroundColor="rgb(51,204,255)";
    $('d').style.backgroundColor="white";
    $('cancell').style.backgroundColor="white";
    $('ord').style.backgroundColor="white";
    var ajax=new XMLHttpRequest();
    ajax.open("POST","emails.php",true);
    ajax.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4 && ajax.status==200){
            $('countem').innerHTML=0;
        }
    }
    ajax.send("update=myupdate");
}


function dash() {
    $('state').innerHTML="Dashboard";
    $("table").style.visibility="visible";
    $('email').style.display="none";
    $("cancelTable").style.visibility="hidden";
    $('cancell').style.backgroundColor="white";
    $('emb').style.backgroundColor="white";
    $('ord').style.backgroundColor="white";
    $('d').style.backgroundColor="rgb(51,204,255)";
    $("table2").style.visibility="hidden"
}

function ordersx(){
    $('state').innerHTML="New order";
    $("table").style.visibility="hidden";
    $('email').style.display="none";
    $("cancelTable").style.visibility="hidden";
    $('emb').style.backgroundColor="white";
    $('ord').style.backgroundColor="rgb(51,204,255)";
    $('d').style.backgroundColor="white";
    $('cancell').style.backgroundColor="white";
    $("table2").style.visibility="visible"
}
function cancels(){
    $('state').innerHTML="Cancellation";
    $("table").style.visibility="hidden";
    $('email').style.display="none";
    $('emb').style.backgroundColor="white";
    $('ord').style.backgroundColor="white";
    $('d').style.backgroundColor="white";
    $('cancell').style.backgroundColor="rgb(51,204,255)";
    $("cancelTable").style.visibility="visible";
    $("table2").style.visibility="hidden";
}

function gets(id) {

    $('singles').style.display="block"
    var j = new XMLHttpRequest();
    j.open("POST","details.php",true);
    j.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
    j.onreadystatechange = function () {
        if(j.readyState=== 4 && j.status=== 200){
            var lt = j.responseText.split('_');

            $('moreinfor').innerHTML="" +
                "<p>name : "+lt[13]+"</p>" +
                "<p>suraname : "+lt[14]+"</p>" +
                "<p>organisation: "+lt[15]+"</p>" +
                "<p>email : "+lt[16]+"</p>" +
                "<p>mobile phone : "+lt[17]+"</p>" +
                "<p>home phone: "+lt[18]+"</p>" +
                "<p>work phone: "+lt[19]+"</p>"+
                "<p>fax : "+lt[20]+"</p>" +
                "<p>region :"+lt[21]+"</p>" +
                "<p>address:"+lt[22]+"</p>" +
                "<p>address2 : "+lt[23]+"</p>"+
                "<p>city : "+lt[24]+"</p>"+
                "<p>province : "+lt[25]+"</p>"+
                "<p>postal code : "+lt[26]+"</p>";

        $('pd').innerHTML="" +
            "<p>NAME : "+lt[0]+"</p>" +
            "<p>EMAIL : "+lt[1]+"</p>" +
            "<p>PHONE NUMBER: "+lt[2]+"</p>" +
            "<p>REFERENCE : "+lt[6]+"</p>" +
            "<p>LOGIN USERNAME : "+lt[7]+"</p>" +
            "<p>LOGIN PASSWORD: "+lt[8]+"</p>";
        $('pw').innerHTML="" +
            "<p>PACKAGE : "+lt[4]+"</p>" +
            "<p>TOTAL AMOUNT : R "+lt[9]+"</p>" +
            "<p>DEPOSIT: R "+lt[10]+"</p>" +
            "<p>DATE : "+lt[11]+"</p>";


        $('text').innerHTML=lt[3];
        if(lt[5] != "") {
            var ft = lt[5].split('||');

            $('feature').innerHTML='';
            for (var i = 0; i < ft.length; i++) {
                    $('feature').innerHTML += "<p>"  + ft[i] + "</p>";
            }
        }else{
            $('feature').innerHTML='No add features';
        }
            $('Services').innerHTML='';
            if(lt[12] != ''){
            $('Services').innerHTML=lt[12];
        }

        }
    }
    j.send("id="+id);
}

function leaves() {
    $('singles').style.display="none";
}

function reject(id) {
    var ajax=new XMLHttpRequest();
    ajax.open("POST","details.php",true);
    ajax.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4 && ajax.status==200){
            location.reload();
        }
    }
    ajax.send("reject_id="+id);
}

function accep(id,bt,td) {
    localStorage.setItem("xid",id);
    $(bt).style.display="none";
    $("p_date").innerHTML="DEATH LINE ";
    $(td).innerHTML="<input type='date' id='dates'><button onclick='sends(\"dates\")' id='btn'>Save</button>"
}

function sends(dt) {
   //alert(localStorage.xid+" "+$(dt).value);
    if($(dt).value.length == 10 && $(dt).value.match("-")){
        var ajax=new XMLHttpRequest();
        ajax.open("POST","details.php",true);
        ajax.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
        ajax.onreadystatechange=function () {
            if(ajax.readyState == 4 && ajax.status==200){
               localStorage.removeItem("xid");
               location.reload();
            }
        }
        ajax.send("accept_id="+localStorage.xid+"&dates="+$(dt).value);
    }else {
        alert("Please enter correct date split by - , (e.g) 12-01-2017");
    }

}

function remove_project(id) {
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "delete_user.php", true);
    ajax.setRequestHeader("Content-type", "Application/x-www-form-urlencoded");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            location.reload();
        }
    }
    ajax.send("id="+id);

}