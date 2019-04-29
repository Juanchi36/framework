<?php

require_once 'ControllerInterface.php';

class NameController implements ControllerInterface 
{
    private $lastname = 'Lopez';
    private $name = ' Carlos';
    public function get()
    {
        return 'Hola '. $this->name. ' '. $this->lastname;
    }
    public function post()
    {
        return 'Carlos';
    }
}