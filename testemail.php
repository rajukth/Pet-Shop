<?php 
require_once "vendor/autoload.php"; //PHPMailer Object 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = $_POST["name"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];
$mail = new PHPMailer\PHPMailer\PHPMailer(); //From email address and name 

 // Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'rajukhatiwada.rk@gmail.com';                     // SMTP username
    $mail->Password   = 'gpyminxopgriosyf';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 


$mail->From = "rajukhatiwada.rk@gmail.com"; 
$mail->FromName = $name; //To address and name 
$mail->addAddress($email, $name);//Recipient name is optional
// $mail->addAddress(""); //Address to which recipient will reply 
//$mail->addReplyTo("reply@yourdomain.com", "Reply"); //CC and BCC 
//$mail->addCC("cc@example.com"); 
//$mail->addBCC("bcc@example.com"); //Send HTML or Plain Text email 
$mail->isHTML(true); 
$mail->Subject = $subject; 
$mail->Body = $message;
$mail->AltBody = "This is the plain text version of the email content"; 
if(!$mail->send()) 
{
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else { echo "Message has been sent successfully"; 
}
}
?>