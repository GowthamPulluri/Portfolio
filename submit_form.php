<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);

    // Here you can send an email, save to a database, or log it into a file
    $to = "pullurigowtham@gmail.com"; // Change to your email address
    $subject = "New Contact Form Submission";
    $message = "First Name: $firstName\nLast Name: $lastName\nEmail: $email";
    $headers = "From: no-reply@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>
