<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $massage = $_POST['massage'];

    $email_from = 'support@anytimelearningbd.com';

    $email_subject = "Support Mail";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User massage: $massage.\n";

    $to = "mirzaabdullahalnoman@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: about.html");

?>