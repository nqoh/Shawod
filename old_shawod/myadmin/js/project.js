function _(i) { return document.getElementById(i)}


function web() {
    _("frame1").style.display="block"; _("frame2").style.display="none"; _("frame3").style.display="none";
    _("ws").style.color="silver";_("ld").style.color="black";_("cm").style.color="black";
}

function logo() {
    _("frame1").style.display="none"; _("frame2").style.display="block"; _("frame3").style.display="none";
    _("ws").style.color="black";_("ld").style.color="silver";_("cm").style.color="black";
}

function cms() {
    _("frame1").style.display="none"; _("frame2").style.display="none"; _("frame3").style.display="block";
    _("ws").style.color="black";_("ld").style.color="black";_("cm").style.color="silver";
}


function opens(pr,vw) {
    _(vw).style.display="none";
    _(pr).style.display="block"
}

function reply(ms,pro,pr,vw,id,txt) {

    _(vw).style.display = "inline-block";
    _(pr).style.display = "none"
    if (_(ms).value.trim() != "") {
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "comment.php", true);
        ajax.setRequestHeader('Content-type', 'Application/x-www-form-urlencoded');
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                _(txt).innerHTML=ajax.responseText +"&nbsp;";
                _(ms).value="";
            }
        }
        ajax.send("message="+_(ms).value.trim()+"&project="+pro+"&id="+id);
    }
}



function terms2() {
    _("terms2").style.display="block";
    _("pj").innerHTML="Terms of Services";
    _("privacy2").style.display="none";
    _("preview3").style.display="none"
    scroll_ups()
}

function privecy2() {
    _("terms2").style.display="none";
    _("pj").innerHTML="Privacy Policy";
    _("privacy2").style.display="block";
    _("preview3").style.display="none"
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