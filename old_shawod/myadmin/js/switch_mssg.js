function _(x) { return document.getElementById(x)}

function hosting(bill,dev,host,other) {
    _(bill).style.display = "none";
    _(dev).style.display = "none";
    _(host).style.display = "block";
    _(other).style.display = "none";
    _('not').style.display="none"
    _('service').style.display="none"
    _('project').style.display="none";
    _('pay').style.display="none";

    _('py').style.backgroundColor="white";
    _('pj').style.backgroundColor="white";
    _('bi').style.backgroundColor="white";
    _('dv').style.backgroundColor="white";
    _('hs').style.backgroundColor="rgb(51,204,255)";
    _('ot').style.backgroundColor="white";
    _('nt').style.backgroundColor="white";
    _('sv').style.backgroundColor="white";
}
function other(bill,dev,host,other) {
    _(bill).style.display="none";
    _(dev).style.display="none";
    _(host).style.display="none";
    _(other).style.display="block";
    _('not').style.display="none"
    _('service').style.display="none"
    _('project').style.display="none";
    _('pay').style.display="none";

    _('py').style.backgroundColor="white";
    _('pj').style.backgroundColor="white";
    _('bi').style.backgroundColor="white";
    _('dv').style.backgroundColor="white";
    _('hs').style.backgroundColor="white";
    _('ot').style.backgroundColor="rgb(51,204,255)";
    _('nt').style.backgroundColor="white";
    _('sv').style.backgroundColor="white";
}

function develop(bill,dev,host,other) {
    _(bill).style.display="none";
    _(dev).style.display="block";
    _(host).style.display="none";
    _(other).style.display="none";
    _('not').style.display="none"
    _('service').style.display="none"
    _('project').style.display="none";
    _('pay').style.display="none";

    _('py').style.backgroundColor="white";
    _('pj').style.backgroundColor="white";
    _('bi').style.backgroundColor="white";
    _('dv').style.backgroundColor="rgb(51,204,255)";
    _('hs').style.backgroundColor="white";
    _('ot').style.backgroundColor="white";
    _('nt').style.backgroundColor="white";
    _('sv').style.backgroundColor="white";
}

function bill(bill,dev,host,other) {
    _(bill).style.display="block";
    _(dev).style.display="none";
    _(host).style.display="none";
    _(other).style.display="none";
    _('not').style.display="none"
    _('service').style.display="none"
    _('project').style.display="none";
    _('pay').style.display="none";

    _('py').style.backgroundColor="white";
    _('pj').style.backgroundColor="white";
    _('bi').style.backgroundColor="rgb(51,204,255)";
    _('dv').style.backgroundColor="white";
    _('hs').style.backgroundColor="white";
    _('ot').style.backgroundColor="white";
    _('nt').style.backgroundColor="white";
    _('sv').style.backgroundColor="white";
}

function notify(bill,dev,host,other) {
    _(bill).style.display="none";
    _(dev).style.display="none";
    _(host).style.display="none";
    _(other).style.display="none";
    _('not').style.display="block"
    _('service').style.display="none"
    _('project').style.display="none";
    _('pay').style.display="none";

    _('py').style.backgroundColor="white";
    _('pj').style.backgroundColor="white";
    _('sv').style.backgroundColor="white";
    _('bi').style.backgroundColor="white";
    _('dv').style.backgroundColor="white";
    _('hs').style.backgroundColor="white";
    _('ot').style.backgroundColor="white";
    _('nt').style.backgroundColor="rgb(51,204,255)";
}


function servicess(bill,dev,host,other) {
    _(bill).style.display="none";
    _(dev).style.display="none";
    _(host).style.display="none";
    _(other).style.display="none";
    _('not').style.display="none";
    _('service').style.display="block";
    _('project').style.display="none";
    _('pay').style.display="none";

    _('py').style.backgroundColor="white";
    _('pj').style.backgroundColor="white";
    _('sv').style.backgroundColor="rgb(51,204,255)";
    _('bi').style.backgroundColor="white";
    _('dv').style.backgroundColor="white";
    _('hs').style.backgroundColor="white";
    _('ot').style.backgroundColor="white";
    _('nt').style.backgroundColor="white";
}

function project(bill,dev,host,other) {
    _(bill).style.display="none";
    _(dev).style.display="none";
    _(host).style.display="none";
    _(other).style.display="none";
    _('not').style.display="none";
    _('service').style.display="none";
    _('project').style.display="block";
    _('pay').style.display="none";

    _('py').style.backgroundColor="white";
    _('pj').style.backgroundColor="rgb(51,204,255)";
    _('sv').style.backgroundColor="white"
    _('bi').style.backgroundColor="white";
    _('dv').style.backgroundColor="white";
    _('hs').style.backgroundColor="white";
    _('ot').style.backgroundColor="white";
    _('nt').style.backgroundColor="white";
}


function payment(bill,dev,host,other) {
    _(bill).style.display="none";
    _(dev).style.display="none";
    _(host).style.display="none";
    _(other).style.display="none";
    _('not').style.display="none";
    _('service').style.display="none";
    _('project').style.display="none";
    _('pay').style.display="block";

    _('py').style.backgroundColor="rgb(51,204,255)";
    _('pj').style.backgroundColor="white";
    _('sv').style.backgroundColor="white"
    _('bi').style.backgroundColor="white";
    _('dv').style.backgroundColor="white";
    _('hs').style.backgroundColor="white";
    _('ot').style.backgroundColor="white";
    _('nt').style.backgroundColor="white";
}
