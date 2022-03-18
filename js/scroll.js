window.addEventListener("scroll" , function(){
    if(window.pageYOffset >= 400){
        /* document.getElementById("scroll_up").style.marginLeft="1255px"*/
        document.getElementById("easy-top").style.display="block"
    }else{
        /*  document.getElementById("scroll_up").style.marginLeft="-1345px"*/
        document.getElementById("easy-top").style.display="none"
    }
},false);
