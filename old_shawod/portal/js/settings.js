function _(e) {return document.getElementById(e)}


var n_last="save_l";
function last_name() {
    if(n_last ==="save_l") {
        _("s_last").removeAttribute("disabled");
        _("s_img2").src = "../thumbnails/save.png";
        n_last = "open_n";
    } else {
        if (_("s_last").value === "") {
            _("s_last").setAttribute('disabled', 'disabled');
            _("s_img2").src = "../../thumbnails/sedit.gif";
            _("error").innerHTML="";
            _("s_last").style.border = "1px solid #ccc";
        }
        if(_("s_last").value !="") {
            if (_("s_last").value.trim().length < 3) {
                _("s_last").style.border = "1px solid red";
                _("s_img2").src = "../thumbnails/save.png";
                _("s_last").removeAttribute("disabled");
                _("error").innerHTML = "Last name must be three or more characters";
                return false;
            } else if (_("s_last").value.trim().match('^[0-9]')) {
                _("s_img2").src = "../thumbnails/save.png";
                _("s_last").removeAttribute("disabled");
                _("s_last").style.border = "1px solid red";
                _("error").innerHTML = "Last name must not begin with number";
                return false;
            }
            _("s_last").setAttribute('placeholder', _("s_last").value);
            ajaxpass(_("s_last").value, 'lname');
            _("s_last").setAttribute('disabled', 'disabled');
            _("s_last").style.border = "1px solid #ccc";
            _("error").innerHTML="";
            _("s_img2").src = "../../thumbnails/sedit.gif";
        }
        n_last= "save_l";
    }
}



var n_name="save_n"
function s_name() {
    if(n_name =="save_n") {
        _("s_names").removeAttribute("disabled");
        _("s_img1").src = "../thumbnails/save.png";
        n_name = "open_n";
    } else {
        if(_("s_names").value =="") {
            _("s_names").setAttribute('disabled','disabled');
            _("s_img1").src = "../../thumbnails/sedit.gif";
            _("error").innerHTML="";
            _("s_names").style.border = "1px solid #ccc";
        }
        if(_("s_names").value !="") {
            if(_("s_names").value.trim().length < 3){
                _("s_img1").src = "../thumbnails/save.png";
                _("s_names").removeAttribute("disabled");
                _("s_names").style.border="1px solid red";
                _("error").innerHTML="First name must be three or more characters";
                return false;
            } else if(_("s_names").value.trim().match('^[0-9]')){
                _("s_img1").src = "../thumbnails/save.png";
                _("s_names").removeAttribute("disabled");
                _("s_names").style.border="1px solid red";
                _("error").innerHTML="First name must not begin with number";
                return false;
            }
            _("s_names").setAttribute('placeholder', _("s_names").value);
            ajaxpass(_("s_names").value,'fname');
            _("s_names").setAttribute('disabled','disabled');
            _("s_img1").src = "../../thumbnails/sedit.gif";
            _("s_names").style.border="1px solid #ccc";
            _("error").innerHTML="";
            _("s_names").value = "";
        }
        n_name = "save_n";
    }
}



var n_adress="save_a"
function address() {
    if (n_adress == "save_a") {
        _("s_address").removeAttribute("disabled");
        _("s_img3").src = "../thumbnails/save.png";
        n_adress = "open_n";
    } else {
        if (_("s_address").value.trim() == "") {
            _("s_address").setAttribute('disabled', 'disabled');
            _("s_img3").src = "../../thumbnails/sedit.gif";
            _("error").innerHTML="";
            _("s_address").style.border = "1px solid #ccc";
            n_adress = "save_a";
            return false;
        }
        if (_("s_address").value.trim() != "") {
            if (_("s_address").value.trim().length < 3) {
                _("s_address").setAttribute('disabled', 'disabled');
                _("s_img3").src = "../../thumbnails/sedit.gif";
                _("s_address").removeAttribute("disabled");
                _("s_address").style.border = "1px solid red";
                _("error").innerHTML = "Address  must be three or more characters";
                return false;
            }
            _("s_address").setAttribute('placeholder', _("s_address").value);
            ajaxpass(_("s_address").value, 'address');
            _("s_address").style.border = "1px solid #ccc";
            _("error").innerHTML = "";
            _("s_address").value = "";
            _("s_address").setAttribute('disabled', 'disabled');
            _("s_img3").src = "../../thumbnails/sedit.gif";
            n_adress = "save_a";
        }
    }
}

var n_city="save_c"
function city() {
    if (n_city == "save_c") {
        _("s_city").removeAttribute("disabled");
        _("s_img4").src = "../thumbnails/save.png";
        n_city = "open_n";
    } else {
        if (_("s_city").value.trim() == "") {
            _("s_city").setAttribute('disabled', 'disabled');
            _("s_img4").src = "../../thumbnails/sedit.gif";
            _("error").innerHTML="";
            _("s_city").style.border = "1px solid #ccc";
            n_city = "save_c";
            return false;
        }

        if (_("s_city").value != "") {
            if (_("s_city").value.trim().length < 3) {
                _("s_city").style.border = "1px solid red";
                _("s_img4").src = "../thumbnails/save.png";
                _("s_city").removeAttribute("disabled");
                _("error").innerHTML = "City must be three or more characters"
                return false;
            }
            _("s_city").setAttribute('disabled', 'disabled');
            ajaxpass(_("s_city").value, 'city');
            _("s_img4").src = "../../thumbnails/sedit.gif";
            _("error").innerHTML = "";
            _("s_city").setAttribute('placeholder', _("s_city").value);
            _("s_city").value = "";
            _("s_city").style.border = "1px solid #ccc";
            n_city = "save_c";
        }
    }
}


var n_tell="save_t"
function tell() {
    if(n_tell =="save_t") {
        _("s_tell").removeAttribute("disabled");
        _("s_img5").src = "../thumbnails/save.png";
        n_tell = "open_n";
    } else {
        if (_("s_tell").value.trim() == "") {
            _("s_tell").setAttribute('disabled', 'disabled');
            _("s_img5").src = "../../thumbnails/sedit.gif";
            _("error").innerHTML="";
            _("s_tell").style.border = "1px solid #ccc";
            n_tell = "save_t";
            return false;
        }
        if (_("s_tell").value != "") {
            if (_("s_tell").value.trim().length == 10) {
                var contact = _("s_tell").value.split('');
                for (var i = 0; i < contact.length; i++) {
                    if (contact[i] == '0' || contact[i] == '1' || contact[i] == '2' || contact[i] == '3' || contact[i] == '4' || contact[i] == '5' ||
                        contact[i] == '6' || contact[i] == '7' || contact[i] == '8' || contact[i] == '9') {
                    } else {
                        _("s_tell").style.border = "1px solid red";
                        _("s_img5").src = "../thumbnails/save.png";
                        _("s_tell").removeAttribute("disabled");
                        _("error").innerHTML = "Invalid tell number only digit allow";
                        return false;
                    }
                }
                _("s_tell").setAttribute('disabled', 'disabled');
                ajaxpass(_("s_tell").value, 'tell');
                _("error").innerHTML = "";
                _("s_img5").src = "../../thumbnails/sedit.gif";
                _("s_tell").setAttribute('placeholder', _("s_tell").value);
                _("s_tell").value = "";
                _("s_tell").style.border = "1px solid #ccc";
                n_tell = "save_t";
            }else{
                _("s_tell").style.border = "1px solid red";
                _("s_img5").src = "../thumbnails/save.png";
                _("s_tell").removeAttribute("disabled");
                _("error").innerHTML = "Tell number must be 10 digit";
                return false;
            }
        }
    }
}


var n_email="save_e"
function change_mail() {
    if(n_email =="save_e") {
        _("s_email").removeAttribute("disabled");
        _("s_img6").src = "../thumbnails/save.png";
        n_email = "open_n";
    } else {
        if (_("s_email").value.trim() == "") {
            _("s_email").setAttribute('disabled', 'disabled');
            _("error").innerHTML="";
            _("s_email").style.border = "1px solid #ccc";
            _("s_img6").src = "../../thumbnails/sedit.gif";
            n_email = "save_t";
            return false;
        }
        if (_("s_email").value != "") {
            if(_("s_email").value.indexOf('@') > -1 && _("s_email").value.lastIndexOf('.') > -1){
                localStorage.setItem("email",_("s_email").value);
                _("error").innerHTML = "";
                _("s_email").style.border = "1px solid #ccc";
                _("s_email").setAttribute('disabled', 'disabled');
                _("s_img6").src="../../thumbnails/loading.gif";
                var ajax1= new XMLHttpRequest();
                ajax1.open('POST','pass_data.php',true);
                ajax1.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
                ajax1.onreadystatechange=function(){
                    if(ajax1.readyState == 4 && ajax1.status==200){
                        if(ajax1.responseText !=""){
                            _("s_email").style.border = "1px solid red";
                            _("s_img6").src = "../thumbnails/save.png";
                            _("s_email").removeAttribute("disabled");
                            _("error").innerHTML="Invalid email address";
                            _("s_email").value=ajax1.responseText;
                            return false;
                        }
                        _("s_email").setAttribute('disabled', 'disabled');
                        _("error").innerHTML = "";
                        _("s_img6").src = "../../thumbnails/sedit.gif";
                        _("s_email").setAttribute('placeholder', localStorage.email);
                        _("s_email").value = "";
                        _("s_email").style.border = "1px solid #ccc";
                        localStorage.removeItem("email")
                        n_email = "save_e";
                    }
                }
                ajax1.send("email="+_("s_email").value.trim());

            }else{
                _("s_email").style.border = "1px solid red";
                _("s_img6").src = "../thumbnails/save.png";
                _("s_email").removeAttribute("disabled");
                _("error").innerHTML="Invalid email address";
                return false
            }

        }
        _("s_email").setAttribute('disabled','disabled');
        _("s_img6").src = "../../thumbnails/sedit.gif";
        if(_("s_email").value !="") {
            _("s_email").setAttribute('placeholder', _("s_names").value);
            _("s_email").value = "";
        }
        n_email= "save_e";
    }
}


var n_note="save_n"
function s_note() {
    if(n_note =="save_n") {
        _("textareas").removeAttribute("disabled");
        _("s_img7").src = "../thumbnails/save.png";
        n_note = "open_n";
    } else {
        if (_("textareas").value.trim() == "") {
            _("textareas").setAttribute('disabled', 'disabled');
            _("error").innerHTML="";
            _("textareas").style.border = "1px solid #ccc";
            _("s_img7").src = "../../thumbnails/sedit.gif";
            n_note = "save_n";
            return false;
        }
        if (_("textareas").value.trim() != "") {
            if (_("textareas").value.trim().length < 10) {
                _("textareas").style.border = "1px solid red";
                _("s_img7").src = "../thumbnails/save.png";
                _("textareas").removeAttribute("disabled");
                _("error").innerHTML = "Note must be ten or more characters"
                return false;
            }
            _("textareas").setAttribute('disabled', 'disabled');
            ajaxpass(_("textareas").value, 'textareas');
            _("error").innerHTML = "";
            _("s_img7").src = "../../thumbnails/sedit.gif";
            _("textareas").setAttribute('placeholder', _("textareas").value);
            _("textareas").value = "";
            _("textareas").style.border = "1px solid #ccc";
            n_note = "save_n";
        }
    }
}

var n_pass="save_pass"
function pass() {
    if(n_pass =="save_pass") {
        _("s_pass").removeAttribute("disabled");
        _("s_img9").src = "../thumbnails/save.png";
        n_pass = "open_n";
    } else {
        _("s_pass").setAttribute('disabled','disabled');
        _("s_img9").src = "../../thumbnails/sedit.gif";
        if(_("s_pass").value !="") {
            _("s_pass").setAttribute('placeholder', _("s_names").value);
            _("s_pass").value = "";
        }
        n_pass= "save_pass";
    }
}

function s_uname() {
    _("s_uname").removeAttribute('disabled');
    _("s_pass").removeAttribute('disabled');
    _("s_img8").style.display="none";
    _("s_img9").style.display="block";
}


function pass() {
    _("s_uname").setAttribute('disabled',true);
    _("s_pass").setAttribute('disabled',true);
    _("s_img8").style.display="block";
    _("s_img9").style.display="none";
    if(_("s_uname").value.trim() !=="" && _("s_pass").value.trim() !==""){
        if(_("s_uname").value.trim() ===  _("s_pass").value.trim()){
            var ajax= new XMLHttpRequest();
            ajax.open('POST','pass_data.php',true);
            ajax.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
            ajax.onreadystatechange=function(){
                if(ajax.readyState == 4 && ajax.status==200){
                    _("pass_error").innerHTML='<span style="color:rgb(51,204,255)">'+ajax.responseText+'</span>';
                    _("s_uname").value=''; _("s_pass").value='';
                    _("s_uname").setAttribute('disabled',true);
                    _("s_pass").setAttribute('disabled',true);
                    _("s_img8").style.display="block";
                    _("s_img9").style.display="none";
                }
            }
            ajax.send("password="+_("s_pass").value.trim());

        }else{
            _("pass_error").innerHTML="Password and confirm do not match"
            s_uname();
        }
    }else{
        _("pass_error").innerHTML=""
        s_uname();
    }
}


function ajaxpass(val,types) {
    var ajax= new XMLHttpRequest();
    ajax.open('POST','pass_data.php',true);
    ajax.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
    ajax.onreadystatechange=function(){
        if(ajax.readyState == 4 && ajax.status==200){
        }
    }
    ajax.send("value="+val+"&typer="+types);
}

function cancel_form() {
    var dmain = _("dmain").value.trim(), digit = _("4digit").value.trim(),
        reseon = document.getElementsByClassName("cancellation").item(0).value.trim(),
        special = document.getElementsByClassName("special").item(0).value.trim();
    if (dmain !== "") {
        if (dmain.length < 5) {
            _("dmain_error").innerHTML = "Invalid domain name's";
            return false;
        }
        _("dmain_error").innerHTML = "";
    } else {
        _("dmain_error").innerHTML = "domain name's required";
        return false;
    }

    var contact = digit.split('');
    if(digit.length === 4) {
        for (var i = 0; i < contact.length; i++) {
            if (contact[i] == '0' || contact[i] == '1' || contact[i] == '2' || contact[i] == '3' || contact[i] == '4' || contact[i] == '5' ||
                contact[i] == '6' || contact[i] == '7' || contact[i] == '8' || contact[i] == '9') {
                _("card_error").innerHTML = "";
            } else {
                _("card_error").innerHTML = "Invalid card number";
                return false;
            }
        }
    }else{
        _("card_error").innerHTML = "Invalid card number";
        return false;
    }
    if(reseon !==  "") {
        if (reseon.length >= 30) {
            _("reason_error").innerHTML = ""
        } else {
            _("reason_error").innerHTML = "Characters must 30 or more"
            return false;
        }
    }else {
        _("reason_error").innerHTML = "Reason for cancellation required"
        return false;
    }

    if(special !==  "") {
        if (special.length >= 15) {
            _("special_error").innerHTML = ""
        } else {
            _("special_error").innerHTML = "Characters must 15 or more"
            return false;
        }
    }

    var ajax= new XMLHttpRequest();
    ajax.open('POST','pass_data.php',true);
    ajax.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
    ajax.onreadystatechange=function(){
        if(ajax.readyState == 4 && ajax.status==200){
            alert(ajax.responseText);
            location.reload();

        }
    }
    ajax.send("dmain="+dmain+"&digit="+digit+"&reseon="+reseon+"&special="+special);
}