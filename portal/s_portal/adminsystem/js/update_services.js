
function sub_data(service,id,error){
    var ajax=new XMLHttpRequest();
    ajax.open("POST","post_data.php",true);
    ajax.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
    ajax.onreadystatechange=function () {
        if(ajax.readyState == 4 && ajax.status==200){
            document.getElementById(service).value='';
            document.getElementById(service).setAttribute('placeholder',ajax.responseText)
           document.getElementById(error).innerHTML="Successfully update";
        }
    }
    ajax.send("service="+service+"&id="+id+"&value="+document.getElementById(service).value);
}
