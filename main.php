<?php

require_once(__DIR__ . 'vendor/autoload.php');


use user\laba7\EmailNotification;
use user\laba7\SMSNotification;


$a = new EmailNotification();
echo $a->send("привет мир!");
echo "\nтип " . $a->getType();
echo "\nстатус" . $a->getStatus();
echo "\n";

$sms = new SMSNotification();
echo $sms->send("привет");
echo "\nтип " . $sms->getType();
echo "\nстатус " . $sms->getStatus();
