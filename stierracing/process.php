<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "chirag@stierracing.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = $_POST['subject']
    
    //send email
    mail($admin_email, $subject, $name . '-' . $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: http://edgeledger.net/success.html');
  }