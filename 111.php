<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the form data

    $email = $_POST['email'];

    // Validate the form data (optional)

    if (empty($email)) {

      $error = 'Please enter your email address';

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

      $error = 'Invalid email address';

    }

    // Save the email address to a database or send it to an email address (optional)

    // ...

    // Redirect the user to a thank you page (optional)

    header('Location: thank-you.html');

    exit;

  }

?>

