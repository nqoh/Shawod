<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];include '../connect.php';
    $query=mysqli_query($conn,"SELECT * FROM web_payment WHERE id='$id'");
    if(mysqli_num_rows($query)== 1){
        $row=mysqli_fetch_assoc($query);$user_id=$row['f_key'];$ref=$row['reference'];$date=$row['date'];$describe=$row['description'];
        $row2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM client_infor WHERE f_key='$user_id'"));
        $name=ucfirst($row2['firstname']); $surname=ucfirst($row2['lastname']);$address=ucfirst($row2['address']);$city=ucfirst($row2['city']);
        $province=ucfirst($row2['province']);$region=ucfirst($row2['region']);setlocale(LC_MONETARY,"en_ZA");
        $price2=substr(money_format("%i",$row['price']),2,100);$transaction_date=$row['transaction_date'];
        $transaction_id=substr(md5(str_shuffle($transaction_date)),0,18);
        $row3=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM not_approved WHERE id='$user_id'"));
        $package=$row3['package'];
require 'pdf/fpdf.php';
$pdf=  new FPDF();
$pdf->AddPage();
$pdf->SetTitle('Invoice');
$pdf->Image('logoSb.png');

$pdf->SetFont("Arial","B",26);
$pdf->SetY(20);
$pdf->SetX(30);
$pdf->Write(1,"Shawod");

$pdf->SetFont("Arial","B",17);
$pdf->SetY(35);
$pdf->SetX(130);
$pdf->Write(1,"Shawod Web Solutions");

$pdf->SetFont("Arial","",11);
$pdf->SetY(40);
$pdf->SetX(162);
$pdf->Write(1,"Billing Shawod.co.za");

$pdf->SetFont("Arial","",11);
$pdf->SetY(45);
$pdf->SetX(164);
$pdf->Write(1,"www.Shawod.co.za");


$pdf->SetY(55);
$pdf->SetX(10);
$pdf->SetFont("Arial","B",20);
$pdf->setFillColor(239,239,239);
$pdf->Cell(0,20,"INVOICE: #$ref",1,0,"C");

$pdf->SetY(72);
$pdf->SetX(10);
$pdf->SetFont("Arial","",9);
$pdf->Write(1,"Invoice date: $date");

$pdf->SetY(82);
$pdf->SetX(10);
$pdf->SetFont("Arial","BU",13);
$pdf->Write(1,"Invoice To");


$pdf->SetY(88);
$pdf->SetX(10);
$pdf->SetFont("Arial","",9);
$pdf->Write(1,"$package");

$pdf->SetY(92);
$pdf->SetX(10);
$pdf->SetFont("Arial","",9);
$pdf->Write(1,"$name $surname");

$pdf->SetY(96);
$pdf->SetX(10);
$pdf->SetFont("Arial","",9);
$pdf->Write(1,"$address");

$pdf->SetY(100);
$pdf->SetX(10);
$pdf->SetFont("Arial","",9);
$pdf->Write(1,"$city / $province");

$pdf->SetY(104);
$pdf->SetX(10);
$pdf->SetFont("Arial","",9);
$pdf->Write(1,"$region");

$pdf->SetFont("Arial","B",13);
$pdf->SetFillColor(239,239,239);
$pdf->SetDrawColor(219,219,219);

$pdf->SetY(111);
$pdf->SetX(10);
$pdf->Cell(140,7,"Description",1,0,"C");

$pdf->SetY(111);
$pdf->SetX(150);
$pdf->Cell(50,7,"Total",1,1,"C");

$pdf->SetFont("Arial","",12);
$pdf->SetY(118);
$pdf->SetX(10);
$pdf->Cell(140,50,"$describe",1,0,"C");


$pdf->SetY(118);
$pdf->SetX(150);
$pdf->Cell(50,50," ",1,1,"C");

$pdf->SetY(168);
$pdf->SetX(10);
$pdf->Cell(140,7,"Sub Total",1,0,"R");

$pdf->SetY(175);
$pdf->SetX(10);
$pdf->Cell(140,7,"Credit",1,0,"R");

$pdf->SetY(182);
$pdf->SetX(10);
$pdf->Cell(140,7,"Total",1,0,"R");

$pdf->SetFont("Arial","",10);
$pdf->SetY(168);
$pdf->SetX(150);
$pdf->Cell(50,7,"$price2",1,1,"C");

$pdf->SetY(175);
$pdf->SetX(150);
$pdf->Cell(50,7,"R 0.00 ",1,1,"C");


$pdf->SetY(182);
$pdf->SetX(150);
$pdf->Cell(50,7,"$price2",1,1,"C");

$pdf->SetY(200);
$pdf->SetX(10);
$pdf->SetFont("Arial","B",16);
$pdf->Write(1,"Transaction");


$pdf->SetFont("Arial","B",13);
$pdf->SetFillColor(239,239,239);
$pdf->SetDrawColor(219,219,219);

$pdf->SetY(207);
$pdf->SetX(10);
$pdf->Cell(47,7,"Transaction Date",1,0,"C");

$pdf->SetY(207);
$pdf->SetX(57);
$pdf->Cell(47,7,"Gateway",1,0,"C");

$pdf->SetY(207);
$pdf->SetX(104);
$pdf->Cell(47,7,"Transaction ID",1,0,"C");

$pdf->SetY(207);
$pdf->SetX(151);
$pdf->Cell(48,7,"Amount",1,0,"C");

$pdf->SetFont("Arial","",10);
$pdf->SetY(214);
$pdf->SetX(10);
$pdf->Cell(47,7,"$transaction_date",1,0,"C");


$pdf->SetY(214);
$pdf->SetX(57);
$pdf->Cell(47,7,"Credit Card",1,0,"C");

$pdf->SetY(214);
$pdf->SetX(104);
$pdf->Cell(47,7,"$transaction_id",1,0,"C");

$pdf->SetFont("Arial","",10);
$pdf->SetY(214);
$pdf->SetX(151);
$pdf->Cell(48,7,"$price2",1,0,"C");

$pdf->SetFont("Arial","B",13);
$pdf->SetY(221);
$pdf->SetX(10);
$pdf->Cell(141,7,"Balance",1,0,"R");

$pdf->SetFont("Arial","",10);
$pdf->SetY(221);
$pdf->SetX(151);
$pdf->Cell(48,7,"R 0.00",1,0,"C");

$pdf->output();
    }else{
        echo "Invalid invoice";
    }
}else{
    echo "Invalid invoice";
}
?>
