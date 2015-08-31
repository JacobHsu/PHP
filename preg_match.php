<?php
$password = '123456';
echo $password.":";
if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
    echo 'the password does not meet the requirements!';
}
?>