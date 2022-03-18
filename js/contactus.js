function _(x){
    return document.getElementById(x);
}
function mouse_in(nm) {
    _(nm).style.backgroundColor="white"
}

function name_out(nx,error) {
    if(_(nx).value !="") {
        if (_(nx).value.trim().length < 3) {
            _(error).innerHTML = "Three or more characters allowed"
            _(nx).style.border="1px solid red";
            return false
        } else {
            if (_(nx).value.trim().match('^[0-9]')) {
                _(error).innerHTML = "Name can't start with number"
                _(nx).style.border="1px solid red";
                return false
            } else {
                _(error).innerHTML = ""
                _(nx).style.border="none";
            }
        }
    }else{
        _(error).innerHTML = "Enter your name"
        _(nx).style.border="1px solid red";
        return false
    }
}

function subj(c,error){
    if(_(c).value.trim() != ""){
        if(_(c).value.trim().length >= 4){
            _(c).style.border="none";
            _(error).innerHTML="";
        }else{
            _(error).innerHTML="Enter 4 or more characters";
            _(c).style.border="1px solid red";
        }
    }else{
        _(error).innerHTML = "Please write your subject";
        _(c).style.border="1px solid red";
    }
}


function texts(vl,rx) {
    if(_(vl).value.trim() != ""){

    }else{
        _(rx).innerHTML="Please write your message"
        _(vl).style.border="1px solid red";
        return false
    }
    _(rx).innerHTML="";
    _(vl).style.border="none";
}

function check_email(email,r) {
    var ajax = new XMLHttpRequest();
    ajax.open("POST","postfile.php",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4 && ajax.status==200){
            if(ajax.responseText=="Invalid email address"){
                _(email).style.border="1px solid red";
            }else{
                _(email).style.border="none";
            }
            _(r).innerHTML=ajax.responseText
        }
    }
    ajax.send("email="+_(email).value);
}

function send_data(nam,email,text) {
        if (_(text).value.trim() == "") {_(text).style.border = "1px solid red"}else{_(text).style.backgroundColor = "white"}
        if(_(nam).value.trim()==""){_(nam).style.border = "1px solid red"}else{_(nam).style.border = "none"}
        if(_(email).value.trim()==""){_(email).style.border = "1px solid red"}else{_(nam).style.border = "none"}


        if (_(nam).value.trim() != "" && _(email).value.trim() != "" && _(text).value.trim() != "") {
            ajax_post(nam, email, text);
            // localStorage.removeItem("discounts");
        }
}



function ajax_post(n,e,t) {
    _("reference").innerHTML="Please wait...";
    var ajax2 = new XMLHttpRequest();
    ajax2.open("POST","postfile.php",true);
    ajax2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax2.onreadystatechange=function () {
        if(ajax2.readyState === 4 && ajax2.status === 200){
            _("reference").innerHTML=ajax2.responseText;
            _('namee').value ='';
            _('emaile').value = '';
            _('textareas').value = '';
        }
    }
    ajax2.send("name="+_(n).value+"&emails="+_(e).value+"&text="+_(t).value);
}