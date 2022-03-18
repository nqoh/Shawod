<?php

mkdir("../client_project/logos/nqobile");
if(!copy("../thumbnails/nologo.jpg","../client_project/logos/nqobile/nqo.jpg")) {
    echo "fail";
}else{
    echo "passed";
}




?>