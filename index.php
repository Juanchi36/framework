<?php

require './vendor/autoload.php';
require './Controllers/NameController.php';
require './Controllers/AgeController.php';
require './Controllers/EmailController.php';
require './Controllers/DateController.php';
require './Controllers/StartAhorcadoController.php';
require './Controllers/PlayAhorcadoController.php';
require './Router/Router.php';

// session_start();
// $_SESSION['hola'] = 'caca';
//var_dump($_SERVER);
//echo $_SERVER['REQUEST_URI'];
session_start();
$controllerStart = new StartAhorcadoController;
$controllerPlay = new PlayAhorcadoController;
$route = new Router();
$route->addRoute('/ahorcado/', $controllerStart);
$route->addRoute('/ahorcado/jugar/', $controllerPlay);
$url = $_SERVER['PATH_INFO'];
// if(isset($_GET['letra'])){
//     $_SESSION['']
// }

if(isset($url) && isset($_GET['palabra'])){
    $_SESSION['palabra'] = $_GET['palabra'];
    if(isset($_GET['intentos'])){
        $_SESSION['intentos'] = $_GET['intentos'];
    }
    $route->dispatch($url)->get();
}elseif(isset($url)){
    //echo 'entro en jugar';
    $route->dispatch($url)->get();
    //var_dump($_SESSION);
}

//var_dump($_SESSION);