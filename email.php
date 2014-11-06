<?php
// if post variables exist
if(isset($_POST['toaddress'])){
	// shortform the variables
$to = $_POST['toaddress'];
}else{
echo "The \"To Address\" was not submitted, please go <a href='javascript:history.go(-1);' title='Back'>back</a> and try again";	
}
if(isset($_POST['subject'])){
$subject = $_POST['subject'];
}else{
echo "The 'Subject' was not submitted, please go <a href='javascript:history.go(-1);' title='Back'>back</a> and try again";	
}
if(isset($_POST['message'])){
$message = $_POST['message'];
}else{
echo "The 'Message' was not submitted, please go <a href='javascript:history.go(-1);' title='Back'>back</a> and try again";	
}
if(isset($_POST['from'])){
$from = $_POST['from'];
}
if(isset($_POST['cc'])){
$cc = $_POST['cc'];
}
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: " . $from . "\r\n";
$headers .= "CC: " . $cc . "\r\n";

// send mail
if(mail($to, $subject, $message, $headers)){
	echo "Your email could not be sent";
}else{
// Let the user know email has been sent
echo "Your mail has been sent.";
}

?>