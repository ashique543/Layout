<?php
if(isset($_POST['Submit']))
{
    $name=$_POST['name'];
    $email=$_POS['email'];
    $msg=$_POST['msg'];

    $to='ashiquemullick14@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."E-Mail: ".$email."\n"."Wrote the Following: "."\n\n".$msg;
    $headers="From: ".$email;
    mail($to,$subject,$message,$headers);
}
?>