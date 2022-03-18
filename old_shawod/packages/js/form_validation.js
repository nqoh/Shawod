function _(x){
    return document.getElementById(x);
}
function mouse_in(nm) {
            _(nm).style.backgroundColor="white"
}

function name_out(nx,error) {
    if(_(nx).value !== "") {
        if (_(nx).value.trim().length < 3) {
            _(error).innerHTML = "Three or more characters allowed";
            _(nx).focus();
            return false
        } else {
            if (_(nx).value.trim().match('^[0-9]')) {
                _(error).innerHTML = "Name can't start with number"
               _(nx).focus();
                return false
            } else {
                _(error).innerHTML = ""
                _(nx).style.border = "none";
            }
        }
    }else{
        _(error).innerHTML = "Enter your name"
        return false
    }
}


function email(email,error){
    if (_(email).value.indexOf('@') > -1 && _(email).value.indexOf('.') > -1) {
        
       var ajax = new XMLHttpRequest();
       ajax.open("POST","postfile.php",true);
       ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
       ajax.onreadystatechange=function () {
           if(ajax.readyState == 4 && ajax.status==200){
               if(ajax.responseText === "Invalid email address"){
                     _(error).innerHTML="Invalid email"  
                     _(email).style.border = "1px solid red"
                     _(email).focus();
               }else{
                  _(error).innerHTML=""
                  _(email).style.border = "none"
               }
             
           }
       }
       ajax.send("email="+_(email).value);
        
        
        
    }else{
      _(error).innerHTML="Invalid email" 
      _(email).style.border="1px solid red"
      _(email).focus();
    }
}


function contacts(c,error){

}

function website(vl,rx) {
    if(_(vl).innerHTML.trim() !== "<br>"){
         if(_(vl).innerHTML.trim().length < 20 ){
            _(rx).innerHTML="20 or more characters required"
            _(vl).style.border="1px solid red"
            _(vl).focus();
            return false
         }else{
              _(vl).style.border="none"
         }
    }else{
        _(rx).innerHTML="Write a description of your Project"
        _(vl).style.border="1px solid red"
        _(vl).focus();
        return false
    }
    _(rx).innerHTML="";
}



function send_data(nam,email,contact,text) {
var packname=localStorage.package;
var d=localStorage.discounts;
if(_("accept").checked === true) {
    _("errorx").style.display="none";
    var arry = [nam, email];
    if (_(text).innerHTML.trim() === "") {
        _(text).style.border = "1px solid red"

    } else {
        _(text).style.backgroundColor = "white"
    }
    for (i = 0; i < arry.length; i++) {
        if (_(arry[i]).value === "") {
            _(arry[i]).style.border = "1px solid red"

        } else {
            _(arry[i]).style.border = "none";
        }
    }
    if (_(nam).value.trim() !== "" && _(email).value.trim() !== "" && _(text).innerHTML.trim() !== "") {
        ajax_post(nam, email, contact, text, packname, parseFloat(p.toFixed(2) / 100 * 50).toFixed(2), parseFloat(p).toFixed(2), feature);
        // localStorage.removeItem("discounts");
    }
}else{
    _("errorx").style.display="block";
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
            _("errorx").style.display="none";
            _("ccept").style.display="none";
            _("ct").style.display="none";
            _("a").style.display="none";
        }
    }
    ajax.send("name="+_(n).value+"&emails="+_(e).value+"&contact="+_(c).value+"&text="+_(t).innerHTML+"&pack="+pp+"&discount="+d+"&price="+pr+"&feature="+f);
}

