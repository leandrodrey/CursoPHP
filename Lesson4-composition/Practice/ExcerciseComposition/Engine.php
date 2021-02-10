<?php


abstract class Engine
{
    protected bool $isOn = false;
    protected int $maxSpeed;

    public function start()
    {
        echo 'Starting Engine: ' . $this->getName() . "\n";
        $this->isOn = true;
    }

    public function stop()
    {
        echo 'Stopping Engine: ' . $this->getName()  . "\n";
        $this->isOn = false;
    }

    protected abstract function getName();

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->isOn;
    }

}