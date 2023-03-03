<?php
class Clock
{
    public $hours;
    public $minutes;

    public function __construct($hours, $minutes)
    {
        $this->hours = $hours;
        $this->minutes = $minutes;
    }

    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }

    public function getTime()
    {
        return sprintf("%02d:%02d", $this->hours, $this->minutes);
    }
}

$clock = new Clock(12, 30) ;
echo $clock->getTime() . '<br>';

//$clock->setHours(9);
//echo $clock->getTime() . '<br>';
$clock->setMinutes(40);
echo $clock->getTime() . '<br>';
