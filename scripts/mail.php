<?php 
$ToEmail = 'glenak1911@gmail.com'; 
$EmailSubject = 'KnightGlen.com Inquiry'; 
$mailheader = "From: ".$_POST["formEmail"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"]."\n"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."\n"; 
$MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>