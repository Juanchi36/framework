<?php

require_once 'ControllerInterface.php';
require_once 'Ahorcado.php';

class PlayAhorcadoController implements ControllerInterface 
{
    private $letra;
    //private $intentos;

    public function __construct()   
    {
        if(isset($_GET['letra'])){
            $this->letra = $_GET['letra'];
        }
        // if(isset($_GET['intentos'])){
        //     $this->intentos = $_GET['intentos'];
        // }else{
        //     $this->intentos = 5;
        // }
    }
    public function get()
    {
        //echo 'soy el get de play';
        $intentos = 5;
        if(isset($_SESSION['palabra'])){
            if(isset($_SESSION['intentos'])){
                $intentos = $_SESSION['intentos'];
            }
            $ahorcado = new Ahorcado($_SESSION['palabra'], $intentos);
            var_dump($ahorcado);
            if(isset($_SESSION['letrasAcertadas'])){
                foreach($_SESSION['letrasAcertadasDos'] as $k => $v){
                    $ahorcado->pasarLetra($v);
                }
            }
            $ahorcado->mostrar();
            $ahorcado->dameIntentos();
        }else{
            echo 'No se puede jugar porque no se eligió una palabra';
            return false;
        }
        
    }
    public function post()
    {

    }
}
