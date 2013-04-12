<?php

$to = 'info@mmrf.in';

$subject = 'Received mail information';

$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
	
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_REQUEST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Address:</strong> </td><td>" . strip_tags($_REQUEST['address']) . "</td></tr>";
$message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_REQUEST['city']) . "</td></tr>";
$message .= "<tr><td><strong>Pincode:</strong> </td><td>" . strip_tags($_REQUEST['pincode']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_REQUEST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . strip_tags($_REQUEST['mobile']) . "</td></tr>";
$message .= "<tr><td><strong>Phone No:</strong> </td><td>" . strip_tags($_REQUEST['pho_ex']) . "</td></tr>";	
$message .= "<tr><td><strong>Location:</strong> </td><td>" . strip_tags($_REQUEST['location']) . "</td></tr>";
$message .= "<tr><td><strong>Bulid_Area:</strong> </td><td>" . strip_tags($_REQUEST['build_area']) . "</td></tr>";
$message .= "<tr><td><strong>Budget:</strong> </td><td>" . strip_tags($_REQUEST['budget']) . "</td></tr>";	
$message .= "<tr><td><strong>Post Your Enquiry:</strong> </td><td>" . strip_tags($_REQUEST['enquiry']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";





	

	
// Enter your email address

$send_contact=mail($to,$subject,$message,$headers);
	
// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact){
	echo "We've recived your contact information";
}
else {
	echo "ERROR";
}
	
	
	
?>

