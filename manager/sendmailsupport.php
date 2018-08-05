<?php

	class Reset
	{


	function send_mail($email,$message,$subject)  //all the mail settings for verification emails
	{
		require '../PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $email;                 // SMTP username
$mail->Password = 'mercymeGOD';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($email, 'Josephine Machage');
$mail->addAddress('elvismutende@gmail.com', 'Elvis Mutende');     // Add a recipient

$mail->addReplyTo($email);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }


	}
	}