<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Thank You!</title>
</head>
<body style="text-align: center;padding:20px 0;">
	<?php

		$name = $_POST['contact_name'];
		$email = $_POST['contact_email'];
		$message = $_POST['contact_message'];
		
		$formcontent=" From: Mim Contact Form $email \n
		Name: $name \n
		Email Address: $email \n
		Message: $message";
		
		$recipient = "azimjiwani@hotmail.com";
		$subject = "Add Your Subject Here";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		
	?>
	
</body>
</html>