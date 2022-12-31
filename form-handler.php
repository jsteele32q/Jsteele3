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

    // Send the email to a specific address

    $to = 'juliusk1443@gmail.com';

    $subject = 'New Workout Plan Signup';

    $message = "An email address has signed up for the workout plan: $email";

    $headers = "From: noreply@yourdomain.com\r\n";

    mail($to, $subject, $message, $headers);

    // Redirect the user to a thank you page

    header('Location: https://www.muscleandfitness.com/workout-plan/workouts/workout-routines/complete-mf-beginners-training-guide-plan/');

    exit;

  }

?>
