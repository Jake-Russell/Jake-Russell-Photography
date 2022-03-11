<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("vendor/phpmailer/phpmailer/src/SMTP.php");
require("vendor/phpmailer/phpmailer/src/Exception.php");

require_once('vendor/autoload.php');

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $email = $_POST['email']; // this is the sender's Email address
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $debug = '';

  try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;                      // Enable verbose debug output
      //$mail->Debugoutput = function($str, $level) {
      //  $GLOBALS['debug'] .= "$level: $str\n";
      //};


      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = $_ENV["HOST"];                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = $_ENV["EMAIL"];                     // SMTP username
      $mail->Password   = $_ENV["PASSWORD"];                               // SMTP password
      $mail->SMTPSecure = "ssl";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

      $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
      );

      //Recipients
      $mail->setFrom('jake@jakerussell.photography');
      $mail->addAddress('jake@jakerussell.photography');     // Add a recipient

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = "Form Submission - " . htmlentities($subject);
      $mail->Body    = "<strong>Name: </strong>" . htmlentities($name) .
                        "<br><strong>Email: </strong>" . $email .
                        "<br><strong>Subject: </strong>" . htmlentities($subject) .
                        "<br><strong>Message: </strong>" . htmlentities($message);

      $mail->send();

      $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting me.</span>
                </div>';

  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      $alert = '<div class="alert-error">
                  <span>'.$e->getMessage().'</span>
                </div>';
  }
}
