<?php 
$ToEmail = 'glenak1911@gmail.com'; 
$EmailSubject = 'KnightGlen.com Inquiry'; 
$mailheader = "From: ".$_POST["name"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"]."\r\n"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."\r\n"; 
$MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("There was an error, please try again"); 

echo '<p>Your message has been sent!<br>I will get in touch with you shortly!</p>';
echo '<a href="http://knightglen.com">Click here to return</p>';
?>

