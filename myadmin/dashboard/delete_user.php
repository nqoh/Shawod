<?php
if(isset($_POST['id'])){
    include '../connect.php';$id=$_POST['id'];
    $query=mysqli_query($conn,"SELECT * FROM `not_approved` WHERE  `id`='$id'");
    $row=mysqli_fetch_row($query);
    $project_id=$row[10];
    $email=$row[2];
    mysqli_query($conn,"DELETE FROM `billing` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `comment` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `developer` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `hosting` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `hosting_payment` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `login` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `new_services` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `notifications` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `other` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `services` WHERE `f_key`='$id'");
    mysqli_query($conn,"DELETE FROM `user_emails` WHERE `f_key`='$id'");
   // unlink('../../../client_project/'.$project_id);
    /// send email that notify the project was deleted
    ///
    ///
    ///
    mysqli_query($conn,"DELETE FROM `not_approved` WHERE `id`='$id'");
    echo 'ok';
}