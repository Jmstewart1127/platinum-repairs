<html>
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
if(!empty($_POST["name1"]){
$name = $_POST['name1'];
$email = $_POST['email1'];
$phonenumber = $_POST['phoneNumber1'];
$message = nl2br($_POST['message1']);

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'websiteyour727@gmail.com';                            // SMTP username
$mail->Password = 'Js1029492';                           // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;                            // Enable encryption, 'ssl' also accepted
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->From = 'platinumrepairs22@gmail.com';
$mail->FromName = 'Platinum Repairs';
$mail->AddAddress('Jmstewart1127@gmail.com', '');  // Add a recipient    

$mail->Subject = 'New Contact Info';
$mail->Body    = '<b>Name:</b>' .$name. '<br><b>Email Address:</b> ' .$email. '<br> <b>Message:</b> ' .$message. '<br> <b>Phone Number:</b> ' .$phonenumber. '<br>';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';
}

?>
</body>
</html>