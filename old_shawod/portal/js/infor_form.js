function _(x){return document.getElementById(x)}
function save_infor() {
    _("error").innerHTML = "";
    var name = _('name').value.trim(), lastname = _('surname').value.trim(),
        organization = _("organization").value.trim(), work_phone = _("work_phones").value.trim(),
        mobile_phone = _("mobile_phone").value.trim(), home_phone = _("home_phone").value.trim(),
        fax_number = _("fax_number").value.trim(), email = _("email").value.trim(), country = _("country").value,
        address = _("address").value.trim(), address2 = _("address2").value.trim(), city = _("city").value.trim(),
        province = _("province").value.trim(),
        postal = _("postal").value.trim();
    

    if (name === "" || lastname === ""  || mobile_phone === ""  || email === "" || country === ""
        || address === "" || city === "" || province === "" || postal === "") {
        _("error").innerHTML = "All fields with * is required";
        return false;
    }


    if (name.length < 3) {
        _("error").innerHTML = "First name must contain 3 or characters";
        _('name').style.border='1px solid red';
        return false;
    }else{
        _('name').style.border='1px solid #ccc';
    }
    if (lastname.length < 3) {
        _("error").innerHTML = "Surname must contain 3 or characters";
        _('surname').style.border='1px solid red';
        return false;
    }else{
        _('surname').style.border='1px solid #ccc';
    }

    if (organization.length !="" && organization.length < 3) {
        _("error").innerHTML = "Organisation must contain 3 or characters";
        _('organization').style.border='1px solid red';
        return false;
    }else{
        _('organization').style.border='1px solid #ccc';
    }

    _('work_phones').style.border = '1px solid #ccc';
    if (work_phone !== "") {

    }


    _('mobile_phone').style.border = '1px solid #ccc';
    if (mobile_phone !== "") {

    }


    _('home_phone').style.border = '1px solid #ccc';
    if (home_phone !== "") {

    }

    if(email.indexOf('@') > -1 && email.lastIndexOf('.') > -1){
        _('email').style.border='1px solid #ccc';
    }else{
        _('error').innerHTML="Invalid email address";_('email').style.border='1px solid red';
        return false
    }

    if(country === "select region"){
        _("error").innerHTML = "Please choose your country";
        _('country').style.border='1px solid red';
        return false;
    }else{
        _('country').style.border='1px solid #ccc';
    }

    if(address.length < 3 ){
        _("error").innerHTML = "Your address must contain 3 or more characters";
        _('address').style.border='1px solid red';
        return false;
    }else{
        _('address').style.border='1px solid #ccc';
    }

    if(city.length < 3 ){
        _("error").innerHTML = "Your city name must contain 3 or more characters";
        _('city').style.border='1px solid red';
        return false;
    }else{
        _('city').style.border='1px solid #ccc';
    }




         _('postal').style.border = '1px solid #ccc';
        if(postal.length  > 2) {
            var contact = postal.split('');
            for (var i = 0; i < contact.length; i++) {
                if (contact[i] == '0' || contact[i] == '1' || contact[i] == '2' || contact[i] == '3' || contact[i] == '4' || contact[i] == '5' ||
                    contact[i] == '6' || contact[i] == '7' || contact[i] == '8' || contact[i] == '9') {
                    _('error').innerHTML = "";
                    _('postal').style.border = '1px solid #ccc';
                } else {
                    _('error').innerHTML = "Invalid postal code number";
                    _('postal').style.border = '1px solid red';
                    return false
                }
            }
        }else {
            _('postal').style.border = '1px solid red';
            _('error').innerHTML = "Invalid postal code number";
            return false;
        }




    var ajax = new XMLHttpRequest();
    ajax.open('POST', 'update.php', true);
    ajax.setRequestHeader('Content-type', 'Application/x-www-form-urlencoded');
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            _("forms").style.marginTop=-650+"px";
            setTimeout(function () {
                document.documentElement.style.overflow="none";
                _("forms").style.display="none";
                document.getElementById("overlay").style.display="none";
            },1000);
            }
        }


    ajax.send("name=" + name + "&lastname=" + lastname  + "&organizastion=" + organization + "&work_phone=" + work_phone +"&mobile_phone="+
        mobile_phone +"&home_phone="+home_phone+"&fax="+ fax_number +"&email="+ email +"&region="+ country +"&adress="+ address
        +"&adress2="+ address2 +"&city="+ city +"&province="+ province +"&postalcode="+postal);

}
