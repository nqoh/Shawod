function _(x) {return document.getElementById(x)}


function terms() {
    _("preview").style.display="none";
    _("terms").style.display="block";
    _("top").innerHTML="Terms of Services";
    _("privacy").style.display="none";
    _("canceling").style.display="none"
    _("preview").style.display="none";
    scroll_ups()
}

function privecy() {
    _("preview").style.display="none";
    _("terms").style.display="none";
    _("top").innerHTML="Privacy Policy";
    _("privacy").style.display="block";
    _("canceling").style.display="none";
    _("preview").style.display="none";

    scroll_ups()
}

function fillout_form() {
    _("preview").style.display="none";
    _("terms").style.display="none";
    _("top").innerHTML="Service Cancellation Form";
    _("preview").style.display="none";
    _("privacy").style.display="none";
    _("canceling").style.display="block"
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

function fill_form() {
    // document.documentElement.style.overflow="hidden";
    document.getElementById("overlay").style.display="block";
    _("forms").style.display="block";
    _("forms").style.marginTop=window.pageYOffset-5+"px";
}



function cancel_overlay() {
    _("forms").style.marginTop=-650+"px";
     setTimeout(function () {
        document.documentElement.style.overflow="none";
        _("forms").style.display="none";
        document.getElementById("overlay").style.display="none";
         var ajax= new XMLHttpRequest();
         ajax.open('POST','index.php',true);
         ajax.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
         ajax.onreadystatechange=function(){
             if(ajax.readyState == 4 && ajax.status==200){
                 window.location="../login";
             }
         }
         ajax.send("logout=id");
    },1000);
}