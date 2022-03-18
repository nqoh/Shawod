function _(x) {return document.getElementById(x)}

var opn1="open";var opn2="open";var opn3="open";
function views1(sp,dv) {
    if(opn1=="open") {
        _(sp).innerHTML = "Collapse";
        _(dv).style.display = "block";
        _('dv2').style.display="none";
        _('dv3').style.display="none";
        _('sp2').innerHTML="More"
        _('sp3').innerHTML="More"
        opn1="close"
    }else{
        _(sp).innerHTML = "More";
        _(dv).style.display = "none";
        opn1="open";
    }
}


function views2(sp,dv) {
    if(opn2=="open") {
        _(sp).innerHTML = "Collapse";
        _(dv).style.display = "block";
        _('dv1').style.display="none";
        _('sp1').innerHTML="More"
        _('dv3').style.display="none";
        _('sp3').innerHTML="More"
        opn2="close"
    }else{
        _(sp).innerHTML = "More";
        _(dv).style.display = "none";
        opn2="open";
    }
}

function views3(sp,dv) {
    if(opn3=="open") {
        _(sp).innerHTML = "Collapse";
        _(dv).style.display = "block";
        _('dv1').style.display="none";
        _('sp1').innerHTML="More"
        _('dv2').style.display="none";
        _('sp2').innerHTML="More"
        opn3="close"
    }else{
        _(sp).innerHTML = "More";
        _(dv).style.display = "none";
        opn3="open";
    }
}