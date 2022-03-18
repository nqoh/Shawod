function _(a) {
    return document.getElementById(a)
}
window.onload=xx;
function xx() {
    localStorage.removeItem("feature");
    localStorage.removeItem("price");localStorage.removeItem("page_id");
    localStorage.removeItem("gallery");localStorage.removeItem("gallery");
    localStorage.removeItem("form");localStorage.removeItem("form_id");
    localStorage.removeItem("logo");localStorage.removeItem("logo_id");
    localStorage.removeItem("cms");localStorage.removeItem("cms_id");
    localStorage.removeItem('protected');localStorage.removeItem('protected_id');
    localStorage.removeItem('ssl');localStorage.removeItem('ssl_id');
    localStorage.removeItem("email");localStorage.removeItem("email_id");
    localStorage.removeItem("ehost");localStorage.removeItem("design");
    localStorage.removeItem("seos");
}
var p =parseFloat(localStorage.prc);
function remove_item(add,pric,num) {
    if(add=='sab_page'){pgs=0;localStorage.removeItem("price");localStorage.removeItem("page_id");
     p-=parseFloat(pric * parseInt(num)).toFixed(2);
    _("state").innerHTML=" Page (R125.00 for each additional page)";
    _("span1").style.display = "none";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }
    if(add=='sab_form'){f=0;localStorage.removeItem("form");localStorage.removeItem("form_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("form").innerHTML=" Form (R99.99 for each additional page) ";
        _("span2").style.display = "none";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }
    if(add=='sab_gallery'){g=0;localStorage.removeItem("gallery");localStorage.removeItem("gallery_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("photo").innerHTML=" Photo Gallery (R125.00 for each additional page) ";
        _("span3").style.display = "none";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }
    if(add=='sab_cms'){c=0;localStorage.removeItem("cms");localStorage.removeItem("cms_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("cms").innerHTML=" Content Management System (R199.50 for each additional page) ";
        _("span4").style.display = "none";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

if(add=='sab_logo'){l=0;localStorage.removeItem("logo");localStorage.removeItem("logo_id");
    p-=parseFloat(pric * parseInt(num)).toFixed(2);
    _("logo").innerHTML=" Logo Design (R650.00) ";
    _("span5").style.display = "none";
    _("lg").style.display="block";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe(add,'','','');
}
    if(add=='sab_seo'){s=0;localStorage.removeItem("seo");localStorage.removeItem("seo_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("seos").innerHTML=" Search Engine Optimization (R999.99 p/a) ";
        _("span6").style.display = "none";
        _("search").style.display="block";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_ssl'){ss=0;localStorage.removeItem("ssl");localStorage.removeItem("ssl_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("ssls").innerHTML=" S S L Certificate (R1300.00) ";
        _("span7").style.display = "none";
        _("myssl").style.display="block";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_protected'){pr=0;localStorage.removeItem("protected");localStorage.removeItem("protected_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("protect").innerHTML=" Protected Registration (R349.99 first month , R699.99 renewal p/a) ";
        _("span8").style.display = "none";
        _("pr").style.display="block";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_domain'){d=0;localStorage.removeItem("domain");localStorage.removeItem("domain_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("domains").innerHTML=" Domain Infor.Locker (R200.00) ";
        _("span9").style.display = "none";
        _("dmn").style.display="block";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_chat'){ch=0;localStorage.removeItem("chat");localStorage.removeItem("chat_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("basic").innerHTML=" Basic Chat Zone (R800.00) ";
        _("span10").style.display = "none";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_email'){e=0;localStorage.removeItem("email");localStorage.removeItem("email_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("mail").innerHTML=" Webmail Account (R50.00) ";
        _("span12").style.display = "none";
        _("spane").style.display="block";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_ehost'){eco=1;localStorage.removeItem("ehost");localStorage.removeItem("ehost_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("span12").style.display = "none";
        _("span13").style.display = "none";
        _("span14").style.display = "none";
        _("spane").style.display="block";
        _("spanp").style.display="block";
        _("spang").style.display="block";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_design'){designe=1;localStorage.removeItem("design");localStorage.removeItem("design_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("span15").style.display = "none";
        _("span16").style.display = "none";
        _("span17").style.display = "none";
        _("span14").style.display = "none";
        _("spangg").style.display="block";
        _("spanpr").style.display="block";
        _("spanc").style.display="block";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_seos'){myseos=1;localStorage.removeItem("seos");localStorage.removeItem("seos_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("span18").style.display = "none";
        _("span19").style.display = "none";
        _("span20").style.display = "none";
        _("seog").style.display="block";
        _("seop").style.display="block";
        _("seoc").style.display="block";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

}
var feature='';
var pgs=0;var pag='',fm='',glly='',czs='',logos='',seoz='',sslz='',prt='',dnm='',ct='',em='',hst='',dsg='';
var  td_pg='',td_form='',td_gallery='',td_cms,td_logo='',td_seo='',td_ssl='',td_protected='',td_domain='',
    td_chat='',td_email='',td_ehost='',td_design='',td_seos='',th='';
function create_tabe(add,item,num,prc) {

    if(add=='add_page'){
        pag =num+" pages ||";
      td_pg ="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
        "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_page\",localStorage.price,pgs)'>X</button></td></tr> ";}else if(add=='sab_page'){td_pg='';pag=''}


    if(add=='add_form'){
            fm=num+" Forms ||";
        td_form ="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_form\",localStorage.form,f)'>X</button></td></tr> ";}else if(add=='sab_form'){td_form=''; fm=''}

    if(add=='add_gallery'){
                glly=num+ " gallery ||"
        td_gallery="<tr><td>"+item+"</td><td>"+num+" x 5</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_gallery\",localStorage.gallery,g)'>X</button></td></tr> ";}else if(add=='sab_gallery'){td_gallery='',glly='';}

    if(add=='add_cms'){
                czs=num + " C M S ||";
        td_cms="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_cms\",localStorage.cms,c)'>X</button></td></tr> ";}else if(add=='sab_cms'){td_cms='';czs=""}

    if(add=='add_logo'){
                logos=num+" logos ||"
        td_logo="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_logo\",localStorage.logo,l)'>X</button></td></tr> ";}else if(add=='sab_logo'){td_logo='',logos=''}

    if(add=='add_seo'){
                seoz=item+" ||";
        td_seo="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_seo\",localStorage.seo,s)'>X</button></td></tr> ";}else if(add=='sab_seo'){td_seo='',seoz=''}

    if(add=='add_ssl'){
                sslz=" SSL ||"
        td_ssl="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_ssl\",localStorage.ssl,ss)'>X</button></td></tr> ";}else if(add=='sab_ssl'){td_ssl='',sslz=''}
    if(add=='add_protected'){
                prt=" domain protected ||"
        td_protected="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_protected\",localStorage.protected,pr)'>X</button></td></tr> ";}else if(add=='sab_protected'){td_protected='',prt=''}

    if(add=='add_domain'){
                dnm=" domain info locker ||"
        td_domain="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_domain\",localStorage.domain,d)'>X</button></td></tr> ";}else if(add=='sab_domain'){td_domain='',dnm=''}

    if(add=='add_chat'){
                ct=num+" Basic Chat Zone ||";
        td_chat="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_chat\",localStorage.chat,ch)'>X</button></td></tr> ";}else if(add=='sab_chat'){td_chat='',ct=''}

    if(add=='add_email'){
                em=num+" X 5 Emails ||";
        td_email="<tr><td>"+item+"</td><td>"+num+" x 5</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_email\",localStorage.email,e)'>X</button></td></tr> ";}else if(add=='sab_email'){td_email='',em=''}

    if(add=='add_ehost'){
                hst=item+" ||";
        td_ehost="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_ehost\",localStorage.ehost,eco)'>X</button></td></tr> ";}else if(add=='sab_ehost'){td_ehost='',hst=''}

    if(add=='add_design'){
                dsg=item+" ||";
        td_design="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_design\",localStorage.design,designe)'>X</button></td></tr> ";}else if(add=='sab_design'){td_design='',dsg=''}

    if(add=='add_seos'){
                seoz=item+" ||"
        td_seos="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><button class='del_btn' onclick='remove_item(\"sab_seos\",localStorage.seos,myseos)'>X</button></td></tr> ";}else if(add=='sab_seos'){td_seos='',seoz='';}



    if(td_pg=='' && td_form=='' && td_gallery=='' && td_cms=='' && td_logo=='' && td_ssl=='' && td_protected=='' && td_domain=='' && td_chat=='' && td_email==''
    && td_ehost=='' && td_design=='' && td_seos==''){th=''}


else {th ="<tr><th>Name</th><th>Quantity</th><th>Price</th><th>Package</th><th>Remove</th></tr>"};
    if(td_cms==null){td_cms=""}
    _("table").innerHTML = th + td_pg + td_form + td_gallery + td_cms + td_logo + td_seos + td_ssl
          + td_protected + td_domain + td_chat + td_email + td_ehost + td_design ;

     feature=pag+fm+glly+czs+logos+seoz+sslz+prt+dnm+ct+em+hst+dsg;
}

function add_page() {
    localStorage.setItem("price",125.00);
    localStorage.setItem("page_id",1);
    p +=parseFloat(localStorage.price);
    pgs+=parseInt(localStorage.page_id);
    _("state").innerHTML=pgs+" Page (R125.00 for each additional page)";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span1").style.display="block";
    create_tabe('add_page','Web Page',pgs,localStorage.price);
}
function sub_page() {
    p  -=parseFloat(localStorage.price);
    pgs-=parseInt(localStorage.page_id);
    _("state").innerHTML=pgs+" Page (R125.00 for each additional page)";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_page','Web Page',pgs,localStorage.price);
    if(pgs <= 0) {
        _("state").innerHTML=" Page (R125.00 for each additional page)";
        localStorage.removeItem('price');pgs=0;
        localStorage.removeItem('page_id');
         create_tabe('sab_page','Web Page',pgs,'R 125.00');
        _("span1").style.display = "none";

    }
}
var f=0;
function add_form() {
    localStorage.setItem("form",99.99);
    localStorage.setItem("form_id",1);
    p+=parseFloat(localStorage.form);
    f+=parseInt(localStorage.form_id);

    _("form").innerHTML=f+" Form (R99.99 for each additional page) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span2").style.display="block"
    create_tabe('add_form',' Form ',f,localStorage.form);
}

function sub_form() {
    f -=parseInt(localStorage.form_id);
    p -=parseFloat(localStorage.form);
    _("form").innerHTML=f+" Form (R99.99 for each additional page) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_form',' Form ',f,localStorage.form);
    if(f <= 0){
        _("form").innerHTML=" Form (R99.99 for each additional page) ";
        localStorage.removeItem("form");localStorage.removeItem("form_id");f=0;
        create_tabe('sab_form',' Form ',f,localStorage.form);
        _("span2").style.display="none";
    }
}
var g=0;
function add_gallery() {
    localStorage.setItem("gallery",125.00);
    localStorage.setItem("gallery_id",1);
    p+=parseFloat(localStorage.gallery);
    g+=parseInt(localStorage.gallery_id);
    _("photo").innerHTML=g+" x 5 Photo Gallery (R125.00 for each additional page)";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span3").style.display="block";
    create_tabe('add_gallery',' Photo Gallery ',g,localStorage.gallery);
}

function sub_gallery() {
    p-=parseFloat(localStorage.gallery);
    g-=parseInt(localStorage.gallery_id);
    _("photo").innerHTML=g+" x 5 Photo Gallery (R125.00 for each additional page)";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_gallery',' Photo Gallery ',g,localStorage.gallery);
    if(g <= 0){
        localStorage.removeItem("gallery");localStorage.removeItem("gallery");g=0;
        _("photo").innerHTML="Photo Gallery (R125.00 for each additional page)";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        create_tabe('sab_gallery',' Photo Gallery ',f,localStorage.form);
        _("span3").style.display="none";
    }
}
var c=0;
function add_cms() {
    localStorage.setItem("cms",199.50);
    localStorage.setItem("cms_id",1);
    p += parseFloat(localStorage.cms);
    c+=parseInt(localStorage.cms_id);
    _("cms").innerHTML=c+" Content Management System (R199.50 for each additional page)";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span4").style.display="block";
    create_tabe('add_cms',' C M S ',c,localStorage.cms);
}

function sub_cms() {
    p -= parseFloat(localStorage.cms);
    c -=parseInt(localStorage.cms_id);
    _("cms").innerHTML=c+" Content Management System (R199.50 for each additional page)";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_cms',' C M S ',c,localStorage.cms);
    if(c <= 0){
        localStorage.removeItem("cms");localStorage.removeItem("cms_id");c=0;
        _("cms").innerHTML=" Content Management System (R199.50 for each additional page)";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe('sab_cms',' C M S ',c,localStorage.cms);
        _("span4").style.display="none";
    }

}
var l=0;
function add_logo() {
    localStorage.setItem("logo",650.00);
    localStorage.setItem("logo_id",1);
    p += parseFloat(localStorage.logo);
    l +=parseInt(localStorage.logo_id);
    _("logo").innerHTML=l+" Logo Design (R650.00)";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span5").style.display="block";
    _("lg").style.display="none";
    create_tabe('add_logo',' Logo ',l,localStorage.logo);
}

function sub_logo() {
    p -= parseFloat(localStorage.logo);
    l -=parseInt(localStorage.logo_id);
    _("logo").innerHTML=l+" Logo Design (R650.00)";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_logo',' Logo ',l,localStorage.logo);
    if(l <= 0){
        _("lg").style.display="block";
        localStorage.removeItem("logo");localStorage.removeItem("logo_id");l=0;
        _("logo").innerHTML="Logo Design (R650.00)";
        _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe('sab_logo',' Logo ',l,localStorage.logo);
        _("span5").style.display="none";
    }

}
var s=0;
function add_seo() {
    localStorage.setItem("seo",999.99);
    localStorage.setItem("seo_id",1);
    p +=parseFloat(localStorage.seo);
    s +=parseInt(localStorage.seo_id);
    _("seos").innerHTML=s+" Search Engine Optimization (R999.99 p/a) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span6").style.display="block";
    _("search").style.display="none";
    create_tabe('add_seo','S E O',s,localStorage.seo);
}
function sub_seo() {
    p  -=parseFloat(localStorage.seo);
    s  -=parseInt(localStorage.seo_id);
    _("seos").innerHTML=s+" Search Engine Optimization (R999.99 p/a) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_seo','S E O',s,localStorage.seo);
    if(s <= 0) {
        _("search").style.display="block";
        _("seos").innerHTML=" Search Engine Optimization (R999.99 p/a) ";
        localStorage.removeItem('seo');s=0;
        localStorage.removeItem('seo_id');
        create_tabe('sab_seo','S E O',s,localStorage.seo);
        _("span6").style.display = "none";

    }
}

var ss=0;
function add_ssl() {
    localStorage.setItem("ssl",1300.00);
    localStorage.setItem("ssl_id",1);
    p +=parseFloat(localStorage.ssl);
    ss +=parseInt(localStorage.ssl_id);
    _("ssls").innerHTML=ss+" S S L Certificate (R1300.00 p/a) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span7").style.display="block";
    _("myssl").style.display="none";
    create_tabe('add_ssl','S S L',ss,localStorage.ssl);
}
function sub_ssl() {
    p  -=parseFloat(localStorage.ssl);
    ss  -=parseInt(localStorage.ssl_id);
    _("ssls").innerHTML=ss+" S S L Certificate (R1300.00 p/a) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_ssl','S S L',s,localStorage.ssl);
    if(ss <= 0) {
        _("myssl").style.display="block";
        _("ssls").innerHTML=" S S L Certificate (R1300.00) ";
        localStorage.removeItem('ssl');s=0;
        localStorage.removeItem('ssl_id');
        create_tabe('sab_ssl','S S L',ss,localStorage.ssl);
        _("span7").style.display = "none";

    }
}

var pr=0;
function add_protected() {
    localStorage.setItem("protected",349.99);
    localStorage.setItem("protected_id",1);
    p +=parseFloat(localStorage.protected);
    pr +=parseInt(localStorage.protected_id);
    _("protect").innerHTML=pr+" Protected Registration (R349.99 first month , R699.99 renewal p/a) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span8").style.display="block";
    _("pr").style.display="none";
    create_tabe('add_protected',' Protected Registration ',pr,localStorage.protected);
}
function sub_protected() {
    p  -=parseFloat(localStorage.protected);
    pr  -=parseInt(localStorage.protected_id);
    _("protect").innerHTML=pr+" Protected Registration (R349.99 first month , R699.99 renewal p/a) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_protected',' Protected Registration ',pr,localStorage.protected);
    if(pr <= 0) {
        _("pr").style.display="block";
        _("protect").innerHTML=" Protected Registration (R349.99 first month , R699.99 renewal p/a ";
        localStorage.removeItem('protected');localStorage.removeItem('protected_id');pr=0;
        create_tabe('sab_protected',' Protected Registration ',pr,localStorage.protected);
        _("span8").style.display = "none";

    }
}

var d=0;
function add_domain() {
    localStorage.setItem("domain",200.00);
    localStorage.setItem("domain_id",1);
    p +=parseFloat(localStorage.domain);
    d +=parseInt(localStorage.domain_id);
    _("domains").innerHTML=d+" Domain Infor.Locker (R200.00) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span9").style.display="block";
    _("dmn").style.display="none";
    create_tabe('add_domain',' Domain Infor.Locker ',d,localStorage.domain);
}
function sub_domain() {
    p  -=parseFloat(localStorage.domain);
    d  -=parseInt(localStorage.domain_id);
    _("domains").innerHTML=d+" Domain Infor.Locker (R200.00) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_domain',' Domain Infor.Locker ',d,localStorage.domain);
    if(d <= 0) {
        _("dmn").style.display="block";
        _("domains").innerHTML=" Domain Infor.Locker (R200.00) ";
        localStorage.removeItem('domain');localStorage.removeItem('domain_id');d=0;
        create_tabe('sab_domain', 'Domain Infor.Locker ',d,localStorage.domain);
        _("span9").style.display = "none";

    }
}

var ch=0;
function add_chat() {
    localStorage.setItem("chat",800.00);
    localStorage.setItem("chat_id",1);
    p +=parseFloat(localStorage.chat);
    ch +=parseInt(localStorage.chat_id);
    _("basic").innerHTML=ch+" Basic Chat Zone (R800.00) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span10").style.display="block";
    create_tabe('add_chat',' Basic Chat Zone ',ch,localStorage.chat);
}
function sub_chat() {
    p  -=parseFloat(localStorage.chat);
    ch -=parseInt(localStorage.chat_id);
    _("basic").innerHTML=ch+" Basic Chat Zone (R800.00) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_chat',' Basic Chat Zone ',ch,localStorage.chat);
    if(ch <= 0) {
        _("basic").innerHTML=" Basic Chat Zone (R800.00) ";
        localStorage.removeItem('basic');localStorage.removeItem('basic');ch=0;
        create_tabe('sab_chat', 'Basic Chat Zone  ',ch,localStorage.chat);
        _("span10").style.display = "none";

    }
}

var e=0;
function add_email() {
    localStorage.setItem("email",50.00);
    localStorage.setItem("email_id",1);
    p +=parseFloat(localStorage.email);
    e +=parseInt(localStorage.email_id);
    _("mail").innerHTML=e+" x 5 Webmail Account (R50.00) ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span11").style.display="block";
    create_tabe('add_email',' Webmail Account ',e,localStorage.email);
}
function sub_email() {
    p  -=parseFloat(localStorage.email);
    e -=parseInt(localStorage.email_id);
    _("mail").innerHTML=e+" x 5 Webmail Account ";
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_email',' Webmail Account ',e,localStorage.email);
    if(e <= 0) {
        _("mail").innerHTML=" Webmail Account (R50.00) ";
        localStorage.removeItem('email');localStorage.removeItem('email');e=0;
        create_tabe('sab_email', ' Webmail Account ',e,localStorage.email);
        _("span11").style.display = "none";

    }
}
var designe=1
function add_designg() {
    _('span15').style.display="block"
    _("spangg").style.display="none"
    _("spanc").style.display="block"
    _('spanpr').style.display="block"
    _('span16').style.display="none"
    _('span17').style.display="none"
    if(localStorage.design!=null){p-=parseFloat(localStorage.design)}
    localStorage.setItem("design",0.00);
    p +=parseFloat(localStorage.design);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_design',' General Design ',designe,localStorage.design);
}
function add_designpr() {
    _('span16').style.display = "block"
    _("spanpr").style.display = "none"
    _("spanc").style.display = "block"
    _('spangg').style.display = "block"
    _('span15').style.display = "none"
    _('span17').style.display = "none"
    if (localStorage.design != null) {
        p -= parseFloat(localStorage.design)
    }
    if (localStorage.package == "Gold Pack" || localStorage.package == "Silver Pack") {
        localStorage.setItem("design", 0.00);
        p += parseFloat(localStorage.design);
        _("order").innerHTML = "Total Cost =  R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_design', ' Custom Design ', designe, localStorage.design);
    } else {
        localStorage.setItem("design", 69.95);
        p += parseFloat(localStorage.design);
        _("order").innerHTML = "Total Cost =  R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_design', ' Premium Design ', designe, localStorage.design);
    }
}
function add_designc() {

    _('span17').style.display = "block"
    _("spanc").style.display = "none"
    _("spanpr").style.display = "block"
    _('spangg').style.display = "block"
    _('span15').style.display = "none"
    _('span16').style.display = "none"
    if (localStorage.design != null) {
        p -= parseFloat(localStorage.design)
    }
    if (localStorage.package == "Gold Pack") {
        localStorage.setItem("design", 0.00);
        p += parseFloat(localStorage.design);
        _("order").innerHTML = "Total Cost =  R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_design', ' Custom Design ', designe, localStorage.design);
    } else {
        localStorage.setItem("design", 99.99);
        p += parseFloat(localStorage.design);
        _("order").innerHTML = "Total Cost =  R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_design', ' Custom Design ', designe, localStorage.design);

    }
}

function sub_designg() {
    _("span15").style.display="none";
    _("spangg").style.display="block";
    p -=parseFloat(localStorage.design);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_design',' General Design ',designe,localStorage.design);
    localStorage.removeItem("designe");
}

function sub_designpr() {
    _("span16").style.display="none";
    _("spanpr").style.display="block";
    p -=parseFloat(localStorage.design);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_design',' Premium Design ',designe,localStorage.design);
    localStorage.removeItem("designe");
}

function sub_designc() {
    _("span17").style.display="none";
    _("spanc").style.display="block";
    p -=parseFloat(localStorage.design);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_design',' Custom Design ',designe,localStorage.design);
    localStorage.removeItem("designe");
}



var eco=1;
function add_hoste() {
    _('span12').style.display="block"
    _("spanp").style.display="block"
    _("spang").style.display="block"
    _('spane').style.display="none"
    _('span13').style.display="none"
    _('span14').style.display="none"
    if(localStorage.ehost!=null){p -=parseFloat(localStorage.ehost)}
    localStorage.setItem("ehost",0.00);
    p +=parseFloat(localStorage.ehost);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_ehost',' Economy Hosting ',eco,localStorage.ehost);

}




function add_hostp() {
    _('span13').style.display="block"
    _('spane').style.display="block"
    _("spang").style.display="block"
    _("spanp").style.display="none"
    _('span12').style.display="none"
    _('span14').style.display="none"
    if(localStorage.ehost!=null){p -=parseFloat(localStorage.ehost)}
    localStorage.setItem("ehost",56.00);
    p +=parseFloat(localStorage.ehost);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_ehost',' Premium Hosting ',eco,localStorage.ehost);
}


function add_hostg() {
    _('span14').style.display="block"
    _("spanp").style.display="block"
    _('spane').style.display="block"
    _("spang").style.display="none"
    _('span13').style.display="none"
    _('span12').style.display="none"
    if(localStorage.ehost!=null){p -=parseFloat(localStorage.ehost)}
    localStorage.setItem("ehost",78.00);
    p +=parseFloat(localStorage.ehost);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_ehost',' Gold Hosting ',eco,localStorage.ehost);
}
function sub_hoste() {
    _('span12').style.display="none"
    _('spane').style.display="block"
    p -=parseFloat(localStorage.ehost);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_ehost',' Economy Hosting ',eco,localStorage.ehost);
    localStorage.removeItem("ehost");

}
function sub_hostp() {
    _('span13').style.display="none"
    _('spanp').style.display="block"
    p -=parseFloat(localStorage.ehost);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_ehost',' Premium Hosting ',eco,localStorage.ehost);
    localStorage.removeItem("ehost");
}
function sub_hostg() {
    _('span14').style.display="none"
    _('spang').style.display="block"
    p -=parseFloat(localStorage.ehost);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_ehost',' Gold Hosting ',eco,localStorage.ehost);
    localStorage.removeItem("ehost");
}
var myseos=1;
function add_seog() {
    _("seop").style.display="block"
    _("seoc").style.display="block";
    _("span18").style.display="block";
    _("span19").style.display="none";
    _("span20").style.display="none";
    _("seog").style.display="none";
    if(localStorage.seos!=null){p -=parseFloat(localStorage.seos)}
    if(localStorage.package == "Gold Pack") {
        localStorage.setItem("seos", 0.00);
        p += parseFloat(localStorage.seos);
        _("order").innerHTML = "Total Cost =  R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_seos', ' Basic S E O  ', myseos, localStorage.seos);
    }else{
        localStorage.setItem("seos", 420.00);
        p += parseFloat(localStorage.seos);
        _("order").innerHTML = "Total Cost =  R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_seos', ' Basic S E O  ', myseos, localStorage.seos);
    }
}

function sub_seog() {
    _("seop").style.display="block"
    _("seoc").style.display="block";
    _("span18").style.display="none";
    _("span19").style.display="none";
    _("span20").style.display="none";
    _("seog").style.display="block";
    p -=parseFloat(localStorage.seos);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_seos',' Basic S E O ',myseos,localStorage.seos);
    localStorage.removeItem("seos");

}

function add_seop() {
    _("seop").style.display="none";
    _("span19").style.display="block";
    _("span18").style.display="none";
    _("span20").style.display="none";
    _("seog").style.display="block"
    _("seoc").style.display="block";
    if(localStorage.seos!=null){p -=parseFloat(localStorage.seos)}
    localStorage.setItem("seos",660.00);
    p +=parseFloat(localStorage.seos);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_seos',' Premium S E O  ',myseos,localStorage.seos);
}
function sub_seop() {
    _("seop").style.display="block";
    _("span19").style.display="none";
    _("span18").style.display="none";
    _("span20").style.display="none";
    _("seog").style.display="block"
    _("seoc").style.display="block";
    p -=parseFloat(localStorage.seos);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_seos',' Premium S E O ',myseos,localStorage.seos);
    localStorage.removeItem("seos");
}

function add_seoc() {
    _("seop").style.display="block"
    _("span20").style.display="block";
    _("seog").style.display="block";
    _("span19").style.display="none";
    _("span18").style.display="none";
    _("seoc").style.display="none";
    if(localStorage.seos!=null){p -=parseFloat(localStorage.seos)}
    localStorage.setItem("seos",999.99);
    p +=parseFloat(localStorage.seos);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_seos',' Gold S E O  ',myseos,localStorage.seos);

}

function sub_seoc() {
    _("seop").style.display="block"
    _("span20").style.display="none";
    _("seog").style.display="block";
    _("span19").style.display="none";
    _("span18").style.display="none";
    _("seoc").style.display="block";
    p -=parseFloat(localStorage.seos);
    _("order").innerHTML="Total Cost =  R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_seos',' Gold S E O ',myseos,localStorage.seos);
    localStorage.removeItem("seos");
}