<?php
///SET THIS
$device = "/dev/ttyS0"; //Could be COM1 or /dev/ttyS0
//Don't edit below this

if ($_GET['cmd']) {

$value = preg_split('/@/',$_GET['cmd']);
$chan = $value[0];
$at = $value[1];
$at = round(($at /100)) * 255; // recalc for max of 255
$at = sprintf ("%03d", $at);
$fade = $_GET['fade'];
$fade = "000";
$msg = "F" . $chan . "@" . $at . ":" . $fade. chr(13);
include "php-serial/php_serial.class.php"; 
$serial = new phpSerial(); 
$serial->confBaudRate(9600); 
$serial->deviceSet($device); 
$serial->deviceOpen(); 
$serial->sendMessage("$msg");
 
$read = $serial->readPort(); 
} 
print $read;
require("table.html");