<?php

if(isset($_POST['submit_form']) && $_POST['submit_form'] == 1)	{
	
	$message = "Name: {$_POST['name']}<Br />";
	$message .= "Email: {$_POST['email']}<Br />";
	$message .= "Phone: {$_POST['phone']}<Br />";
	$message .= "Age: {$_POST['age']}<Br />";
	$message .= "Time of Day: {$_POST['time_of_day']}<Br />";
	$message .= "Best Day: {$_POST['best_day']}<Br />";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$headers .= 'From: <info@sunlaservision.com>' . "\r\n";
	$to = "Joan.herrera@sunlaservision.com";
	$subject = "Contact Us";
	
	
	@mail($to, $subject, $message, $headers);
	
	header('Location: /thank_you.html');
	
	exit;
}