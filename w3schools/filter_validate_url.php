<?php
// Variable to check
$url = "http://www.w3schools.com";

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
     echo("$url is a valid URL");
} else {
     echo("$url is not a valid URL");
}
?>