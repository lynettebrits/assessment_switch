<?php
/**
Use PHP to see if a string contains an email address without using a regular expression (assume there will
only be one email address)
String:
"This is a string that contains an email address, and it has to be found, find the email find@me.com in it"
 */

$string = "This is a string that contains an email address, and it has to be found, find the email find@me.com in it";
$arrayFromString = explode(' ', $string);
$emailFound = false;
$email = '';

foreach ($arrayFromString as $word) {
    if (strpos($word, '@') !== false) {
        $emailFound = true;
        $email = $word;
    }
}

if ($emailFound === true) {
    echo 'String has an email address: ' . $email;
} else {
    echo 'String does not have an email address.';
}