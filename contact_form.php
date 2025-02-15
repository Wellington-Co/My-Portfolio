<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Recipient email (your email address)
    $to = "omondiwellington011@gmail.com"; 
    $subject = "New Message from Contact Form";
    
    // Construct email body
    $body = "You have received a new message from the contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";
    
    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
}
?>
