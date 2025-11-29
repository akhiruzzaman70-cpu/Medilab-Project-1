<?php
$receiving_email_address = 'akhiruzzaman70@gmail.com';

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$department = $_POST['department'];
$doctor = $_POST['doctor'];
$message = $_POST['message'];

// Email subject and body
$subject = "Online Appointment Form";
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Appointment Date: $date\n";
$body .= "Department: $department\n";
$body .= "Doctor: $doctor\n";
$body .= "Message: $message\n";

// Email headers
$headers = "From: $name <$email>";

// Send email
if(mail($receiving_email_address, $subject, $body, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message.";
}
?>
