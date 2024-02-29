<?php

$subject = 'subject';
$text1 = 'I`m Andrey.';
$text2 = 'I`m from England.';
$text3 = 'I like ice cream';
$message = $text1 . $text2 . $text3;
$recipient = 'abibulaevmarlen5@gmail.com';
$headers = 'From: student.539.SMTP@gmail.com';

echo "Subject: $subject\n";
echo "Message: $message\n";
echo "Recipient: $recipient\n";
echo "headers: $headers\n";


try {
    mail($recipient, $subject, $message, $headers);
    echo 'The message was sent successfully';
} catch (Exception $ex) {
    echo $ex;
}

