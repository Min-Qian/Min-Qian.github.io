<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'chewminqian@gmail.com'; // Replace with your email address
  $subject = 'New form submission';
  $body = "Name: $name\nEmail: $email\n\n$message";

  // Send the email
  if (mail($to, $subject, $body)) {
    echo 'Email sent successfully!';
  } else {
    echo 'Failed to send email. Please try again.';
  }
}
?>
