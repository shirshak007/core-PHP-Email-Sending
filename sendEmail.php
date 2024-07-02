<?php
/**
 * PHPMailer send email using Gmail SMTP 
 * @author Shirshak
 */
 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './phpMailerLib/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	//Server settings
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	$mail->isSMTP();                                            //Send using SMTP
	$mail->Host       = 'ssl://smtp.gmail.com';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = 'yourEmailId@example.com';                     //SMTP username
	$mail->Password   = 'yourAppPassword';                               //SMTP password //see readme
	$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	//Recipients
	$mail->setFrom('yourEmailId@example.com', 'Your Name');
	$mail->addAddress('receiver1@example.com');     //Add a recipient
	//$mail->addAddress('receiver2@example.com', 'Joe User');     //Repeat to add more; name is optional
	$mail->addReplyTo('info@example.com', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');
	$mail->addAttachment('/path/to/filename1.jpg');
	$mail->addAttachment('/path/to/filename2.png');
	//Content
	$mail->isHTML(true);			//Set email format to HTML
	$mail->Subject = 'PHP Email Sending';
	//Your email body
	$msg = "<h5>Hello,</h5>This is a test email, sent by Core PHP using PHPMailer library.<br><br>Thanks,"; //you can include external html file if you want.
	$mail->Body    = $msg;

	//send email
	$mail->send();

	echo 'Message has been sent';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
