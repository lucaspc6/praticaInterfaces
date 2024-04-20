<?php

require "vendor/autoload.php";

use App\Src\Romario;
use App\Src\Bebeto;
use App\Src\Ronaldinho;

$romario = new Romario();
$romario->gol("romario");

$bebeto = new Bebeto();
$bebeto->gol("bebeto");

$ronaldinho = new Ronaldinho();
$ronaldinho->gol("ronaldinho");