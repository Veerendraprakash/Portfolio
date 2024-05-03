<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Compose the email message
    $to = "veerendraprakash5678@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email
    mail($to, $subject, $email_body);

    // Respond with a success message
    echo "Thank you for submitting the form! We will get back to you soon.";
}
?>
