function _(x) { return document.getElementById(x)}

var services="open";
var data='';
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
    localStorage.removeItem("seoss");localStorage.removeItem("ehosts");localStorage.removeItem("designs");
    localStorage.removeItem("pages");localStorage.removeItem("cmss");localStorage.removeItem("photo");localStorage.removeItem("logos");
    localStorage.removeItem("seos");localStorage.removeItem("media");localStorage.removeItem("ssl");localStorage.removeItem("dm");
    localStorage.removeItem("pr");localStorage.removeItem("chat");localStorage.removeItem("em");localStorage.removeItem("seossx");
    localStorage.removeItem("hosting");localStorage.removeItem("d");

}, false);
var x=0;var p=0;
function add_page() {
    localStorage.setItem("price",125.00);
    localStorage.setItem("id",1);
    p+=parseFloat(localStorage.price);
    x+=parseInt(localStorage.id);
    localStorage.setItem("pages",x+" pages");
    _("span1").style.display="block"
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("state").innerHTML=x+" Page (R125.00 for each additional page)";
}

function sub_page() {
    p -=parseFloat(localStorage.price);
    x-=parseInt(localStorage.id);
    localStorage.setItem("pages",x+" pages");
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("state").innerHTML=x+" Page (R125.00 for each additional page)";
    if(x==0){
        localStorage.removeItem("price");
        localStorage.removeItem("id");
        _("state").innerHTML="Page (R125.00 for each additional page)";
        _("span1").style.display="none";
        localStorage.removeItem("pages")

    }
}
var cm=0;
function add_cms(){
    localStorage.setItem("cms",199.50)
    localStorage.setItem("cms_id",1);
    cm+=parseInt(localStorage.cms_id);
    p+=parseFloat(localStorage.cms);
   localStorage.setItem("cmss" , cm+" CMS");
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span2").style.display="block";
    _("state2").innerHTML=cm+" Content Management System (R199.50 for each additional page)";
}
function sub_cms(){
    cm-=parseInt(localStorage.cms_id);
    p-=parseFloat(localStorage.cms);
    localStorage.setItem("cmss" , cm+" CMS");
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("state2").innerHTML=cm+" Content Management System (R199.50 for each additional page)";
    if(cm == 0){
        localStorage.removeItem("cms");
        localStorage.removeItem("cms_id");
        _("span2").style.display="none";
        _("state2").innerHTML=" Content Management System (R199.50 for each additional page)";
        localStorage.removeItem("cmss")
    }
}

var photo=0;
function add_gallary() {
  localStorage.setItem("gallery",125.00);
  localStorage.setItem("photo_id",1);
  photo+=parseInt(localStorage.photo_id);
  p+=parseFloat(localStorage.gallery);
    localStorage.setItem("photo" , photo+" gallery");
  _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
  _("span3").style.display="block"
  _("state3").innerHTML=photo+" * 5 Photo gallery (R125.00 for each additional page)";
}
var logos=0;
function add_log() {
    localStorage.setItem("logo",650.00)
    localStorage.setItem("log_id",1);
    p+=parseFloat(localStorage.logo);
    localStorage.setItem("logos","Logo");
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span4").style.display="block"
    _("state4").innerHTML=" Logo Design (R650.00)";
    _("spn4").style.display="none";
}

function sub_log() {
    logos-=parseInt(localStorage.log_id);
    p-=parseFloat(localStorage.logo);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("state4").innerHTML=logos+" Logo Design (R650.00)";
        localStorage.removeItem("logo");
        localStorage.removeItem("log_id");
        _("state4").innerHTML=" Logo Design (R650.00)";
        _("span4").style.display="none";
        _("spn4").style.display="inline";
        localStorage.removeItem("logos");

}

function sub_gallary() {
    photo-=parseInt(localStorage.photo_id);
    p-=parseFloat(localStorage.gallery);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span3").style.display="block"
    _("state3").innerHTML=photo+" * 5 Photo gallery (R125.00 for each additional page)";
    localStorage.setItem("photo", photo+" Gallery");
    if(photo==0){
         localStorage.removeItem("photo_id");
         localStorage.removeItem("gallery");
        _("state3").innerHTML=" Photo gallery (R125.00 for each additional page)";
        _("span3").style.display="none";
        localStorage.removeItem("photo");
    }
}
var soe=0;
function add_seo() {
    localStorage.setItem("seo",999.99)
    localStorage.setItem("seo_id",1);
    p+=parseFloat(localStorage.seo);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span5").style.display="block";
    _("spn5").style.display="none";
    _("state5").innerHTML=" Search Engine Optimization (R999.99 pa)";
    localStorage.setItem("seos","SEO");
}

function sub_seo() {
    soe-=parseInt(localStorage.seo_id);
    p-=parseFloat(localStorage.seo);
    _("state5").innerHTML =soe+" Search Engine Optimization (R999.99 pa)";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
         localStorage.removeItem("seo");
         localStorage.removeItem("seo_id");
       localStorage.removeItem("seos");
        _("span5").style.display = "none";
        _("state5").innerHTML =" Search Engine Optimization (R999.99 pa)";
    _("spn5").style.display="inline";


}
var sim=0;
function add_smi() {
   localStorage.setItem("socail",260.00);
   p+=parseFloat(localStorage.socail);
    localStorage.setItem("media","Advance Social Medial Integration");
   _("state6").innerHTML=" Advance Social Medial Integration (R260.00)";
   _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span6").style.display="block"
    _("span66").style.display = "none"
}

function sub_smi() {
    p-=parseFloat(localStorage.socail);
         _("state6").innerHTML =" Advance Social Medial Integration (R260.00) ";
        _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
         localStorage.removeItem("socail");
        _("span6").style.display = "none";
       _("span66").style.display = "inline"
    localStorage.removeItem("media")



}

var ss=0;
function add_ssl() {
    localStorage.setItem("ssll",1300.00);
    localStorage.setItem("ssl_id",1);
    localStorage.setItem("ssl","SSL Certificate");
    p+=parseFloat(localStorage.ssll);
    _("state7").innerHTML=" SSL Certificate (R1300.00 p/a) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span7").style.display="block"
    _("spn7").style.display="none";
}
function sub_ssl() {
    ss-=parseInt(localStorage.ssl_id);
    p-=parseFloat(localStorage.ssll);
    _("state7").innerHTML =ss+" SSL Certificate (R1300.00 p/a) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
        localStorage.removeItem("ssl_id");
        localStorage.removeItem("ssl");
        _("span7").style.display = "none";
        _("state7").innerHTML =" SSL Certificate (R1300.00 p/a) ";
        _("spn7").style.display="inline";
    localStorage.removeItem("ssl")


}

var d=0;
function add_domain() {
        localStorage.setItem("domain", 200.00);
        localStorage.setItem("domain_id", 1);
        p += parseFloat(localStorage.domain);
        localStorage.setItem("dm","Domain infor Locker")
        _("state8").innerHTML = " Domain Infor.Locker (R200.00 p/a) ";
        _("cost").innerHTML = "<br>Total Cost = R " + p.toFixed(2) + " !";
        _("span8").style.display = "block";
        _("spn8").style.display="none";

}
function sub_domain() {
    d-=parseInt(localStorage.domain_id);
    p-=parseFloat(localStorage.domain);
    _("state8").innerHTML =d+" Domain Infor.Locker (R200.00 p/a) ";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
      localStorage.removeItem("dm")
        localStorage.removeItem("domain_id");
        localStorage.removeItem("domain");
        _("span8").style.display = "none";
        _("state8").innerHTML =" Domain Infor.Locker (R200.00 p/a) ";
        _("spn8").style.display="inline";


}
function add_pp() {
    localStorage.setItem("pp", 349.99);
    p +=parseInt(localStorage.pp);
    localStorage.setItem("pr","Privacy Protection")
    _("state11").innerHTML="Privacy Protection(R349.99 first month , R699.99 renewal p/a)";
    _("span11").style.display="block";
    _("span111").style.display="none";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
}

function sub_pp() {
    localStorage.setItem("pp",349.99);
    p-=parseInt(localStorage.pp);
    _("state11").innerHTML="Privacy Protection(R349.99 first month , R699.99 renewal p/a)";
    _("span11").style.display="none";
    _("span111").style.display="inline";
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("pp")
    localStorage.removeItem("pr")
}

var b=0;
function add_basic() {
    localStorage.setItem("basic",800.00);
    localStorage.setItem("basic_id",1);
    b+=parseInt(localStorage.basic_id);
    p+=parseFloat(localStorage.basic);
    localStorage.setItem("chat",b+" Basic Chat Zone")
    _("state9").innerHTML=b+" Basic Chat Zone (R800.00) ";
    _("cost").innerHTML="<br>Total cost = R "+p.toFixed(2)+" !";
    _("span9").style.display="block"
}
function sub_basic() {
    b-=parseInt(localStorage.basic_id);
    p-=parseFloat(localStorage.basic);
    _("state9").innerHTML =b+" Basic Chat Zone (R800.00) ";
    localStorage.setItem("chat",b+" Basic Chat Zone")
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    if(b==0) {
        localStorage.removeItem("basic_id");
        localStorage.removeItem("basic");
        localStorage.removeItem("chat")
        _("span9").style.display = "none";
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
    localStorage.setItem("em", e+" * 5 Webmail")
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    _("span10").style.display="block"
}
function sub_email() {
    e-=parseInt(localStorage.email_id);
    p-=parseFloat(localStorage.email);
    _("state10").innerHTML =e+" *5 Webmail Account (R50.00) ";
    localStorage.setItem("em", e+" * 5 Webmail")
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    if(e==0) {
        localStorage.removeItem("email_id");
        localStorage.removeItem("email");
        _("span10").style.display = "none"
        localStorage.removeItem("em")
        _("state10").innerHTML =" Webmail Account (R50.00) ";

    }
}


function add_seog() {
    _("seop").style.display="block"
    _("seoc").style.display="block";
    _("span18").style.display="block";
    _("span19").style.display="none";
    _("span20").style.display="none";
    _("seog").style.display="none";
    if(localStorage.seoss!=null){p -=parseFloat(localStorage.seoss)}
        localStorage.setItem("seoss", 599.99);
    localStorage.setItem("seossx","Premium S.E.O")
        p += parseFloat(localStorage.seoss);
        _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";

}

function sub_seog() {
    _("seop").style.display="block"
    _("seoc").style.display="block";
    _("span18").style.display="none";
    _("span19").style.display="none";
    _("span20").style.display="none";
    _("seog").style.display="block";
    p -=parseFloat(localStorage.seoss);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("seoss");
    localStorage.removeItem("seossx")

}

function add_seop() {
    _("seop").style.display="none";
    _("span19").style.display="block";
    _("span18").style.display="none";
    _("span20").style.display="none";
    _("seog").style.display="block"
    _("seoc").style.display="block";
    if(localStorage.seoss!=null){p -=parseFloat(localStorage.seoss)}
    localStorage.setItem("seoss",999.99);
    localStorage.setItem("seossx","Professional S.E.O ");
    p +=parseFloat(localStorage.seoss);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
}
function sub_seop() {
    _("seop").style.display="block";
    _("span19").style.display="none";
    _("span18").style.display="none";
    _("span20").style.display="none";
    _("seog").style.display="block"
    _("seoc").style.display="block";
    p -=parseFloat(localStorage.seoss);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("seoss");
    localStorage.removeItem("seossx")
}

function add_seoc() {
    _("seop").style.display="block"
    _("span20").style.display="block";
    _("seog").style.display="block";
    _("span19").style.display="none";
    _("span18").style.display="none";
    _("seoc").style.display="none";
    if(localStorage.seoss!=null){p -=parseFloat(localStorage.seoss)}
    localStorage.setItem("seoss",1499.99);
    localStorage.setItem("seossx","Ultimate S.E.O")
    p +=parseFloat(localStorage.seoss);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
}

function sub_seoc() {
    _("seop").style.display="block"
    _("span20").style.display="none";
    _("seog").style.display="block";
    _("span19").style.display="none";
    _("span18").style.display="none";
    _("seoc").style.display="block";
    p -=parseFloat(localStorage.seoss);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("seoss");
    localStorage.removeItem("seossx")
}

function add_hoste() {
    _('span12').style.display="block"
    _("spanp").style.display="block"
    _("spang").style.display="block"
    _('spane').style.display="none"
    _('span13').style.display="none"
    _('span14').style.display="none"
    localStorage.removeItem("hosting");
    if(localStorage.ehosts!=null){p -=parseFloat(localStorage.ehosts)}
    localStorage.setItem("ehosts",0.00);
    p +=parseFloat(localStorage.ehosts);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";

}




function add_hostp() {
    _('span13').style.display="block"
    _('spane').style.display="block"
    _("spang").style.display="block"
    _("spanp").style.display="none"
    _('span12').style.display="none"
    _('span14').style.display="none"
    if(localStorage.ehosts!=null){p -=parseFloat(localStorage.ehosts)}
    localStorage.setItem("ehosts",56.00);
    localStorage.setItem("hosting","Duluxe Hosting")
    p +=parseFloat(localStorage.ehosts);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
}


function add_hostg() {
    _('span14').style.display="block"
    _("spanp").style.display="block"
    _('spane').style.display="block"
    _("spang").style.display="none"
    _('span13').style.display="none"
    _('span12').style.display="none"
    if(localStorage.ehosts!=null){p -=parseFloat(localStorage.ehosts)}
    localStorage.setItem("ehosts",78.00);
    localStorage.setItem("hosting","Premium Hosting")
    p +=parseFloat(localStorage.ehosts);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
}
function sub_hoste() {
    _('span12').style.display="none"
    _('spane').style.display="block"
    p -=parseFloat(localStorage.ehosts);
    __("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("hosting");

}
function sub_hostp() {
    _('span13').style.display="none"
    _('spanp').style.display="block"
    p -=parseFloat(localStorage.ehosts);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("ehosts");
    localStorage.removeItem("hosting");
}
function sub_hostg() {
    _('span14').style.display="none"
    _('spang').style.display="block"
    p -=parseFloat(localStorage.ehosts);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("ehosts");
    localStorage.removeItem("hosting");
}

function add_designg() {
    _('span15').style.display="block"
    _("spangg").style.display="none"
    _("spanc").style.display="block"
    _('spanpr').style.display="block"
    _('span16').style.display="none"
    _('span17').style.display="none"
    if(localStorage.designs != null){p -=parseFloat(localStorage.designs)}
    localStorage.setItem("designs", 49.89);
    localStorage.setItem("d","Economy Hosting");
    p +=parseFloat(localStorage.designs);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";

}
function add_designpr() {
    _('span16').style.display = "block"
    _("spanpr").style.display = "none"
    _("spancc").style.display = "block"
    _('spangg').style.display = "block"
    _('span15').style.display = "none"
    _('span177').style.display = "none"
    if (localStorage.designs != null) {p -=parseFloat(localStorage.designs)}
        localStorage.setItem("designs", 69.95);
    localStorage.setItem("d","Premium Design");
        p += parseFloat(localStorage.designs);
        _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";

}
function add_designc() {
    _('span177').style.display = "block"
    _("spancc").style.display = "none"
    _("spanpr").style.display = "block"
    _('spangg').style.display = "block"
    _('span15').style.display = "none"
    _('span16').style.display = "none";
    if(localStorage.designs != null) {p -=parseFloat(localStorage.designs)}
        localStorage.setItem("designs", 99.99);
    localStorage.setItem("d","Custom Design");
        p += parseFloat(localStorage.designs);
        _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
}

function sub_designg() {
    _("span15").style.display="none";
    _("spangg").style.display="block";
    p -=parseFloat(localStorage.designs);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("designs");
    localStorage.removeItem("d");
}

function sub_designpr() {
    _("span16").style.display="none";
    _("spanpr").style.display="block";
    p -=parseFloat(localStorage.designs);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("designs");
    localStorage.removeItem("d");
}

function sub_designc() {
    _("span177").style.display="none";
    _("spancc").style.display="block";
    p -=parseFloat(localStorage.designs);
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
    localStorage.removeItem("designs");
    localStorage.removeItem("d");
}

function submit_data(id) {
    _("errors").innerHTML ="";
    data='';
    var dt=[localStorage.pages,localStorage.cmss,localStorage.photo,localStorage.logos,localStorage.seos,
        localStorage.media,localStorage.ssl,localStorage.dm,localStorage.pr,localStorage.chat,localStorage.em,
    localStorage.seossx,localStorage.hosting,localStorage.d];

        for (var i = 0; i < dt.length; i++) {
            if (dt[i] == localStorage.bv) {
                dt[i] = "";
            } else {
                data += dt[i] + " | ";
            }
        }
    if(data != '') {
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "post_data.php", true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                _("errors").innerHTML = ajax.responseText;
                removes();
                clears();
            }
        }
        ajax.send("items=" + data + "&price=" + p + "&id=" + id + "&text=" + _("textarea").value);


    }_("errors").innerHTML ="<span style='color: red; margin-left: 60px'>Please add some items you want to purchase</span>"

}



function terms2() {

    _("terms2").style.display="block";
    _("top2").innerHTML="Terms of Services";
    _("privacy2").style.display="none";
    _("cont").style.display="none"
    scroll_ups()
}

function privecy2() {
    _("terms2").style.display="none";
    _("top2").innerHTML="Privacy Policy";
    _("privacy2").style.display="block";
    _("cont").style.display="none"
    scroll_ups()
}

function removes() {
    localStorage.removeItem("price");localStorage.removeItem("id");localStorage.removeItem("cms");localStorage.removeItem("logo");
    localStorage.removeItem("log_id");localStorage.removeItem("cms_id");localStorage.removeItem("seo");localStorage.removeItem("seo_id");
    localStorage.removeItem("photo_id");localStorage.removeItem("gallery");localStorage.removeItem("email_id");localStorage.removeItem("email");
    localStorage.removeItem("basic_id");localStorage.removeItem("basic");localStorage.removeItem("domain_id");localStorage.removeItem("domain");
    localStorage.removeItem("ssl_id");localStorage.removeItem("ssl");localStorage.removeItem("socail_id");localStorage.removeItem("socail");
    localStorage.removeItem("seoss");localStorage.removeItem("ehosts");localStorage.removeItem("designs");
    localStorage.removeItem("pages");localStorage.removeItem("cmss");localStorage.removeItem("photo");localStorage.removeItem("logos");
    localStorage.removeItem("seos");localStorage.removeItem("media");localStorage.removeItem("ssl");localStorage.removeItem("dm");
    localStorage.removeItem("pr");localStorage.removeItem("chat");localStorage.removeItem("em");localStorage.removeItem("seossx");
    localStorage.removeItem("hosting");localStorage.removeItem("d");
}

function clears() {

    _("span1").style.display="none";
    _("state").innerHTML="Page (R125.00 for each additional page)";
    _("span2").style.display="none";
    _("state2").innerHTML=" Content Management System (R199.50 for each additional page)";
    _("span3").style.display="none";
    _("state3").innerHTML=" Photo gallery (R125.00 for each additional page)";
    _("spn4").style.display="inline";
    _("span4").style.display="none";
    _("span6").style.display = "none";
    _("span66").style.display = "inline";
    _('span16').style.display="none";
    _('spanpr').style.display="inline";
    _("span18").style.display="none";
    _("span20").style.display="none";
    _("span19").style.display="none";
    _("seog").style.display="inline";
    _("seop").style.display="inline"
    _("seoc").style.display="inline";
    _('span15').style.display="none"
    _("spangg").style.display="inline"
    _("span7").style.display = "none";
    _("spn7").style.display = "inline";
    _("span11").style.display="none";
    _("span111").style.display="inline";
    _("span8").style.display = "none";
    _("spn8").style.display = "inline";
    _("span9").style.display = "none";
    _("spn9").style.display = "inline";
    _("state9").innerHTML=" Basic Chat Zone (R800.00) ";
    _("span10").style.display = "none";
    _("spn10").style.display="inline";
    _("state10").innerHTML =" Webmail Account (R50.00) ";
    _("span177").style.display="none";
    _("spancc").style.display="inline";
    _('span12').style.display="none";
    _('spane').style.display="inline";
    _('span13').style.display="none";
    _("spanp").style.display="inline";
    _('span14').style.display="none";
    _("spang").style.display="inline";
    _("textarea").value="";
    p=0;
    _("cost").innerHTML="<br>Total Cost = R "+p.toFixed(2)+" !";
}