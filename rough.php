
if(isset($_POST['sendmail']))
	require 'PHPMailerAutoload.php';
    //require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '$E';                 // SMTP username
$mail->Password = '$p';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($E, 'Bedsheet Corner');
$mail->addAddress($_POST['email']);     // Add a optional
$mail->addReplyTo($E);


//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'BEDSHEET CORNER';
$mail->Body    = ' <div style="border:2px solid red;">Your password has been sent to you by email<b>in bold!</b></div>';
$mail->AltBody = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}