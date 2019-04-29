<?php

class DateController implements ControllerInterface
{
    public function get()
    {
        return ' La hora y fecha es   '. date("d-m-Y (H:i:s)");
    }
    public function post()
    {
    }
}