<?php
/**
 * Copyright (c) 2024 silrag184
 *
 * This file is part of the PHP Practice Projects.
 * Licensed under the MIT License.
 * See the LICENSE file distributed with this source code for more information.
 */

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $body = trim($_POST["message"] ?? "");

    if (empty($name) || empty($email) || empty($subject) || empty($body)) {
        $message = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format.";
    } else {
        $to = "msilrag@gmail.com"; // Change to your email address
        $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
        $mailBody = "Name: $name\nEmail: $email\n\nMessage:\n$body";

        if (mail($to, $subject, $mailBody, $headers)) {
            $message = "Message sent successfully!";
        } else {
            $message = "Failed to send message. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Form with Email Sending</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 500px; margin: auto; }
        form { display: flex; flex-direction: column; }
        label { margin-top: 10px; }
        input[type="text"], input[type="email"], textarea {
            padding: 8px; font-size: 1em; width: 100%; box-sizing: border-box;
        }
        textarea { resize: vertical; height: 120px; }
        input[type="submit"] {
            margin-top: 20px; padding: 10px; font-size: 1em; cursor: pointer;
        }
        .message { margin-top: 20px; font-weight: bold; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <?php if ($message): ?>
            <div class="message <?php echo strpos($message, 'successfully') !== false ? 'success' : 'error'; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required autofocus />
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required />
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Send Message" />
        </form>
    </div>
</body>
</html>
