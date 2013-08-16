<?php
$to      = 'shuwei@staff.sina.com.cn';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: shuwei@example.com' . "\r\n" .
        'Reply-To: shuwei@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

$result = mail($to, $subject, $message, $headers);
var_dump($result);
?> 
