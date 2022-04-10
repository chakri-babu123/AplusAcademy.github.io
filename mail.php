<?php
//get data from form  
$name = $_POST['name'];
$number= $_POST['number'];
$to = "chakribabu.feb@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  number = " . $number . ";
$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
