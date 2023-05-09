<?php
// Load the PHPMailer class
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Set up the PHPMailer object
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtppro.zoho.com';
$mail->SMTPAuth = true;
$mail->Username = 'brian@brianecodes.africa';
$mail->Password = 'Sicafew74855!';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

// Set the sender and recipient
$mail->setFrom('brian@brianecodes.africa', 'Brian Ecodes');
$mail->addAddress('recipient@example.com', 'Recipient Name');

// Set the email subject and message body
$mail->Subject = 'Contact Form Submission';
$mail->Body = 'You have received a new contact form submission.\n\n' .
    'Name: ' . $_POST['name'] . '\n' .
    'Email: ' . $_POST['email'] . '\n' .
    'Phone Number: ' . $_POST['phone'] . '\n' .
    'Message: ' . $_POST['message'] . '\n';

// Send the email and display a success message
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>
