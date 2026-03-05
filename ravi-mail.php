<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$to = "Info@ravistainless.com";

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$requirements = $_POST['requirements'];

$subject = "New Website Inquiry";

$message = "
Full Name: $full_name
Email: $email
Phone: $phone
Company: $company

Project Requirements:
$requirements
";

$headers = "From: noreply@ravistainless.com\r\n";
$headers .= "Reply-To: $email\r\n";

mail($to,$subject,$message,$headers);

echo "<script>alert('Inquiry Sent Successfully');window.history.back();</script>";

}

?>