<?php
session_start();
require '../connect.php';
if(isset($_POST['logout'])){session_destroy();header('Location: ../login');}

if(isset($_SESSION['id']) && isset($_SESSION['uname'])){
    $nm=$_SESSION['uname'];
    $ids=$_SESSION['id'];
    $quey=mysqli_query($conn,"SELECT * FROM  not_approved WHERE  id_client='$nm'");
    if(mysqli_num_rows($quey)==1){
        $myrow=mysqli_fetch_assoc($quey);
        $Name=$myrow['name'];$email=$myrow['email'];$no=$myrow['number'];
    }else{
        header('location:../login');
    }

}else{
    header('location:../login');
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<link rel="icon" type="image/ico" href="../thumbnails/favw.png">
<link rel="stylesheet" href="../css/dashboard.css" type="text/css">
<script type="text/javascript" src="../js/dashbord.js"></script>
<script type="text/javascript" src="../js/infor_form.js"></script>
<?php require 'information.php'?>
<?php

$ii=0;
$ii1=0;$ii2=0;$ii3=0;$ii4=0;
$i=0;
$quey=mysqli_query($conn,"SELECT `view` FROM notifications WHERE f_key='$ids'");
while ($row=mysqli_fetch_assoc($quey)){
    $i+=$row['view'];
}
$ii1=0;$ii2=0;$ii3=0;$ii4=0;
$myquery=mysqli_query($conn,"SELECT `o_key` FROM billing WHERE f_key='$ids'");
while ($row1=mysqli_fetch_assoc($myquery)){
    $ii1+=$row1['o_key'];
}
$myquery1=mysqli_query($conn,"SELECT `o_key` FROM other WHERE f_key='$ids'");
while ($row2=mysqli_fetch_assoc($myquery1)){
    $ii2+=$row2['o_key'];
}
$myquery2=mysqli_query($conn,"SELECT `o_key` FROM hosting WHERE f_key='$ids'");
while ($row3=mysqli_fetch_assoc($myquery2)){
    $ii3+=$row3['o_key'];
}
$myquer3=mysqli_query($conn,"SELECT `o_key` FROM developer WHERE f_key='$ids'");
while ($row4=mysqli_fetch_assoc($myquer3)){
    $ii4+=$row4['o_key'];
}
$ii=$ii1+$ii2+$ii3+$ii4;
$notify='';
$massege='';
if($ii==0){
    $massege="<a href='../messages'><p class='bill' style='margin-left: 120px'><u>No new message</u></p></a>";
}else{
    $massege=" <a href='../messages'><p style=\"margin-left:120px; font-size:20px;\"> Your have $ii new messages</p></a>  ";
}
if($i==0){
    $notify="<a href='../notifications'><p class='bill' style='margin-left: 120px'><u>No new notification</u></p></a>";
}else{
    $notify="<a href='../notifications'> <p style=\"margin-left:20px; font-size:18px;\"> Your have $i new notification</p> </a>";
}
$qy=mysqli_query($conn,"SELECT * FROM client_infor WHERE f_key='$ids'");
$count=mysqli_num_rows($qy);$pay_id=$_SESSION['id'];
$quey=mysqli_query($conn,"SELECT * FROM web_payment WHERE f_key='$pay_id' AND status=0");
if(mysqli_num_rows($quey) == 1) {
    $payments = "<a href=\"../payments\"><p style=\" margin-left: 120px ;font-size:20px;\"> Your have 1 new payment</p></a>";
}else{
    $payments = "<a href=\"../payments\"><p style=\" margin-left: 120px ;font-size:20px;\"> Your have no new payment</p></a>";
}
?>

<script type="text/javascript">
    window.addEventListener('load',function(){
        var name="<?php echo $count?>";
        if(name== 0){
            window.scroll(0,10);
            setTimeout('fill_form()',400);
        }
    },false);
</script>
<body>
<div style="width: 1350px; margin: 0px auto">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109547096-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109547096-1');
</script>
<div  id="overlay">

</div>
<div id="forms">
    <div>
      <h1 align="center" style="margin-top:-10px; margin-bottom: -0px">Please fill out this simple form </h1>

        <span style="color:red; font-size:19px;margin-bottom: 2px " id="error" align="center"></span><br >
        <div style="float: left; margin-right: 30px">
        <label>First Name <span style="color: red">*</span></label><br>
        <input type="text"  class="txt"  value="<?php echo ucfirst($Name); ?>"  id="name" >
        </div>

        <div>
        <label>Last Name <span style="color: red">*</span></label><br>
        <input type="text"  class="txt"   id="surname"><br>
        </div>

        <div style="float: left; margin-right: 30px">
        <label>Organization </label><br>
        <input type="text" id="organization"  class="txt"  ><br>
        </div>

        <div style="float: left; margin-right: 30px">
        <label>Work Phone</label><br>
        <input type="text" id="work_phones"  class="txt"   ><br>
        </div>

        <div  style="float: left; margin-right: 30px">
        <label>Mobile Phone <span style="color: red;">*</span></label><br>
        <input type="text"  class="txt" value="<?php echo '0'.$no ?>"   id="mobile_phone" ><br>
        </div>

        <div >
        <label>Home Phone </label><br>
        <input type="text"  class="txt"    id="home_phone" ><br>
        </div>



        <div style="float: left; margin-right: 30px">
        <label>Fax Number </label><br>
        <input type="text"  class="txt"  id="fax_number" ><br>
        </div>

        <div>
            <label>E-mail Address <span style="color: red">*</span></label><br>
            <input type="text"  class="txt" value="<?php echo $email ?>"   id="email" ><br>
        </div>

        <div style="float: left; margin-right: 30px">
            <label>Country/Region <span style="color: red">*</span></label><br>
            <select  class="txt" style="margin-top: 3px; height: 35px" id="country">
                <option value="select region">Select your region</option>
                <?php
                $country=mysqli_query($conn,"SELECT * FROM  geo_countries ");
                while($geo=mysqli_fetch_assoc($country)){
                    $cnty=$geo['name'];
                    echo '<option value="'.$cnty.'" >'.$cnty.'</option>';
                }
                ?>

            </select>

        </div>

        <div>
            <label>Address <span style="color: red">*</span></label><br>
            <input type="text"  class="txt"  id="address" ><br>
        </div>

        <div style="float: left; margin-right: 30px">
            <label>Address 2 </label><br>
            <input type="text"  class="txt"   id="address2" ><br>
        </div>

        <div>
            <label>City<span style="color: red">*</span></label><br>
            <input type="text"  class="txt"   id="city" ><br>
        </div>

        <div style="float: left; margin-right: 30px">
            <label>Province/Region<span style="color: red">*</span></label><br>
            <input type="text"  class="txt"   id="province" ><br>
        </div>

        <div>
            <label>Postal Code<span style="color: red">*</span></label><br>
            <input type="text"  class="txt"    id="postal" ><br>
        </div>

        <button id="btn" onclick="save_infor()">Submit</button> <button id="btn" style="float: right; margin-right: 70px" onclick="cancel_overlay() ">Logout</button>
    </div>
</div>


<div class="wrap">
    <div class="header">
        <img src="../thumbnails/logoSb.png">
        <h1>Web Portal</h1  ><div class="message">
        </div><p class="count" id="countm"><?php echo $ii ?></p> <div class="chat"></div><p class="count" id="count"><?php echo $i ?></p>
        <div class="uname">
            <p align="center" style="margin-bottom:1px; text-transform: uppercase "><b><?php echo strtoupper($Name) ?></b></p>
            <form action="information.php" method="post">
                <input type="hidden" name="closed">
                <input type="submit" value="Logout" id="btn">
            </form>
            <p align="center" style="margin-top:-1px">ID : <?php echo $id ?></p>
        </div>

        <br>
        <div class="hr"></div>


    </div>

    <div class="sid_nav">
        <ul>
            <li class="bg"><a href="#" style="color: white" >Dashboard</a></li>
            <li><a href="../messages">Messages</a></li>
            <li><a href="../notifications">Notifications</a></li>
            <li><a href="../projects">Projects</a></li>
            <li><a href="../services">Services</a></li>
            <li><a href="../payments">Payments</a></li>
            <li><a href="../settings">Settings</a></li>
        </ul>
    </div>

    <div style="width:1300px;padding-left:35px;padding-top:110px;">
        <div class="content">
            <h1 id="top" align="center" style="margin-left: 120px;" >Dashboard</h1>

            <div id="preview"  >
                <div class="label" style="margin-left: 50px">Account Preview</div>
                <p class="notify" style=" margin-left: 80px">Notifications</p>
                <!--
                <p class="bill"><u>Billing Department</u></p>
                 <p style="margin-left:85px;margin-bottom:-28px;font-size:13px; color:rgb(109,109,109)"> 21 march | 07:08 am </p><br>
                 <p style="margin-left:75px; font-size:18px"> Your paymantes are due next week please don't claim glory days  lool </p>
                 <p class="bill"><u>Server</u></p>
                 <p style="margin-left:85px;margin-bottom:-28px;font-size:13px; color:rgb(109,109,109)"> 21 June | 07:08 am </p><br>
                 <p style="margin-left:75px; font-size:18px">
                 Your Server was restart as you request blaaa blaaaaah blaaaah
                 Your Server was restart as you request blaaa blaaaaah blaaaah
                 </p>-->
                <?php echo $notify  ?>

                <p class="notify"  style="margin-bottom:-10px; margin-left: 80px">Messages</p>
                <?php echo  $massege  ?>
                <p class="notify" style="margin-bottom:-10px; margin-left: 80px">Payments</p>
                <?php echo $payments  ?>
                <img src="../thumbnails/1dashboard.gif" style="float: right; width: 200px; height: 200px; margin-top:-250px; ">
            </div>


            <div id="terms" style="padding-left: 0px ;display: none;width: 1100px; margin-left: -10px ">
                <h3  align="center"><b><u>Overview</u></b></h3>
                <p> All references in this Terms and Conditions of use Policy to "we," "us," or "our" Shall refer to Shawod and its subsidiaries,
                    The term "site" or "website" refers to Shawod.co.za .
                    The term "service"  refers to the services and/or products provided by Shawod.co.za, The term "content" refers to information provided on the Site in any form.
                    All references in this Terms and Conditions of use Policy to "user," "you," or "your" shall refer to the users of Shawod and portals.
                </p>
                <h3  align="center"><b><u>Introduction</u></b></h3><p>
                    These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full.<br>
                    If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.<br>
                    This website uses cookies.  By using this website and agreeing to these terms and conditions, you consent to our Shawod's
                    <br>use of cookies in accordance with the terms of Shawod's privacy policy.</p>

                <h3  align="center"><b><u>License to use website</u></b></h3>
                <p >Unless otherwise stated, Shawod and or its licensors own the intellectual property rights in the website and material on the website.
                    Subject to the license below, all these intellectual property rights are reserved.
                    You may view, download for caching purposes only, and print pages  from the website for your own personal use,
                    subject to the restrictions set out below and elsewhere in these terms and conditions.</p>

                <h3  align="center"><b><u>You must not:</u></b></h3>
                <p >republish material from this website (including republication on another website);
                    sell, rent or sub-license material from the website;
                    reproduce, duplicate, copy or otherwise exploit  material on this website for a commercial purpose;
                    edit or otherwise modify any material on the website; or
                    redistribute material from this website except for content specifically and expressly made available for redistribution
                    Where content is specifically made available for redistribution, it may only be redistributed within your organisation.
                </p>
                <h3  align="center"><b><u>Acceptable use</u></b></h3>
                <p > You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or
                    accessibility of the website ; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.
                    You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse,
                    worm, keystroke logger, rootkit or other malicious computer software. You must not conduct any systematic or automated data collection activities (including without limitation scraping,
                    data mining, data extraction and data harvesting) on or in relation to this website without Shawod's express written consent.
                    You must not use this website to transmit or send unsolicited commercial communications.
                </p>
                <h3  align="center"><b><u> Restricted access</u></b></h3>
                <p>
                    Access to certain areas of this website is restricted. Shawod reserves the right to restrict access to other areas of this website, such as the Admin and client's panel, at Shawod's discretion.
                    If Shawod provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID
                    and password are kept confidential.Shawod may disable your user ID and password in Shawod's sole discretion without notice or explanation.
                </p>
                <h3  align="center"><b><u>User content</u></b></h3><p>
                    In these terms and conditions, “your user content” means material (including without limitation text, images, audio material, video material and audio-visual material) that you submit to this
                    website, for whatever purpose.You grant to Shawod a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute your user content in
                    any existing or future media.  You also grant to Shawod the right to sub-license these rights, and the right to bring an action for infringement of these rights.
                    Your user content must not be illegal or unlawful, must not infringe any third party's legal rights, and must not be capable of giving rise to legal action
                    whether against you or Shawod or a third party (in each case under any applicable law).You must not submit any user content to the website that is or has ever been the subject of any threatened
                    or actual legal proceedings or other similar complaint.Shawod reserves the right to edit or remove any material submitted to this website, or stored on our servers, or hosted or published upon
                    this website.Notwithstanding Shawod's rights under these terms and conditions in relation to user content, shawod does not undertake to monitor the submission of such content to, or the publication
                    of such content on, this website.
                </p>
                <h3  align="center"><b><u>No warranties</u></b></h3>
                <p >
                    This website and its portals are provided on an "as is" and "as available" basis, without any representations or warranties, express or implied. Shawod makes no representations or warranties in relation to this website or the information and materials provided on this website.

                    Services and Prices are subject to change without notice

                    Without prejudice to the generality of the foregoing paragraph, Shawod does not warrant that:

                    this website will be constantly available, or available at all; or the information on this website is complete, true,
                    accurate or non-misleading.
                </p>

                <h3 align="center"><b><u>Limitations of liability</u></b></h3>
                <p>
                    Shawod will not be liable to you (whether under the law of contact, the law of torts or otherwise) in relation to the contents
                    of, or use of, or otherwise in connection with, this website:

                    to the extent that the website is provided free-of-charge, for any direct loss;
                    for any indirect, special or consequential loss; or
                    for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships,
                    loss of reputation or goodwill, or loss or corruption of information or data.

                    These limitations of liability apply even if Shawod has been expressly advised of the potential loss.
                </p>
                <h3 align="center"><b><u>Exceptions</u></b></h3>
                <p >
                    Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit; and nothing in
                    this website disclaimer will exclude or limit Shawod's liability in respect of any:
                    death or personal injury caused by Shawod negligence;
                    fraud or fraudulent misrepresentation on the part of Shawod; or
                    matter which it would be illegal or unlawful for Shawod to exclude or limit, or to attempt or purport to exclude or limit, its liability.
                </p>
                <h3  align="center"><b><u> Reasonableness</u></b></h3>
                <p align="center">
                    By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.
                    If you do not think they are reasonable, you must not use this website or it's services.
                </p>
                <h3 align="center"><b><u>Other parties</u></b></h3>
                <p  align="center">
                    You accept that, as a limited liability entity, Shawod has an interest in limiting the personal liability of its officers and employees.
                    You agree that you will not bring any claim personally against Shawod officers or employees in respect of any losses you suffer in connection with the website.
                </p>
                <h3  align="center"><b><u> Unenforceable provisions</u></b></h3>
                <p  align="center">
                    If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.
                </p>
                <h3 align="center"><b><u> Indemnity </u></b></h3>
                <p >
                    You hereby indemnify us and undertake to keep Shawod indemnified against any losses, damages, costs, liabilities and expenses (including without limitation legal expenses and any amounts paid by Shawod to a third party in settlement of a claim or dispute on the advice of our legal advisers) incurred or suffered by Shawod arising out of any breach by you of any provision of these terms and conditions.
                </p>
                <h3  align="center"><b><u>  Breaches of these terms and conditions </u></b></h3><p>
                    Without prejudice to Shawod's other rights under these terms and conditions, if you breach these terms and conditions in any way, we may take such action as Shawod deems appropriate to deal with the breach, including suspending your access to the website, prohibiting you from accessing the website, blocking computers using your IP address from accessing the website, contacting your internet service provider to request that they block your access to the website and/or bringing court proceedings against you.
                </p>
                <h3 align="center"><b><u>Variation</u></b></h3>
                <p >
                    Shawod may revise these terms and conditions from time-to-time.  Revised terms and conditions will apply to the use of this website from the date of the publication of the revised terms and conditions on this website.  Please check this page regularly to ensure you are familiar with the current version.
                    Terms and conditions are subject to change without notice.
                </p>
                <h3 align="center"><b><u> Assignment</u></b></h3>
                <p  align="center">
                    We may transfer, sub-contract or otherwise deal with Shawod rights and or obligations under these terms and conditions without notifying you or obtaining your consent.
                    You may not transfer, sub-contract or otherwise deal with your rights and/or obligations under these terms and conditions.
                </p>
                <h3  align="center"><b><u> Server ability </u></b></h3>
                <p align="center">
                    If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and or unenforceable, the other provisions will continue in effect.  If any unlawful and/or unenforceable provision would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect.
                </p>
                <h3  align="center"><b><u>Entire agreement</u></b></h3>
                <p >
                    These terms and conditions , together with privacy policy and disclaimer, constitute the entire agreement between you and Shawod in relation to your use of this website, and supersede all previous agreements in respect of your use of this website.
                </p>
                <p  align="center">
                    You can contact Shawod by email to info@shawod.co.za
                </p>

            </div>


            <div style="padding-left: 0px; display: none;width: 1100px; margin-left: -10px" id="privacy">
                <h3  align="center"><b><u>Your privacy is important to us.</u></b></h3>
                <p align="center">
                    This privacy statement providesinformation about the personal information that
                    Shawod collects, and the ways in which Shawod uses that personal information.
                </p>
                <h3 align="center"><b><u>Personal information collection</u></b></h3>
                <p >
                    Shawod may collect and use the following kinds of personal information:<br>

                    information about your use of this website (including pages you visit, your geographical location, ip address and device) ;<br>
                    information that you provide using for the purpose of registering with the website (including phone number and your e-mail address) ;<br>
                    information about transactions carried out over this website (including purchases of services) ;
                    information that you provide for the purpose of subscribing to the website services (including newsletters) ; and any other information that you send to Shawod.
                </p>
                <h3  align="center"><b><u>Using personal information</u></b></h3>
                <p >Shawod may use your personal information to
                    administer this website;
                    enable your access to and use of the website services;
                    send to you products that you purchase;
                    supply to you services that you purchase;
                    send to you statements and invoices;
                    collect payments from you; and
                    send you marketing communications.

                    Where Shawod discloses your personal information to its agents or sub-contractors for these purposes, the agent or sub-contractor in question will be obligated to use that personal information in accordance with the terms of this privacy statement.

                    In addition to the disclosures reasonably necessary for the purposes identified elsewhere above, Shawod may disclose your personal information to the extent that it is required to do so by law, in connection with any legal proceedings or prospective legal proceedings, and in order to establish, exercise or defend its legal rights.
                </p>
                <h3  align="center"><b><u>Securing your data</u></b></h3>
                <p  >
                    Shawod will take reasonable technical and organisational precautions to prevent the loss, misuse or alteration of your personal information.
                    Shawod will store all the personal information you provide on its secure servers.
                    Information relating to electronic transactions entered into via this website will be protected by encryption technology.
                </p>
                <h3  align="center"><b><u>Cross-border data transfers</u></b></h3>
                <p  >
                    Information that Shawod collects may be stored and processed in and transferred between any of the countries
                    in which Shawod operates to enable the use of the information in accordance with this privacy policy.
                    You agree to such cross-border transfers of personal information.
                </p>

                <h3  align="center"><b><u> Updating this statement </u></b></h3>
                <p  align="center" >
                    Shawod may update this privacy policy by posting a new version on this website.
                    You should check this page occasionally to ensure you are familiar with any changes.</p>
                <h3  align="center"><b><u> Other websites </u></b></h3>
                <p  align="center" >
                    This website contains links to other websites.
                    Shawod is not responsible for the privacy policies or practices of any third party.
                </p>
                <h3 align="center"><b><u> Contact Shawod</u></b></h3>
                <p  align="center" >
                    If you have any questions about this privacy policy or Shawod's treatment of your personal information, please write:
                    by email to info@shawod.co.za;</p>

            </div>




            <br>
            <p align="center" class="nv"><span onclick="terms()">Terms of Services</span>&nbsp;|&nbsp;
                <span onclick="privecy()">Privacy Policy</span></p>
        </div>

    </div>

</div>
</div>
</body>
</html>