<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";




$password='gpym inxo pgri osyf';

    // Add your email address where you want to receive the messages
    $to = "dilliramkhatiwada.dr@gmail.com";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    // Send email
    mail($to, $subject, $body,$headers);
echo($body);
    // Redirect back to the contact form with a success message
   // header("Location: contact.html?success=1");
} else {
    // If the form wasn't submitted properly, redirect back to the form
    header("Location: contact.html");
}
?>