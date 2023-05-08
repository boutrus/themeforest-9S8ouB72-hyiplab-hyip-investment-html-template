<?php
 echo 'Your Message successfully sent';
 die();
if(!isset( $_POST['contact-name']) || !isset($_POST['contact-email']) || !isset($_POST['contact-message']) ) {
	echo 'something is wrong! Please try agian';
    die();
}
	$email_from = $_POST['contact-email'];
	$email_subject = "Contact Form: Template";
	$email_message = "Please find below a message submitted by ".stripslashes($_POST['contact-name'])."\n\n";
	$email_message .=" on ".date("d/m/Y")." at ".date("H:i")."\n\n";
	$email_message .= stripslashes($_POST['contact-message']);

	$headers = 'From: '.$email_from."\r\n" .
   'Reply-To: '.$email_from."\r\n" ;
​
	mail('company@gmail.com', $email_subject, $email_message, $headers);
	echo "Thanks for contacting us.";
	die();
?>