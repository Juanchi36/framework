<?php

//require './Controllers/ControllerInterface.php';

class Router
{
    private $controllers;

    public function addRoute($url, ControllerInterface $controller)
    {
        $this->controllers[$url] = $controller;
        return 'ok';
    }
    public function dispatch($url)
    {
        if (isset($this->controllers[$url])) {
            return $this->controllers[$url];
        }
        return false;
    }
}
