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
            return false
        } else {
            if (_(nx).value.trim().match('^[0-9]')) {
                _(error).innerHTML = "Name can't start with number"
              
                return false
            } else {
                _(error).innerHTML = ""
            }
        }
    }else{
        _(error).innerHTML = "Enter your name"
        
        return false
    }
}

function email(e,r) {
    if(_(e).value.trim() !=""){
        if(_(e).value.indexOf('@') > -1 && _(e).value.lastIndexOf('.') > -1){
              check_email(e,r);
        }else{
            _(r).innerHTML="Invalid email address";
            
            return false
        }
    }else{
        _(r).innerHTML="Enter email address";
       
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
                    }else{
                        _(error).innerHTML="Invalid contact number";
                        
                        break
                        return false
                    }
            }
        }else{
            _(error).innerHTML="Enter 10 digit of contact number";
        
        }
    }else{
    _(error).innerHTML = "Enter contact number";

}
}

function website(vl,rx) {
    if(_(vl).innerHTML.trim() != ""){
        if(_(vl).innerHTML.trim().length < 30){
            _(rx).innerHTML="Write some description 30 or more characters"
            return false
        }
    }else{
        _(rx).innerHTML="Write description of your website"
        return false
    }
    _(rx).innerHTML="";
}


function send_data(nam,email,contact,text) {
var packname=localStorage.package;
var d=localStorage.discounts;

    var arry =[nam,email];
    if(_(text).innerHTML.trim() == ""){
        _(text).style.border="1px solid red"

    }else{
        _(text).style.backgroundColor="white"
    }
    for(i=0; i < arry.length ; i++){
        if(_(arry[i]).value == ""){
            _(arry[i]).style.border="1px solid red"

        }else{
            _(arry[i]).style.border="none";
        }
    }
   if(_(nam).value.trim() !="" && _(email).value.trim() != "" && _(text).innerHTML.trim() !=""){
     ajax_post(nam,email,contact,text,packname,parseFloat(p.toFixed(2)/100*50).toFixed(2),parseFloat(p).toFixed(2),feature);
	// localStorage.removeItem("discounts");
   }
}

function check_email(email,r) {
   var ajax = new XMLHttpRequest();
       ajax.open("POST","postfile.php",true);
       ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
       ajax.onreadystatechange=function () {
           if(ajax.readyState == 4 && ajax.status==200){
               _(r).innerHTML=ajax.responseText
           }
       }
       ajax.send("email="+_(email).value);
}


function ajax_post(n,e,c,t,pp,d,pr,f) {
    document.getElementsByClassName("silver_btn").item(0).style.display="none";
    _("reference").style.display="block"
    _("reference").innerHTML="Please for reference"
    var ajax = new XMLHttpRequest();
    ajax.open("POST","postfile.php",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4 && ajax.status==200){
            _("reference").innerHTML = ajax.responseText
            _(n).value="";_(e).value="";_(c).value="";_(t).innerHTML="";
        }
    }
    ajax.send("name="+_(n).value+"&emails="+_(e).value+"&contact="+_(c).value+"&text="+_(t).innerHTML+"&pack="+pp+"&discount="+d+"&price="+pr+"&feature="+f);
}

