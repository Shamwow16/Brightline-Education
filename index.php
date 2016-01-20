<?php
$firstName = $_POST['first-name'];
$email = $_POST['email'];
$message = $_POST['message'];
$inquiryType = $_POST['inquiry'];

$from = 'Brightline Inquiry Form';
$to = 'shamyleg@gmail.com';
$subject = 'Inquiry Form Submission';
$body = "From: $firstName\n Email: $email\n Message:\n $message";


if (!$_POST['first-name'] || (!$_POST['last-name'])) {
    $errName = 'Please fill all the fields';
}

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}

if (!$errName && !$errEmail) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
?>