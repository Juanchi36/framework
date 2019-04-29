<?php

require_once 'ControllerInterface.php';
require_once 'Ahorcado.php';

class StartAhorcadoController implements ControllerInterface 
{
    private $palabra;
    private $intentos;

    public function __construct()   
    {
        if(isset($_GET['palabra'])){
            $this->palabra = $_GET['palabra'];
        }
        if(isset($_GET['intentos'])){
            $this->intentos = $_GET['intentos'];
        }else{
            $this->intentos = 5;
        }
    }
    public function get()
    {
        $ahorcado = new Ahorcado($this->palabra, $this->intentos);
        $ahorcado->mostrar();
        $ahorcado->dameIntentos();
    }
    public function post()
    {

    }
}
