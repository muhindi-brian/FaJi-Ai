<?php
// Include the header and menu files
include('header.php');
include('menu.php');

// Check if the form has been submitted
if(isset($_POST['submit'])) {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Send the email
    require_once('phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtppro.zoho.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'brian@brianecodes.africa';
    $mail->Password = 'Sicafew74855!';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('brian@brianecodes.africa');
    $mail->addAddress($email, $name);
    $mail->addReplyTo('brian@brianecodes.africa');
    $mail->isHTML(true);
    $mail->Subject = 'Thank You for Contacting Us';
    $mail->Body = 'Dear '.$name.',<br><br>Thank you for contacting us. We have received your message and will get back to you shortly.<br><br>Here is a copy of your message:<br><br>Name: '.$name.'<br>Email: '.$email.'<br>Phone: '.$phone.'<br>Message: '.$message.'<br><br>Best regards,<br>The Contact Us Team';
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo '<div class="alert alert-success" role="alert">Thank you for contacting us. We will get back to you shortly.</div>';
    }
}
?>

<!-- Contact Us Form -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form method="post" action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
