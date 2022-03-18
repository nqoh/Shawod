function _(x){return  document.getElementById(x);}

function replys(x,p,r,p_m,id,t_name,txt,fl,d) {
     var file = _(fl).files[0];
    if(file) {
        var file = _(fl).files[0];
        localStorage.setItem("file_name",file.name);
        var formdata = new FormData();
        formdata.append(fl, file);
        var a = new XMLHttpRequest();
        a.upload.addEventListener("progress", progressHandler, false);
        a.addEventListener("load", completeHandler, false);
        a.addEventListener("error", errorHandler, false);
        a.addEventListener("abort", abortHandler, false);
        a.open("POST", "getdata.php");
        a.send(formdata);
    }

    if (_(txt).value !== "" || _(fl).value !== "" ) {
        var ajaxx = new XMLHttpRequest();
        ajaxx.open('POST', 'getdata.php', true);
        ajaxx.setRequestHeader('Content-type', 'Application/x-www-form-urlencoded');
        ajaxx.onreadystatechange = function () {
            if (ajaxx.readyState === 4 && ajaxx.status === 200) {
                if(file){}else{location.reload();}
                opens(x, p, r, p_m, id, t_name);
                localStorage.removeItem("file_name");
            }
        }
        ajaxx.send("text=" + _(txt).value + "&id=" + id + "&file_name=" +localStorage.file_name+"&depart="+d);
    }else{
        _("status").innerHTML="Please respond by writing some text or attach a snapshot"
    }

}
function progressHandler(event){
    var percent = (event.loaded / event.total) * 100;
    _("filename2").innerHTML = Math.round(percent)+"% Please wait...";
}
function completeHandler(event){
    location.reload();
    return false;

}
function errorHandler(event){
    //   _("status").innerHTML = "Upload Failed";
     return false;
}
function abortHandler(event){
    //  _("status").innerHTML = "Upload Aborted";
     return false;
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



function Send_msg(selc,sub,txt,id) {
    var depat = _(selc).value;
    var subje = _(sub).value;
    var text = _(txt).value;
    if (depat == "select") {
        _("erro_d").innerHTML = "Please select department";
        _(selc).style.border = "1px solid red";
    } else if (subje == "") {
        _("erro_s").innerHTML = "Please write subject"
        _(sub).style.border = "1px solid red";
    } else if (text == "") {
        _("erro_t").innerHTML = "Please write some text message";
        _(txt).style.border = "1px solid red";
    } else {
        var ajax = new XMLHttpRequest();
        ajax.open('POST', 'save_depart.php', true);
        ajax.setRequestHeader('Content-type', 'Application/x-www-form-urlencoded');
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                _("success").innerHTML = ajax.responseText
            }
        }
        ajax.send("depart=" + depat + "&subject=" + subje + "&text=" + text + "&id=" + id);
    }
}

