<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = "lisa.lucero@suneyecare.com";
$EmailTo = "lvc@suneyecare.com";
$Subject = "Sun Laser Vision Website Inquiry";
$Name = Trim(stripslashes($_POST['Name'])); 
$Address = Trim(stripslashes($_POST['Address'])); 
$Telephone = Trim(stripslashes($_POST['Telephone'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Question = Trim(stripslashes($_POST['Question']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "Telephone: ";
$Body .= $Telephone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Question: ";
$Body .= $Question;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>
