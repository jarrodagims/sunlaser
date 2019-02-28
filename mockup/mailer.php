<?php
if(isset($_POST['submit'])) {
	$to = "gibbi33@yahoo.com"; 
	$subject = "Message from suneyecare.com";
	$name_field = $_POST['name'];
	$street_field = $_POST['street'];
	$city_field = $_POST['city'];
	$zip_field = $_POST['zip'];
	$phone_field = $_POST['phone'];
	$email_field = $_POST['email'];
	foreach($_POST['check'] as $value) {
		$check_msg .= "Checked: $value\n";
	}
	$body = "From: $name_field\n Street: $street_field\n City: $city_field\n Zip: $zip_field\n Phone: $phone_field\n E-Mail: $email_field";
	echo "Data has been submitted to $to!";
	mail($to, $subject, $body);
	
} else {
	echo "blarg!";
}
?>
