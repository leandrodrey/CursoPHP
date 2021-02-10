<?php

require_once 'Wheel.php';
require_once 'Engine.php';
require_once 'Door.php';

abstract class Vehicle
{
    protected Engine $engine;
    protected int $speed;
    protected array $wheels = [];
    protected array $doors = [];
    protected ConsoleCommand $consoleCommand;

    /**
     * Vehicle constructor.
     * @param Engine $engine
     * @param array $wheels
     * @param array $doors
     * @param int $speed
     */
    public function __construct(Engine $engine, array $wheels, array $doors, int $speed = 0)
    {
        $this->engine = $engine;
        $this->wheels = $wheels;
        $this->wheels = $doors;
        $this->speed = $speed;
    }

    public function start()
    {
        $this->engine->start();
        echo "Engine starts";
    }

    public function stop()
    {
        $this->engine->stop();
        echo "Engine stop";
    }

    public function accelerate()
    {
        if ($this->engine->isOn() == true) {
            $speed = $this->speed + 10;
        } elseif ($speed > 10) {
            $speed = $this->speed + 10;
        }
    }

    public static function build()
    {

    }

    public function ride()
    {
    }



}