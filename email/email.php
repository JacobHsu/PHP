<?php
ini_set('SMTP', 'localhost'); 
ini_set('smtp_port', 25); 

$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(!$to || !$subject ||!$message)
{
    echo 'missing to, subject or message.';
    exit;
}

mail ($to, $subject, $message);
echo 'email has sended.';
?>
<br>
<a href='/index.php'> back </a>
