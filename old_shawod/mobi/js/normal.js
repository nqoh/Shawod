
window.onload = x;
window.onresize=x;
function _(x) {
    return document.getElementById(x);
}

window.addEventListener("scroll" , function(){
    if(window.pageYOffset >= 1136){
        document.getElementById("scroll_up").style.marginLeft="86%"
    }else{
        document.getElementById("scroll_up").style.marginLeft="105%"
    }
},false);



function x() {

        _("bt_hold").style.display="none"
        _("pg").style.display="block"
        _("pg_dv").style.display="block"
        _("sv").style.display="block"

}
var t="false"
function opn() {
    if (t == "false") {

        _("pg").style.display = "block"
        _("pg_dv").style.display = "block"
        _("pg").style.marginTop = "-10px"
        _("sv").style.marginTop = "-10px"
        _("pg_dv").style.height = "0px"
        _("sv").style.display = "block"
        document.getElementsByClassName("log").item(0).style.marginTop = "-10px"
        document.getElementsByClassName("navs").item(0).style.height = "75px"
        t="true"
    }else{
        _("pg").style.display = "none"
        _("pg_dv").style.display = "none"
        _("pg").style.marginTop = "-10px"
        _("sv").style.marginTop = "-10px"
        _("pg_dv").style.height = "0px"
        _("sv").style.display = "none"

        t="false"
    }
}

var i=0;var images=['../thumbnails/slide1.png','../thumbnails/slide2.png','../thumbnails/slide3.png'];
window.onload=was;
var intarval;
function slider(){
    i++;
    if( i > (images.length-1)){
        i=0;
    }
    intarval=setTimeout('was()',1000)
}

function was(){
    _("img").src=images[i];
    var c =['0','1','2'];
    _(c[i]).style.backgroundColor="#e8f1ff";
    for(pp=0; pp < c.length ; pp++){
        if( i == pp){
            continue
        }else{
            _(c[pp]).style.backgroundColor="rgb(102,102,102)";
        }


    }
     intarval =setTimeout('slider()',4000);
}
function bluble(x){
    var c =['0','1','2'];
    i=x;
    _("img").src=images[x];
    _(x).style.backgroundColor="#e8f1ff";
    for(var p=0; p < c.length ; p++){
        if( p == x){
            continue
        }else{
           _(c[p]).style.backgroundColor="rgb(102,102,102)";
        }
    }
    intarval=setTimeout('slider()',4000);
}

function last_img() {
    clearTimeout(intarval);
    i--
    if(i < 0){
        i= 2;
    }
    was()
}

function next_img() {
        clearTimeout(intarval);
        i++
        if(i > 2){
            i= 0;
        }
     was()

}
/*
window.addEventListener("load",function(){
    alert(window.innerWidth);
},false);
*/
function scroll_ups() {
   var time=setTimeout('scroll_ups()',30);
    if(window.pageYOffset == 0){
        clearTimeout(time);
    }else{
        window.scroll(0,window.pageYOffset-40);
    }

}
function sub_link(link) {
    _(link).style.display="block"
}
function sub_out(link){
    _(link).style.display="none"
}




function overlay() {
     document.documentElement.style.overflow="hidden"
    //document.documentElement.style.backgroundColor="blue"
    document.getElementById("overlay").style.display="block";
    document.getElementById("overlay").style.marginTop=window.pageYOffset-17+"px"
}

function ok() {
    document.documentElement.style.overflow="none";
    document.getElementById("overlay").style.display="none";
    document.getElementById("overlay").style.marginTop=window.pageYOffset-17+"px"
}