<?php

$fname = $_POST['fname'] ?? '';
$lname = $_POST['lname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$service = $_POST['services'] ?? '';
$date = $_POST['date'] ?? '';


$to = " nagemoga@gmail.com";


$subject = "Dental Appointment Request from $fname $lname";
$body = "You have received a new appointment request:\n\n"
      . "Full Name: $fname $lname\n"
      . "Email: $email\n"
      . "Phone: $phone\n"
      . "Selected Service: $service\n"
      . "Preferred Date: $date";


$headers = "From: $email";


if (!empty($fname) && !empty($lname) && !empty($phone) && !empty($service) && !empty($date)) {
    mail($to, $subject, $body, $headers);
}


header("Location: thankyou.html");
exit;
?>
