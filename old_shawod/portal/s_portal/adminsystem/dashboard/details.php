<?php


require  '../connect.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $service= '';
    $query=mysqli_query($conn,"SELECT * FROM `not_approved` WHERE id='$id'");
    $row=mysqli_fetch_assoc($query);
    $name=$row['name'];$em=$row['email'];$no=$row['number'];$txt=$row['discription'];$pack=$row['package'];
    $feater=$row['features'];$ref=$row['referance'];$uname=$row['id_client'];$pass=$row['password'];
    $amount=$row['amount'];$deposit=$row['deposit'];$dt=$row['date'];
    $query2=mysqli_query($conn,"SELECT * FROM `new_services` WHERE `f_key`='$id'");
    $query3=mysqli_query($conn,"SELECT * FROM `client_infor` WHERE `f_key`='$id'");
    $rows=mysqli_fetch_assoc($query3);
    $firstname=$rows['firstname'];$lastname=$rows['lastname'];$organasation=$rows['oraganisation'];$email=$rows['email'];$phone=$rows['mobile_phone'];
    $home_phone=$rows['home_phone'];$work=$rows['work_phone'];$fax=$rows['fax'];$region=$rows['region'];$addess=$rows['address'];$address2=$rows['address2'];
    $city=$rows['city'];$province=$rows['province'];$postal_code=$rows['postal_code'];
    while ($row2=mysqli_fetch_assoc($query2)){
         $price=$row2['price'];$description=$row2['description'];$items=$row2['items'];$date=$row2['date'];
         $reference=$row2['reference'];$statu=$row2['status'];
         if($statu == 0){$status = "<span>Status:Unpaid</span>";}else{$status = "<span>Status:Paid</span>";}
        $service="<span>
                  <span>PRICE: R $price</span><br>
                  <span>SERVICES: $items</span><br>
                  <span>DESCRIPTION: $description</span><br>
                  <span>REFERENCE: $reference</span><br>
                  <span>DATE: $date</span><br>
                   $status
                </span><br>";
    }
    echo strtoupper($name)."_".strtoupper($em)."_".$no."_".$txt."_".$pack."_".$feater."_".$ref."_".$uname."_".$pass."_".$amount."_".$deposit."_".$dt."_".$service."_".
    $firstname."_".$lastname."_".$organasation."_".$email."_".$phone."_".$home_phone."_".$work."_".$fax."_".$region."_".$addess."_".$address2."_".$city."_".$province.
    "_".$postal_code;

}

if(isset($_POST['reject_id'])){
    $id=$_POST['reject_id'];
    mysqli_query($conn,"DELETE  FROM `not_approved` WHERE id='$id'");
    mysqli_query($conn,"DELETE  FROM `login` WHERE f_key='$id'");
}

if(isset($_POST['accept_id']) && isset($_POST['dates'])){
    $dates=$_POST['dates'];
    $id=$_POST['accept_id'];
    $r=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `not_approved` WHERE id='$id'"));
    $folder=$r['id_client'];
    $dp=$r['deposit'];
    $pass=md5($r['password']);
    $nam=$r['name'];
    $id=$r['id'];
    mysqli_query($conn,"INSERT INTO `login` VALUES(null,'$folder','$pass','$id')");
    mkdir("../../../client_project/$folder");
    copy("../project_index_file.php","../../../client_project/$folder/index.php");
    mysqli_query($conn,"UPDATE `not_approved` SET `approval`=1 ,`project_id`='$folder' ,project_end='$dates'  WHERE id='$id'");
    $dt=date('d-M-y   h:i');
    $text="";
    mysqli_query($conn,"INSERT INTO `notifications`(`id`, `title`, `text`, `f_key`, `view`, `time`) VALUES(null ,'Project approval department','Your project is successful approved 
    and it can be complete on ($dates) if you pay on time. Please click payment and pay a deposit of R$dp to start to create your project thank you $nam','$id',1,'$dt')");

    mysqli_query($conn,"INSERT INTO `services` VALUES(null ,'null','null','null','null','$id',CURRENT_TIMESTAMP)");

    // perform email function

}