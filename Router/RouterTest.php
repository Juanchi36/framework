<?php
require_once('./vendor/autoload.php');
require('./Router/Router.php');
require './Controllers/AgeController.php';
require './Controllers/DateController.php';

use PHPUnit\Framework\TestCase;
final class RouterTest extends TestCase
{
    private $router;
    private $ageController;
    private $dateController;

    protected function setUp() : void
    {
        $this->router = new Router;
        $this->ageController = new AgeController;
        $this->dateController = new DateController;
        $this->router->addRoute('/age', $this->ageController);
    }
    public function testExisteLaClase() {
        $this->assertTrue(class_exists("Router"));
        $this->assertTrue(class_exists("AgeController"));
        $this->assertTrue(class_exists("DateController"));
    }
    public function testQueAgregueUnControlador()
    {
        $this->assertEquals($this->router->addRoute('/date' , $this->dateController), 'ok');
    }
    public function testQueAgregueControladores()
    {
        $this->assertEquals($this->router->addRoute('/date' , $this->dateController), 'ok');
        $this->assertEquals($this->router->addRoute('/age' , $this->ageController), 'ok');
        $this->assertEquals($this->router->addRoute('/age2' , $this->ageController), 'ok');
        $this->assertEquals($this->router->addRoute('/date2' , $this->dateController), 'ok');
    }
    public function testQueDespacheUnControlladorExistente()
    {
        $this->assertEquals($this->router->dispatch('/age'), $this->ageController);
    }
    public function testQueTrateDeDespacharUnaRutaInexistente()
    {
        $this->assertFalse($this->router->dispatch('/caca'));
    }
}
