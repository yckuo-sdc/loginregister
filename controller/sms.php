<?php
$content =  "Hello, I am SMS!";
$phoneNumber = "0978021370";

$SMS = new SMS(Config::SMS_USERNAME, Config::SMS_PASSWORD);
$SMS->setContent($content);
$SMS->setPhoneNumber($phoneNumber);
$result = $SMS->send();
var_dump($result);
