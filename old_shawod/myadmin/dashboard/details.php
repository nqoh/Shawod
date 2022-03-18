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
   $row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT *  FROM `not_approved` WHERE id='$id'"));
   $email=$row['email'];$name=$row['name'];

    $header  = "FROM: Shawod <noreply@Shawod.co.za>\n";
    $header .="MIME-Version: 1.0\n";
    $header .="Content-type: text/html; charaset=iso-8859l\n";
    $message ='<!DOCTYPE><html><title></title><head></head>
<style>body{background-color: rgb(234,237,238);}</style>
<body>
<div style=" width: 900px; margin: 0px auto"><div style="background: rgb(79,79,79); width: 830px; height: 100px">

<span align="center" style="font-size: 64px; margin-left: 200px;color: rgb(73,197,239)">Project Decline</span><br></div>

<div style="margin-top: 2px; background-color: white;width: 810px;padding: 10px ">
<b style="font-size: 20px">Dear : '.ucfirst($name).'</b><p>We would like to thank you for taking the time to submit your project to us, we had a chance to go
   through your project\'s requirements and we\'ve discussed it with our team .
   Reluctantly we have concluded we are not in a position to handle your project, at this time.<br>
   We wish you success with your future endevaours.<br><br>
   Thank you for your interest in our company. <br><br>
   Reasons may include <br>
   -Insuffient alignment with our expertise<br>
   -Stretched too thin  <br>
   -Ambiguous Guidelines    <br><br>
   Sincerely<br>
    Timothy Clark<br>
    Shawod 
        </p>
        <p>
            Remember that Shawod will always here to provide you with Website,Domain,Hosting,SEO and excellent customer
            service.<br>
            If there is any thing more we can do to help, please don\'t hesitate to email us
        </p>
        <b style="font-size: 20px">Thank you </b><br>
        <span style="margin-left:50%">Find us on</span><br>
        <span>Sales Team</span><br>
        <span>Shawod Inc.</span>
        <a href="https://www.facebook.com/shawodza"><img src="http://shawod.co.za/thumbnails/fblg.png" style="margin-left: 315px; cursor: pointer"></a>
        <a href="https://twitter.com/ShawodWeb"><img src="http://shawod.co.za/thumbnails/twlg.png" style="cursor: pointer"></a>
        <img src="http://shawod.co.za/thumbnails/logoSb.png" style="float: right; margin-top: -50px">
    </div>
</div>
</body>
</html>';

    mail($email,"\nProject Decline\n",$message, $header);


    mysqli_query($conn,"DELETE  FROM `not_approved` WHERE id='$id'");
    mysqli_query($conn,"DELETE  FROM `login` WHERE f_key='$id'");
}

if(isset($_POST['accept_id']) && isset($_POST['dates'])){
    $dates=$_POST['dates'];
    $id=$_POST['accept_id'];
    $r=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `not_approved` WHERE id='$id'"));
    $folder=$r['id_client'];
    $dp=$r['deposit'];$reference=$r['referance'];
    $password=$r['password'];$email=$r['email'];
    $pass=md5($r['password']);
    $nam=ucfirst($r['name']);
    $id=$r['id'];
    mysqli_query($conn,"INSERT INTO `login` VALUES(null,'$folder','$pass','$id')");
    mkdir("../../client_project/$folder");
    copy("../project_index_file.php","../../client_project/$folder/index.php");

    mkdir("../../client_project/logos/$folder");
    copy("../../thumbnails/nologo.jpg","../../client_project/logos/$folder/nologo.jpg");

    mkdir("../../client_project/cms/$folder");
    copy("../../thumbnails/nocms.jpg","../../client_project/cms/$folder/nocms.jpg");

    mysqli_query($conn,"UPDATE `not_approved` SET `approval`=1 ,`project_id`='$folder' ,project_end='$dates'  WHERE id='$id'");
    $dt=date('d-M-y   h:i');
    $text="";


    mysqli_query($conn,"INSERT INTO `notifications`(`id`, `title`, `text`, `f_key`, `view`, `time`) VALUES(null ,'Welcome $nam','My name is Mlondie, your designated account manager I’m here to help you with anything related to Shawod. 
On behalf of the entire Shawod staff, I’d like to take this opportunity to welcome you as a new customer, we are thrilled to have you with us.<br><br>
At Shawod, we pride ourselves on offering our customers responsive, competent and excellent service. Our customers are the most important part of 
our business, and we work tirelessly to ensure your complete satisfaction, now and for as long as you are a customer.<br><br>
If you know of any friends or business partners who are looking for web solutions, please feel free to pass along my contact information.
 I can guarantee you that they will get the best service and the right solution for their needs as well.<br><br>
 Have any questions? Just shoot me an email! I’m always here to help.<br><br>
 Cheerfully yours,<br>
 Mlondie<br>mlondie@shawod.co.za','$id',1,'$dt')");

    mysqli_query($conn,"INSERT INTO `services` VALUES(null ,'null','null','null','null','$id',CURRENT_TIMESTAMP)");

    // perform email function
    $header  ="FROM : Shawod <noreply@shawod.co.za>\n";
    $header .="MIME-Version: 1.0\n";
    $header .="Content-type: text/html; charaset=iso-8859l\n";
    $message ='<!DOCTYPE><html><title></title><head></head>
<style>body{background-color: rgb(234,237,238);}</style>
<body><div style=" width: 900px; margin: 0px auto"> <div style=" width: 900px; margin: 0px auto">

      <div style="background: rgb(79,79,79); width: 830px; height: 270px"><br>
          <img src="http://shawod.co.za/thumbnails/favw.png" style="margin-left: 380px"><br>
          <span align="center" style="font-size: 64px; margin-left: 150px;color: rgb(73,197,239)">Welcome to Shawod</span><br>
          <span align="center" style="font-size: 20px; margin-left: 200px;color: rgb(73,197,239)">WHERE YOUR IMAGINATION BECOME REALITY</span><br><br>
          <span style="margin-left: 340px;" align="center"><a href="http://portal.shawod.co.za"  style="color: rgb(73,197,239);text-decoration: none
;font-size:20px; background: white; padding: 7px; border-radius: 5px">VISIT PORTAL</a></span>
      </div>
  </div><div style="margin-top: 5px; background-color: white;width: 810px;padding: 10px ">
<b style="font-size: 20px">Dear : '.$nam.'</b><p>
              A very warm welcome to you from the Shawod Team! We are thrilled that you selected Shawod for your Web needs.<br>
              This email contains all information that you will need to begin accessing your project as well as communicating with us. Please retain this email for your records, Thank you for signing up with us.<br><br>
             <span style="font-weight: bold; font-size: 20px"> You can now login to your client area using the details below</span><br>
             <span>Login link : <a href="http://portal.shawod.co.za">http://portal.shawod.co.za</a></span><br>
             <span>Username : '.$folder.'</span><br>
             <span>Password : '.$password.'</span><br>
             <span>Order reference:'.$reference.'</span><br>
            
</p><b style="font-size: 20px">Thank you </b><br><br><p> **Do not reply to this automated email</p><span style="margin-left:50%">Find us on</span><br><span>Sales Team</span><br>
<span>Shawod Inc.</span><a href="https://www.facebook.com/shawodza"><img src="http://shawod.co.za/thumbnails/fblg.png" style="margin-left: 315px; cursor: pointer"></a>
<a href="https://twitter.com/ShawodWeb"><img src="http://shawod.co.za/thumbnails/twlg.png" style="cursor: pointer"></a>
<img src="http://shawod.co.za/thumbnails/logoSb.png" style="float: right; margin-top: -50px"></div>
</div></body></html>';

    mail($email,"\nLogin Details\n",$message, $header);







}