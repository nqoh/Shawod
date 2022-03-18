<?php
$quey_app=mysqli_query($conn,"SELECT * FROM not_approved WHERE approval=1");
$table='';$client_msg=0;
$ix=0;
while ($row=mysqli_fetch_assoc($quey_app)){
    $ix++;
    $name=$row['name'];
    $id=$row['id'];
    $quey1=mysqli_query($conn,"SELECT * FROM billing WHERE f_key='$id' AND c_key=1");
    $client_msg +=mysqli_num_rows($quey1);
    $quey2=mysqli_query($conn,"SELECT * FROM developer WHERE f_key='$id'  AND c_key=1");
    $client_msg +=mysqli_num_rows($quey2);
    $quey3=mysqli_query($conn,"SELECT * FROM hosting WHERE f_key='$id' AND c_key=1 ");
    $client_msg +=mysqli_num_rows($quey3);
    $quey4=mysqli_query($conn,"SELECT * FROM other WHERE f_key='$id' AND c_key=1 ");
    $client_msg +=mysqli_num_rows($quey4);
    $project_id=$row['project_id'];
    $project_end=$row['project_end'];
    $total=$row['amount'];
    $pack=$row['package'];

    $table.="<tr><td>$ix</td><td>$name</td><td>$client_msg<a href=\"../messages/?id=$id\"> View </a>
             </td><td>$project_id</td><td>$project_end</td><td>R $total</td><td> $pack</td>
             <td>R 0.00</td><td><a onclick='return false' onmousedown='gets($id)' href=\"#\">View</a><td><button onclick='remove_project($id)'>X</button></td></tr>";
}


$table2='';
$xx=0;
$reference='';
$quey_app=mysqli_query($conn,"SELECT * FROM not_approved WHERE approval=0 ORDER  BY id DESC ");

while($row=mysqli_fetch_assoc($quey_app)){

    $xx++;
    $name2=$row['name'];

    $id2=$row['id'];
    $reference=$row['referance'];
    $package=$row['package'];
    $total2=$row['amount'];
    $table2.="<tr><td>$xx</td><td>$name2</td><td>$reference</td><td>$package</td><td>R $total2</td>
        <td><a onclick='return false' onmousedown='gets($id2)' style='color: blue; cursor: pointer; text-decoration: underline'>View</a></td><td id=\"actp $xx\"><button onclick='accep($id2,\"acp_btn $xx\",\"actp $xx\")' id=\"acp_btn $xx\" class='btn2' style='color:rgb(51,204,255)'>&#10003;</button></td><td>
        <button class='btn2' onclick='reject($id2)' style='color: red'>X</button></td></tr>";
}
