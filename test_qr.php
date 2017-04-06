<?php
include "phpqrcode/qrlib.php";
$a = "Hello , How are you..?";



$filename = "Hello.png";

$path = "QR/".$filename;
// create a QR Code with this text and display it
QRcode::png($a,$path);