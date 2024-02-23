<?php
// PHP Mailer classes import
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Work with composer's autoloader for PHP Mailer
require 'vendor/autoload.php';

// PHP Mailer instance
$mail = new PHPMailer(true);

// Basic checks
try {
    // Check if the PHP Mailer instance was created properly
    if ( !isset( $mail ) ) {
        throw new Exception("Something went wrong on the servers side. Your data couldn't be processed correctly. Please try again or contact us via e-mail.", 1);
    }

    // Check if every input got a value
    foreach ( $_POST as $value ) {
        if ( isset( $value ) ) {            
            continue;
        } else {
            throw new Exception("Some data has not been processed correctly on the way. Please try again or contact us via e-mail.", 2);
        }
    }

    // Sanitize the input values (get rid of some special characters, double and leading/ending white spaces)
    // ...

    // Validate the input values (again, first round happened in the frontend with html imput patterns and Javascript)
    // ...

    // Preparations for mail sending (Check the Readme of the PHP Mailer project for further information - https://github.com/PHPMailer/PHPMailer)
    // Server settings for sending with SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 1025;

    // Recipients
    $mail->setFrom('application@roam-projects.eu', 'Application Form');
    $mail->addAddress('mail@andreasbaudisch.de', 'Andreas Baudisch');
    $mail->addReplyTo('application@roam-projects.eu', 'roam projects e. V.');

    // Content
    $mail->isHTML(false);
    $mail->Subject = 'New membership application';
    $mail->Body = 'I want to apply for a membership at roam projects e. V.';

    $mail->send();
    print('Message has been sent.');

} catch (\Throwable $th) {
    printf("Error no. %s. %s", strval($th->getCode()), $th->getMessage());
    echo "\n";
    printf("Message could not been sent. Mailer Error: %s", $mail->ErrorInfo);
}
?>
