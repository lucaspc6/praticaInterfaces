<?php

require 'vendor/autoload.php';

use App\Src\Whatsapp;
use App\Src\SMS;
use App\Src\Email;

$whatsapp = new Whatsapp();
$whatsapp->enviar("Lucas");

$sms = new SMS();
$sms->enviar("Pereira");

$email = new Email();
$email->enviar("Carvalho");