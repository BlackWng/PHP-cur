<?php


namespace Source\Inheritance\Event;


use Source\Inheritance\Adress;

class EventLive extends Event
{
    /**
     * @var Adress
     */
    private $adress;

    public function __construct($event, \DateTime $date, $price, $vacancies, Adress $adress)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->adress = $adress;
    }

    /**
     * @return Adress
     */
    public function getAdress()
    {
        return $this->adress;
    }


}