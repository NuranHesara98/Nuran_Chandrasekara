<?php

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'nuranhesara321@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  $contact->smtp = array(
    'host' => 'smtp.gmail.com',  // Change this to your SMTP provider
    'username' => 'nuranhesara321@gmail.com',  // Your email address
    'password' => 'ishani2022',  // Your email password or App Password
    'port' => '587'  // Usually 465 for SSL, 587 for TLS
);


  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
