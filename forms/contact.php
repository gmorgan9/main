<?php
  if(isset($_POST['submit'])) {
    $mailto = "info@morgancloud.us"; //my email address

    // getting contact form data
    $name = $_POST['name']; // client name
    $fromEmail = $_POST['email']; // client email
    $subject = $_POST['subject']; // client subject
    $confirmation = "Confirmation: Message was submitted successfully!"; // confirmation for client

    // Email Body
    $message = "Client Name: " . $name ."\n"
    . "Subject: " . $subject ."\n"
    . "Message: " . "\n" . $_POST['message'];

    $message2 = "Dear " . $name . "," . "\n"
    . "Thank you for contacting me. I will get back to you shortly!" "\n\n"
    . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
    . "Regards," . "\n" . "- Garrett Morgan";

    // Email Headers
    $headers = "From: " .  $fromEmail; // client email
    $headers2 = "From: " . $mailto;

    // PHP mailer function
    $email1 = mail($mailto, $subject, $message, $headers); // email sent to me
    $email2 = mail($fromEmail, $confirmation, $message2, $headers2); // confirmation email

    // emails successful 
    if ($email1 && $email2) {
      $success = "Message was sent successfully!";
    } else {
      $failed = "Sorry! Message was not sent, please try again!";
    }


  }