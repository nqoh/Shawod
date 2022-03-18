function _(x){return  document.getElementById(x);}

function replys(x,p,r,p_m,id,t_name,txt,fl,d) {
   // upload_file(fl);

    if (_(txt).value != "" || _(fl).value != "" ) {
        var ajaxx = new XMLHttpRequest();
        ajaxx.open('POST', 'getdata.php', true);
        ajaxx.setRequestHeader('Content-type', 'Application/x-www-form-urlencoded');
        ajaxx.onreadystatechange = function () {
            if (ajaxx.readyState == 4 && ajaxx.status == 200) {

                location.reload();
                opens(x, p, r, p_m, id, t_name);
                localStorage.removeItem("file_name");
            }
        }
        ajaxx.send("text=" + _(txt).value + "&id=" + id + "&file_name=" +localStorage.file_name+"&depart="+d);
    }else{
        _("status").innerHTML="Please respond by writing some text or attach a snapshot"
    }

}


function upload_file(flx) {

    var file = _(flx).files[0];
    localStorage.setItem("file_name",file.name);
    if(_(flx).value != "") {
        var formdata = new FormData();
        formdata.append(flx, file);
        var a = new XMLHttpRequest();
        a.upload.addEventListener("progress", progressHandler, false);
        a.addEventListener("load", completeHandler, false);
        a.addEventListener("error", errorHandler, false);
        a.addEventListener("abort", abortHandler, false);
        a.open("POST", "getdata.php");
        a.send(formdata);
    }else{
        alert("hi nqobile")
    }
}
function progressHandler(event){
    var percent = (event.loaded / event.total) * 100;
    _("filename").innerHTML = Math.round(percent)+"% please wait...";
}
function completeHandler(event){

}
function errorHandler(event){
    //   _("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
    //  _("status").innerHTML = "Upload Aborted";
}
function clear_sub() {
    if(_("sub").value !=""){
        _("sub").style.border="1px solid silver"
        _("erro_s").innerHTML="";
    }

}
function clear_text() {
    if(_("txt").value !=""){
        _("txt").style.border="1px solid silver";
        _("erro_t").innerHTML="";
    }
}
function clear_error() {
    if(_("selector").value !="select"){
        _("erro_d").innerHTML = "";
        _("selector").style.border = "";
    }
}



function Send_msg(selc,txt,id) {
    var depat =  document.getElementById(selc).value;
    var text =  document.getElementById(txt).value;
    var subje="";
    if (depat == "select") {
        document.getElementById("erro_d").innerHTML = "Please select department";
        document.getElementById(selc).style.border = "1px solid red";
    }else if (text == "") {
        document.getElementById("erro_t").innerHTML = "Please write some text message";
        document.getElementById(txt).style.border = "1px solid red";
    } else {
        var ajax = new XMLHttpRequest();
        ajax.open('POST', 'send_notification.php', true);
        ajax.setRequestHeader('Content-type', 'Application/x-www-form-urlencoded');
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById(selc).value="select";
                document.getElementById(txt).value="";
                document.getElementById("success").innerHTML = ajax.responseText
            }
        }
        ajax.send("depart=" + depat + "&subject=" + subje + "&text=" + text + "&id=" + id);
    }
}
        var cp="open"
        function img_dsp(xx) {
    if(cp=="open"){
        _(xx).style.display="block";
        cp="close";
    }else if(cp=="close"){
        _(xx).style.display="none";
        cp="open";
    }

        }


