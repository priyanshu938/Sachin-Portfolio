<?php
//get data from form  

$name = $_POST['Name :'];
$email= $_POST['Email :'];
$message= $_POST['Message :'];
$to = "priyanshutiwari6789@gmail.com";
$subject = "Mail From Sachin";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;


if($email!=NULL){
    mail($to,$subject,$txt);
}
//redirect
header("Location:thankyou.html");
?>