<?php

require './vendor/autoload.php';
require './Controllers/NameController.php';
require './Controllers/AgeController.php';
require './Controllers/EmailController.php';
require './Controllers/DateController.php';

session_start();
$_SESSION['hola'] = 'caca';
var_dump($_SESSION);