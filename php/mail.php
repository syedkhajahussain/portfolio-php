<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "youremail@example.com";
    $subject = "New Contact Form Message";
    $headers = "From: $email\r\n";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send!";
    }
}
?>
