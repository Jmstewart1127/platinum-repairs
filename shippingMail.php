<html>
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
//Send details to phillip and send instructions to person
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phoneNumber'];
$message = nl2br($_POST['message']);

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'websiteyour727@gmail.com';                            // SMTP username
$mail->Password = '********';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->From = 'websiteyour727@gmail.com';
$mail->FromName = 'Your Website';
$mail->AddAddress('Jmstewart1127@gmail.com', '');  // Add a recipient    

$mail->Subject = 'Shipping Details';
$mail->Body    = '<b>Name:</b>' .$name. '<br><b>Email Address:</b> ' .$email. '<br> <b>Message:</b> ' .$message. '<br> <b>Phone Number:</b> ' .$phonenumber. '<br>' .
					'Customer wanting to ship broken device to you. Send customer a paypal invoice for payment';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';



$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'websiteyour727@gmail.com';                            // SMTP username
$mail->Password = 'Js1029492';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->From = 'websiteyour727@gmail.com';
$mail->FromName = 'Your Website';
$mail->AddAddress($email, '');  // Add a recipient    

$mail->Subject = 'Shipping Details';
$mail->Body    = 'Hello, ' .$name. ' to have your device repaired, please ship to <b>9125 E 44th St Kansas City, MO 64133</b>. You will recieve an invoice and your repaired device will be returned to you in a timely manner' .$email. '<br> <b>Thank You!</b><br> <b>-Platinum Repairs</b>';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message 2 has been sent';
?>
</body>
</html>