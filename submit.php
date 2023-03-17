<?php
// Get the form fields, remove whitespace and strip HTML tags
$name = trim(strip_tags($_POST['name']));
$email = trim(strip_tags($_POST['email']));
$message = trim(strip_tags($_POST['message']));

// Check if all the fields are filled in
if (!$name || !$email || !$message) {
  echo '<p>Please fill in all the required fields.</p>';
  exit;
}

// Construct the message body
$body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

// Set the recipient email address and subject
$to = 'byansianthony@gmail.com';
$subject = 'New message from your website';

// Set the email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
  echo '<p>Thank you for your message. I will get back to you as soon as possible!</p>';
} else {
echo '<p>Sorry, something went wrong. Please try again later.</p>';
}
?>
