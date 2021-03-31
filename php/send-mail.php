<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POS['email'];
    $msg=$_POST['msg'];

    $to='ashiquemullick14@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."E-Mail: ".$email."\n"."Wrote the Following: "."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to,$subject,$message,$headers))
    {
        echo "<h2> Sent Successfully! Thank You"." ".$name.", We will contact you</h2>";
    }
    else
    {
        echo "<h2>Something Went Wrong</h2>";
    }
}
?>