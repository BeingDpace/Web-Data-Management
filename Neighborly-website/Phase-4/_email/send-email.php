<?php

$fname = $_POST['first'];
$lname = $_POST['last'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['date'];
$usertype = $_POST['user_type'];
$country = $_POST['country'];

$subject = "Welcome to Neighbor.ly.";
$body =     "Hello $fname,\n\nWelcome to Neighbor.ly. Here are your login credentials:\n\nName: $fname $lname\nUsername: $username\nPhone: $phone\nStatus: $usertype\nCountry: $country\n\nSincerely,\nNeighbour.ly ";

// print $body;

if (mail($email, $subject, $body)) {
    echo "Email successfully sent to $email...";
} else {
    echo "Email sending failed...";
}
?>

<!--
    Gmail Login info:
        email : neighborly.website@gmail.com
        passw : 2212-CSE-5335-002

    sendmail.ini    xampp\sendmail\sendmail.ini
    php.ini         xampp\php\php.ini 

    https://meetanshi.com/blog/send-mail-from-localhost-xampp-using-gmail/
-->