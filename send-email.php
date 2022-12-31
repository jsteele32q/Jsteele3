<?php

$email = $_POST['email'];

$to = "juliusk1443@gmail.com";

$subject = "Workout Plan Signup";

$message = "A user has signed up for the workout plan. Their email address is: $email";

$headers = "From: info@example.com\r\n";

mail($to, $subject, $message, $headers);

header("Location: https://jsteele32q.github.io/Jsteele3/13.html");

exit;

?>
