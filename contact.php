<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize inputs
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    // Define recipient email
    $to = "alicejeslyn781@gmail.com";

    // Create email subject
    $subject = "Contact Form Message from $name";

    // Create the email body
    $body = "You have received a new message from the contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('There was an error sending your message. Please try again later.'); window.location.href='contact.html';</script>";
    }
}
?>
