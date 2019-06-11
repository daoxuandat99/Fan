<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5;
    private $color = 'blue';

    public function __construct($speed, $on, $radius, $color)
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getOn()
    {
        return $this->on;
    }

    /**
     * @param mixed $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function toString()
    {
        if ($this->on == true) {
            return ' fan is on ' . '<br>' . ' speed: ' . $this->speed . '<br>' . ' color: ' . $this->color . '<br>' . ' radius: ' . $this->radius;
        } else if ($this->on == false) {
            return 'fan is off' . '<br>' . ' speed: ' . $this->speed . '<br>' . ' color: ' . $this->color . '<br>' . ' radius: ' . $this->radius;
        } else {
            return '-----';
        }
    }


}