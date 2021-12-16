<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($fname)||empty($lname)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}


// Email notifying myself of the form submission
$email_from = 'meenadeschutter@gmail.com';
$email_subject = "Website form inmail";
$email_body = "You have received a new message from the user $fname $lname.\n".
    "Here is the message:\n $message".
    
$to = "meenadeschutter@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);

//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?> 