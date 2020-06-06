<?php

require_once 'vendor/autoload.php';
require_once 'config/constants.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
// $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465)
->setUsername(EMAIL)
->setPassword(PASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationEmail($userEmail, $token)
{

global $mailer;
$body = '<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Verify Email </title>
  </head>
  <body>
    <div class="wrapper">
      <p>
        Thank you for signing up on our website. Please click on the link below
        to verify your email.
      </p>
      <a href="http://localhost/templates/registration_login_system/reglogin/index.php?token=' . $token . '">
        Verify your email address
        </a>
    </div>
  </body>
</html>';

// Create a message
$message = (new Swift_Message('Verify your email address'))
->setFrom(EMAIL)
->setTo($userEmail)
->setBody($body, 'text/html');

// Send the message
$result = $mailer->send($message);
}

function sendPasswordResetLink($userEmail, $token)
{

  global $mailer;
  $body = '<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Verify Email </title>
    </head>
    <body>
      <div class="wrapper">
        <p>
          Hello, <br/><br/>

          Please click the link below to reset your password. <br/><br/>

          Best,<br/>
          Ironboy
        </p>
        <a href="http://localhost/templates/registration_login_system/reglogin/index.php?password-token=' . $token . '">
          Reset your password
          </a>
      </div>
    </body>
  </html>';

  // Create a message
  $message = (new Swift_Message('Reset your password'))
  ->setFrom(EMAIL)
  ->setTo($userEmail)
  ->setBody($body, 'text/html');

  // Send the message
  $result = $mailer->send($message);

}

 ?>
