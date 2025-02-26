<?php 
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $comment = htmlspecialchars($_POST["comment"]);

    $to = 'valdik20032944@gmail.com'; 
    $subject = 'Message from Contact Form';
    $message = "Name: $name\nEmail: $email\nComment: $comment";
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $sent = mail($to, $subject, $message, $headers);
    if ($sent) {
        $_SESSION['feedback'] = "Success! Your message has been sent.";
    } else {
        $_SESSION['feedback'] = "Oops, there was an error sending your message.";
    }

    header("Location: index.php");
    exit;
}
?>