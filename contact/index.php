<?php

$msg = '';

//Don't run this unless we're handling a form submission

if (isset($_POST['fullname'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $comments = $_POST['comments'];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance

    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()

    $mail->isSMTP();
    $mail->Host = 'mail.barbaraorts.webhostingforstudents.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'phpmailer@barbaraorts.webhostingforstudents.com';
    $mail->Password = 'javajampassword';

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks

    $mail->setFrom('phpmailer@barbaraorts.webhostingforstudents.com', 'Barbara Orts');

    //Send the message to yourself, or whoever should receive contact for submissions

    $mail->addAddress('phpmailer@barbaraorts.webhostingforstudents.com', 'Barbara Orts');

    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request

    $mail->addReplyTo($email, $fullname);
    $mail->Subject = 'Ace in the Hole Multisport Events Contact Form';

    //Keep it simple - don't use HTML
    $mail->isHTML(false);

    //Build a simple message body

    $mail->Body = <<<EOT
    Email: $email <br>
    Name: $fullname <br>
    Role: $role <br>
    Message: $comments <br>
EOT;

    //Send the message, check for errors

    if (!$mail->send()) {

        echo 'Mailer error:' . $mail->ErrorInfo;

    } else {
        include 'success.html.php';
    }
} else {

    include 'contact.html.php';
}

?>
