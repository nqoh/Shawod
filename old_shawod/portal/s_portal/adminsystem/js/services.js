function _(x) { return document.getElementById(x)}

var services="open";
function servicess(old,nw,srcs) {
    if(services ==  "open"){
        _(old).style.display="none";
        _(nw).style.display="block"
        _(srcs).innerHTML="Current services"
        services="close";
    }else{
        location.reload();
    }
}
window.addEventListener("load",function(){
    localStorage.removeItem("price");localStorage.removeItem("id");localStorage.removeItem("cms");localStorage.removeItem("logo");
    localStorage.removeItem("log_id");localStorage.removeItem("cms_id");localStorage.removeItem("seo");localStorage.removeItem("seo_id");
    localStorage.removeItem("photo_id");localStorage.removeItem("gallery");localStorage.removeItem("email_id");localStorage.removeItem("email");
    localStorage.removeItem("basic_id");localStorage.removeItem("basic");localStorage.removeItem("domain_id");localStorage.removeItem("domain");
    localStorage.removeItem("ssl_id");localStorage.removeItem("ssl");localStorage.removeItem("socail_id");localStorage.removeItem("socail");
}, false)
var x=0;var p=0;
function add_page() {
    localStorage.setItem("price",125.00);
    localStorage.setItem("id",1);
    p+=parseFloat(localStorage.price);
    x+=parseInt(localStorage.id);
    _("span1").style.display="block"
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("state").innerHTML=x+" Page (R125.00 for each additional page)";

}

function sub_page() {
    p -=parseFloat(localStorage.price);
    x-=parseInt(localStorage.id);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("state").innerHTML=x+" Page (R125.00 for each additional page)";
    if(x==0){
        localStorage.removeItem("price");
        localStorage.removeItem("id");
        _("state").innerHTML="Page (R125.00 for each additional page)"
        _("span1").style.display="none";
    }
}
var cm=0;
function add_cms(){
    localStorage.setItem("cms",199.50)
    localStorage.setItem("cms_id",1);
    cm+=parseInt(localStorage.cms_id);
    p+=parseFloat(localStorage.cms);

    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span2").style.display="block";
    _("state2").innerHTML=cm+" Content Management System (R199.50 for each additional page)";
}
function sub_cms(){
    cm-=parseInt(localStorage.cms_id);
    p-=parseFloat(localStorage.cms);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("state2").innerHTML=cm+" Content Management System (R199.50 for each additional page)";
    if(cm == 0){
        localStorage.removeItem("cms");
        localStorage.removeItem("cms_id");
        _("span2").style.display="none";
        _("state2").innerHTML=" Content Management System (R199.50 for each additional page)";

    }
}

var photo=0;
function add_gallary() {
  localStorage.setItem("gallery",125.00);
  localStorage.setItem("photo_id",1);
  photo+=parseInt(localStorage.photo_id);
  p+=parseFloat(localStorage.gallery);
  _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
  _("span3").style.display="block"
  _("state3").innerHTML=photo+" * 5 Photo gallery (R125.00 for each additional page)";
}
var logos=0;
function add_log() {
    localStorage.setItem("logo",650.00)
    localStorage.setItem("log_id",1);
    logos+=parseInt(localStorage.log_id);
    p+=parseFloat(localStorage.logo);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span4").style.display="block"
    _("state4").innerHTML=logos+" Logo Design (R650.00)";
}

function sub_log() {
    logos-=parseInt(localStorage.log_id);
    p-=parseFloat(localStorage.logo);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("state4").innerHTML=logos+" Logo Design (R650.00)";
    if(logos == 0){
        localStorage.removeItem("logo");
        localStorage.removeItem("log_id");
        _("state4").innerHTML=" Logo Design (R650.00)";
        _("span4").style.display="none"
    }
}

function sub_gallary() {
    photo-=parseInt(localStorage.photo_id);
    p-=parseFloat(localStorage.gallery);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span3").style.display="block"
    _("state3").innerHTML=photo+" * 5 Photo gallery (R125.00 for each additional page)";
    if(photo==0){
         localStorage.removeItem("photo_id");
         localStorage.removeItem("gallery");
        _("state3").innerHTML=" Photo gallery (R125.00 for each additional page)";
        _("span3").style.display="none"
    }
}
var soe=0;
function add_seo() {
    localStorage.setItem("seo",999.99)
    localStorage.setItem("seo_id",1);
    soe+=parseInt(localStorage.seo_id);
    p+=parseFloat(localStorage.seo)
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span5").style.display="block"
    _("state5").innerHTML=soe+" Search Engine Optimization (R999.99 pa)";
}

function sub_seo() {
    soe-=parseInt(localStorage.seo_id);
    p-=parseFloat(localStorage.seo);
    _("state5").innerHTML =soe+" Search Engine Optimization (R999.99 pa)";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    if(soe==0) {
         localStorage.removeItem("seo");
         localStorage.removeItem("seo_id");
        _("span5").style.display = "none"
        _("state5").innerHTML =" Search Engine Optimization (R999.99 pa)";

    }

}
var sim=0;
function add_smi() {
   localStorage.setItem("socail",260.00);
   localStorage.setItem("socail_id",1);
   sim+=parseInt(localStorage.socail_id);
   p+=parseFloat(localStorage.socail);
   _("state6").innerHTML=sim+" Advance Social Medial Integration (R260.00)";
   _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span6").style.display="block"
}

function sub_smi() {
    sim-=parseInt(localStorage.socail_id);
    p-=parseFloat(localStorage.socail);
    _("state6").innerHTML =sim+" Advance Social Medial Integration (R260.00) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    if(sim==0) {
        localStorage.removeItem("socail_id");
        localStorage.removeItem("socail");
        _("span6").style.display = "none"
        _("state6").innerHTML =" Advance Social Medial Integration (R260.00)";

    }

}

var ss=0;
function add_ssl() {
    localStorage.setItem("ssl",1300.00);
    localStorage.setItem("ssl_id",1);
    ss+=parseInt(localStorage.ssl_id);
    p+=parseFloat(localStorage.ssl);
    _("state7").innerHTML=ss+" SSL Certificate (R1300.00) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span7").style.display="block"
}
function sub_ssl() {
    ss-=parseInt(localStorage.ssl_id);
    p-=parseFloat(localStorage.ssl);
    _("state7").innerHTML =ss+" SSL Certificate (R1300.00) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    if(ss==0) {
        localStorage.removeItem("ssl_id");
        localStorage.removeItem("ssl");
        _("span7").style.display = "none"
        _("state7").innerHTML =" SSL Certificate (R1300.00) ";

    }

}

var d=0;
function add_domain() {
    localStorage.setItem("domain",200.00);
    localStorage.setItem("domain_id",1);
    d+=parseInt(localStorage.domain_id);
    p+=parseFloat(localStorage.domain);
    _("state8").innerHTML=d+" Domain Infor.Locker (R200.00) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span8").style.display="block"
}
function sub_domain() {
    d-=parseInt(localStorage.domain_id);
    p-=parseFloat(localStorage.domain);
    _("state7").innerHTML =d+" Domain Infor.Locker (R200.00) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    if(d==0) {
        localStorage.removeItem("domain_id");
        localStorage.removeItem("domain");
        _("span8").style.display = "none"
        _("state8").innerHTML =" Domain Infor.Locker (R200.00) ";

    }
}

var b=0;
function add_basic() {
    localStorage.setItem("basic",800.00);
    localStorage.setItem("basic_id",1);
    b+=parseInt(localStorage.basic_id);
    p+=parseFloat(localStorage.basic);
    _("state9").innerHTML=b+" Basic Chat Zone (R800.00) ";
    _("cost").innerHTML="<br>Total cost = R "+p.toFixed(2)+" !";
    _("span9").style.display="block"
}
function sub_basic() {
    b-=parseInt(localStorage.basic_id);
    p-=parseFloat(localStorage.basic);
    _("state9").innerHTML =b+" Basic Chat Zone (R800.00) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    if(b==0) {
        localStorage.removeItem("basic_id");
        localStorage.removeItem("basic");
        _("span9").style.display = "none"
        _("state9").innerHTML =" Basic Chat Zone (R800.00) ";

    }
}

var e=0;
function add_email() {
    localStorage.setItem("email",50.00);
    localStorage.setItem("email_id",1);
    e+=parseInt(localStorage.email_id);
    p+=parseFloat(localStorage.email);
    _("state10").innerHTML=e+" *5 Webmail Account (R50.00) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span10").style.display="block"
}
function sub_email() {
    e-=parseInt(localStorage.email_id);
    p-=parseFloat(localStorage.email);
    _("state10").innerHTML =e+" *5 Webmail Account (R50.00) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    if(e==0) {
        localStorage.removeItem("email_id");
        localStorage.removeItem("email");
        _("span10").style.display = "none"
        _("state10").innerHTML =" Webmail Account (R50.00) ";

    }
}