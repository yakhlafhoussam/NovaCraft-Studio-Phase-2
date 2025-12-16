<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'yk2006houssam@gmail.com';
        $mail->Password   = 'ulrisrnhvctplbfe';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('yk2006houssam@gmail.com', 'NovaCraft Contact Form');
        $mail->addAddress('houssamyakhlaf1@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New message from contact form';
        $mail->Body    = "
            <h3>New Message:</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();

        // redirect after success
        header("Location: /pages/contact.php?success=1");
        exit;

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
