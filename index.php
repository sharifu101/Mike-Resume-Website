<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "rukonfpi@gmail.com"; // Replace with your real email
    $subject = htmlspecialchars($_POST['subject']);
    $name = htmlspecialchars($_POST['user_name']);
    $email = htmlspecialchars($_POST['user_email']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $body = "You have received a message from $name.\n\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Message sent successfully!";
    } else {
        echo "❌ Failed to send message.";
    }
}
?>
