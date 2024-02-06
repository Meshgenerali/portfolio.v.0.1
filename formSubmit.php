<?php 
include('./constants.php');
if(isset($_POST['submit']))
{
    $fullName = $_POST['full-name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // send email

    ini_set('SMTP','smtp.gmail.com');
    ini_set('smtp_port','465');

    $to = 'meshackmuuo595@gmail.com';
    $subject = 'New Portfolio Submission';
    $full_message = "Name: $fullName\nMessage: $message\n";
    $headers = "From: $email";

    $send_mail = mail($to, $subject, $fmessage, $headers);

    if($send_mail)
    {
        $_SESSION['sent'] = "<p class = 'success'>Message Sent Successfully.</p>";
        header('location:'.SITEURL.'index.php');
    } else
    {
        $_SESSION['fail'] = "<p class = 'success'>OOPS! Try again later.</p>";
        header('location:'.SITEURL.'contact.php');
    }
}