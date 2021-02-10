<?php

require_once 'Vehicle.php';
require_once 'EngineDiesel.php';

class Car extends Vehicle
{

    public function start()
    {
        parent::start();
    }

    public function stop()
    {
        parent::stop();
    }
}