<?php

if($_POST["submit"]) {
    $recipient="support@digitalhammock.com";
    $subject=$_POST["inputSubject"];
    $sender=$_POST["inputName"];
    $senderEmail=$_POST["email"];
    $message=$_POST["inputMessage"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    if (!mail($to, $subject, $message, $headers))
        {
        echo "Error.";
        }
        else {
        echo "Message sent.";
        }
}

?>