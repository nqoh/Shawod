
function _(x){return  document.getElementById(x);}
/*
function replys(x,p,r,p_m,id,t_name,txt){
   // upload_file();
    var ajaxx= new XMLHttpRequest();
    ajaxx.open('POST','getdata.php',true);
    ajaxx.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
    ajaxx.onreadystatechange=function(){
        if(ajaxx.readyState == 4 && ajaxx.status==200){
            location.reload();
            opens(x,p,r,p_m,id,t_name);
            localStorage.removeItem("file_name");
        }
    }
    ajaxx.send("text="+_(txt).value+"&id="+id+"&file_name="+localStorage.file_name);
}
function upload_file(filx) {
    var file = _(filx).files[0];
    localStorage.setItem("file_name",file.name)
    if(_(filx).value != "") {
        var formdata = new FormData();
        formdata.append(filx, file);
        var a = new XMLHttpRequest();
        a.upload.addEventListener("progress", progressHandler, false);
        a.addEventListener("load", completeHandler, false);
        a.addEventListener("error", errorHandler, false);
        a.addEventListener("abort", abortHandler, false);
        a.open("POST", "getdata.php");
        a.send(formdata);
    }
}
function progressHandler(event){
    var percent = (event.loaded / event.total) * 100;
    _("filename").innerHTML = Math.round(percent)+"% please wait...";
}
function completeHandler(event){

}
function errorHandler(event){
 //   _("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
  //  _("status").innerHTML = "Upload Aborted";
}
 */

function opens(x,p,r,p_m,id,t_name){_(x).style.display="none";_(r).style.display="block";_(p).style.display="block";
    _(p_m).style.display="block";
    var ajax= new XMLHttpRequest();
    ajax.open('POST','getdata.php',true);
    ajax.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
    ajax.onreadystatechange=function(){
        if(ajax.readyState == 4 && ajax.status==200){
            _("countm").innerHTML=ajax.responseText
        }
    }
    ajax.send(t_name+"="+id);
}



function close_ticker(c,p,r,p_m,id,dp,img) {
    //  alert(c+" "+p+" "+r+" "+p_m);
    document.getElementById("overlay").style.display="block";
    localStorage.setItem("myid",id);
    _("texts").innerHTML="Are you absolute sure you want to delete "+dp+" department conversation";
    localStorage.setItem("department",dp);
}
function canceling() {_("overlay").style.display="none";localStorage.removeItem("department")}

function deleted() {
    var ajax= new XMLHttpRequest();
    ajax.open('POST','getdata.php',true);
    ajax.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
    ajax.onreadystatechange=function(){
        if(ajax.readyState == 4 && ajax.status==200){

            _("overlay").style.display="none";
            localStorage.removeItem("myid");
            localStorage.removeItem("department");
            location.reload();
        }
    }
    ajax.send("my_id="+localStorage.myid+"&department="+localStorage.department);
}
function add_file(flp,sp) {
    var file=_(flp).files[0];
    if(file.type =="image/jpeg" || file.type =="image/png") {
        _(sp).innerHTML = file.name;
    }else{
        _(sp).innerHTML = "<p style='color: red'>Invalid file type only jpg and png accepted</p>"
        _("file").value="";
    }
}
function messages(){location.reload();_("mdiv").style.display="block";_("compose").style.display="none";
_("m").style.color="rgb(153,153,153)";_("cm").style.color="black";_("notify").style.display="none";_("nt").style.color="black"}v

function compose(){_("mdiv").style.display="none";_("compose").style.display="block";_("m").style.color="black";
_("cm").style.color="rgb(153,153,153)";_("notify").style.display="none";_("nt").style.color="black"}
function notification(id) {
    _("notify").style.display="block";
    _("mdiv").style.display="none";_("compose").style.display="none";_("nt").style.color="rgb(153,153,153)";
    _("cm").style.color="black";_("m").style.color="black"
    runs(id);
}
function closed(c,p,r,p_m){
    _(c).style.display="inline";
    _(r).style.display="none";
    _(p).style.display="none";
    _(p_m).style.display="none";

}



window.addEventListener("click",function add(){_("add_mail").style.display="block";document.getElementsByClassName("add_btn").item(0).style.display="none";var c = parseInt(_('mail').offsetWidth+9);_('mail').style.marginLeft=-c+'px';
_('txt').style.paddingRight=c+'px';_('pass1').style.width=c+155+'px';_('pass2').style.width=c+155+'px';},false);

function saves(){
	_("add_mail").style.display="none";
	 	 }
  function runs(id) {
      var ajx= new XMLHttpRequest();
      ajx.open("POST",'notifications.php',true)
      ajx.setRequestHeader("Content-type","Application/x-www-form-urlencoded");
      ajx.onreadystatechange=function () {
          if(ajx.readyState==4 && ajx.status==200){
              _('count').innerHTML=0;
          }
      }
      ajx.send("id="+id);
  }