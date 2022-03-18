function _(a) {
    return document.getElementById(a)
}
/*window.onload=xx;
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
}*/
var p =parseFloat(localStorage.prc);
function remove_item(add,pric,num) {
    if(add=='sab_page'){pgs=0;localStorage.removeItem("price");localStorage.removeItem("page_id");
     p-=parseFloat(pric * parseInt(num)).toFixed(2);
    _("state").innerHTML=" <b>Page</b> (R125.00 for each additional page)";
    _("span1").style.visibility = "hidden";
    _('count1').innerHTML='';
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }
    if(add=='sab_form'){f=0;localStorage.removeItem("form");localStorage.removeItem("form_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("form").innerHTML=" <b>Form</b> (R99.99 for each additional page) ";
        _("span2").style.visibility = "hidden";
        _('count2').innerHTML='';
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }
    if(add=='sab_gallery'){g=0;localStorage.removeItem("gallery");localStorage.removeItem("gallery_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("photo").innerHTML=" <b>Photo Gallery</b> (R125.00 for each additional page) ";
        _("span3").style.visibility = "hidden";
        _('count3').innerHTML='';
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }
    if(add=='sab_cms'){c=0;localStorage.removeItem("cms");localStorage.removeItem("cms_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("cms").innerHTML=" <b>Content Management System</b> (R199.50 for each additional page) ";
        _("span4").style.visibility = "hidden";
        _('count4').innerHTML='';
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

if(add=='sab_logo'){l=0;localStorage.removeItem("logo");localStorage.removeItem("logo_id");
    p-=parseFloat(pric * parseInt(num)).toFixed(2);
    _("logo").innerHTML=" <b>Logo Design</b> (R650.00) ";
    _("span5").style.visibility = "hidden";
    _("lg").style.visibility="visible";
    _('count5').innerHTML='';
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe(add,'','','');
}
    if(add=='sab_seo'){s=0;localStorage.removeItem("seo");localStorage.removeItem("seo_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("seos").innerHTML=" <b>Search Engine Optimization</b> (R999.99 p/a) ";
        _("span6").style.visibility = "hidden";
        _("search").style.visibility="visible";
        _('count5').innerHTML='';
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_ssl'){ss=0;localStorage.removeItem("ssl");localStorage.removeItem("ssl_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("ssls").innerHTML=" <b>SSL/TLS Certificate</b> (R1300.00) ";
        _("span7").style.visibility = "hidden";
        _("myssl").style.visibility="visible";
        _('count6').innerHTML='';
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_protected'){pr=0;localStorage.removeItem("protected");localStorage.removeItem("protected_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("protect").innerHTML=" <b>Privacy protection</b> (R349.99 first year , R699.99 renewal p/a) ";
        _("span8").style.visibility = "hidden";
        _("pr").style.visibility="visible";
        _('count7').innerHTML='';
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_domain'){d=0;localStorage.removeItem("domain");localStorage.removeItem("domain_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("domains").innerHTML=" <b>Domain Infor. Locker</b> (R200.00) ";
        _("span9").style.visibility = "hidden";
        _('count8').innerHTML='';
        _("dmn").style.visibility="visible";
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_chat'){ch=0;localStorage.removeItem("chat");localStorage.removeItem("chat_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("basic").innerHTML=" <b>Basic Chat Zone</b> (R800.00) ";
        _("span10").style.visibility = "hidden";
        _('count9').innerHTML='';
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_email'){e=0;localStorage.removeItem("email");localStorage.removeItem("email_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("mail").innerHTML=" <b>Webmail Account</b> (R50.00) ";
        _('count10').innerHTML='';
        _("span11").style.visibility="hidden";
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_ehost'){eco=1;localStorage.removeItem("ehost");localStorage.removeItem("ehost_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("span12").style.visibility = "hidden";
        _("span13").style.visibility = "hidden";
        _("span14").style.visibility = "hidden";
        _('count12').innerHTML='';
        _("spane").style.visibility="visible";
        _("spanp").style.visibility="visible";
        _("spang").style.visibility="visible";
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_design'){designe=1;localStorage.removeItem("design");localStorage.removeItem("design_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("span15").style.visibility = "hidden";
        _("span16").style.visibility = "hidden";
        _("span17").style.visibility = "hidden";
        _('count13').innerHTML='';
        _("span14").style.visibility = "hidden";
        _("spangg").style.visibility="visible";
        _("spanpr").style.visibility="visible";
        _("spanc").style.visibility="visible";
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

    if(add=='sab_seos'){myseos=1;localStorage.removeItem("seos");localStorage.removeItem("seos_id");
        p-=parseFloat(pric * parseInt(num)).toFixed(2);
        _("span18").style.visibility = "hidden";
        _("span19").style.visibility = "hidden";
        _("span20").style.visibility = "hidden";
        _('count14').innerHTML='';
        _("seog").style.visibility="visible";
        _("seop").style.visibility="visible";
        _("seoc").style.visibility="visible";
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe(add,'','','');
    }

}
var feature='';
var pgs=0;var pag='',fm='',glly='',czs='',logos='',seoz='',sslz='',prt='',dnm='',ct='',em='',hst='',dsg='';
var  td_pg='',td_form='',td_gallery='',td_cms,td_logo='',td_seo='',td_ssl='',td_protected='',td_domain='',td_chat='',td_email='',td_ehost='',td_design='',td_seos='',th='';
function create_tabe(add,item,num,prc) {

    if(add=='add_page'){
        pag =num+" pages ||";
      td_pg ="<tr><td>"+item+"</td><td >"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
        "<td>"+localStorage.package+"</td><td><i onclick='remove_item(\"sab_page\",localStorage.price,pgs)' class='fa fa-trash-o' style='font-size: 21px; cursor: pointer; color : #ff4444'></i> </td></tr> ";}else if(add=='sab_page'){td_pg='';pag=''}


    if(add=='add_form'){
            fm=num+" Forms ||";
        td_form ="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o'  onclick='remove_item(\"sab_form\",localStorage.form,f)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_form'){td_form=''; fm=''}

    if(add=='add_gallery'){
                glly=num+ " gallery ||"
        td_gallery="<tr><td>"+item+"</td><td>"+num+" x 5</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_gallery\",localStorage.gallery,g)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_gallery'){td_gallery='',glly='';}

    if(add=='add_cms'){
                czs=num + " C M S ||";
        td_cms="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_cms\",localStorage.cms,c)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_cms'){td_cms='',czs=""}

    if(add=='add_logo'){
                logos=num+" logos ||"
        td_logo="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_logo\",localStorage.logo,l)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_logo'){td_logo='',logos=''}

    if(add=='add_seo'){
                seoz=item+" ||";
        td_seo="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_seo\",localStorage.seo,s)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_seo'){td_seo='',seoz=''}

    if(add=='add_ssl'){
                sslz=" SSL ||"
        td_ssl="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_ssl\",localStorage.ssl,ss)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_ssl'){td_ssl='',sslz=''}
    if(add=='add_protected'){
                prt=" domain protected ||"
        td_protected="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_protected\",localStorage.protected,pr)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_protected'){td_protected='',prt=''}

    if(add=='add_domain'){
                dnm=" domain info locker ||"
        td_domain="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_domain\",localStorage.domain,d)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_domain'){td_domain='',dnm=''}

    if(add=='add_chat'){
                ct=num+" Basic Chat Zone ||";
        td_chat="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_chat\",localStorage.chat,ch)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_chat'){td_chat='',ct=''}

    if(add=='add_email'){
                em=num+" X 5 Emails ||";
        td_email="<tr><td>"+item+"</td><td>"+num+" x 5</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_email\",localStorage.email,e)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_email'){td_email='',em=''}

    if(add=='add_ehost'){
                hst=item+" ||";
        td_ehost="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_ehost\",localStorage.ehost,eco)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_ehost'){td_ehost='',hst=''}

    if(add=='add_design'){
                dsg=item+" ||";
        td_design="<tr><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_design\",localStorage.design,designe)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_design'){td_design='',dsg=''}

    if(add=='add_seos'){
                seoz=item+" ||"
        td_seos="<tr align='center'><td>"+item+"</td><td>"+num+"</td><td> R"+parseFloat(prc).toFixed(2)+"</td>" +
            "<td>"+localStorage.package+"</td><td><i class='fa fa-trash-o' onclick='remove_item(\"sab_seos\",localStorage.seos,myseos)' style='font-size: 21px; cursor: pointer; color : #ff4444'></i></td></tr> ";}else if(add=='sab_seos'){td_seos='',seoz='';}



    if(td_pg=='' && td_form=='' && td_gallery=='' && td_cms=='' && td_logo=='' && td_ssl=='' && td_protected=='' && td_domain=='' && td_chat=='' && td_email==''
    && td_ehost=='' && td_design=='' && td_seos==''){th='';_("classTable").style.display='none'}

    else {_("classTable").style.display='block';th ="<thead><tr align='center'><th>Name</th><th>Quantity</th><th>Price</th><th>Package</th><th>Remove</th></tr></thead>"};
       if(td_cms==null){td_cms=""}
      _("table").innerHTML = th ;
      _('bodyTable').innerHTML = td_pg + td_form + td_gallery + td_cms + td_logo + td_seos + td_ssl
          + td_protected + td_domain + td_chat + td_email + td_ehost + td_design ;
     feature=pag+fm+glly+czs+logos+seoz+sslz+prt+dnm+ct+em+hst+dsg;
}

function add_page() {
    localStorage.setItem("price",125.00);
    localStorage.setItem("page_id",1);
    p +=parseFloat(localStorage.price);
    pgs+=parseInt(localStorage.page_id);
    _('count1').innerHTML=' '+pgs+''
    _("state").innerHTML=" <b>Page</b> (R125.00 for each additional page)";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span1").style.visibility="visible";
    create_tabe('add_page','Web Page',pgs,localStorage.price);
}
function sub_page() {
    p  -=parseFloat(localStorage.price);
    pgs-=parseInt(localStorage.page_id);
    _('count1').innerHTML=' '+pgs+''
    _("state").innerHTML=" <b>Page</b> (R125.00 for each additional page)";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_page','Web Page',pgs,localStorage.price);
    if(pgs <= 0) {
        _("state").innerHTML=" Page (R125.00 for each additional page)";
        localStorage.removeItem('price');pgs=0;
        localStorage.removeItem('page_id');
        _('count1').innerHTML=''
        _("span1").style.visibility="hidden";
      create_tabe('sab_page','Web Page',pgs,'R 125.00');
    }
}
var f=0;
function add_form() {
    localStorage.setItem("form",99.99);
    localStorage.setItem("form_id",1);
    p+=parseFloat(localStorage.form);
    f+=parseInt(localStorage.form_id);
    _('count2').innerHTML=' '+f+''
    _("form").innerHTML=" <b>Form</b> (R99.99 for each additional page) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span2").style.visibility="visible"
    create_tabe('add_form',' Form ',f,localStorage.form);
}

function sub_form() {
    f -=parseInt(localStorage.form_id);
    p -=parseFloat(localStorage.form);
    _('count2').innerHTML=' '+f+''
    _("form").innerHTML=" <b>Form</b> (R99.99 for each additional page) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_form',' Form ',f,localStorage.form);
    if(f <= 0){
        _('count2').innerHTML=''
        _("form").innerHTML=" <b>Form</b> (R99.99 for each additional page) ";
        localStorage.removeItem("form");localStorage.removeItem("form_id");f=0;
        create_tabe('sab_form',' Form ',f,localStorage.form);
        _("span2").style.visibility="hidden";
    }
}
var g=0;
function add_gallery() {
    localStorage.setItem("gallery",125.00);
    localStorage.setItem("gallery_id",1);
    p+=parseFloat(localStorage.gallery);
    g+=parseInt(localStorage.gallery_id);
    _('count3').innerHTML=' '+g+''
    _("photo").innerHTML=" 5 <b>Photo Gallery</b> (R125.00 for each additional page)";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span3").style.visibility="visible";
    create_tabe('add_gallery',' Photo Gallery ',g,localStorage.gallery);
}

function sub_gallery() {
    p-=parseFloat(localStorage.gallery);
    g-=parseInt(localStorage.gallery_id);
    _('count3').innerHTML=' '+g+''
    _("photo").innerHTML=" 5 Photo Gallery (R125.00 for each additional page)";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_gallery',' Photo Gallery ',g,localStorage.gallery);
    if(g <= 0){
        localStorage.removeItem("gallery");localStorage.removeItem("gallery");g=0;
        _("photo").innerHTML="Photo Gallery (R125.00 for each additional page)";
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _('count3').innerHTML=' '
        create_tabe('sab_gallery',' Photo Gallery ',f,localStorage.form);
        _("span3").style.visibility="hidden";
    }
}
var c=0;
function add_cms() {
    localStorage.setItem("cms",199.50);
    localStorage.setItem("cms_id",1);
    p += parseFloat(localStorage.cms);
    c+=parseInt(localStorage.cms_id);
    _('count4').innerHTML=' '+c+''
    _("cms").innerHTML=" <b>Content Management System</b> (R199.50 for each additional page)";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span4").style.visibility="visible";
    create_tabe('add_cms',' C M S ',c,localStorage.cms);
}

function sub_cms() {
    p -= parseFloat(localStorage.cms);
    c -=parseInt(localStorage.cms_id);
    _('count4').innerHTML=' '+c+''
    _("cms").innerHTML=" <b>Content Management System</b> (R199.50 for each additional page)";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_cms',' C M S ',c,localStorage.cms);
    if(c <= 0){
        localStorage.removeItem("cms");localStorage.removeItem("cms_id");c=0;
        _('count4').innerHTML=' '
        _("cms").innerHTML="<b>Content Management System</b> (R199.50 for each additional page)";
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe('sab_cms',' C M S ',c,localStorage.cms);
        _("span4").style.visibility="hidden";
    }

}
var l=0;
function add_logo() {
    localStorage.setItem("logo",650.00);
    localStorage.setItem("logo_id",1);
    p += parseFloat(localStorage.logo);
    l +=parseInt(localStorage.logo_id);
    _('count5').innerHTML=' '+l+''
    _("logo").innerHTML=" <b>Logo Design</b> (R650.00)";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span5").style.visibility="visible";
    _("lg").style.visibility="hidden";
    create_tabe('add_logo',' Logo ',l,localStorage.logo);
}

function sub_logo() {
    p -= parseFloat(localStorage.logo);
    l -=parseInt(localStorage.logo_id);
    _('count5').innerHTML=' '+l+''
    _("logo").innerHTML=" <b>Logo Design</b> (R650.00)";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_logo',' Logo ',l,localStorage.logo);
    if(l <= 0){
        _("lg").style.visibility="visible";
        localStorage.removeItem("logo");localStorage.removeItem("logo_id");l=0;
        _("logo").innerHTML="Logo Design (R650.00)";
        _('count5').innerHTML=' '
        _("order").innerHTML="R"+parseFloat(p.toFixed(2)).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        create_tabe('sab_logo',' Logo ',l,localStorage.logo);
        _("span5").style.visibility="hidden";
    }

}
/*var s=0;
function add_seo() {
    localStorage.setItem("seo",999.99);
    localStorage.setItem("seo_id",1);
    p +=parseFloat(localStorage.seo);
    s +=parseInt(localStorage.seo_id);
    _('count6').innerHTML=' '+s+''
    _("seos").innerHTML=" <b>Search Engine Optimization</b> (R999.99 p/a) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span6").style.visibility="visible";
    /!*_("search").style.display="none";*!/
    create_tabe('add_seo','S E O',s,localStorage.seo);
}
function sub_seo() {
    p  -=parseFloat(localStorage.seo);
    s  -=parseInt(localStorage.seo_id);
    _("seos").innerHTML=" <b>Search Engine Optimization</b> (R999.99 p/a) ";
    _('count6').innerHTML=' '+s+''
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_seo','S E O',s,localStorage.seo);
    if(s <= 0) {
        /!*_("search").style.display="block";*!/
        _("seos").innerHTML=" Search Engine Optimization (R999.99 p/a) ";
        localStorage.removeItem('seo');s=0;
        _('count6').innerHTML=' '
        localStorage.removeItem('seo_id');
        create_tabe('sab_seo','S E O',s,localStorage.seo);
        _("span6").style.visibility = "hidden";

    }
}*/

var ss=0;
function add_ssl() {
    localStorage.setItem("ssl",1300.00);
    localStorage.setItem("ssl_id",1);
    p +=parseFloat(localStorage.ssl);ss=1;
    _('count6').innerHTML=' '+ss+''
    _("ssls").innerHTML=" <b>S S L Certificate</b> (R1300.00 p/a) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span7").style.visibility="visible";
    _("myssl").style.visibility="hidden";
    create_tabe('add_ssl','S S L',ss,localStorage.ssl);
}
function sub_ssl() {
    p  -=parseFloat(localStorage.ssl);
    _("ssls").innerHTML=" <b>S S L Certificate</b> (R1300.00 p/a) ";
    _('count6').innerHTML=' '
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
       _("myssl").style.visibility="visible";
        localStorage.removeItem('ssl');ss=0;
        create_tabe('sab_ssl','S S L',ss,localStorage.ssl);
        _("span7").style.visibility = "hidden";

}

var pr=0;
function add_protected() {
    localStorage.setItem("protected",349.99);
    localStorage.setItem("protected_id",1);
    p +=parseFloat(localStorage.protected);
  /*  pr +=parseInt(localStorage.protected_id);*/
    pr=1
    _('count7').innerHTML=' 1 '
    _("protect").innerHTML=" <b>Protected Protection</b> (R349.99 first year , R699.99 renewal p/a) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span8").style.visibility="visible";
    _("pr").style.visibility="hidden";
    create_tabe('add_protected',' Protected Registration ',pr,localStorage.protected);
}
function sub_protected() {
    p  -=parseFloat(localStorage.protected); pr=0;
    _("protect").innerHTML=" <b>Protected Protection</b> (R349.99 first year , R699.99 renewal p/a) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        _("pr").style.visibility="visible";
        localStorage.removeItem('protected');
    _('count7').innerHTML=''
        create_tabe('sab_protected',' Protected Registration ',pr,localStorage.protected);
    _("span8").style.visibility = "hidden";


}

var d=0;
function add_domain() {
    localStorage.setItem("domain",200.00);
    localStorage.setItem("domain_id",1);
    p +=parseFloat(localStorage.domain);
    d=1;
    _('count8').innerHTML=' '+d+''
    _("domains").innerHTML=" <b> Domain Infor.Locker </b> (R200.00 p/a) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span9").style.visibility="visible";
    _("dmn").style.visibility="hidden";
    create_tabe('add_domain',' Domain Infor.Locker ',d,localStorage.domain);
}
function sub_domain() {
    p  -=parseFloat(localStorage.domain);
    _('count8').innerHTML=''
    _("domains").innerHTML=" <b> Domain Infor.Locker </b> (R200.00 p/a) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        _("dmn").style.visibility="visible";
        _("domains").innerHTML=" <b> Domain Infor.Locker </b> (R200.00 p/a) ";
        localStorage.removeItem('domain');localStorage.removeItem('domain_id');d=0;
        create_tabe('sab_domain', 'Domain Infor.Locker ',d,localStorage.domain);
        _("span9").style.visibility = "hidden";

}

var ch=0;
function add_chat() {
    localStorage.setItem("chat",800.00);
    localStorage.setItem("chat_id",1);
    p +=parseFloat(localStorage.chat);
    ch +=parseInt(localStorage.chat_id);
    _('count9').innerHTML=' '+ch+''
    _("basic").innerHTML=" <b>Basic Chat Zone</b> (R800.00) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span10").style.visibility="visible";
    create_tabe('add_chat',' Basic Chat Zone ',ch,localStorage.chat);
}
function sub_chat() {
    p  -=parseFloat(localStorage.chat);
    ch -=parseInt(localStorage.chat_id);
    _('count9').innerHTML=' '+ch+''
    _("basic").innerHTML=" <b>Basic Chat Zone</b> (R800.00) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_chat',' Basic Chat Zone ',ch,localStorage.chat);
    if(ch <= 0) {
        _("basic").innerHTML=" <b>Basic Chat Zone</b> (R800.00) ";
        _('count9').innerHTML=''
        localStorage.removeItem('basic');localStorage.removeItem('basic');ch=0;
        create_tabe('sab_chat', 'Basic Chat Zone  ',ch,localStorage.chat);
        _("span10").style.visibility = "hidden";

    }
}

var e=0;
function add_email() {
    localStorage.setItem("email",50.00);
    localStorage.setItem("email_id",1);
    p +=parseFloat(localStorage.email);
    e +=parseInt(localStorage.email_id);
    _('count10').innerHTML=' '+e+''
    _("mail").innerHTML=" 5 <b>Webmail Account</b> (R50.00) ";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    _("span11").style.visibility="visible";
    create_tabe('add_email',' Webmail Account ',e,localStorage.email);
}
function sub_email() {
    p  -=parseFloat(localStorage.email);
    e -=parseInt(localStorage.email_id);
    _('count10').innerHTML=' '+e+''
    _("mail").innerHTML=" 5 <b> Webmail Account </b> (R50.00)";
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_email',' Webmail Account ',e,localStorage.email);
    if(e <= 0) {
        _("mail").innerHTML=" <b> Webmail Account </b> (R50.00) ";
        _('count10').innerHTML=' '
        localStorage.removeItem('email');localStorage.removeItem('email');e=0;
        create_tabe('sab_email', ' Webmail Account ',e,localStorage.email);
        _("span11").style.visibility = "hidden";

    }
}
var designe=1
function add_designg() {
    _('span15').style.visibility="visible"
    _("spangg").style.visibility="hidden"
    _("spanc").style.visibility="visible"
    _('spanpr').style.visibility="visible"
    _('span16').style.visibility="hidden"
    _('span17').style.visibility="hidden"
    if(localStorage.design!=null){p-=parseFloat(localStorage.design)}
    localStorage.setItem("design",0.00);
    p +=parseFloat(localStorage.design);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_design',' General Design ',designe,localStorage.design);
}
function add_designpr() {
    _('span16').style.visibility="visible"
    _("spanpr").style.visibility="hidden"
    _("spanc").style.visibility="visible"
    _('spangg').style.visibility="visible"
    _('span15').style.visibility="hidden"
    _('span17').style.visibility="hidden"
    if (localStorage.design != null) {
        p -= parseFloat(localStorage.design)
    }
    if (localStorage.package == "Gold Pack" || localStorage.package == "Silver Pack" || localStorage.package =="Platinum Pack" || localStorage.package=="Diamond Pack") {
        localStorage.setItem("design", 0.00);
        p += parseFloat(localStorage.design);
        _("order").innerHTML = "R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_design', ' Custom Design ', designe, localStorage.design);
    } else {
        localStorage.setItem("design", 69.95);
        p += parseFloat(localStorage.design);
        _("order").innerHTML = "R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_design', ' Premium Design ', designe, localStorage.design);
    }
}
function add_designc() {

    _('span17').style.visibility="visible"
    _("spanc").style.visibility="hidden"
    _("spanpr").style.visibility="visible"
    _('spangg').style.visibility="visible"
    _('span15').style.visibility="hidden"
    _('span16').style.visibility="hidden"
    if (localStorage.design != null) {
        p -= parseFloat(localStorage.design)
    }
    if (localStorage.package == "Gold Pack" || localStorage.package == "Ultimate Pack" ) {
        localStorage.setItem("design", 0.00);
        p += parseFloat(localStorage.design);
        _("order").innerHTML = "R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_design', ' Custom Design ', designe, localStorage.design);
    } else {
        localStorage.setItem("design", 99.99);
        p += parseFloat(localStorage.design);
        _("order").innerHTML = "R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_design', ' Custom Design ', designe, localStorage.design);

    }
}

function sub_designg() {
    _("span15").style.visibility="hidden";
    _("spangg").style.visibility="visible";
    p -=parseFloat(localStorage.design);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_design',' General Design ',designe,localStorage.design);
    localStorage.removeItem("designe");
}

function sub_designpr() {
    _("span16").style.visibility="hidden";
    _("spanpr").style.visibility="visible";
    p -=parseFloat(localStorage.design);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_design',' Premium Design ',designe,localStorage.design);
    localStorage.removeItem("designe");
}

function sub_designc() {
    _("span17").style.visibility="hidden";
    _("spanc").style.visibility="visible";
    p -=parseFloat(localStorage.design);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_design',' Custom Design ',designe,localStorage.design);
    localStorage.removeItem("designe");
}



var eco=1;
function add_hoste() {
    _('span12').style.visibility="visible";
    _("spanp").style.visibility="visible";
    _("spang").style.visibility="visible";
    _('spane').style.visibility="hidden";
    _('span13').style.visibility="hidden";
    _('span14').style.visibility="hidden";
    if(localStorage.ehost!=null){p -=parseFloat(localStorage.ehost)}
    localStorage.setItem("ehost",0.00);
    p +=parseFloat(localStorage.ehost);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_ehost',' Economy Hosting ',eco,localStorage.ehost);

}




function add_hostp() {
    _('span13').style.visibility="visible";
    _('spane').style.visibility="visible";
    _("spang").style.visibility="visible";
    _("spanp").style.visibility="hidden";
    _('span12').style.visibility="hidden";
    _('span14').style.visibility="hidden";
    if(localStorage.ehost!=null){p -=parseFloat(localStorage.ehost)}
    localStorage.setItem("ehost",56.00);
    p +=parseFloat(localStorage.ehost);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_ehost',' Duluxe Hosting ',eco,localStorage.ehost);
}


function add_hostg() {
    _('span14').style.visibility="visible";
    _("spanp").style.visibility="visible";
    _('spane').style.visibility="visible";
    _("spang").style.visibility="hidden";
    _('span13').style.visibility="hidden";
    _('span12').style.visibility="hidden";
    if(localStorage.ehost!=null){p -=parseFloat(localStorage.ehost)}
    localStorage.setItem("ehost",78.00);
    p +=parseFloat(localStorage.ehost);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_ehost',' Premium Hosting ',eco,localStorage.ehost);
}
function sub_hoste() {
    _('span12').style.visibility="hidden";
    _('spane').style.visibility="visible";
    p -=parseFloat(localStorage.ehost);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_ehost',' Economy Hosting ',eco,localStorage.ehost);
    localStorage.removeItem("ehost");

}
function sub_hostp() {
    _('span13').style.visibility="hidden";
    _('spanp').style.visibility="visible";
    p -=parseFloat(localStorage.ehost);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_ehost',' Duluxe Hosting ',eco,localStorage.ehost);
    localStorage.removeItem("ehost");
}
function sub_hostg() {
    _('span14').style.visibility="hidden";
    _('spang').style.visibility="visible";
    p -=parseFloat(localStorage.ehost);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_ehost',' Premium Hosting ',eco,localStorage.ehost);
    localStorage.removeItem("ehost");
}
var myseos=1;
function add_seog() {
    _("seop").style.visibility="visible";
    _("seoc").style.visibility="visible";
    _("span18").style.visibility="visible";
    _("span19").style.visibility="hidden";
    _("span20").style.visibility="hidden";
    _("seog").style.visibility="hidden";
    if(localStorage.seos!=null){p -=parseFloat(localStorage.seos)}
    if(localStorage.package == "Gold Pack") {
        localStorage.setItem("seos", 0.00);
        p += parseFloat(localStorage.seos);
        _("order").innerHTML = "R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_seos', ' Premium S E O  ', myseos, localStorage.seos);
    }else{
        localStorage.setItem("seos", 599.99);
        p += parseFloat(localStorage.seos);
        _("order").innerHTML = "R" + parseFloat(p.toFixed(2)) + " !";
        _("discount").innerHTML = "R " + parseFloat(p.toFixed(2) / 100 * 50).toFixed(2) + " (50%) non-refundable deposit of after content approval";
        create_tabe('add_seos', ' Premium S E O  ', myseos, localStorage.seos);
    }
}

function sub_seog() {
    _("seop").style.visibility="visible";
    _("seoc").style.visibility="visible";
    _("span18").style.visibility="hidden";
    _("span19").style.visibility="hidden";
    _("span20").style.visibility="hidden";
    _("seog").style.visibility="visible";
    p -=parseFloat(localStorage.seos);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_seos',' Premium S E O ',myseos,localStorage.seos);
    localStorage.removeItem("seos");

}

function add_seop() {
    _("seop").style.visibility="hidden";
    _("span19").style.visibility="visible";
    _("span18").style.visibility="hidden";
    _("span20").style.visibility="hidden";
    _("seog").style.visibility="visible";
    _("seoc").style.visibility="visible";
    if(localStorage.seos!=null){p -=parseFloat(localStorage.seos)}
    localStorage.setItem("seos",999.99);
    p +=parseFloat(localStorage.seos);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_seos',' Professional S E O  ',myseos,localStorage.seos);
}
function sub_seop() {
    _("seop").style.visibility="visible";
    _("span19").style.visibility="hidden";
    _("span18").style.visibility="hidden";
    _("span20").style.visibility="hidden";
    _("seog").style.visibility="visible";
    _("seoc").style.visibility="visible";
    p -=parseFloat(localStorage.seos);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_seos',' Professional S E O ',myseos,localStorage.seos);
    localStorage.removeItem("seos");
}

function add_seoc() {
    _("seop").style.visibility="visible";
    _("span20").style.visibility="visible";
    _("seog").style.visibility="visible";
    _("span19").style.visibility="hidden";
    _("span18").style.visibility="hidden";
    _("seoc").style.visibility="hidden";
    if(localStorage.seos!=null){p -=parseFloat(localStorage.seos)}
    localStorage.setItem("seos",1499.99);
    p +=parseFloat(localStorage.seos);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('add_seos',' Ultimate S E O  ',myseos,localStorage.seos);

}

function sub_seoc() {
    _("seop").style.visibility="visible";
    _("span20").style.visibility="hidden";
    _("seog").style.visibility="visible";
    _("span19").style.visibility="hidden";
    _("span18").style.visibility="hidden";
    _("seoc").style.visibility="visible";
    p -=parseFloat(localStorage.seos);
    _("order").innerHTML="R"+parseFloat(p.toFixed(2))+" !";
    _("discount").innerHTML="R "+parseFloat(p.toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
    create_tabe('sab_seos',' Ultimate S E O ',myseos,localStorage.seos);
    localStorage.removeItem("seos");
}