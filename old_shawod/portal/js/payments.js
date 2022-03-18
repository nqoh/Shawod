function _(x){return document.getElementById(x)}


function nwdue() {
    _("py_content").style.display="block";
    _("prodcts").style.display="none";
    _("invoices").style.display="none";

    _("nowdue").style.color="silver";
    _("prd").style.color="black";
    _("invoice").style.color="black";

}


function products() {
    _("py_content").style.display="none";
    _("prodcts").style.display="block";
    _("invoices").style.display="none";

    _("nowdue").style.color="black";
    _("prd").style.color="silver";
    _("invoice").style.color="black";

}


function invoices() {
    _("py_content").style.display="none";
    _("prodcts").style.display="none";
    _("invoices").style.display="block";

    _("nowdue").style.color="black";
    _("prd").style.color="black";
    _("invoice").style.color="silver";

}

function terms2() {
    _("terms2").style.display="block";
    _("pj").innerHTML="Terms of Services";
    _("privacy2").style.display="none";
    _("content2").style.display="none"
    scroll_ups()
}
function privecy2() {
    _("terms2").style.display="none";
    _("pj").innerHTML="Privacy Policy";
    _("privacy2").style.display="block";
    _("content2").style.display="none"
    scroll_ups()
}

function scroll_ups() {
    var time=setTimeout('scroll_ups()',30);
    if(window.pageYOffset == 0){
        clearTimeout(time);
    }else{
        window.scroll(0,window.pageYOffset-40);
    }

}
