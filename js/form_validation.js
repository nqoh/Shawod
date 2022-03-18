/**
 * Created by NQOBILE on 2016/09/27.
 */
 
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
            _(nx).value=""
            return false
        } else {
            if (_(nx).value.trim().match('^[0-9]')) {
                _(error).innerHTML = "First Name can't start with number"
                _(nx).value=""
                return false
            } else {
                _(error).innerHTML = ""
                _(nx).style.border="none";
            }
        }
    }else{
        _(error).innerHTML = "Enter your first name"
        _(nx).style.border="1px solid red";
        _(nx).value=""
        return false
    }
}

function name_last(nx,error) {
    if(_(nx).value !="") {
        if (_(nx).value.trim().length < 3) {
            _(error).innerHTML = "Three or more characters allowed"
            _(nx).style.border="1px solid red";
            _(nx).value=""
            return false
        } else {
            if (_(nx).value.trim().match('^[0-9]')) {
                _(error).innerHTML = "Last Name can't start with number"
                _(nx).value=""
                return false
            } else {
                _(error).innerHTML = ""
                _(nx).style.border="none";
            }
        }
    }else{
        _(error).innerHTML = "Enter your last name"
        _(nx).value=""
        return false
    }
}


function email(e,r) {
    if(_(e).value.trim() !=""){
        if(_(e).value.indexOf('@') > -1 && _(e).value.lastIndexOf('.') > -1){
            _(r).innerHTML="<span style='color:green'>Please wait...</span>";
            _(e).style.border="none";
              check_email(e,r);
        }else{
            _(r).innerHTML="Invalid email address";
            _(e).style.border="1px solid red";
            _(e).value=""
            return false
        }
    }else{
        _(r).innerHTML="Enter email address";
        _(e).style.border="1px solid red";
        _(e).value=""
        return false
    }
}

function contacts(c,error){
    if(_(c).value.trim() != ""){
        if(_(c).value.trim().length == 10){
            var contact = _(c).value.split('');
            for(var i=0; i < contact.length ; i++) {
                    if(contact[i] =='0' || contact[i] =='1' ||contact[i] =='2' || contact[i] =='3' || contact[i] =='4' || contact[i] =='5'||
                        contact[i] =='6' || contact[i] =='7' || contact[i] =='8' || contact[i] =='9'){
                        _(error).innerHTML="";
                        _(c).style.border="none";
                    }else{
                        _(error).innerHTML="Invalid contact number";
                        _(c).style.border="1px solid red";
                        _(c).value=""
                        break
                        return false
                    }
            }
        }else{
            _(error).innerHTML="Enter 10 digit of contact number";
            _(c).style.border="1px solid red";
            _(c).value=""
        }
    }else{
        _(error).innerHTML = "Enter contact number";
        _(c).style.border="1px solid red";
        _(c).value=""
}
}

function website(vl,rx) {
    if(_(vl).value.trim() != ""){
        if(_(vl).value.trim().length < 30){
            _(rx).innerHTML="Write some description 30 or more characters";
            _(vl).style.border="1px solid red";
            _(vl).value="";
            return false
        }
    }else{
        _(rx).innerHTML="Write description of your website";
        _(vl).style.border="1px solid red";
        _(vl).value="";
        return false
    }
    _(rx).innerHTML="";
    _(vl).style.border="none";
}


function send_data(nam,lname,email,contact,text) {

var packname=localStorage.package;
var d = localStorage.discounts;
    if(_(nam).value.trim().length < 3){
        _(nam).style.border="1px solid red"
        _(nam).value=""
        return false
    }

    if(_(lname).value.trim().length < 3){
        _(lname).style.border="1px solid red"
        _(lname).value=""
        return false
    }

    if(_(email).value === ""){
        _(email).style.border="1px solid red"
        _(email).value=""
        return false
    }

    if(_(contact).value.length !== 10){
        _(contact).style.border="1px solid red"
        _(contact).value=""
        return false
    }

    if(_(text).value.trim().length < 30){
        _(text).style.border="1px solid red"
        _(text).value=""
        return false
    }


    var arry =[nam,lname,email];

    for(i=0; i < arry.length ; i++){
        if(_(arry[i]).value == ""){
            _(arry[i]).style.border="1px solid red"
            return false
        }else{
            _(arry[i]).style.border="none";
        }
    }
   if(_(nam).value.trim() !=="" && _(email).value.trim() !== "" && _(text).value.trim() !==""){
        var p = parseFloat(_('order').innerHTML.substr(1, _('order').innerHTML.length - 2))
     ajax_post(nam,lname,email,contact,text,packname,parseFloat(p.toFixed(2)/100*50).toFixed(2),p.toFixed(2),feature);
	// localStorage.removeItem("discounts");
   }
}

function check_email(email,r) {
   var ajax = new XMLHttpRequest();
       ajax.open("POST","postfile_pack.php",true);
       ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
       ajax.onreadystatechange=function () {
           if(ajax.readyState == 4 && ajax.status==200){
               if(ajax.responseText === 'You are already a client, order new services on Portal'){
                   _(r).innerHTML=ajax.responseText
                   _(email).value=""
                   _(email).style.border="1px solid red"
               }
               _(r).innerHTML=ajax.responseText
           }
       }
       ajax.send("email="+_(email).value);
}


function ajax_post(n,ln,e,c,t,pp,d,pr,f) {
    _("btn_submit").innerHTML="Please wait...";
    _("btn_submit").setAttribute('disabled','disabled')
  //  _("reference").style.display="block"
   // _("reference").innerHTML="Please for reference"
    var ajax = new XMLHttpRequest();
    ajax.open("POST","postfile_pack.php",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4 && ajax.status==200){
            _("btn_submit").removeAttribute('disabled')

           // _("reference").innerHTML = ajax.responseText
            _(n).value="";_(e).value="";_(c).value="";_(t).value="";
            _('success').style.display ="block"
            _('submitbtn').style.display="none"
        }
    }
    ajax.send("name="+_(n).value+"&lastname="+_(ln).value+"&emails="+_(e).value+"&contact="+_(c).value+"&text="+_(t).value+"&pack="+pp+"&discount="+d+"&price="+pr+"&feature="+f);
}

